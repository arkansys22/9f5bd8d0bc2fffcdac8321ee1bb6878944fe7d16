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

  <div class="bread-crumb-bar">
    <div class="container">
      <div class="row align-items-center inner-banner">
      <div class="col-md-12 col-12 text-center">
      <div class="breadcrumb-list">
      <nav aria-label="breadcrumb" class="page-breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html"><img src="<?php base_url()?>assets/frontends/img/home-icon.svg" alt="Post Author"> Home</a></li>
      <li class="breadcrumb-item" aria-current="page">Employee</li>
      <li class="breadcrumb-item" aria-current="page">Dashboard</li>
      </ol>
      </nav>
      </div>
      </div>
      </div>
    </div


     >
  </div>
  <div class="content content-page">
    <div class="container-fluid">
      <div class="row">

        <div class="col-xl-3 col-md-4 theiaStickySidebar">
        <div class="settings-widget">
        <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
        <a href="user-account-details.html"><img alt="profile image" src="<?php base_url()?>assets/frontends/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
        <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
        <p class="mb-2">Selamat Datang,</p>
        <a href="#"><h3 class="mb-0">John Danie S.</h3></a>
        <p class="mb-0">@johndaniee</p>
        </div>
        </div>
        <div class="settings-menu">
        <ul>
        <li class="nav-item">
        <a href="#" class="nav-link active">
        <i class="material-icons">verified_user</i> Dashboard
        </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="material-icons">business_center</i> Proyek
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
              <div class="dash-info">
              <div class="dash-widget-info">Projects Posted</div>
              <div class="dash-widget-count">30</div>
              </div>
              <div class="dash-widget-more">
              <a href="#" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
              </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="dash-widget">
              <div class="dash-info">
              <div class="dash-widget-info">Ongoing Projects</div>
              <div class="dash-widget-count">5</div>
              </div>
              <div class="dash-widget-more">
              <a href="#" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
              </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="dash-widget">
              <div class="dash-info">
              <div class="dash-widget-info">Completed Projects</div>
              <div class="dash-widget-count">25</div>
              </div>
              <div class="dash-widget-more">
              <a href="#" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
              </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-8 d-flex">
              <div class="card flex-fill">
              <div class="card-header">
              <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Profile Views</h5>
              <div class="dropdown">
              <button class="btn btn-white btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Monthly
              </button>
              <div class="dropdown-menu dropdown-menu-start">
              <a href="javascript:void(0);" class="dropdown-item">Weekly</a>
              <a href="javascript:void(0);" class="dropdown-item">Monthly</a>
              <a href="javascript:void(0);" class="dropdown-item">Yearly</a>
              </div>
              </div>
              </div>
              </div>
              <div class="card-body">
              <div id="chartprofile"></div>
              </div>
              </div>
            </div>
            <div class="col-xl-4 d-flex">
              <div class="card flex-fill">
              <div class="card-header">
              <div class="d-flex justify-content-between align-items-center">
              <h5 class="card-title">Static Analytics</h5>
              <div class="dropdown">
              <button class="btn btn-white btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Monthly
              </button>
              <div class="dropdown-menu dropdown-menu-start">
              <a href="javascript:void(0);" class="dropdown-item">Weekly</a>
              <a href="javascript:void(0);" class="dropdown-item">Monthly</a>
              <a href="javascript:void(0);" class="dropdown-item">Yearly</a>
              </div>
              </div>
              </div>
              </div>
              <div class="card-body">
              <div id="chartradial"></div>
              <ul class="static-list">
              <li><span><i class="fas fa-circle text-violet me-1"></i> Applied Jobs</span> <span class="sta-count">30</span></li>
              <li><span><i class="fas fa-circle text-pink me-1"></i> Active Proposals</span> <span class="sta-count">30</span></li>
              <li><span><i class="fas fa-circle text-yellow me-1"></i> Applied Proposals</span> <span class="sta-count">30</span></li>
              <li><span><i class="fas fa-circle text-blue me-1"></i> Bookmarked Projects</span> <span class="sta-count">30</span></li>
              </ul>
              </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="card card-table">
              <div class="card-header">
              <div class="row">
              <div class="col">
              <h4 class="card-title">Recently Posted Jobs</h4>
              </div>
              <div class="col-auto">
              <a href="manage-projects.html" class="btn-right btn btn-sm fund-btn">
              View All
              </a>
              </div>
              </div>
              </div>
              <div class="card-body">
              <div class="table-responsive table-job">
              <table class="table table-hover table-center mb-0">
              <thead class="thead-pink">
              <tr>
              <th>Details</th>
              <th>Job Type</th>
              <th>Budget</th>
              <th>Created on</th>
              <th>Proposals</th>
              <th class="text-end">Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
              <td>
              <span class="detail-text">I want some customization and installation on wordpress</span>
              <span class="d-block text-expiry">Expiring on : February 3, 2019</span>
              </td>
              <td>Full-Time</td>
              <td><span class="table-budget">BUDGET</span> <span class="d-block text-danger">$600 - $1500</span></td>
              <td>12 July, 2021</td>
              <td>47</td>
              <td class="text-end"><a href="view-project-detail.html" class="text-success">View</a></td>
              </tr>
              <tr>
              <td>
              <span class="detail-text">I want some customization and installation on wordpress</span>
              <span class="d-block text-expiry">Expiring on : February 3, 2019</span>
              </td>
              <td>Full-Time</td>
              <td><span class="table-budget">BUDGET</span> <span class="d-block text-danger">$600 - $1500</span></td>
              <td>12 July, 2021</td>
              <td>47</td>
              <td class="text-end"><a href="view-project-detail.html" class="text-success">View</a></td>
              </tr>
              <tr>
              <td>
              <span class="detail-text">I want some customization and installation on wordpress</span>
              <span class="d-block text-expiry">Expiring on : February 3, 2019</span>
              </td>
              <td>Full-Time</td>
              <td><span class="table-budget">BUDGET</span> <span class="d-block text-danger">$600 - $1500</span></td>
              <td>12 July, 2021</td>
              <td>47</td>
              <td class="text-end"><a href="view-project-detail.html" class="text-success">View</a></td>
              </tr>
              <tr>
              <td>
              <span class="detail-text">I want some customization and installation on wordpress</span>
              <span class="d-block text-expiry">Expiring on : February 3, 2019</span>
              </td>
              <td>Full-Time</td>
              <td><span class="table-budget">BUDGET</span> <span class="d-block text-danger">$600 - $1500</span></td>
              <td>12 July, 2021</td>
              <td>47</td>
              <td class="text-end"><a href="view-project-detail.html" class="text-success">View</a></td>
              </tr>
              </tbody>
              </table>
              </div>
              </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-xl-6 d-flex">
            <div class="card flex-fill">
            <div class="card-header">
            <div class="row justify-content-between align-items-center">
            <div class="col">
            <h5 class="card-title">Membership Plan Details</h5>
            </div>
            <div class="col-auto">
            <a href="javascript:void(0);" class="btn-right btn btn-sm fund-btn">
            View
            </a>
            </div>
            </div>
            </div>
            <div class="card-body">
            <div class="row">
            <div class="col-md-6 col-sm-6">
            <div class="plan-details">
            <h4>The Ultima</h4>
            <div class="yr-amt">Anually Price</div>
            <h4>$1200</h4>
            <div class="yr-duration">Duration: One Year</div>
            <div class="expiry">Expiry: 24 JAN 2022</div>
            <a href="membership-plans.html" class="btn btn-primary btn-plan">Change Plan</a>
            </div>
            </div>
            <div class="col-md-6 col-sm-6">
            <div class="plan-feature">
            <ul>
            <li>12 Project Credits</li>
            <li>10 Allowed Services</li>
            <li>20 Days visibility</li>
            <li>5 Featured Services</li>
            <li>20 Days visibility</li>
            <li>30 Days Package Expiry</li>
            <li>Profile Featured</li>
            </ul>
            </div>
             </div>
            </div>
            </div>
            </div>
            </div>


            <div class="col-xl-6 d-flex">
            <div class="card flex-fill">
            <div class="card-header">
            <div class="row justify-content-between align-items-center">
            <div class="col">
            <h5 class="card-title">Notifications</h5>
            </div>
            <div class="col-auto">
            <a href="freelancer-ongoing-projects.html" class="btn-right btn btn-sm fund-btn">
            View All
            </a>
            </div>
            </div>
            </div>
            <div class="pro-body p-0">
            <div class="news-feature">
            <img class="avatar-sm rounded-circle" src="<?php base_url()?>assets/frontends/img/img-02.jpg" alt="User Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
            </div>
            <div class="news-feature">
            <img class="avatar-sm rounded-circle" src="<?php base_url()?>assets/frontends/img/img-03.jpg" alt="User Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
            </div>
            <div class="news-feature">
            <img class="avatar-sm rounded-circle" src="<?php base_url()?>assets/frontends/img/img-04.jpg" alt="User Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
            </div>
            <div class="news-feature">
            <img class="avatar-sm rounded-circle" src="<?php base_url()?>assets/frontends/img/img-05.jpg" alt="User Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
            </div>
            <div class="news-feature">
            <img class="avatar-sm rounded-circle" src="<?php base_url()?>assets/frontends/img/img-01.png" alt="User Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. </p>
            </div>
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
