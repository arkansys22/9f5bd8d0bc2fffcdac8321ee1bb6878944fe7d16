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


<section class="section home-banner row-middle home-four">

  <img src="<?php echo base_url()?>assets/frontends/img/legia2.png" class="img-fluid" alt="Legia">
  <div class="container absolute">
    <div class="row align-items-center">
      <div class="col-md-10 col-lg-8">
        <div class="market-place d-flex align-items-center">
          <div class="banner-content aos" data-aos="fade-up">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section feature feature-four">
<div class="container">
<div class="row justify-content-center">

<div class="col-xl-4 col-lg-6 col-md-6 d-flex">
<div class="feature-item freelance-count aos" data-aos="fade-up">
<div class="row">
<div class="col">
<div class="feature-content">
<p>Mudah</p>
<h3>Digunakan</h3>
</div>
</div>
<div class="col">
<div class="feature-icon">
<img src="<?php echo base_url()?>assets/frontends/img/icon/feature-icon-04.png" class="img-fluid" alt="">
</div>
</div>
</div>
</div>
</div>


<div class="col-xl-4 col-lg-6 col-md-6 d-flex">
<div class="feature-item aos" data-aos="fade-up">
<div class="row">
<div class="col">
<div class="feature-content">
<p>Jaminan Data</p>
<h3>Aman</h3>
</div>
</div>
<div class="col ">
<div class="feature-icon">
<img src="<?php echo base_url()?>assets/frontends/img/icon/feature-icon-04.svg" class="img-fluid" alt="">
</div>
</div>
</div>
</div>
</div>


<div class="col-xl-4 col-lg-6 col-md-6 d-flex">
<div class="feature-item comp-project aos" data-aos="fade-up">
<div class="row">
<div class="col">
<div class="feature-content">
<p>Lembaga</p>
<h3>Terpercaya</h3>
</div>
</div>
<div class="col ">
<div class="feature-icon">
<img src="<?php echo base_url()?>assets/frontends/img/icon/feature-icon-05.svg" class="img-fluid" alt="">
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</section>

<section class="section most-hired-four">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 d-flex">
<div class="hired-group-four aos" data-aos="fade-up">
<h2>Konsultasi Online</h2>
<div class="row">
<div class="col-lg-6">
<div class="perfect-four">
<p>Get the perfect Developed project for your budget from our creative community.</p>
<div class="more-learn">
<a href="#" class="btn btn-primary">Konsultasi Sekarang</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="img-perfect">
<img src="<?php echo base_url()?>assets/frontends/img/project-04.png" alt="">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 d-flex">
<div class="hired-group-four want-to-work aos" data-aos="fade-up">
<h2>Layanan Hukum</h2>
<div class="row">
<div class="col-lg-6">
<div class="perfect-four">
<p>Get the perfect Developed project for your budget from our creative community.</p>
<div class="more-learn">
<a href="developer.html" class="btn btn-primary">Konsultasi Sekarang</a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="img-perfect">
<img src="<?php echo base_url()?>assets/frontends/img/project-05.png" alt="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>





 <section class="section projects projects-two projects-four">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 mx-auto">
<ul class="dot-head aos" data-aos="fade-up">

</ul>
<div class="section-header section-header-two text-left aos" data-aos="fade-up">
<h2 class="header-title">Layanan Unggulan</h2>
<div class="browse-all d-flex align-items-center">
<!-- <a href="project.html" class="btn btn-primary">Browse All Projects <i class="fas fa-angle-right"></i></a> -->
</div>
</div>
<div class="section-text aos" data-aos="fade-up">

