<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class warehouse_manage extends CI_Controller {

	public function warehouse_in()
	{
		@session_start();
		$warehouse = array(
			'warehouse_product' => $this->input->post('warehouse_product'),
			'warehouse_type' => "in",
			'warehouse_amount' => $this->input->post('warehouse_amount'),
			'warehouse_date' => date('Y-m-d'),
			'warehouse_time' => date('H:i:s'),
			'warehouse_employees' => @$_SESSION['employees_id']
		);
		$this->warehouse_model->warehouse_in($warehouse);
		redirect('warehouse/warehouse_list');
	}
	public function warehouse_out()
	{
		@session_start();
		$warehouse = array(
			'warehouse_product' => $this->input->post('warehouse_product'),
			'warehouse_type' => "out",
			'warehouse_amount' => $this->input->post('warehouse_amount'),
			'warehouse_date' => date('Y-m-d'),
			'warehouse_time' => date('H:i:s'),
			'warehouse_employees' => @$_SESSION['employees_id']
		);
		$this->warehouse_model->warehouse_out($warehouse);

		$stock = array(
			'stock_product' => $this->input->post('warehouse_product'),
			'stock_type' => "in",
			'stock_amount' => $this->input->post('warehouse_amount'),
			'stock_date' => date('Y-m-d'),
			'stock_time' => date('H:i:s'),
			'stock_employees' => @$_SESSION['employees_id'],
			'stock_shop' => $this->input->post('warehouse_shop')
		);
		$this->stock_model->stock_in($stock);
		redirect('warehouse/warehouse_list');
	}

}
