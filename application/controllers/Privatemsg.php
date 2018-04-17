<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class Privatemsg extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function private_msg_insert(){
            //跨域操作
            header('Access-Control-Allow-Origin:* ');
            header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

            //操作散户信息表(插入)
            $dept_id=$this->input->post('private_dept_id');
            $private_owner=$this->input->post('private_owner');
            $private_soil_area=$this->input->post('private_soil_area');
            $private_ID_num=$this->input->post('private_ID_num');
            $private_tel_num=$this->input->post('private_tel_num');
            $private_address=$this->input->post('private_address');
            $private_soil_contract=$this->input->post('private_soil_contract');

            $private_all=array(
                'w_private_owner'=>$private_owner,
                'w_private_soil_area'=>$private_soil_area,
                'w_private_ID_num'=>$private_ID_num,
                'w_private_tel_num'=>$private_tel_num,
                'w_private_address'=>$private_address,
                'w_private_soil_contract'=>$private_soil_contract,
                'w_private_dept_id'=>$dept_id,

            );

            $this->load->model('Privatemsg_model');
            $result=$trhis->Privatemsg_model->private_model_insert($private_all);
            echo $result;
        }

        public function private_msg_sel(){
            //跨域操作
            header('Access-Control-Allow-Origin:* ');
            header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

            //操作散户信息表(查询)
            $dept_id=$this->input->post('private_dept_id');
            $this->load->model('Privatemsg_model');
            $reuslt=$this->Privatemsg_model->private_model_sel($dept_id);
            echo json_encode($result);
        }
    }

?>