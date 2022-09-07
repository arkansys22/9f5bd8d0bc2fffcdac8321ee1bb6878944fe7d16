<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
    <meta name="title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
    <meta property="og:title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
    <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <meta name="site_url" content="<?php echo base_url()?>">
    <meta name="description" content="<?php echo $identitas->meta_deskripsi?>">
    <meta name="keywords" content="<?php echo $identitas->meta_keyword?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
    <meta name="web_author" content="arkansys.com">
    <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
    <link href='<?php echo base_url()?>' rel='canonical'/>
    <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
    <meta property="og:description" content="<?php echo $identitas->meta_deskripsi?>">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:image" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
    <meta property="og:image:url" content="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>">
    <meta property="og:type" content="article">
    <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
    <?php $this->load->view('frontend/analytics')?>
    <?php $this->load->view('frontend/css')?>


</head>

<body>
  <div class="preloader">
      <div class="loader_grid">
        <div class="loader_box loader_box1"></div>
        <div class="loader_box loader_box2"></div>
        <div class="loader_box loader_box3"></div>
        <div class="loader_box loader_box4"></div>
        <div class="loader_box loader_box5"></div>
        <div class="loader_box loader_box6"></div>
        <div class="loader_box loader_box7"></div>
        <div class="loader_box loader_box8"></div>
        <div class="loader_box loader_box9"></div>
      </div>
  </div>

    <?php $this->load->view('frontend/menu')?>
    <section class="banner_section p-0 full_screen">
        <div id="carouselExampleControls" class="banner_content_wrap carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <?php $slider = $this->Crud_m->view_where_orderings('workshop',array('workshop_status'=>'publish'),'workshop_id','DESC'); ?>
              <?php foreach ($slider as $post_slider) { ?>
                <?php if(empty($post_slider->workshop_gambar)) {
                    echo "<div class='carousel-item active background_bg overlay_bg' data-img-src='".base_url()."bahan/foto_products/noimage.jpg'>
                          </div>";
                        }else {
                    echo "
                    <div class='carousel-item $post_slider->workshop_position background_bg ' data-img-src='".base_url('./bahan/foto_workshop/'.$post_slider->workshop_gambar)."'>
                    </div>
                    ";}
                 ?>
          <?php } ?>
        </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <i class="ion-chevron-left"></i>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <i class="ion-chevron-right"></i>
      </a>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="mb-4 mb-lg-0 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                        <img src="<?php echo base_url()?>bahan/frontend/image/kttts.jpg" alt="aboutimg"/>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                    <div class="heading_s1">
                      <h1>Selamat Datang</h1>
                      <h3> di <?php echo $identitas->nama_website?></h3>
                    </div>
                    <p>
                      Kami adalah salah satu perusahaan jasa transportasi resmi yang berlokasi di Flores Nusa Tenggara Timur, kami menawarakan layanan jasa transportasi denagan area layanan NTT ( Flores, Kupang, Sumba) NTB ( Bima, Dompu, Sumbawa dan Lombok )
                    </p>
                    <p>
                      Kami melayani semua jenis kebutuhan transportasi Liburan atau Perjalanan Dinas Anda di Area Layanan Kami dengan harga terjangkau dengan armada diatas tahun 2016 Include BBM dan Driver Profesional.
                    </p>
                    <p>
                      Temukan keseruan liburan anda di Komodo & Flores dengan armada yang nyaman dan Driver Handal dari Komodo Transport</p>
                      <p><b>Solusinya Armada Liburan Anda</b>
                    </p>
                    <a href="https://api.whatsapp.com/send/?phone=<?php echo $identitas->whatsapp ?>&text=Hallo+Komodo+Transport.." class="btn btn-outline-default">HUBUNGI KAMI SEKARANG</a>
                </div>
            </div>
        </div>
    </section>
    <section class="gray_bg small_pb">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="heading_s1 text-center">
                    	<h2>KENAPA MEMILIH KAMI?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
                	<div class="clearfix small_divider"></div>
                </div>
            </div>
        	<div class="row justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            	<div class="col-md-3 col-sm-6 mb-lg-5 mb-4 text-center">
                	<div class="icon_box icon_box_style_5">
                        <div class="box_icon mb-3">
                            <i class="ti-money"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Harga Terbaik</h5>
                            <p>
                              Dapatkan harga terbaik untuk semua layanan transportasi dan tour yang kami tawarkan sesuai kualitas layanan kami
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-lg-5 mb-4 text-center">
                	<div class="icon_box icon_box_style_5">
                        <div class="box_icon mb-3">
                            <i class="ti-medall"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Legalitas Resmi</h5>
                            <p>
                            Untuk ketenangan anda, yakinkan diri anda untuk menggunakan perusahaan dengan legalitas resmi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-lg-5 mb-4 text-center">
                	<div class="icon_box icon_box_style_5">
                        <div class="box_icon mb-3">
                            <i class="ti-comments-smiley"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>CS Support</h5>
                            <p>
                              Dapatkan informasi kebutuhan transpotasi anda dengan cepat, dipandu CS yang selalu stanby
                            </p>
                          </div>
                     </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-lg-5 mb-4 text-center">
                	<div class="icon_box icon_box_style_5">
                        <div class="box_icon mb-3">
                            <i class="ti-shield"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Armada Terawat</h5>
                            <p>
                              Lebih nyaman dengan jaminan kondisi armada terawat ditemani driver profesional dan pengalaman
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    	<div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s1 text-center">
                    <h2>Transport Fleet</h2>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="clearfix small_divider"></div>
              </div>
          </div>
            <div class="row">
                <div class="col-md-12 mb-md-5 mb-4">
                  <?php $kategori_produk = $this->Crud_m->view_where_orderings('products_category',array('products_cat_status'=>'publish'),'products_cat_id','ASC'); ?>
                      <?php foreach ($kategori_produk as $post) {  ?>
                        <div class="heading_s3">
                        <h5><?php echo $post->products_cat_judul?></h5>
                        </div>
                        <ul class="list_none carousel_slide4 owl-carousel owl-theme" data-margin="15" data-dots="false" data-autoplay="true" data-nav="true" data-loop="true" data-autoplay-timeout="2000">
                            <?php $services = $this->Crud_m->view_where_orderings('services',array('services_status'=>'publish','products_cat_id'=>$post->products_cat_id),'services_id','ASC'); ?>
                            <?php foreach ($services as $post_services) {  ?>
                            <li>
                                <a href="<?php echo base_url() ?>services/<?php echo $post_services->services_judul_seo?>">
                                  <?php if(empty($post_services->services_gambar)) {
                                      echo "<img src='".base_url()."bahan/foto_products/noimage.jpg'>";
                                    }else {
                                      echo " <img src='".base_url('./bahan/foto_products/'.$post_services->services_gambar)."'>

                                      ";}
                                   ?>
                                  <h6><?php echo $post_services->services_judul_konten?> | Rp<?php echo number_format($post_services->services_harga,0,',','.')?></h6>
                                </a>
                            </li>
                          <?php } ?>
                        </ul>
                      <?php } ?>


                </div>
            </div>
        </div>
    </section>
    <section class="small_pt small_pb">
    	<div class="container-fluid">
        	<div class="row">
            	<div class="col-12 p-0">
                    <div class="contact_map animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <iframe src="<?php echo $identitas->maps?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gray_bg">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="heading_s4 text-center">
                    	<h2>Our Journey</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-12">
                	<div class="clearfix small_divider"></div>
                </div>
            </div>
            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            	<div class="col-md-12">
                	<div class="blog_wrap carousel_slide3 owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-autoplay-timeout="2000">
                    <?php $blogs = $this->Crud_m->view_where_orderings('blogs',array('blogs_status'=>'publish'),'blogs_id','ASC'); ?>
                        <?php foreach ($blogs as $post_blog) {
                            $tgl_posting = $this->mylibrary->tgl_indo($post_blog->blogs_post_tanggal);

                          ?>

                          <div class="items">
                            <div class="blog_post blog_style1">
                                <div class="blog_img">
                                    <a href="<?php echo base_url() ?>blogs/<?php echo $post_blog->blogs_judul_seo?>">
                                      <?php if(empty($post_blog->blogs_gambar)) {
                                          echo "<img src='".base_url()."bahan/foto_products/noimage.jpg'>";
                                        }else {
                                          echo " <img src='".base_url('./bahan/foto_blogs/'.$post_blog->blogs_gambar)."'>

                                          ";}
                                       ?>
                                    </a>
                                </div>
                                <div class="blog_content bg-white">
                                    <div class="blog_text">
                                        <h6 class="blog_title"><a href="<?php echo base_url() ?>blogs/<?php echo $post_blog->blogs_judul_seo?>"><?php echo $post_blog->blogs_judul?></a></h6>
                                        <ul class="list_none blog_meta">
                                            <li><i class="ion-calendar"></i> <?php echo $tgl_posting?></li>
                                        </ul>
                                        <a href="<?php echo base_url() ?>blogs/<?php echo $post_blog->blogs_judul_seo?>" class="text-capitalize">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="small_pt small_pb">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12 animation" data-animation="fadeInDown" data-animation-delay="0.1s">
                	<div class="cl_logo_slider owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false" data-autoplay-timeout="2000">
                    <?php $testimonial = $this->Crud_m->view_where_orderings('testimonial',array('testimonial_status'=>'publish'),'testimonial_id','ASC'); ?>
                        <?php foreach ($testimonial as $post_testimonial) { ?>
                        <div class="item">
                        	<a href="#">
                            <?php if(empty($post_blog->blogs_gambar)) {
                                echo "<img src='".base_url()."bahan/foto_products/noimage.jpg'>";
                              }else {
                                echo " <img src='".base_url('./bahan/foto_testimonial/'.$post_testimonial->testimonial_gambar)."'>

                                ";}
                             ?>
                           </a>
                        </div>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="pattern_top footer_dark">
    	<div class="top_footer" style="background-color:#2b78bd;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    	<div class="footer_logo">
                        	<a href="<?php echo base_url()?>"><img alt="logo" src="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>"></a>
                        </div>
                        <p><?php echo $identitas->slogan?></p>
                        <ul class="contact_info contact_info_light list_none">
                            <li>
                                <span class="ti-location-pin"></span>
                                <address><?php echo $identitas->alamat?></address>
                            </li>
                            <li>
                                <span class="ti-email"></span>
                                <a href="mailto:<?php echo $identitas->email?>"><?php echo $identitas->email?></a>
                            </li>
                            <li>
                                <span class="ti-mobile"></span>
                                <p><?php echo $identitas->no_telp?></p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    	<h6 class="widget_title">TRENDING JOURNEY</h6>
                        <ul class="recent_post border_bottom_dash list_none">
                          <?php $blogs = $this->Crud_m->view_where_orderings_limit('blogs',array('blogs_status'=>'publish'),'blogs_dibaca','desc','3','1'); ?>
                              <?php foreach ($blogs as $post_blog) {
                                  $tgl_posting = $this->mylibrary->tgl_indo($post_blog->blogs_post_tanggal);
                                ?>
                              	<li>
                                  	<div class="post_footer">
                                      	<div class="post_img">
                                          	<a href="#">
                                              <?php if(empty($post_blog->blogs_gambar)) {
                                                  echo "<img src='".base_url()."bahan/foto_products/noimage.jpg'>";
                                                }else {
                                                  echo " <img src='".base_url('./bahan/foto_blogs/'.$post_blog->blogs_gambar)."'>

                                                  ";}
                                               ?>
                                             </a>
                                          </div>
                                          <div class="post_content">
                                          	<h6><a href="<?php echo base_url() ?>blogs/<?php echo $post_blog->blogs_judul_seo?>"><?php echo $post_blog->blogs_judul?></a></h6>
                                              <p class="small m-0"><?php echo $post_blog->blogs_dibaca?> views</p>
                                          </div>
                                      </div>
                                  </li>
                              <?php } ?>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <h6 class="widget_title">OUR SOSIAL MEDIA</h6>
                        <ul class="list_none footer_social">
                          <li><a href="https://api.whatsapp.com/send/?phone=<?php echo $identitas->whatsapp ?>&text=Hallo+Komodo+Transport.."><i class="ion-social-whatsapp-outline"></i></a></li>
                        	<li><a href="<?php echo $identitas->facebook?>"><i class="ion-social-facebook"></i></a></li>
                          <li><a href="<?php echo $identitas->instagram?>"><i class="ion-social-instagram-outline"></i></a></li>
                          <li><a href="<?php echo $identitas->youtube?>"><i class="ion-social-youtube-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer bg-dark">
        	<div class="container">
            	<div class="row align-items-center">
                	<div class="col-md-6">
                    	<p class="copyright m-md-0 text-center text-md-left">&copy; 2022 All Rights Reserved by Komodo Transport.</p>
                    </div>
                    <div class="col-md-6">
                    	<ul class="list_none footer_link text-center text-md-right">
                        	<li><a href="#">Web development by Dhawy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>



  <?php $this->load->view('frontend/js')?>

</body>
</html>
