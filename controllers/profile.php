<?php

/**
 *
 */
class Profile extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index(){
    if (Session::exists('user')) {
      
      $this->view->userDetails = $this->model->getUserDetails(Session::get('user')['type']);
      $this->view->render('profile/index');

    }else{
      Redirect::to(URL);
    }
  }

}


 ?>
