<?php

/**
 *
 */
class Post extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index(){
    if (!empty($_POST)) {
      //print_r($_POST);

      if ($this->model->saveAppointment()) {
        Session::put("message",["message"=>"Post submitted", "status"=>"1"]);
  		}else{
  			Session::put("message",["message"=>"Failed to post", "status"=>"0"]);
  		}
      
  		Redirect::to(URL."post");

    }else{
      $this->view->js = [
        "post/js/post.js"
      ];
      $this->view->scrapTypes = $this->model->getScrapTypes();
      $this->view->partners = $this->model->getPartners();
      $this->view->render('post/index');
    }
  }
}


 ?>
