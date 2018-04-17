<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Coop_model extends CI_Model{
    public function get_coop_msg($dept_id){
        return $this -> db -> get_where('w_coop_msg',array(
            "w_coop_dept_id"=>$dept_id
        )) -> result();
    }

    public function save_coop_msg($coop_msg){
        $this -> db -> insert('w_coop_msg', $coop_msg);
        return $this -> db -> affected_rows();
    }

    public function get_coop_all_msg($dept_id){
        return $this -> db -> get_where('w_coop_all_msg',array(
            "w_coop_all_dept_id"=>$dept_id
        )) -> row();
    }

    public function save_coop_all_msg($coop_all_msg){
        $this -> db -> insert('w_coop_all_msg', $coop_all_msg);
        return $this -> db -> affected_rows();
    }

    public function update_coop_all_msg($coop_all_msg,$dept_id){
        $this->db->where('w_coop_all_dept_id', $dept_id);
        $this->db->update('w_coop_all_msg', $coop_all_msg);
        return $this -> db -> affected_rows();
    }



}