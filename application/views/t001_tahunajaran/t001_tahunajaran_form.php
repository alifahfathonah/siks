<?php $this->load->view("template/head", $head); ?>
<?php $this->load->view("template/topbar"); ?>
<?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active"><?php echo $title; ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <!-- container fluid -->
        <div class="container-fluid">

          <form action="<?php echo $action; ?>" method="post">
            <div class="form-group">
              <label for="varchar">Tahun Ajaran <?php echo form_error('tahunajaran') ?></label>
              <input type="text" class="form-control" name="tahunajaran" id="tahunajaran" placeholder="Tahun Ajaran" value="<?php echo $tahunajaran; ?>" />
            </div>
            <div class="form-group">
              <label for="varchar">Saldo Awal <?php echo form_error('saldoawal') ?></label>
              <input type="text" class="form-control" name="saldoawal" id="saldoawal" placeholder="Saldo Awal" value="<?php echo $saldoawal; ?>" />
            </div>
      	    <input type="hidden" name="idtahunajaran" value="<?php echo $idtahunajaran; ?>" />
      	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
      	    <a href="<?php echo site_url('t001_tahunajaran') ?>" class="btn btn-default">Cancel</a>
          </form>

        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view("template/foot"); ?>
    <?php $this->load->view("template/js"); ?>
