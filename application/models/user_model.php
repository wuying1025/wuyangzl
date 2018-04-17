<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model{
    public function get_dept($country,$town,$province){
        return $this -> db -> get_where('w_dept', array(
            'w_country_dept_name' => $country,
            'w_town_dept_name' => $town,
            'w_province_dept_name' => $province)
        ) -> row();
    }

    public function save_dept($country,$town,$province){
        $this -> db -> insert('w_dept', array(
            'w_country_dept_name' => $country,
            'w_town_dept_name' => $town,
            'w_province_dept_name' => $province)
        );
        return $this -> db -> affected_rows();
    }

    public function get_user($dept_id,$name,$pass){
        return $this -> db -> get_where('w_user', array(
                'w_dept_id' => $dept_id,
                'w_user_name' => $name,
                'w_pass' => $pass)
        ) -> row();
    }

    public function save_user($dept_id,$name,$pass){
        $this -> db -> insert('w_user', array(
                'w_dept_id' => $dept_id,
                'w_user_name' => $name,
                'w_pass' => $pass)
        );
        return $this -> db -> affected_rows();
    }
}