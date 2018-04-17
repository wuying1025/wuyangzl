<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class  Produfactors extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function produfactors_msg_insert(){
			//跨域操作
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			//操作生产要素信息表(插入)
			$dept_id=$this->input->post('produfactors_dept_id');
			$produfactors_cate=$this->input->post('produfactors_cate');
			$produfactors_soil_cate=$this->input->post('produfactors_soil_cate');
			$produfactors_seed_price=$this->input->post('produfactors_seed_price');
			$produfactors_chem_price=$this->input->post('produfactors_chem_price');
			$produfactors_pesticide_price=$this->input->post('produfactors_pesticide_price');
			$produfactors_sowing_price=$this->input->post('produfactors_sowing_price');
			$produfactors_rotary_price=$this->input->post('produfactors_rotary_price');
			$produfactors_spraying_price=$this->input->post('produfactors_spraying_price');
			$produfactors_harvest_price=$this->input->post('produfactors_harvest_price');
			$produfactors_autusoil_price=$this->input->post('produfactors_autusoil_price');
			$produfactors_manmade_price=$this->input->post('produfactors_manmade_price');
			$produfactors_insurance_price=$this->input->post('produfactors_insurance_price');
			$produfactors_accrual_price=$this->input->post('produfactors_accrual_price');
			$produfactors_plantcost_sum=$this->input->post('produfactors_plantcost_sum');
			$produfactors_yield_num=$this->input->post('produfactors_yield_num');
			$produfactors_dew=$this->input->post('produfactors_dew');
			$produfactors_plant_allowance=$this->input->post('produfactors_plant_allowance');
			$produfactors_grov_allowance=$this->input->post('produfactors_grov_allowance');
			$produfactors_pearning=$this->input->post('produfactors_pearning');
			$produfactors_other_price=$this->input->post('produfactors_other_price');
			$produfactors_remark=$this->input->post('produfactors_remark');

			$produfactors_arr=array(
				'w_produfactors_cate'=>$produfactors_cate,
				'w_produfactors_soil_cate'=>$produfactors_soil_cate,
				'w_produfactors_seed_price'=>$produfactors_seed_price,
				'w_produfactors_chem_price'=>$produfactors_chem_price,
				'w_produfactors_pesticide_price'=>$produfactors_pesticide_price,
				'w_produfactors_sowing_price'=>$produfactors_sowing_price,
				'w_produfactors_rotary_price'=>$produfactors_rotary_price,
				'w_produfactors_spraying_price'=>$produfactors_spraying_price,
				'w_produfactors_harvest_price'=>$produfactors_harvest_price,
				'w_produfactors_autusoil_price'=>$produfactors_autusoil_price,
				'w_produfactors_manmade_price'=>$produfactors_manmade_price,
				'w_produfactors_insurance_price'=>$produfactors_insurance_price,
				'w_produfactors_accrual_price'=>$produfactors_accrual_price,
				'w_produfactors_plantcost_sum'=>$produfactors_plantcost_sum,
				'w_produfactors_yield_num'=>$produfactors_yield_num,
				'w_produfactors_dew'=>$produfactors_dew,
				'w_produfactors_plant_allowance'=>$produfactors_plant_allowance,
				'w_produfactors_grov_allowance'=>$produfactors_grov_allowance,
				'w_produfactors_pearning'=>$produfactors_pearning,
				'w_produfactors_other_price'=>$produfactors_other_price,
				'w_produfactors_remark'=>$produfactors_remark,
				'w_produfactors_dept_id'=>$dept_id,
			);

			$this->load->model('Produfactors_model');
			$result=$this->Produfactors_model->produfactors_model_insert($produfactors_arr);
			echo $result;

		}

		public function produfactors_msg_sel(){
			//跨域操作
			header('Access-Control-Allow-Origin:* ');
			header('Access-Control-Allow-Headers: X-Requested-With, Content-Type');

			//操作生产要素信息表(查询)
			$dept_id=$this->input->post('produfactors_dept_id');
			$this->load->model('Produfactors_model');
			$result=$this->Produfactors_model->produfactors_model_sel($dept_id);
			echo json_encode($result);
		}

	}

?>