<?php
class User_model extends CI_Model {
	
	public function insert_data($data)
	{
		$user = $this->db->insert('users', $data);
			
		return $user;
	}
	
	public function update_data($data, $id)
	{
		$this->db->where('id', $id);
		$new_user_data = $this->db->update('users', $data);
		
		return $new_user_data;
	}
	
	public function delete_data($id)
    {
		$data = array('is_deleted' => 1,'deleted_at' => date('Y-m-d H:i:s'));
		$this->db->where('id',$id);
		
		return $this->db->update('users',$data);
    }
	
	public function get_rows()
	{
		$this->db->where('is_deleted', 0);
        $query = $this->db->get('users');
		
        return $query->result_array();
	}
	
	public function get_row($id = 0)
	{
		$query = $this->db->get_where('users', array('id' => $id));
		
        return $query->row_array();
	}
	
}
?>

