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


  <div class="content">
    <div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3">
    <div class="account-content">
    <div class="align-items-center justify-content-center">
    <div class="login-right">
    <div class="login-header text-center">
    <br>
    <h3>Bergabung Dengan Legia</h3>
    <p>Dapatkan Manfaat Dan Kemudahan Dalam Kepengurusan Hukum</p>
    </div>
    <nav class="user-tabs mb-4">
    <ul role="tablist" class="nav nav-pills nav-justified">
      <li class="nav-item">
        <a href="<?php base_url() ?>daftar-pengguna-jasa" class="nav-link active">Pengguna Jasa</a>
      </li>
      <li class="nav-item">
        <a href="<?php base_url() ?>daftar-praktisi-hukum" class="nav-link">Praktisi Hukum</a>
      </li>
    </ul>
    </nav>
    <div class="tab-content pt-0">
      <div role="tabpanel" id="developer" class="tab-pane fade active show">
        <?php echo form_open('daftar-pengguna-jasa'); ?>
        <div class="form-group form-focus">
        <input type="text" name="nama" class="form-control floating">
        <label class="focus-label">Nama</label>
        <small><?php echo form_error('nama'); ?></small>
        </div>
        <div class="form-group form-focus">
        <input type="text" name="username" class="form-control floating">
        <label class="focus-label">Username</label>
        <small><?php echo form_error('username'); ?></small>
        </div>
        <div class="form-group form-focus">
        <input type="email" name="email" class="form-control floating">
        <label class="focus-label">Email </label>
        <small><?php echo form_error('email'); ?></small>
        </div>
        <div class="form-group form-focus">
        <input type="password" name="password" class="form-control floating">
        <label class="focus-label">Password</label>
        <small><?php echo form_error('password'); ?></small>
        </div>
        <div class="form-group form-focus mb-0">
        <input type="password" name="password2" class="form-control floating">
        <label class="focus-label">Confirm Password</label>
        <small><?php echo form_error('password2'); ?></small>
         </div>
      <div class="dont-have">
      <label class="custom_check">
      <input type="checkbox" name="rem_password">
      <span class="checkmark"></span> Anda menyetujui aturan yang ada di Legia berdasarkan<a href="#">Ketentuan Pengguna, Kebijakan Privasi,</a> dan <a href="#">Kebijakan Cookie</a>.
      </label>
      </div>

                      <div class="blog-read">
                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Gabung</button>
                      </div>
      <div class="row">
      <div class="col-6 text-start">
      <a class="forgot-link" href="#">Lupa Kata Sandi ?</a>
      </div>
      <div class="col-6 text-end dont-have">Sudah punya akun? <a href="<?php base_url() ?>masuk">Masuk</a></div>
      </div>
      <?php echo form_close(); ?>
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
