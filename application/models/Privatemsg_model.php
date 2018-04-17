<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Privatemsg_model extends CI_Model{
        public function private_model_insert($private_all){
            $this->db->insert('w_private_msg',$private_all);
            return $this -> db -> affected_rows();
        }

        public function private_model_sel($dept_id){
            $private_all=array(
              'w_private_dept_id'=>$dept_id,
            );

            $query=$this->db->get_where('w_private_msg',$private_all);
            return $query->result();
        }
    }

?>