<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Index');
	}
	public function dat_trans(){
		$this->load->view('data_transaksi');
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
