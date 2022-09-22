<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layanan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Crud_m'));

	}

	public function product_category($id)
	{

			$row = $this->Crud_m->get_by_ids('products_category',array('products_cat_judul_seo'=>$id));
			if ($row)
				{
					$data['posts']            = $this->Crud_m->get_by_ids('products_category',array('products_cat_judul_seo'=>$id));
					$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
					$this->load->view('frontends/layanan/konsultasi_online/index',$data);

				}
				else
						{
							redirect(base_url());
						}
				}

	public function detail($products_id)
	{

			$row = $this->Crud_m->get_by_id_products($products_id);
			if ($row)
				{
					$data['posts']            = $this->Crud_m->get_by_id_products($products_id);
					$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
					$this->load->view('frontend/v_product_detail', $data);
				}
				else
						{
							$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>Berita tidak ditemukan</b></div>');
							redirect(base_url());
						}
				}


}
