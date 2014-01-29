<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index(){
		$key = "hello";
		$sess = Session::instance();
		echo "Before setting key '$key'<br/>";
		$sess->set($key,"world");
		echo "After setting key '$key'<br/>";
		echo "Before getting key '$key'<br/>";
		echo $sess->get("hello")."<br/>";		
	}

} // End Welcome
