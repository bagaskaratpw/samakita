<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model');
	}
	public function index()
	{
		
		$this->load->view('index');
	}
	public function dat_trans()
	{
		$dataquery = $this->data_model->get('transaksi');
		$data = array(
			'data' => $dataquery,
		);
		$this->load->view('data_transaksi',$data);
	}
	public function pros_apr()
	{
		$this->load->view('proses_apriori');
	}
	public function hasil_apr()
	{
		$this->load->view('hasil_apriori');
	}
}
