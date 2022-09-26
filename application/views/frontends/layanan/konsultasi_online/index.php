<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view('frontends/layanan/konsultasi_online/head')?>
<!-- head end -->
<body  class="home-page body-four">

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
<li class="breadcrumb-item"><a href="#"><img src="<?php echo base_url()?>assets/frontends/img/home-icon.svg" alt="Post Author"> Beranda</a></li>
<li class="breadcrumb-item" aria-current="page">Konsultasi Online</li>
<li class="breadcrumb-item" aria-current="page">Layanan <?php echo $posts->products_cat_judul ?></li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container">
<div class="row">
<div class="col-12">
<div class="my-projects-view favourite-group">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header d-flex">
<h5 class="card-title">Layanan <?php echo $posts->products_cat_judul ?></h5>

</div>
<div class="freelance-box book-mark bookmark-projects">
<div class="row">
<div class="col-md-12 col-lg-12 col-xl-12">
<div class="relavance-result d-flex align-items-center">
<div class="relavance-rate d-flex justify-content-sm-end">
<!-- <div class="sort-by">
<label>Sort By: </label>
<select class="custom-select form-select">
<option>Relevance</option>
<option>Rating</option>
<option>Popular</option>
<option>Latest</option>
<option>Free</option>
</select>
</div> -->
</div>
</div>
</div>

<?php $services = $this->Crud_m->view_where_orderings('services',array('services_status'=>'publish','products_cat_id'=>$posts->products_cat_id),'services_id','ASC'); ?>
  <?php foreach ($services as $post) {  ?>
    <div class="col-xs-2 col-sm-3 col-xl-3">
      <div class="freelance-widget widget-author">
        <div class="freelance-content">

          <div class="author-heading">
          <div class="profile-img">
          <a href="<?php echo base_url() ?>layanan/layanan_detail/detail">
          <?php if(empty($post->services_gambar)) { ?>
          <img src="<?php echo base_url()?>assets/frontends/img/company/img-2.png" alt="author">
        <?php }else{ ?>
          <img src="<?php echo base_url()?>bahan/foto_products/<?php echo $post->services_gambar?>" alt="author">
        <?php } ?>
        
          </a>
          </div>
          <div class="profile-name">
          <div class="author-location"><a href="<?php echo base_url() ?>layanan/layanan_detail/detail"><?php echo $post->services_judul?></a></div>
          </div>
          <div class="freelancers-price"></div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>


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

<script src="<?php echo base_url()?>assets/frontends/js/slick.js"></script>

<script src="<?php echo base_url()?>assets/frontends/js/script.js"></script>
</body>

</html>
