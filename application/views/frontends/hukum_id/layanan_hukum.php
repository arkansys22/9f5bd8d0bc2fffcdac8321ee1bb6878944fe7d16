<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view('frontends/head')?>
<!-- head end -->
<body class="home-page body-four">

<div class="main-wrapper">


  <!-- header -->
  <?php $this->load->view('frontends/header')?>
  <!-- header end -->
  <?php $users= $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array(); ?>
  <?php $user_level= $this->Crud_m->view_where('user_level', array('user_level_id'=> $users['level']))->row_array(); ?>

  <div class="bread-crumb-bar">
    <div class="container">
      <div class="row align-items-center inner-banner">
        <div class="col-md-12 col-12 text-center">
          <div class="breadcrumb-list">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><img src="<?php base_url()?>assets/frontends/img/home-icon.svg" alt="Post Author"> Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><?php echo $user_level['user_level_nama'];?></li>
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content content-page">
    <div class="container-fluid">
      <div class="row">

        <!-- <div class="col-xl-3 col-md-4 theiaStickySidebar"> -->
        <div class="col-xl-3 col-md-4">
          <div class="settings-widget">
            <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
              <a href="#">
                <img alt="profile image" src="<?php base_url()?>assets/frontends/img/img-04.jpg" class="avatar-lg rounded-circle">
              </a>
              <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                <a href="#"><p style="color:white;" class="mb-0"><b><?php echo $users['nama'];?></b></p></a>
                <p style="font-size: 12px;" class="mb-0"><?php echo $user_level['user_level_nama'];?> <a href="" title="Verified" style="color:white;"><i class="fas fa-check-circle"></i></a></p>
              </div>
            </div>
            <div class="settings-menu">
              <ul>
                <li class="nav-item">
                  <a href="<?php base_url()?>dashboard" class="nav-link ">
                    <i class="material-icons">verified_user</i> Akun
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php base_url()?>layanan-hukum" class="nav-link active">
                    <i class="material-icons">business_center</i> Layanan Hukum
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="material-icons">record_voice_over</i> Ulasan
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="material-icons">chat</i> Pesan
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="material-icons">wifi_tethering</i> Pembayaran
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="material-icons">settings</i> Pengaturan
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="material-icons">power_settings_new</i> Keluar
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-xl-9 col-md-8">
          <div class="dashboard-sec">
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="dash-widget">
                <div class="dash-widget-more">
                <a href="#" class="d-flex">Profesi <i class="fas fa-arrow-right ms-auto"></i></a>
                </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="dash-widget">
                <div class="dash-widget-more">
                <a href="#" class="d-flex">Alamat Kantor <i class="fas fa-arrow-right ms-auto"></i></a>
                </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="dash-widget">
                <div class="dash-widget-more">
                <a href="#" class="d-flex">Tarif Layanan <i class="fas fa-arrow-right ms-auto"></i></a>
                </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="dash-widget">
                <div class="dash-widget-more">
                <a href="#" class="d-flex">Jadwal <i class="fas fa-arrow-right ms-auto"></i></a>
                </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="dash-widget">
                <div class="dash-widget-more">
                <a href="#" class="d-flex">Rekening Bank <i class="fas fa-arrow-right ms-auto"></i></a>
                </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="dash-widget">
                <div class="dash-info">
                <div class="dash-widget-info">Projek Menunggu</div>
                <div class="dash-widget-count">30</div>
                </div>
                <div class="dash-widget-more">
                <a href="#" class="d-flex">Selengkapnya <i class="fas fa-arrow-right ms-auto"></i></a>
                </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="dash-widget">
                <div class="dash-info">
                <div class="dash-widget-info">Projek Dikerjakan</div>
                <div class="dash-widget-count">5</div>
                </div>
                <div class="dash-widget-more">
                <a href="#" class="d-flex">Selengkapnya <i class="fas fa-arrow-right ms-auto"></i></a>
                </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="dash-widget">
                <div class="dash-info">
                <div class="dash-widget-info">Projek Selesai</div>
                <div class="dash-widget-count">25</div>
                </div>
                <div class="dash-widget-more">
                <a href="#" class="d-flex">Selengkapnya <i class="fas fa-arrow-right ms-auto"></i></a>
                </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


<!-- footer -->
<?php $this->load->view('frontends/footer')?>
<!-- footer end -->

</div>

<script src="<?php echo base_url()?>assets/frontends/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url()?>assets/frontends/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/frontends/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url()?>assets/frontends/plugins/aos/aos.js"></script>
<script src="<?php echo base_url()?>assets/frontends/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url()?>assets/frontends/js/slick.js"></script>
<script src="<?php echo base_url()?>assets/frontends/js/script.js"></script>
</body>

</html>
