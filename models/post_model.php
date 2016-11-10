<?php

/**
 *
 */
class Post_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function getScrapTypes(){

    $this->db->query("SELECT * FROM scraptype");
    return !empty($this->db->results())? $this->db->results() : array();

  }

  function getPartners(){

    $this->db->query("SELECT * FROM partners");
    return !empty($this->db->results())? $this->db->results() : array();

  }

  function saveAppointment(){
    $this->db->insert('appointments',[
      "p_id"=>$_POST['shop'],
      "userid"=>16,
      "status"=>"pending",
      "pickup_date"=>$_POST['pickupdate']
    ]);
    
    self::saveScraps($this->db->lastInsertedId());
    return !$this->db->error();
  }

  function saveScraps($a_id){
    foreach ($_POST['scrap_type'] as $type) {
      $this->db->insert('scraps',[
        "appointment_id"=>$a_id,
        "type_id"=>$type
      ]);
    }
  }
  
}



 ?>