</div>
</div>
</div>
<div class="row">


    <?php foreach ($posts as $post) {  ?>
      <?php $services = $this->Panel_m->view_where('services',array('services_status'=>'publish','products_cat_id'=>$post->products_cat_id))->num_rows(); ?>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="project-item aos" data-aos="fade-up">
        <div class="project-img">
        <a href="<?php echo base_url()?>layanan/<?php echo $post->products_cat_judul_seo ?>">
          <?php if(empty($post->products_cat_gambar)) { ?>
            <img src="<?php echo base_url()?>bahan/foto_products/noimage.jpg" alt="" class="img-fluid">
          <?php }else{ ?>
            <img src="<?php echo base_url()?>bahan/foto_products/<?php echo $post->products_cat_gambar ?>" alt="" class="img-fluid">
          <?php } ?>
        </a>
        </div>
        <div class="d-flex justify-content-between align-items-center">
        <div class="develope-group">
        <div class="inspired-group d-flex">
        <span style="font-size:18px; text-transform:uppercase"><a href="<?php echo base_url()?>layanan/<?php echo $post->products_cat_judul_seo ?>"><?php echo $post->products_cat_judul ?></a></span>
        <div class="count-number count-pink">

        <h4><i class="fas fa-folder"></i><?=$services ?></h4>
        </div>
        </div>
        </div>
        </div>
        </div>
      </div>
    <?php } ?>


</div>
</div>
</section>


