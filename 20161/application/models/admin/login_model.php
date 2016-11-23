<?php

class Login_model extends CI_Model {
	
	public function set_users()
	{
			$new_user_insert_data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))						
			);
			$new_user = $this->db->insert('users', $new_user_insert_data);
			
		    return $new_user;
	      
	}
	
	public function update_profile($id, $data){
		$this->db->where('id', $id);
		$new_user_data = $this->db->update('users', $data);
		return $new_user_data;
	}
	public function get_user_details($id)
    {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
    }
}

