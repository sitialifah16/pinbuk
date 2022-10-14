<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __Construct()
	{
		parent::__Construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('M_admin'); //call model
		//cek session username
		if ($this->session->userdata('username_admin') == '') {

			//set notifikasi
			$this->session->set_flashdata('gagal', 'You have not login...');

			//alihkan ke halaman login
			redirect(site_url('account/admin'));
		}
	}

	public function index(){
		redirect(site_url('admin/dashboard'));
	}

	public function dashboard()
	{
		$data['bmt'] = $this->M_admin->getregistereduser('1');
		$data['pinda'] = $this->M_admin->getregistereduser('2');
		$data['csr'] = $this->M_admin->getregistereduser('3');
		$data['total'] = $this->M_admin->getallregistereduser('where status ="1"')->num_rows();
		$data['notverified'] = $this->M_admin->getallregistereduser('where status="0"')->num_rows();
		$data['rejected'] = $this->M_admin->getallregistereduser('where status="2"')->num_rows();

		$today_date = date("Y-m-d");
		$data['today'] = $this->M_admin->gettodayregister($today_date)->num_rows();
		$content = array('content' => $this->load->view('admin', $data, true));
		$this->load->view('v_admin', $content);
	}
}
