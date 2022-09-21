<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layanan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Crud_m'));

	}

	public function index()
	{

		$data['posts'] = $this->Crud_m->view_where_orderings('products_category',array('products_cat_status'=>'publish'),'products_cat_id','ASC');
		$this->load->view('frontends/layanan/konsultasi_online/index',$data);
	}
}
