<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Machine_model extends CI_Model{
        public function machine_model_insert($machine_arr){
            $query=$this->db->insert('w_machine',$machine_arr);
            return $query;
        }

        public function machine_model_sel($dept_id){
            $machine_all_sel=array(
                'w_machine_dept_id'=>$dept_id,
            );
            $query=$this->db->get_where('w_machine',$machine_all_sel);
            return $query->result();
        }
    }

?>