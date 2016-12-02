<?php
class Login_model extends CI_Model {
	
	public function insert_data($data)
	{
		$new_user = $this->db->insert('users', $data);
			
		return $new_user;
	}
	
	public function update_data($data,$id)
	{
		$this->db->where('id', $id);
		$new_user_data = $this->db->update('users', $data);
		
		return $new_user_data;
	}
	
	public function get_row($id)
    {
		$query = $this->db->get_where('users', array('id' => $id));
		
        return $query->row_array();
    }
}
?>

