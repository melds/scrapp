<?php

/**
*
*/
class Login extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index(){

		if (!empty($_POST)) {
			if ($this->model->validate($_POST['as'])) {
				Session::put("message",[
					"message"=>"Welcome back",
					"status"=>1
				]);
				Redirect::to(URL."profile");
			}else{
				Session::put("message",[
					"message"=>"Invalid username or password",
					"status"=>0
				]);
			}
		}

		if (Session::exists('user')) {
			$this->view->render('index/index');
		}else{
			$this->view->render('login/index');
		}



	}
}

 ?>
