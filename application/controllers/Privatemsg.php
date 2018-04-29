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
            $private_soil_name=$this->input->post('private_soil_name');
            $private_soil_contract=$this->input->post('private_soil_contract');

            //private_soil_contract
            $private_all=array(
                'w_private_owner'=>$private_owner,
                'w_private_soil_area'=>$private_soil_area,
                'w_private_ID_num'=>$private_ID_num,
                'w_private_tel_num'=>$private_tel_num,
                'w_private_address'=>$private_address,
                'w_private_dept_id'=>$dept_id,
                'w_private_soil_name'=>$private_soil_name,
                'w_private_soil_contract'=>$private_soil_contract

            );

            $this->load->model('Privatemsg_model');
            $rows =$this->Privatemsg_model->private_model_insert($private_all);
            if($rows >0){
                echo "success";
            }else{
                echo 'fail';
            }
        }

        public function private_msg_sel(){
            //跨域操作
            header('Access-Control-Allow-Origin:* ');
            header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

            //操作散户信息表(查询)
            $dept_id=$this->input->post('private_dept_id');
            $this->load->model('Privatemsg_model');
            $result=$this->Privatemsg_model->private_model_sel($dept_id);
            echo json_encode($result);
        }

        public function img_upload()
        {
            header('Access-Control-Allow-Origin:* ');
            header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

            //允许上传文件格式
            $path = "./uploads/private/";//

            if (isset($_POST)) {

                $name = $_FILES['file']['name'];
                $name_tmp = $_FILES['file']['tmp_name'];

                $arr = explode(".",$name);
                $type = $arr[1];
                $filename = $arr[0];

                //获取文件类型
                $pic_name = $filename.time()  . "." . $type;
                $pic_url =  $path . $pic_name;
                if (move_uploaded_file($name_tmp, $pic_url)) {//临时文件转移到目标文件夹
                    echo $pic_url;
                } else {
                    echo 'fail';
                }
            }
        }

    }

?>