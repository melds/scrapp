<?php
/**
 *
 */
class Login_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function validate($type='user'){
    if ($type=='user') {
      $_POST['password'] = Hash::create('md5',$_POST['password'],HASH_KEY);
      unset( $_POST['as']);
      $this->db->query("select userid from users where username = ? and password = ?", $_POST);
      if ($this->db->results()) {
        Session::put("user",[
          "id"=> $this->db->results()[0]->userid,
          "type"=>"user"
        ]);
      }
    }else if($type=='shop'){
      $_POST['password'] = Hash::create('md5',$_POST['password'],HASH_KEY);
      $this->db->query("select p_id from partners where username = ? and password = ?", $_POST);
      Session::put("user",[
        "id"=> $this->db->results()[0]->p_id,
        "type"=>"partner"
      ]);
    }else{
      return false;
    }
    return !empty($this->db->results());
  }

}



 ?>