<!-- <section class="section subscribe subscribe-four">
<div class="container">
<div class="discount-four aos" data-aos="fade-up">
<div class="row align-items-center">
<div class="col-md-7">
<div class="aos" data-aos="fade-up">
<h3>Subscribe To Get Discounts, Updates & More</h3>
<p>Monthly product updates, industry news and more!</p>
<form action="#" method="POST">
<div class="form-inner">
<div class="input-group">
<input type="email" class="form-control" placeholder="Enter Email Address">
<button class="btn btn-primary sub-btn" type="submit">Search Now</button>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-5">
<div class="subscribe-image text-center aos" data-aos="fade-up">
<img src="<?php echo base_url()?>assets/frontends/img/subscribe-01.png" class="img-fluid" alt="subscribe">
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section developer developer-four">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 mx-auto">
<ul class="dot-head aos" data-aos="fade-up">
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
</ul>
<div class="section-header section-header-two text-left aos" data-aos="fade-up">
<h2 class="header-title">Most Hired <br> Developers</h2>
<div class="browse-all developer-all d-flex align-items-center">
<a href="developer-details.html" class="btn btn-primary">Browse All Developers <i class="fas fa-angle-right"></i></a>
</div>
</div>
<div class="section-text aos" data-aos="fade-up">
<p>Work with talented people at the most affordable price</p>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="freelance-widget aos" data-aos="fade-up">
<div class="freelance-content">
<div class="designation d-flex ">
<a href="developer-details.html" class="sky"><i class="fas fa-circle"></i> Web design</a>
<div class="mark-book d-flex align-items-center"><i class="far fa-bookmark"></i></div>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">George Wells <i class="fas fa-check-circle"></i></a></h3>
<div class="freelance-specific">UI/UX Designer</div>
<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.7 (32)</span>
</div>
</div>
<div class="develop-bottom d-flex">
<div class="user-four">
<a href="developer-details.html"><img src="<?php echo base_url()?>assets/frontends/img/user/avatar-1.jpg" class="img-fluid" alt="subscribe"></a>
</div>
<h5><span>$25</span> Hourly</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="freelance-widget aos" data-aos="fade-up">
<div class="freelance-content">
<div class="designation d-flex ">
<a href="developer-details.html" class="pink"><i class="fas fa-circle"></i> Angular</a>
<div class="mark-book d-flex align-items-center"><i class="far fa-bookmark"></i></div>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Timothy Smith <i class="fas fa-check-circle"></i></a></h3>
<div class="freelance-specific">PHP Developer</div>
<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.7 (32)</span>
</div>
</div>
<div class="develop-bottom d-flex">
<div class="user-four">
<a href="developer-details.html"><img src="<?php echo base_url()?>assets/frontends/img/user/avatar-2.jpg" class="img-fluid" alt="subscribe"></a>
</div>
<h5><span>$45</span> Hourly</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="freelance-widget aos" data-aos="fade-up">
<div class="freelance-content">
<div class="designation d-flex ">
<a href="developer-details.html" class="orange"><i class="fas fa-circle"></i> Node js</a>
<div class="mark-book d-flex align-items-center"><i class="far fa-bookmark"></i></div>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Janet Paden <i class="fas fa-check-circle"></i></a></h3>
<div class="freelance-specific">Graphic Designer</div>
<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Illinois, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.7 (32)</span>
</div>
</div>
<div class="develop-bottom d-flex">
<div class="user-four">
<a href="developer-details.html"><img src="<?php echo base_url()?>assets/frontends/img/user/avatar-3.jpg" class="img-fluid" alt="subscribe"></a>
</div>
<h5><span>$23</span> Hourly</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="freelance-widget aos" data-aos="fade-up">
<div class="freelance-content">
<div class="designation d-flex ">
<a href="developer-details.html" class="sky"><i class="fas fa-circle"></i> Web design</a>
<div class="mark-book d-flex align-items-center"><i class="far fa-bookmark"></i></div>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">James Douglas <i class="fas fa-check-circle"></i></a></h3>
<div class="freelance-specific">iOS Developer</div>
<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Missouri, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star "></i>
<i class="fas fa-star "></i>
<i class="fas fa-star"></i>
<span class="average-rating">3.7 (32)</span>
</div>
</div>
<div class="develop-bottom d-flex">
<div class="user-four">
<a href="developer-details.html"><img src="<?php echo base_url()?>assets/frontends/img/user/avatar-4.jpg" class="img-fluid" alt="subscribe"></a>
</div>
<h5><span>$45</span> Hourly</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="freelance-widget aos" data-aos="fade-up">
<div class="freelance-content">
<div class="designation d-flex">
<a href="developer-details.html" class="sky"><i class="fas fa-circle"></i> Web design</a>
<div class="mark-book d-flex align-items-center"><i class="far fa-bookmark"></i></div>
</div>
<div class="freelance-info">
<h3><a href="developer-details.html">Floyd Lewis <i class="fas fa-check-circle"></i></a></h3>
<div class="freelance-specific">SEO Developer</div>
<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.9 (32)</span>
</div>
</div>
<div class="develop-bottom d-flex">
<div class="user-four">
<a href="developer-details.html"><img src="<?php echo base_url()?>assets/frontends/img/user/avatar-5.jpg" class="img-fluid" alt="subscribe"></a>
</div>
<h5><span>$34</span> Hourly</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="freelance-widget aos" data-aos="fade-up">
<div class="freelance-content">
<div class="designation d-flex ">
<a href="developer-details.html" class="pink"><i class="fas fa-circle"></i> Angular</a>
<div class="mark-book d-flex align-items-center"><i class="far fa-bookmark"></i></div>
</div>
<div class="freelance-info">
<h3><a href="#">Jacqueline Daye <i class="fas fa-check-circle"></i></a></h3>
<div class="freelance-specific">SM Developer</div>
<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>California, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star "></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.2 (32)</span>
</div>
</div>
<div class="develop-bottom d-flex">
<div class="user-four">
<a href="developer-details.html"><img src="<?php echo base_url()?>assets/frontends/img/user/avatar-6.jpg" class="img-fluid" alt="subscribe"></a>
</div>
<h5><span>$45</span> Hourly</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="freelance-widget aos" data-aos="fade-up">
<div class="freelance-content">
<div class="designation d-flex ">
<a href="developer-details.html" class="orange"><i class="fas fa-circle"></i> Node js</a>
<div class="mark-book d-flex align-items-center"><i class="far fa-bookmark"></i></div>
</div>
<div class="freelance-info">
<h3><a href="#">Tony Ingle <i class="fas fa-check-circle"></i></a></h3>
<div class="freelance-specific">Business Analyst</div>
<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Missouri, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star "></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.3 (32)</span>
</div>
</div>
<div class="develop-bottom d-flex">
<div class="user-four">
<a href="developer-details.html"><img src="<?php echo base_url()?>assets/frontends/img/user/avatar-7.jpg" class="img-fluid" alt="subscribe"></a>
</div>
<h5><span>$15</span> Hourly</h5>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="freelance-widget aos" data-aos="fade-up">
<div class="freelance-content">
<div class="designation d-flex">
<a href="developer-details.html" class="sky"><i class="fas fa-circle"></i> Web design</a>
<div class="mark-book d-flex align-items-center"><i class="far fa-bookmark"></i></div>
</div>
<div class="freelance-info">
<h3><a href="#">Kathleen Kaiser <i class="fas fa-check-circle"></i></a></h3>
<div class="freelance-specific">UI/UX Designer</div>
<div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>Kansas, USA</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.7 (32)</span>
</div>
</div>
<div class="develop-bottom d-flex">
<div class="user-four">
<a href="developer-details.html"><img src="<?php echo base_url()?>assets/frontends/img/user/avatar-8.jpg" class="img-fluid" alt="subscribe"></a>
 </div>
