<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Produfactors_model extends CI_Model{
        public function produfactors_model_insert($produfactors_arr){
            $query=$this->db->insert('w_produfactors',$produfactors_arr);
            return $query;
        }

        public function produfactors_model_sel($dept_id){
            $produfactors_all=array(
                'w_produfactors_dept_id'=>$dept_id,
            );

            $query=$this->db->get_where('w_produfactors',$produfactors_all);
            return $query->result();
        }
    }

?>