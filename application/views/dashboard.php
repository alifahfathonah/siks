<?php $this->load->view("template/head", $head); ?> <?php //echo "<pre>"; ?><?php //print_r($title); ?><?php //echo "</pre>"; ?>
<?php $this->load->view("template/topbar"); ?>
<?php $this->load->view("template/sidebar"); ?>

<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->

    <div class="content-header"><!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $title; ?><?php //echo $this->session->flashdata("tahunajaran"); ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=".">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <section class="content"><!-- Main content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info"><!-- small box -->
                        <div class="inner">
                            <h3><?php echo 'Rp. ' . number_format($byr->byrspp, 0, ',', '.'); ?></h3>
                            <p>SPP</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div><!-- ./small box -->
                </div><!-- ./col -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success"><!-- small box -->
                        <div class="inner">
                            <h3><?php echo 'Rp. ' . number_format($byr->byrcatering, 0, ',', '.'); ?></h3>
                            <p>Catering</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div><!-- ./small box -->
                </div><!-- ./col -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning"><!-- small box -->
                        <div class="inner">
                            <h3><?php echo 'Rp. ' . number_format($byr->byrworksheet, 0, ',', '.'); ?></h3>
                            <p>Worksheet</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div><!-- ./small box -->
                </div><!-- ./col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

<?php $this->load->view("template/foot"); ?>
<?php $this->load->view("template/js"); ?>
