<header class="header header-four">
<nav class="navbar navbar-expand-lg header-nav">
<div class="container">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="<?php echo base_url()?>" class="navbar-brand logo">
<img style="width:200px" src="<?php echo base_url()?>assets/frontends/legia.png" class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="<?php echo base_url()?>" class="menu-logo">
<img src="<?php echo base_url()?>assets/frontends/legia.png" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
  <li>
  <a href="<?php echo base_url()?>">Beranda</a>
  </li>
  <li>
  <a href="#" target="_blank">Tentang Kami</a>
  </li>
  <li>
  <a href="#" target="_blank">Layanan</a>
  </li>
  <li>
  <a href="#" target="_blank">Bantuan</a>
  </li>
  <li>
  <a href="#" target="_blank">Artikel</a>
  </li>
  <li class="active has-submenu">
    <a href="index.html" class="btn-bahasa-mobile">Bahasa <i class="fas fa-chevron-down"></i></a>
    <ul class="submenu">
      <li class="active"><a href="#">ID</a></li>
      <li><a href="#">EN</a></li>
    </ul>
  </li>

</ul>
</div>
<ul class="nav header-navbar-rht">
  <div class="chat-cont-left-header">
    <div class="chat-header">
      <form class="chat-search">
        <div class="input-group">
          <div class="input-group-prepend">
          <i class="fas fa-search icon-circle"></i>
           </div>
          <input type="text" class="form-control rounded-pill" placeholder="Search">
        </div>
      </form>
    </div>
  </div>
</ul>
<ul class="nav header-navbar-rht text-center main-nav hide-mobile">
  <?php if($this->session->level=='4' OR $this->session->level=='5'){ ?>
  <li><a href="<?php echo base_url()?>logout" class="log-btn btn-login-custom"><i class="fas fa-lock"></i> Logout</a></li>
  <?php }else{ ?>
  <li><a href="<?php echo base_url()?>masuk" class="log-btn btn-login-custom"><i class="fas fa-lock"></i> Login</a></li>
  <?php } ?>
  <li class="has-submenu btn-bahasa">
    <a href="#" class="btn login-btn">Bahasa <i class="fas fa-chevron-down"></i></a>
    <ul class="submenu custom-width-bahasa">
      <li><a href="#"><img class="img-fluid" src="<?php echo base_url()?>assets/frontends/img/flags/indonesia-flag.svg" alt="Post Image">ID</a></li>
      <li><a href="#"><img class="img-fluid" src="<?php echo base_url()?>assets/frontends/img/flags/united-kingdom-flag-uk.svg" alt="Post Image">EN</a></li>
    </ul>
  </li>
</ul>

</div>
</nav>
</header>
