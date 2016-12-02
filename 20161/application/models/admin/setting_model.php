<?php
class Setting_model extends CI_Model {
	
	public function update_settings($setting_name,$data,$lang = 'en') {
		
	    foreach($data as $key => $value){
			$dataArray = array();
			$query = $this->db->get_where('settings', array('setting_name' => $setting_name,'key' => $key,'language' => $lang));
			$dataArray['setting_name'] = $setting_name;
			$dataArray['key'] = $key;	
			$dataArray['value'] = $value;
			$dataArray['language'] = $lang;
			
			if(count($query->result_array()) > 0){
				$where = array('setting_name' => $setting_name,'key' => $key,'language' => $lang);
				$this->db->where($where);
				$settings_data = $this->db->update('settings', $dataArray);
			}
			else
			{
				
				$settings_data = $this->db->insert('settings', $dataArray);
			}
		}
		
		return $settings_data;
	}
	
	public function  get_setting_values($setting_name,$lang = 'en')
	{
		
		$query = $this->db->get_where('settings', array('setting_name' => $setting_name,'language' => $lang));
		
        return $query->result();
		
	}
	
	public function  get_setting_value($setting_name,$key,$lang = 'en') {
		
		$query = $this->db->get_where('settings', array('setting_name' => $setting_name,'key' => $key));
		
        return $query->result();
	}
	
}
?>

