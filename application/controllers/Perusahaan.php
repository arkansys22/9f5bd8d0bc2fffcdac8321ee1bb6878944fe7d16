<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{
		$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
		$this->load->view('frontends/perusahaan_id/dashboard',$data);
	}



}