<h5><span>$25</span> Hourly</h5>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->


<!-- <section class="review-four">
<div class="container">
<div class="row">
<div class="col-12">
<ul class="dot-head aos" data-aos="fade-up">
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
</ul>
<div class="section-header section-header-two text-left aos" data-aos="fade-up">
<h2 class="header-title">Top Review</h2>
</div>
<div class="section-text aos" data-aos="fade-up">
<p>High Performing Developers To Your</p>
</div>
</div>
</div>
<div class=" slider say-about slider-for aos " data-aos="fade-up">
<div>
<div class="testimonial-all d-flex justify-content-center">
<div class="row">
<div class="col-lg-3">
<div class="img-reviews">
<div class="review-quote">
<img src="<?php echo base_url()?>assets/frontends/img/quote-01.svg" alt="">
</div>
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-1.jpg" alt="">
</div>
</div>
<div class="col-lg-9">
<div class="testimonial-two-head ">
<h3>George Wells</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu. Elementum felis magna pretium in tincidunt. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. urpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu</p>
<div class="review-date">
<span>May 8, 2020</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div>
<div class="testimonial-all d-flex justify-content-center">
<div class="row">
<div class="col-lg-3">
<div class="img-reviews">
<div class="review-quote">
<img src="<?php echo base_url()?>assets/frontends/img/quote-01.svg" alt="">
</div>
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-2.jpg" alt="">
</div>
</div>
<div class="col-lg-9">
<div class="testimonial-two-head ">
<h3>Timothy Smith</h3>
<p>Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu. Elementum felis magna pretium in tincidunt. Suspendisse sed magna eget nibh in turpis. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu. Elementum felis magna pretium in tincidunt. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. urpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. </p>
<div class="review-date">
<span>Jun 18, 2022</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div>
<div class="testimonial-all d-flex justify-content-center">
<div class="row">
<div class="col-lg-3">
<div class="img-reviews">
<div class="review-quote">
<img src="<?php echo base_url()?>assets/frontends/img/quote-01.svg" alt="">
</div>
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-3.jpg" alt="">
</div>
</div>
<div class="col-lg-9">
<div class="testimonial-two-head ">
<h3>Janet Paden</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu. Elementum felis magna pretium in tincidunt. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. urpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu</p>
<div class="review-date">
<span>May 20, 2021</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div>
<div class="testimonial-all d-flex justify-content-center">
<div class="row">
<div class="col-lg-3">
<div class="img-reviews">
<div class="review-quote">
<img src="<?php echo base_url()?>assets/frontends/img/quote-01.svg" alt="">
</div>
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-4.jpg" alt="">
</div>
</div>
<div class="col-lg-9">
<div class="testimonial-two-head ">
<h3>James Douglas</h3>
<p>Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu. Elementum felis magna pretium in tincidunt. . Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. urpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu</p>
<div class="review-date">
<span>Jan 10, 2020</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div>
<div class="testimonial-all d-flex justify-content-center">
<div class="row">
<div class="col-lg-3">
<div class="img-reviews">
<div class="review-quote">
<img src="<?php echo base_url()?>assets/frontends/img/quote-01.svg" alt="">
</div>
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-5.jpg" alt="">
</div>
</div>
<div class="col-lg-9">
<div class="testimonial-two-head ">
<h3>Timothy Smith</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu. Elementum felis magna pretium in tincidunt. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. urpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu</p>
<div class="review-date">
<span>May 8, 2020</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=" slider client-img slider-nav aos " data-aos="fade-up">
<div class="testimonial-thumb">
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-1.jpg" alt="">
</div>
<div class="testimonial-thumb">
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-2.jpg" alt="">
</div>
<div class="testimonial-thumb">
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-3.jpg" alt="">
</div>
<div class="testimonial-thumb">
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-4.jpg" alt="">
</div>
<div class="testimonial-thumb">
<img src="<?php echo base_url()?>assets/frontends/img/user/avatar-5.jpg" alt="">
</div>
</div>
</div>
</section> -->


