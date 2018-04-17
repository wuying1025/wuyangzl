<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('User_model');
		}

		public function index(){
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');
			$country = $this->input->post('country');
			$town = $this->input->post('town');
			$province = $this->input->post('province');
			$village = $this->input->post('village');
			$city = $this->input->post('city');
			$dept = $this->User_model->get_dept($country,$town,$province,$village,$city);
			if($dept == null){
				$rows = $this->User_model->save_dept($country,$town,$province,$village,$city);
				if($rows > 0){
					$dept = $this->User_model->get_dept($country,$town,$province,$village,$city);
					$dept->isReg = true;
				}
			}
			echo json_encode($dept);
		}

		//用户注册功能
		public function reg(){
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');
			$dept_id = $this->input->post('dept_id');
			$name = $this->input->post('name');
			$pass = $this->input->post('pass');
			$rows = $this->User_model->save_user($dept_id,$name,$pass);
			if($rows > 0){
				echo 'success';
			}else{
				echo 'fail';
			}
		}
		//用户登录功能
		public function login(){
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');
			$dept_id = $this->input->post('dept_id');
			$name = $this->input->post('name');
			$pass = $this->input->post('pass');
			$rows = $this->User_model->get_user($dept_id,$name,$pass);
			if($rows > 0){
				echo 'success';
			}else{
				echo 'fail';
			}
		}
	}


?>