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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 offset-md-2">

          <div class="empty-content text-center">
            <img src="<?php base_url() ?>assets/frontends/img/404.png" alt="logo" class="img-fluid">
            <h2>Page not <span class="bluelegia-text">found</span></h2>
            <p>Oops! Looks like you followed a bad link.</p>
            <p>If you think this is a problem with us, please tell us.</p>
            <div class="btn-item">
              <a class="btn get-btn" href="<?php base_url() ?>">GO TO HOME</a>

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