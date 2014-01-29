<?
return array(
	'native' => array( //Default  Session Store
		'name' => 'session_name',
		'lifetime' => 43200,
	),
  	'couchbase' =>array( //Couchbase Session Store
		'name'=>'mt_cb_sess',
		'lifetime'=>43200,
		'host'=>'127.0.0.1',
		'port'=>'11211',
		'user'=>'',
		'pass'=>'',
  		'bucket'=>'default'
  	)	
);