<section class="section news news-four">
<div class="container">
<div class="row">
<div class="col-12">
<ul class="dot-head aos" data-aos="fade-up">
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
<li><i class="fas fa-circle"></i></li>
</ul>
<div class="section-header section-header-two text-left aos" data-aos="fade-up">
<h2 class="header-title">Cari Tahu Hukum</h2>
<div class="browse-all all-browse d-flex align-items-center">
<a href="blog-details.html" class="btn btn-primary">Lebih Banyak<i class="fas fa-angle-right"></i></a>
</div>
</div>

</div>
</div>
<div>
<div class="row blog-grid-row">
<div class="col-lg-3 col-md-6 d-flex">

<div class="blog grid-blog aos" data-aos="fade-up">
<div class="blog-image">
<a href="blog-details.html"><img class="img-fluid" src="<?php echo base_url()?>assets/frontends/img/blog/blog-01.jpg" alt="Post Image"></a>
</div>
<div class="blog-content">
<div class="designation d-flex">
<a href="#" class="sky"><i class="fas fa-circle"></i> RUU</a>
</div>
<h3 class="blog-title"><a href="blog-details.html">Your next job starts right here</a></h3>
<ul class="entry-meta meta-item">
<li> Aug 23, 2021</li>
</ul>
<div class="blog-read">
<a href="blog-details.html" class="btn btn-primary">Cari Tahu <i class="fas fa-angle-right"></i></a>
</div>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 d-flex">

<div class="blog grid-blog aos" data-aos="fade-up">
<div class="blog-image">
<a href="blog-details.html"><img class="img-fluid" src="<?php echo base_url()?>assets/frontends/img/blog/blog-02.jpg" alt="Post Image"></a>
</div>
<div class="blog-content">
<div class="designation d-flex">
<a href="#" class="pink"><i class="fas fa-circle"></i>Informasi Hukum</a>
</div>
<h3 class="blog-title"><a href="blog-details.html">Your next job starts right here</a></h3>
<ul class="entry-meta meta-item">
<li> Aug 23, 2021</li>
</ul>
<div class="blog-read">
<a href="blog-details.html" class="btn btn-primary">Cari Tahu <i class="fas fa-angle-right"></i></a>
</div>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 d-flex">

<div class="blog grid-blog aos" data-aos="fade-up">
<div class="blog-image">
<a href="blog-details.html"><img class="img-fluid" src="<?php echo base_url()?>assets/frontends/img/blog/blog-03.jpg" alt="Post Image"></a>
</div>
<div class="blog-content">
<div class="designation d-flex">
<a href="#" class="orange"><i class="fas fa-circle"></i> Review Kasus</a>
</div>
<h3 class="blog-title"><a href="blog-details.html">Your next job starts right here</a></h3>
<ul class="entry-meta meta-item">
<li> Aug 23, 2021</li>
</ul>
<div class="blog-read">
<a href="blog-details.html" class="btn btn-primary">Cari Tahu <i class="fas fa-angle-right"></i></a>
</div>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6">

<div class="blog grid-blog aos" data-aos="fade-up">
<div class="blog-image">
<a href="blog-details.html"><img class="img-fluid" src="<?php echo base_url()?>assets/frontends/img/blog/blog-02.jpg" alt="Post Image"></a>
</div>
<div class="blog-content">
<div class="designation d-flex">
<a href="#" class="sky"><i class="fas fa-circle"></i> Publikasi UU Baru</a>
</div>
<h3 class="blog-title"><a href="blog-details.html">Your next job starts right here</a></h3>
<ul class="entry-meta meta-item">
<li> Aug 23, 2021</li>
</ul>
<div class="blog-read">
<a href="blog-details.html" class="btn btn-primary">Cari Tahu <i class="fas fa-angle-right"></i></a>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>


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
