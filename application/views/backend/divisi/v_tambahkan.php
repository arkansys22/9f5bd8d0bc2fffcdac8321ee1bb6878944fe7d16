
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Divisi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/divisi">Divisi</a></li>
            <li class="breadcrumb-item active">Tambah divisi</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 col-xs-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->

            <?php $users= $this->Crud_m->view_where('user', array('email'=> $this->session->email))->row_array(); ?>
            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('paneladmin/divisi_tambahkan',$attributes); ?>

            <input type="hidden" name="post_oleh" value="<?php echo $users['username'];?>">
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Kode Divisi</label>
                        <input type="text" class="form-control" name="divisi_meta_desk" placeholder="Kode divisi">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Nama Divisi</label>
                        <input type="text" class="form-control" name="divisi_judul" placeholder="Nama Divisi">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="textarea"  name ="divisi_desk" style="width: 100%; height: 100px;"></textarea>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" title="Add Products"><i class="fas fa-file-upload"></i> Tambahkan</button>
                <a class="btn btn-outline-info" title="Cancel" href="<?php echo base_url()?>paneladmin/divisi"><i class="fab fa-creative-commons-sa"></i> Batal</a>

              </div>
                <?php echo form_close(); ?>


          </div>


        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

</div>
  <!-- /.content-wrapper -->


<?php $this->load->view('backend/bottom')?>
