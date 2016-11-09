<?php

/**
*
*/
class Index extends Controller
{

	function __construct(){
		parent::__construct();
	}

	public function index(){

		$this->view->render('index/index');

	}

	public function register(){

		if ($this->model->register()) {

			Session::put("message",["message"=>"You are registered!", "status"=>"1"]);
		}else{
			Session::put("message",["message"=>"Failed to register", "status"=>"0"]);
		}

		Redirect::to(URL);

	}


}

 ?>
