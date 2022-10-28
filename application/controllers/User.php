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

        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('frontends/user_id/login', $data);
        } else {

            $email = $this->input->post('email');
            $password = sha1($this->input->post('password'));
							$cek = $this->Panel_m->cek_login($email,$password,'user');
						    $row = $cek->row_array();
						    $total = $cek->num_rows();
								if ($total > 0){
									$this->session->set_userdata(
										array(
											'email'=>$row['email'],
											'level'=>$row['level'],
											'id_users'=>$row['id_users'],
											'id_session'=>$row['id_session']));

									$this->session->set_flashdata('user_loggedin','Selamat Anda Berhasil Login');
									$id = array('id_session' => $this->session->id_session);
								 	$data = array('user_login_status'=>'online','user_login_tanggal'=> date('Y-m-d'),'user_login_jam'=> date('H:i:s'));
								 	$this->db->update('user', $data, $id);
									redirect('dashboard');
								}else {
                $this->session->set_flashdata('login_failed', 'Periksa kembali Email dan Password Anda');
                redirect(base_url('masuk'));
            }
        }
    }

	public function home()
	{
			if ($this->session->level=='1'){
				$this->load->view('backend/home');
			}elseif ($this->session->level=='2'){
				$this->load->view('backend/home');
			}elseif ($this->session->level=='3'){
					$this->load->view('backend/home');
			}elseif ($this->session->level=='4'){
					$this->load->view('frontends/hukum_id/dashboard');
			}elseif ($this->session->level=='5'){
					$this->load->view('frontends/pengguna_id/dashboard');
			}else{
				redirect(base_url());
			}
	}

	public function layanan_hukum()
	{
			if ($this->session->level=='1'){
				$this->load->view('backend/home');
			}elseif ($this->session->level=='2'){
				$this->load->view('backend/home');
			}elseif ($this->session->level=='3'){
					$this->load->view('backend/home');
			}elseif ($this->session->level=='4'){
					$this->load->view('frontends/hukum_id/layanan_hukum');
			}elseif ($this->session->level=='5'){
					$this->load->view('frontends/pengguna_id/layanan_hukum');
			}else{
				redirect(base_url());
			}
	}
	public function profesi()
	{
			if ($this->session->level=='1'){
				$this->load->view('backend/home');
			}elseif ($this->session->level=='2'){
				$this->load->view('backend/home');
			}elseif ($this->session->level=='3'){
					$this->load->view('backend/home');
			}elseif ($this->session->level=='4'){
					$this->load->view('frontends/hukum_id/profesi');
			}elseif ($this->session->level=='5'){
					$this->load->view('frontends/pengguna_id/layanan_hukum');
			}else{
				redirect(base_url());
			}
	}
	public function spesialis()
	{
			if ($this->session->level=='1'){
				$this->load->view('backend/home');
			}elseif ($this->session->level=='2'){
				$this->load->view('backend/home');
			}elseif ($this->session->level=='3'){
					$this->load->view('backend/home');
			}elseif ($this->session->level=='4'){
					$this->load->view('frontends/hukum_id/spesialis');
			}elseif ($this->session->level=='5'){
					$this->load->view('frontends/pengguna_id/layanan_hukum');
			}else{
				redirect(base_url());
			}
	}

	public function register_hukum_id()
	{
				$data['title'] = 'Sign Up';
        $this->form_validation->set_rules('username','','required|min_length[5]|max_length[12]|is_unique[user.username]', array('required' => 'username masih kosong','is_unique' => 'Username telah digunakan, silahkan gunakan username lain.'));
		    $this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Email masih kosong','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
				$this->form_validation->set_rules('nama','','required', array('required'=>'Nama masih kosong'));
				$this->form_validation->set_rules('password','','required', array('required'=>'Password masih kosong'));
        $this->form_validation->set_rules('password2', '','required|matches[password]', array('required' => 'Konfirmasi password masih kosong','matches'=>'Password tidak sama! Cek kembali password Anda'));

        if($this->form_validation->run() === FALSE){
            $this->load->view('frontends/user_id/register_hukum', $data);
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
							$data_user_pengacara = array(
										   	'id_user' => $id_pelanggan);
							$this->Crud_m->tambah_user_pengacara($data_user_pengacara);

            $this->session->set_flashdata('user_registered', 'Anda Berhasil Mendaftar, Silahkan Login / Masuk Ke Legia');

            redirect(base_url("masuk"));
        }
	}
	public function register_pengguna_id()
	{
		$data['title'] = 'Sign Up';
        $this->form_validation->set_rules('username','','required|min_length[5]|max_length[12]|is_unique[user.username]', array('required' => 'username masih kosong','is_unique' => 'Username telah digunakan, silahkan gunakan username lain.'));
				$this->form_validation->set_rules('nama','','required', array('required'=>'Nama masih kosong'));
        $this->form_validation->set_rules('email','','required|valid_email|is_unique[user.email]', array('required' => 'Email masih kosong','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
        $this->form_validation->set_rules('password','','required', array('required'=>'Password masih kosong'));
        $this->form_validation->set_rules('password2', '','required|matches[password]', array('required' => 'Konfirmasi password masih kosong','matches'=>'Password tidak sama! Cek kembali password Anda'));

        if($this->form_validation->run() === FALSE){
            $this->load->view('frontends/user_id/register_pengguna', $data);
        }else{
            $enc_password = sha1($this->input->post('password'));
							$data_user = array(
												'username' => $this->input->post('username'),
												'email' => $this->input->post('email'),
												'password' => $enc_password,
												'user_status' => '1',
												'level' => '6',
												'user_post_hari'=>hari_ini(date('w')),
												'user_post_tanggal'=>date('Y-m-d'),
												'user_post_jam'=>date('H:i:s'),
												'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'),
												'nama' => $this->input->post('nama'));
							$id_pelanggan = $this->Crud_m->tambah_user($data_user);
							$data_user_detail = array(
										   	'id_user' => $id_pelanggan);
							$this->Crud_m->tambah_user_detail($data_user_detail);
							$this->session->set_flashdata('user_registered', 'Anda Berhasil Mendaftar, Silahkan Login / Masuk Ke Legia');
            redirect(base_url("masuk"));
        }
	}
	public function login_google()
	{
        include_once APPPATH . "../vendor/autoload.php";
		  $google_client = new Google_Client();
		  $google_client->setClientId('696328915160-m40bolc3g3fp338b753eagtl86b61a33.apps.googleusercontent.com'); //masukkan ClientID anda
		  $google_client->setClientSecret('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'); //masukkan Client Secret Key anda
		  $google_client->setRedirectUri('http://localhost/sistem_sekolah/user/login_google'); //Masukkan Redirect Uri anda
		  $google_client->addScope('email');
		  $google_client->addScope('profile');

		  if(isset($_GET["code"]))
		  {
		   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
		   if(!isset($token["error"]))
		   {
		    $google_client->setAccessToken($token['access_token']);
		    $this->session->set_userdata('access_token', $token['access_token']);
		    $google_service = new Google_Service_Oauth2($google_client);
		    $data = $google_service->userinfo->get();
		    // $current_datetime = date('Y-m-d H:i:s');
		    $current_date = date('Y-m-d');
		    $current_time = date('H:i:s');
		    $user_data = array(
		      'nama' => $data['nama'],
		      'email' => $data['email'],
		      'user_update_tanggal' => $current_date,
		      'user_update_jam' => $current_time
		     );
		    $this->session->set_userdata('user_data', $data);
		   }
		  }
		  $login_button = '';
		  if(!$this->session->userdata('access_token'))
		  {

		   $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="https://1.bp.blogspot.com/-gvncBD5VwqU/YEnYxS5Ht7I/AAAAAAAAAXU/fsSRah1rL9s3MXM1xv8V471cVOsQRJQlQCLcBGAsYHQ/s320/google_logo.png" /></a>';
		   $data['login_button'] = $login_button;
		   // $this->load->view('google_login', $data);
           $this->load->view('frontends/user_id/login_google', $data);
		  }
		  else
		  {
		  	// uncomentar kode dibawah untuk melihat data session email
		  	// echo json_encode($this->session->userdata('access_token'));
		  	// echo json_encode($this->session->userdata('user_data'));
		   echo "Login success";
		  }
  }
	public function logout()
	{
		$id = array('id_session' => $this->session->id_session);
						$data = array('user_login_status'=>'offline');
						$this->db->update('user', $data, $id);
						// Unset user data
						$this->session->unset_userdata('logged_in');
						$this->session->unset_userdata('user_id');
						$this->session->unset_userdata('username');

						// Set message
						$this->session->set_flashdata('user_logout', 'Anda Berhasil Logout');
						$this->session->sess_destroy();

						redirect(base_url("masuk"));
	}


}
