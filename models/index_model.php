<?php

/**
*
*/
class Index_Model extends Model
{


	function __construct()
	{
		parent::__construct();
	}

	function register(){
		// print_r($_POST);
		$this->db->insert('users',[
			"lastname"=>$_POST['last_name'],
			"firstname"=>$_POST['first_name'],
			"gender"=>$_POST['gender'],
			"email"=>$_POST['email'],
			"brgy_id"=>$_POST['brgy'],
			"username"=>$_POST['username'],
			"password"=>Hash::create('md5',$_POST['password'], HASH_KEY)
		]);

		Session::put("user",[
			"userid"=>$this->db->lastInsertedId(),
			"username"=>$_POST['username']
		]);
		return !$this->db->error();
	}
}

 ?>
