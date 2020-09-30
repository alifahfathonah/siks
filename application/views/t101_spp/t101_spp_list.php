<?php
/**
 * 1.2.3. menampilkan daftar siswa sesuai NIS/Nama Siswa yang diinput oleh Operator
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

                <table class="table table-bordered" style="margin-bottom: 10px">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Tahun Ajaran</th>
                        <th>SPP</th>
                        <th>Catering</th>
                        <th>Worksheet</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $start = 0;
                    foreach ($t101_spp as $t101_spp_row) {
                    ?>
                    <tr>
                        <td><?php echo ++$start ?></td>
                        <td><?php echo $t101_spp_row->nis ?></td>
                        <td><?php echo $t101_spp_row->namasiswa ?></td>
                        <td><?php echo $t101_spp_row->kelas ?></td>
                        <td><?php echo $t101_spp_row->tahunajaran ?></td>
                        <td><?php echo $t101_spp_row->byrspp ?></td>
                        <td><?php echo $t101_spp_row->byrcatering ?></td>
                        <td><?php echo $t101_spp_row->byrworksheet ?></td>
                        <td style="text-align:left" >
                            <?php
                            // echo anchor(site_url('t101_spp/update_2/'.$t101_spp->idspp),'Update');
                            // echo anchor(site_url('t101_spp/update_2/'.$t101_spp_row->idsiswa),'Proses');
                            echo anchor(site_url('t101_spp/'.$urlDetail.'/'.$t101_spp_row->idsiswa.'/'.$title.'/'.$urlDetail.'/'.$q), 'Proses');
                            ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo anchor(site_url('t101_spp/search/'.$title.'/'.$urlDetail), 'Back', 'class="btn btn-primary"'); ?>
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
