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
			$soil_contract = $this->input->post('soil_contract');
			$soil_name = $this->input->post('soil_name');
			$dept_id = $this->input->post('dept_id');


			$sfile=$_FILES['coop_soil_contract'];
			$yuanurl=$sfile[tmp_name];
			$sname=explode('.',$sfile['name']);
			$hou=count($sname)-1;
			$houzhui=$sname[$hou];
			$filename=$owner.'+'.$id_num.'.'.$houzhui;
			$urlname=base_url()."/uploads/coop/".$filename;
			$cunurl="/uploads/coop/".$filename;
			$a=move_uploaded_file($yuanurl,$urlname);
			if($a){
				$soil_contract=$cunurl;
			}

			$rows = $this->Coop_model->save_coop_msg(array(
				'w_coop_grantor'=>$grantor,
				'w_coop_soil_area'=>$area,
				'w_coop_ID_num'=>$id_num,
				'w_coop_tel_num'=>$tel_num,
				'w_coop_address'=>$address,
				'w_coop_soil_owner'=>$owner,
				'w_coop_soil_tel_num'=>$soil_tel_num,
				'w_coop_soil_address'=>$soil_address,
				'w_coop_soil_contract'=>$soil_contract,
				'w_coop_soil_name'=>$soil_name,
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
			echo json_encode($cool_all);
		}

		public function coop_all_msg_insert(){
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			//操作合作社五项信息表(插入或者修改)
			$dept_id = $this->input->post('dept_id');
			$directors_num = $this->input->post('directors_num');
			$keyjob_num = $this->input->post('keyjob_num');
			$pyear_employ_num = $this->input->post('pyear_employ_num');
			$member_num = $this->input->post('member_num');
			$soil_property = $this->input->post('soil_property');
			$cool_all = $this->Coop_model->get_coop_all_msg($dept_id);
			if($cool_all == null){
				$rows = $this->Coop_model->save_coop_all_msg(array(
					'w_coop_grantor'=>$dept_id,
					'w_coop_soil_area'=>$directors_num,
					'w_coop_ID_num'=>$keyjob_num,
					'w_coop_tel_num'=>$pyear_employ_num,
					'w_coop_address'=>$member_num,
					'w_coop_soil_owner'=>$soil_property,
					'w_coop_all_dept_id'=>$dept_id
				));
				if($rows > 0){
					echo 'success';
				}else{
					echo 'fail';
				}
			}else{
				$rows = $this->Coop_model->update_coop_all_msg(array(
					'w_coop_grantor'=>$dept_id,
					'w_coop_soil_area'=>$directors_num,
					'w_coop_ID_num'=>$keyjob_num,
					'w_coop_tel_num'=>$pyear_employ_num,
					'w_coop_address'=>$member_num,
					'w_coop_soil_owner'=>$soil_property,
				),$dept_id);
				if($rows > 0){
					echo 'success';
				}else{
					echo 'fail';
				}
			}
		}

	}

?>