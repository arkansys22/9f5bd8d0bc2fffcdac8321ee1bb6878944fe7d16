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
                  <hr>
                  <h3>Silahkan Masuk</h3>
                  <?php echo $this->session->flashdata('user_registered'); ?>
                  <?php echo $this->session->flashdata('login_failed'); ?>
                  <?php echo $this->session->flashdata('user_loggedout'); ?>
                </div>
                <?php echo form_open('masuk'); ?>
                  <div class="form-group form-focus">
                    <input type="email" name="email" class="form-control floating">
                    <label class="focus-label">Email</label>
                  </div>
                  <div class="form-group form-focus" id="show_hide_password" >
                    <input type="password" name="password" class="form-control floating">
                    <label class="focus-label">Kata Sandi</label>
                  </div>
                  <div class="blog-read">
                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                  </div>
                  </form>
                <?php echo form_close(); ?>
                  <div class="blog-read">
                    <a class="btn btn-red btn-block btn-lg login-btn" href="<?php echo base_url()?>user/login_google">Login Google</a>
                  </div>

                  <div class="row">
                    <div class="col-6 text-start">
                      <a class="forgot-link" href="#">Lupa kata sandi ?</a>
                    </div>
                    <div class="col-6 text-end dont-have">Tidak punya akun? <a href="<?php echo base_url()?>daftar">Buat Akun</a></div>
                  </div>
                </form>
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
