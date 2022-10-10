<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
		$this->load->view('frontend/v_contact',$data);
	}
	public function login_id()
	{
            $data['title'] = 'Sign In';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('frontends/user_id/login', $data);
            } else {

                $username = $this->input->post('username');
                $password = sha1($this->input->post('password'));
								$cek = $this->Panel_m->cek_login($username,$password,'user');
							    $row = $cek->row_array();
							    $total = $cek->num_rows();
									if ($total > 0){
										$this->session->set_userdata(
											array(
												'username'=>$row['username'],
												'level'=>$row['level'],
												'id_users'=>$row['id_users'],
												'id_session'=>$row['id_session']));

										$this->session->set_flashdata('user_loggedin','Selamat Anda Berhasil Login');
										$id = array('id_session' => $this->session->id_session);
									 	$data = array('user_login_status'=>'online','user_login_tanggal'=> date('Y-m-d'),'user_login_jam'=> date('H:i:s'));
									 	$this->db->update('user', $data, $id);
										redirect('paneladmin/home');
									}else {
                    // Set message
                    $this->session->set_flashdata('login_failed', 'Username Dan Password salah!');

                    redirect(base_url('login'));
                }
            }
        }

	public function register_pengacara_id()
	{
									$data['title'] = 'Sign Up';
			            $this->form_validation->set_rules('username','','required|min_length[5]|max_length[12]|is_unique[user.username]', array('required' => 'username masih kosong','is_unique' => 'Username telah digunakan, silahkan gunakan username lain.'));
									$this->form_validation->set_rules('nama','','required', array('required'=>'Nama masih kosong'));
			            $this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Email masih kosong','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
			            $this->form_validation->set_rules('password','','required', array('required'=>'Password masih kosong'));
			            $this->form_validation->set_rules('password2', '','required|matches[password]', array('required' => 'Konfirmasi password masih kosong','matches'=>'Password tidak sama! Cek kembali password Anda'));

			            if($this->form_validation->run() === FALSE){
			                $this->load->view('frontends/user_id/register_pengacara', $data);
			            }else{
			                $enc_password = sha1($this->input->post('password'));
											$data_user = array(
																'username' => $this->input->post('username'),
																'email' => $this->input->post('email'),
																'password' => $enc_password,
																'user_status' => '1',
																'level' => '4',
																'user_post_hari'=>hari_ini(date('w')),
																'user_post_tanggal'=>date('Y-m-d'),
																'user_post_jam'=>date('H:i:s'),
																'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'),
																'nama' => $this->input->post('nama'));
											$id_pelanggan = $this->Crud_m->tambah_user($data_user);
											$data_user_detail = array(
														   	'id_user' => $id_pelanggan);
											$this->Crud_m->tambah_user_detail($data_user_detail);

			                $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

			                redirect(base_url("login"));
			            }
		}
	public function register_notaris_id()
	{
										$data['title'] = 'Sign Up';
				            $this->form_validation->set_rules('username','','required|min_length[5]|max_length[12]|is_unique[user.username]', array('required' => 'username masih kosong','is_unique' => 'Username telah digunakan, silahkan gunakan username lain.'));
										$this->form_validation->set_rules('nama','','required', array('required'=>'Nama masih kosong'));
				            $this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Email masih kosong','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
				            $this->form_validation->set_rules('password','','required', array('required'=>'Password masih kosong'));
				            $this->form_validation->set_rules('password2', '','required|matches[password]', array('required' => 'Konfirmasi password masih kosong','matches'=>'Password tidak sama! Cek kembali password Anda'));

				            if($this->form_validation->run() === FALSE){
				                $this->load->view('frontends/user_id/register_notaris', $data);
				            }else{
				                $enc_password = sha1($this->input->post('password'));
												$data_user = array(
																	'username' => $this->input->post('username'),
																	'email' => $this->input->post('email'),
																	'password' => $enc_password,
																	'user_status' => '1',
																	'level' => '4',
																	'user_post_hari'=>hari_ini(date('w')),
																	'user_post_tanggal'=>date('Y-m-d'),
																	'user_post_jam'=>date('H:i:s'),
																	'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'),
																	'nama' => $this->input->post('nama'));
												$id_pelanggan = $this->Crud_m->tambah_user($data_user);
												$data_user_detail = array(
															   	'id_user' => $id_pelanggan);
												$this->Crud_m->tambah_user_detail($data_user_detail);

				                $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				                redirect(base_url("login"));
				            }
		}
	public function register_perusahaan_id()
	{
											$data['title'] = 'Sign Up';
					            $this->form_validation->set_rules('username','','required|min_length[5]|max_length[12]|is_unique[user.username]', array('required' => 'username masih kosong','is_unique' => 'Username telah digunakan, silahkan gunakan username lain.'));
											$this->form_validation->set_rules('nama','','required', array('required'=>'Nama masih kosong'));
					            $this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Email masih kosong','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
					            $this->form_validation->set_rules('password','','required', array('required'=>'Password masih kosong'));
					            $this->form_validation->set_rules('password2', '','required|matches[password]', array('required' => 'Konfirmasi password masih kosong','matches'=>'Password tidak sama! Cek kembali password Anda'));

					            if($this->form_validation->run() === FALSE){
					                $this->load->view('frontends/user_id/register_perusahaan', $data);
					            }else{
					                $enc_password = sha1($this->input->post('password'));
													$data_user = array(
																		'username' => $this->input->post('username'),
																		'email' => $this->input->post('email'),
																		'password' => $enc_password,
																		'user_status' => '1',
																		'level' => '4',
																		'user_post_hari'=>hari_ini(date('w')),
																		'user_post_tanggal'=>date('Y-m-d'),
																		'user_post_jam'=>date('H:i:s'),
																		'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'),
																		'nama' => $this->input->post('nama'));
													$id_pelanggan = $this->Crud_m->tambah_user($data_user);
													$data_user_detail = array(
																   	'id_user' => $id_pelanggan);
													$this->Crud_m->tambah_user_detail($data_user_detail);

					                $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

					                redirect(base_url("login"));
					            }
		}


}
