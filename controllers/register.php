<?php

/**
*
*/
class Register extends Controller
{

	function __construct()
	{
		parent::__construct();
	}


	function index(){

		if (Session::exists('user')) {

			Redirect::to(URL.'profile');
		}

		if (!empty($_POST)) {

			print_r($_POST);
			if ($this->model->register($_POST['type'])) {
        		Session::put("message",["message"=>"You are Registered!", "status"=>"1"]);
			}else{
        		Session::put("message",["message"=>"Failed to register", "status"=>"0"]);

			}
			Redirect::to(URL.'profile');
			exit();
			// $this->view->brgys = $this->model->getBrgys();
			// $this->view->render('register/index');

		}else{

			$this->view->brgys = $this->model->getBrgys();
			$this->view->render('register/index');

		}

	}
}

 ?>
