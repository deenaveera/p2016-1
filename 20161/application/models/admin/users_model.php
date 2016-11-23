<?php

class Users_model extends CI_Model {
	
	public function get_users($id = 0)
    {
        if ($id == 0)
        {
			$this->db->where('is_deleted', 0);
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }
	
	public function update_user_details($id, $data){
		
		$this->db->where('id', $id);
		$new_user_data = $this->db->update('users', $data);
		return $new_user_data;
	}
	public function delete_user($id)
    {
		$data = array('is_deleted' => 1,'deleted_at' => date('Y-m-d H:i:s'));
		$this->db->where('id',$id);
		return $this->db->update('users',$data);
    }
	public function add_user()
	{
			$add_user_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))						
			);
			//echo '<pre>'; print_r($add_user_data); exit;
			$user = $this->db->insert('users', $add_user_data);
			
		    return $user;
	      
	}
	
}
?>

