<?php

class User extends CI_Model {

  function cek_loginadmin($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}