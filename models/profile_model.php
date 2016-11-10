<?php
/**
 *
 */
class Profile_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function getUserDetails($type='user'){

  	if ($type=='user') {
  		$this->db->query("SELECT lastname, firstname, gender, email,phone, b.* FROM users u left join brgy b on u.brgy_id = b.brgy_id WHERE u.userid = ?",["userid"=>Session::get('user')['id']]);
  	}else if($type=='shop'){
  		$this->db->query("SELECT buss_name, contact_no, b.* FROM partners p left join brgy b on p.brgy_id = b.brgy_id WHERE p.userid = ?",["userid"=>Session::get('user')['id']]);
  	}
     
     return !empty($this->db->results()[0])? $this->db->results()[0] : array();

  }

  public function getAppointments(){
    $pid = Session::get('user')['id'];
    $this->db->query("select a.appointment_id, u.lastname, u.firstname, b.brgy_name, a.pickup_date from appointments a left join users u on a.userid = u.userid left join brgy b on b.brgy_id = u.brgy_id where a.p_id = {$pid}");
    return !empty($this->db->results())? $this->db->results() : array();
  }

}


 ?>
