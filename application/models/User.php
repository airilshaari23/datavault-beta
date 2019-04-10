<?php
Class User extends CI_Model
{
  function login($username, $password){
     $this->db->select('Username,Password,Department');
     $this->db->from('userlist');
     $this->db->where('Username', $username);
     $this->db->where('Password', MD5($password));
     $this->db->limit(1);
     $query = $this->db->get();
     //echo $this->db->last_query();
     //exit();
     if($query -> num_rows() == 1)
     {
       return $query->result();
     }
     else
     {
    // echo $this->db->last_query();
    //return $query->result();
       return false;
     }
  }
}
?>