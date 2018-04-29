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
			$name = $this->input->post('name');
			$password = $this->input->post('password');
			$dept = $this->User_model->get_dept($country,$town,$province,$village,$city);
			if($dept == null){
				$rows = $this->User_model->save_dept($country,$town,$province,$village,$city);
				if($rows > 0){
					$dept = $this->User_model->get_dept($country,$town,$province,$village,$city);
					$row = $this->User_model->save_user($dept->w_dept_id,$name,$password);
					if($row > 0){
						echo 'success';
					}else{
						echo 'fail';
					}
				}
			}else{
				$rowss = $this->User_model->save_user($dept->w_dept_id,$name,$password);
				if($rowss > 0){
					echo 'success';
				}else{
					echo 'fail';
				}
			}
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
			$name = $this->input->post('name');
			$pass = $this->input->post('pass');
			$rows = $this->User_model->get_user($name,$pass);
			echo json_encode($rows);
		}
	}


?>