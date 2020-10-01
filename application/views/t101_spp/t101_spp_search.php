<?php
/**
 * 1.1.2. user: klik menu Transaksi -> Pembayaran SPP
 * 2.1.2. menampilkan form search NIS/Nama Siswa
 */
?>
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
                <div class="row" style="margin-bottom: 10px">
                    <div class="col">
                        <form action="<?php echo site_url('t101_spp/listSiswa/'.$title.'/'.$urlDetail); ?>" class="form-inline" method="post">
                            <div class="input-group">
                                <label class="control-label" for="nis">NIS / Nama Siswa : &nbsp;</label>
                                <input type="text" class="form-control" name="q" value="">&nbsp;
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div style="margin-top: 8px" id="message">
                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $this->load->view("template/foot"); ?>
<?php $this->load->view("template/js"); ?>
