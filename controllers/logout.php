<?php 

/**
* 
*/
class Logout extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		Session::destroy();
		unset($_SESSION);
		Redirect::to(URL);
	}
}

 ?>