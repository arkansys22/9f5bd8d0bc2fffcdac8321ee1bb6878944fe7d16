<?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>

<header class="header_wrap dark_skin hover_menu_style3">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
    	  <a class="navbar-brand" href="<?php echo base_url()?>">
            <img class="logo_dark" src="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->logo?>" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
      	<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li>
                    <a class="nav-link" href="<?php echo base_url()?>">HOME</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo base_url()?>services">PRICELIST</a>
                </li>
                <li >
                    <a class="nav-link" href="<?php echo base_url()?>gallery">GALLERY</a>
                </li>
                <li >
                    <a class="nav-link" href="<?php echo base_url()?>">BOOKING</a>
                </li>

            </ul>
        </div>

    </nav>
  </div>
</header>
