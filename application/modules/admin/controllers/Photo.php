<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Photo extends CI_Controller
{

	function __Construct()
	{
		parent::__Construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('m_foto');
		//cek session username
		if ($this->session->userdata('username_admin') == '') {

			//set notifikasi
			$this->session->set_flashdata('gagal', 'You have not login...');

			//alihkan ke halaman login
			redirect(site_url('account/admin'));
		}
	}

	public function index()
	{
		$data["foto_kegiatan"] = $this->m_foto->getAll();
		$content = array('content' => $this->load->view('v_foto/list', $data, true));
		$this->load->view('v_admin', $content);
	}

	public function add()
	{
		$content = array('content' => $this->load->view('v_foto/new_form', '', true));
		$this->load->view('v_admin', $content);
	}

	public function edit($id = null)
	{
		$data["foto_kegiatan"] = $this->m_foto->getById($id);
		$content = array('content' => $this->load->view('v_foto/edit_form', $data, true));
		$this->load->view('v_admin', $content);
	}

	public function add_photo()
	{
		$deskripsi = $this->input->post('deskripsi');
		$today_date = date("Y-m-d h:i:sa");

		$n_foto = count($_FILES['gambar']['name']);

		for ($i = 0; $i < $n_foto; $i++) {
			$config['upload_path']          = './uploads/foto/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['encrypt_name']         = TRUE;
			$config['overwrite']            = false;
			$config['max_size']             = 1024; // 1MB
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$_FILES['gambar[]']['name'] = $_FILES['gambar']['name'][$i];
			$_FILES['gambar[]']['type'] = $_FILES['gambar']['type'][$i];
			$_FILES['gambar[]']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
			$_FILES['gambar[]']['error'] = $_FILES['gambar']['error'][$i];
			$_FILES['gambar[]']['size'] = $_FILES['gambar']['size'][$i];

			$this->load->library('upload', $config);
			if (!($this->upload->do_upload('gambar[]'))) {
				$error = array('error' => $this->upload->display_errors());
				$msg = $error;
				break;
			}
			$data_input = array(
				'deskripsi' => $deskripsi,
				'nama_gambar' => $this->upload->data('file_name'),
				'waktu_upload' => $today_date,
				'terakhir_diubah' => $today_date
			);
			$status = $this->m_foto->insert_data('foto_kegiatan', $data_input);
			if ($status !== "failed") {
				$msg = "Gambar berhasil dimasukkan";
			} else {
				$msg = "Gambar gagal dimasukkan";
			}
		}
		echo json_encode($msg);
	}

	public function delete_photo($id = null)
	{
		if (!isset($id)) show_404();
		$id_foto = $this->m_foto->getById($id);
		$filename = explode(".", $id_foto->nama_gambar)[0];
		$status = $this->m_foto->delete($id);
		if ($status !== "failed") {
			array_map('unlink', glob(FCPATH . "uploads/foto/$filename.*"));
			$msg = "Gambar berhasil dihapus";
		} else {
			$msg = "Gambar gagal dihapus";
		};
		echo json_encode($msg);
	}


	public function edit_photo($id = null)
	{
		if (!isset($id)) redirect('admin/photo');
		$deskripsi = $this->input->post('deskripsi');
		$today_date = date("Y-m-d h:i:sa");
		if (!empty($_FILES["image-edit"]["name"])) {

			$config['upload_path']          = './uploads/foto/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['encrypt_name']         = TRUE;
			$config['overwrite']            = true;
			$config['max_size']             = 1024; // 1MB
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			if (!($this->upload->do_upload('image-edit'))) {
				$image = $this->m_foto->getById($id)->nama_gambar;
				$error = array('error' => $this->upload->display_errors());
				$msg = $error;
				echo json_encode($msg);
			} else {
				$oldimage = $this->m_foto->getById($id)->nama_gambar;
				array_map('unlink', glob(FCPATH . "uploads/foto/$oldimage"));
				$image = $this->upload->data('file_name');
			}
		} else {
			$image = $this->m_foto->getById($id)->nama_gambar;
		}

		$data = array(
			'nama_gambar' => $image,
			'deskripsi' => $deskripsi,
			'terakhir_diubah' => $today_date
		);
		$status = $this->m_foto->update($data, $id);
		if ($status !== "failed") {
			$msg = "Data gambar berhasil diubah";
		} else {
			$msg = "Data gambar gagal diubah";
		}
		echo json_encode($msg);
	}
}
