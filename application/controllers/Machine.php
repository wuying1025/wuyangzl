<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Machine extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function machine_msg_insert(){
			//跨域操作
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			//操作农机信息表(插入)
			$dept_id=$this->input->post('dept_id');
			$machine_name=$this->input->post('machine_name');
			$machine_brand=$this->input->post('machine_brand');
			$machine_sell_price=$this->input->post('machine_sell_price');
			$machine_num=$this->input->post('machine_num');
			$machine_buy_price=$this->input->post('machine_buy_price');
			$machine_buy_time=$this->input->post('machine_buy_time');
			$machine_allowance=$this->input->post('machine_allowance');
			$machine_owner=$this->input->post('machine_owner');

			$machine_arr=array(
				'w_machine_dept_id'=>$dept_id,
				'w_machine_name'=>$machine_name,
				'w_machine_brand'=>$machine_brand,
				'w_machine_sell_price'=>$machine_sell_price,
				'w_machine_num'=>$machine_num,
				'w_machine_buy_price'=>$machine_buy_price,
				'w_machine_buy_time'=>$machine_buy_time,
				'w_machine_allowance'=>$machine_allowance,
				'w_machine_owner'=>$machine_owner,
			);
			$this->load->model('Machine_model');
			$rows=$this->Machine_model->machine_model_insert($machine_arr);
			if($rows > 0){
				echo 'success';
			}else{
				echo 'fail';
			}
		}

		public function machine_msg_sel(){
			//跨域操作
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			//操作农机信息表(查询)
			$dept_id=$this->input->post('dept_id');
			$this->load->model('Machine_model');
			$result=$this->Machine_model->machine_model_sel($dept_id);
			echo json_encode($result);
		}
	} 

?>