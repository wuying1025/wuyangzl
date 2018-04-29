<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Coop extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Coop_model');
		}

		public function coop_msg_insert(){
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			//操作合作社人员信息表(插入)
			$grantor = $this->input->post('grantor');
			$area = $this->input->post('area');
			$id_num = $this->input->post('id_num');
			$tel_num = $this->input->post('tel_num');
			$address = $this->input->post('address');
			$owner = $this->input->post('owner');
			$soil_tel_num = $this->input->post('soil_tel_num');
			$soil_address = $this->input->post('soil_address');
			$soil_name = $this->input->post('soil_name');
			$soil_contract=$this->input->post('soil_contract');

			$dept_id = $this->input->post('dept_id');

			$rows = $this->Coop_model->save_coop_msg(array(
				'w_coop_grantor'=>$grantor,
				'w_coop_soil_area'=>$area,
				'w_coop_ID_num'=>$id_num,
				'w_coop_tel_num'=>$tel_num,
				'w_coop_address'=>$address,
				'w_coop_soil_owner'=>$owner,
				'w_coop_soil_tel_num'=>$soil_tel_num,
				'w_coop_soil_address'=>$soil_address,
				'w_coop_soil_name'=>$soil_name,
				'w_coop_soil_contract'=>$soil_contract,
				'w_coop_dept_id'=>$dept_id,
			));
			if($rows > 0){
				echo 'success';
			}else{
				echo 'fail';
			}

		}
		//查询全部的合作社人员信息
		public function coop_msg_sel(){
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			$dept_id = $this->input->post('dept_id');
			$msgs = $this->Coop_model->get_coop_msg($dept_id);
			echo json_encode($msgs);
		}
		public function get_coop_all_msg(){
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			$dept_id = $this->input->post('dept_id');
			$cool_all = $this->Coop_model->get_coop_all_msg($dept_id);
			$total = $this->Coop_model->get_total($dept_id);
			$cool_all->total = $total->num;
			echo json_encode($cool_all);
		}

		public function coop_all_msg_insert(){
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			//操作合作社五项信息表(插入或者修改)
			$dept_id = $this->input->post('dept_id');
			$name = $this->input->post('name');
			$person = $this->input->post('person');
			$directors_num = $this->input->post('directors_num');
			$keyjob_num = $this->input->post('keyjob_num');
			$pyear_employ_num = $this->input->post('pyear_employ_num');
			$member_num = $this->input->post('member_num');
			$soil_property = $this->input->post('soil_property');
			$cool_all = $this->Coop_model->get_coop_all_msg($dept_id);
			if($cool_all == null){
				$rows = $this->Coop_model->save_coop_all_msg(array(
					'w_coop_name'=>$name,
					'w_coop_person'=>$person,
					'w_coop_directors_num'=>$directors_num,
					'w_coop_keyjob_num'=>$keyjob_num,
					'w_coop_pyear_employ_num'=>$pyear_employ_num,
					'w_coop_member_num'=>$member_num,
					'w_coop_soil_property'=>$soil_property,
					'w_coop_all_dept_id'=>$dept_id
				));
				if($rows > 0){
					echo 'success';
				}else{
					echo 'fail';
				}
			}else{
				$rows = $this->Coop_model->update_coop_all_msg(array(
					'w_coop_name'=>$name,
					'w_coop_person'=>$person,
					'w_coop_directors_num'=>$directors_num,
					'w_coop_keyjob_num'=>$keyjob_num,
					'w_coop_pyear_employ_num'=>$pyear_employ_num,
					'w_coop_member_num'=>$member_num,
					'w_coop_soil_property'=>$soil_property,
				),$dept_id);
				if($rows > 0){
					echo 'success';
				}else{
					echo 'fail';
				}
			}
		}

		public function img_upload()
		{
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			//允许上传文件格式
			$path = "./uploads/coop/";//

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