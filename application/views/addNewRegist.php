<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Daftar Panitia
        <small>Tambah / Ubah Thread</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Masukkan Data Diri</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addRegist" action="<?php echo base_url() ?>viewDetailNow/<?php echo $this->uri->segment('2') ?>" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="role">Nama Event</label>
                                            <?php
                                            if(!empty($event))
                                            {
                                                foreach ($event as $ev)
                                                {
                                                    ?>
                                                    <a value="<?php echo $ev->id_event ?>"><?php echo $ev->nama ?></a>
                                                    <?php
                                                }
                                            }
                                            ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">NIM</label>
                                        <input type="text" class="form-control required" id="nim" name="nim" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Nama</label>
                                        <input type="text" class="form-control required" id="nama" name="nama" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Telepon</label>
                                        <input type="text" class="form-control required" id="telepon" name="telepon" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="role">Prodi</label>
                                        <select class="form-control required" id="prodi" name="prodi">
                                            <option value="0">Pilih Prodi</option>
                                                <option value="1">KOMSI</option>
                                                <option value="2">METINS</option>
                                                <option value="3">DTE</option>
                                                <option value="4">DTJ</option>
                                                <option value="5">ELINS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Angkatan</label>
                                        <input type="text" class="form-control required" id="angkatan" name="angkatan" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Kelas</label>
                                        <input type="radio" class="form-control required" id="kelas" name="kelas" maxlength="128" value="A">A
                                        <input type="radio" class="form-control required" id="kelas" name="kelas" maxlength="128" value="B">B
                                        <input type="radio" class="form-control required" id="kelas" name="kelas" maxlength="128" value="C">C
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Jenis Kelamin</label>
                                        <input type="radio" class="form-control required" id="jenkel" name="jenkel" maxlength="128" value="L">Laki-laki
                                        <input type="radio" class="form-control required" id="jenkel" name="jenkel" maxlength="128" value="P">Perempuan
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">CV</label>
                                        <input type="file" class="form-control required" id="cv" name="cv" maxlength="128">
                                    </div>
                                </div>   
                            </div>
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">KRS</label>
                                        <input type="file" class="form-control required" id="krs" name="krs" maxlength="128">
                                    </div>
                                </div>   
                            </div>
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">SIE</label>
                                        <?php
                                            if(!empty($sie))
                                            {
                                                foreach ($sie as $si)
                                                {
                                                    ?>
                                                <input type="checkbox" class="form-control required" id="sie" name="sie[]" value="<?php echo $si->id_sie ?>"><?php echo $si->nama."=>".$si->id_sie ?>
                                                <?php
                                                }
                                            }
                                            ?>
                                    </div>
                                </div>   
                            </div>

                            
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script>
    $(function () {
        $('#datepicker').datepicker();
        $('#datepicker2').datepicker();
        
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        })
        
        //Date picker
        $('#datepicker2').datepicker({
          autoclose: true
        })
    })
</script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>