<?php

/**
 *
 */
class Register_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function getBrgys(){
    $this->db->query("select * from brgy");
    return !empty($this->db->results())? $this->db->results() : array();
  }

  function register($type='user'){
    if ($type=='user') {
      unset($_POST['type']);  
      unset($_POST['confirm-password']);  
      print_r($_POST);
      $this->db->insert('users',[
        "lastname"=>$_POST['lastname'],
        "firstname"=>$_POST['firstname'],
        "gender"=>$_POST['gender'],
        "email"=>$_POST['email'],
        "brgy_id"=>$_POST['brgy'],
        "username"=>$_POST['username'],
        "password"=>Hash::create('md5',$_POST['password'], HASH_KEY)
      ]);

      $pid = $this->db->lastInsertedId();

      if (!$this->db->error()) {
        Session::put("user",[
          "id"=> $pid,
          "type"=>"user"
        ]);
      }
      
      return !$this->db->error();
    }else if($type=='shop'){

      $this->db->insert('partners',[
        "buss_name"=>$_POST['shopname'],
        "contact_no"=>$_POST['contact_no'],
        "brgy_id"=>$_POST['brgy'],
        "username"=>$_POST['username'],
        "password"=>Hash::create('md5',$_POST['password'],HASH_KEY)
      ]);

      if(!in_array($_POST['brgy'],$_POST['brgys'])){
        array_push($_POST['brgys'], $_POST['brgy']);
      }

      $pid = $this->db->lastInsertedId();
      
      self::addScope($pid);

      if (!$this->db->error()) {
        Session::put("user",[
          "id"=> $pid,
          "type"=>"shop"
        ]);
      }
      
      return !$this->db->error();
      }
    }

  function addScope($p_id){

    foreach ($_POST['brgys'] as $brgy) {
      $this->db->insert('shop_scope',[
        "p_id"=>$p_id,
        "brgy_id"=>$brgy
      ]);
    }

  }
}


 ?>
