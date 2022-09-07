
<?php $this->load->view('backend/top')?>
<?php $this->load->view('backend/menu')?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Portfolio</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url()?>paneladmin/products">Daftar Portfolio</a></li>
            <li class="breadcrumb-item active">Tambah Portfolio</li>
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


            <!-- form start -->
            <?php $attributes = array('class'=>'form-horizontal','role'=>'form');
            echo form_open_multipart('paneladmin/products_tambahkan',$attributes); ?>
              <div class="card-body">
                <div class="form-group">

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="products_judul" placeholder="Judul Konten">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-12">
                      <select name='products_cat_id' class="form-control select2" style="width: 100%;">
                        <?php foreach ($records as $row) {
                          if ($rows['products_cat_id'] == $row['products_cat_id']){
                            echo"<option selected='selected' value='$row[products_cat_id]'>$row[products_cat_judul]</option>";
                          }else{
                            echo"<option value='$row[products_cat_id]'>$row[products_cat_judul]</option>";
                       }
                     } ?>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="products_tahun" placeholder="Tahun Pekerjaan">
                  </div>
                </div>
              </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="textarea"  name ="products_desk" style="width: 100%; height: 100px;"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta Deskripsi (SEO)</label>
                        <input type="text" class="form-control" name="products_meta_desk" placeholder="Meta description">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kata Kunci</label>
                        <input type="text" class="form-control tags" id="blogs_keyword" value="" name="products_keyword"  data-role="tagsinput"/>
                          <?php foreach ($tag as $tag){    } ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Gambar 1</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Tambah Gambar</label>
                          <small> Dimensi foto Landscape 1920px x 1080px & maksimal ukuran file 1 Mb </small>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Gambar 2</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar2" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Tambah Gambar</label>
                          <small> Dimensi foto landscape/portrait 1920px x 1080px & maksimal ukuran file 1 Mb </small>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Gambar 3</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar3" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Tambah Gambar</label>
                          <small> Dimensi foto landscape/portrait 1920px x 1080px & maksimal ukuran file 1 Mb </small>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Gambar 4</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar4" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Tambah Gambar</label>
                          <small> Dimensi foto landscape/portrait 1920px x 1080px & maksimal ukuran file 1 Mb </small>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Gambar 5</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar5" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Tambah Gambar</label>
                          <small> Dimensi foto landscape/portrait 1920px x 1080px & maksimal ukuran file 1 Mb </small>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Gambar 6</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="gambar6" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Tambah Gambar</label>
                          <small> Dimensi foto landscape/portrait 1920px x 1080px & maksimal ukuran file 1 Mb </small>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name ="submit" class="btn btn-success" ><i class="fas fa-file-upload"></i> Simpan</button>
                <a class="btn btn-outline-info"  href="<?php echo base_url()?>paneladmin/products"><i class="fab fa-creative-commons-sa"></i> Batal</a>

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
