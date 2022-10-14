<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __Construct(){
		parent::__Construct ();
		$this->load->model('M_home');
	}

	public function index()
	{
		$data['galeri']=$this->M_home->getAll('foto_kegiatan');
		$content = array('content' => $this->load->view('home', $data, true));
        $this->load->view('v_home', $content);
	}

}
