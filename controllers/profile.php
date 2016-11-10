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
      if (Session::get('user')['type'] == 'shop') {
        $this->view->appointments = $this->model->getAppointments();
      }
      $this->view->userDetails = $this->model->getUserDetails(Session::get('user')['type']);
      $this->view->render('profile/'.Session::get('user')['type']);

    }else{
      Redirect::to(URL);
    }
  }

}


 ?>
