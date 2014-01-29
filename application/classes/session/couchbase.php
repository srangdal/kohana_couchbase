<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Native PHP session class.
 *
 * @package    Kohana
 * @category   Session
 * @author     Kohana Team
 * @copyright  (c) 2008-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Session_Couchbase extends Session {
	
	// The current session id
	protected $_session_id;
	
	// The old session id
	protected $_update_id;
	
	// The couchbase instance
	protected $cbConn = null;
	
	public function __construct(array $config = NULL, $id = NULL)
	{
		$this->cbConn = new Couchbase($config['host'], $config['user'], $config['pass'], $config['bucket']);
		parent::__construct($config,$id);
	}
	
	public function id()
	{
		return $this->_session_id;
	}
	
	protected function _read($id = NULL)
	{
		if ($id OR $id = Cookie::get($this->_name))
		{
			$contents = $this->cbConn->get($id);
			if(null!=$contents){
				$this->_session_id = $this->_update_id = $id;
				return $contents;
			}
		}
	
		// Create a new session id
		$this->_regenerate();
	
		return NULL;
	}
	
	protected function _regenerate()
	{
		// Create the query to find an ID
		do
		{
			// Create a new session id
			$id = str_replace('.', '-', uniqid(NULL, TRUE));
	
			// Get the the id from the database
			$contents = $this->cbConn->get($id);
		}
		while ($contents!=null);

		return $this->_session_id = $id;
	}
	
	protected function _write()
	{
		if ($this->_update_id === NULL)
		{
			// Insert a new row
			$contents = $this->cbConn->set($this->_session_id, $this->__toString(),$this->_lifetime);
		}
		else
		{
			if ($this->_update_id !== $this->_session_id)
			{
				// Also update the session id
				$contents = $this->cbConn->set($this->_session_id, $this->__toString(),$this->_lifetime);
				$this->cbConn->delete($this->_update_id);
			}else
			{
				$contents = $this->cbConn->set($this->_update_id, $this->__toString(),$this->_lifetime);
			}
		}
	
		// The update and the session id are now the same
		$this->_update_id = $this->_session_id;
	
		// Update the cookie with the new session id
		Cookie::set($this->_name, $this->_session_id, $this->_lifetime);
	
		return TRUE;
	}
	
	/**
	 * @return  bool
	 */
	protected function _restart()
	{
		$this->_regenerate();
	
		return TRUE;
	}
	
	protected function _destroy()
	{
		if ($this->_update_id === NULL)
		{
			// Session has not been created yet
			return TRUE;
		}
		
		try
		{
			// Delete the session ket
			$this->cbConn->delete($this->_update_id);
		
			// Delete the cookie
			Cookie::delete($this->_name);
		}
		catch (Exception $e)
		{
			// An error occurred, the session has not been deleted
			return FALSE;
		}
	
		return TRUE;
	}
} // End Session_Couchbase
