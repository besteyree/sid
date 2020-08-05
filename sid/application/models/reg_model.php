<?php
/**
 * 
 */
class reg_model extends CI_Model{
	
	public function insert_data($data){
         $this->db->insert('reg_comp',$data);
    }

    public function fetch_data($data){
    	$query = $this->db->get_where('reg_comp', array('comp_name' => $data['comp_name'],'password'=>$data['password']))->result();  
        return $query; 
    }

    public function fetch(){
        $query = $this->db->get('reg_comp');
        return $query->result();
    }
}