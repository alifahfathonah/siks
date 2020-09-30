<?php
/**
 * 1.3.4 menampilkan detail siswa sesuai NIS/Nama Siswa yang dipilih oleh Operator
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
                <div class="table-responsive-sm">
                    <table class="table table-sm">
                        <tr>
                            <td width="200">NIS</td>
                            <td width="30">:</td>
                            <td><?php echo $t004_siswa->nis; ?></td>
                        </tr>
                        <tr>
                            <td width="200">Nama Siswa</td>
                            <td width="30">:</td>
                            <td><?php echo $t004_siswa->namasiswa; ?></td>
                        </tr>
                        <tr>
                            <td width="200">Kelas</td>
                            <td width="30">:</td>
                            <td><?php echo $t004_siswa->kelas; ?></td>
                        </tr>
                        <tr>
                            <td width="200">Tahun Ajaran</td>
                            <td width="30">:</td>
                            <td><?php echo $t004_siswa->tahunajaran; ?></td>
                        </tr>
                        <tr>
                            <td width="200"></td>
                            <td width="30"></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- <a href="#" class="btn btn-primary">Total Record : <?php //echo $total_rows ?></a> -->
                        <?php //echo anchor(site_url('t101_spp/list'), 'Back', 'class="btn btn-primary"'); ?>
                        <form action="<?php echo site_url('t101_spp/list/'.$title.'/'.$urlDetail); ?>" class="form-inline" method="post">
                            <input type="hidden" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Back</button>
                            </span>
                        </form>
                    </div>
                    <!-- <div class="col-md-6 text-right">
                        <?php //echo $pagination ?>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col">
                        <p>&nbsp;</p>
                    </div>
                </div>
                <div class="page-header">
                    <h5>Daftar Tagihan SPP Siswa</h5>
                </div>
                <table class="table-sm table-bordered table-sm" style="margin-bottom: 10px">
                    <tr>
                        <th>No</th>
                        <!-- <th>Idsiswa</th> -->
                        <th>Bulan</th>
                        <th>Jatuh Tempo</th>
                        <th>No. Bayar</th>
                        <th>Tgl. Bayar</th>
                        <th>SPP</th>
                        <th>Catering</th>
                        <th>Worksheet</th>
                        <th>Keterangan</th>
                        <th>Bayar</th>
                    </tr>
                    <?php
                    $start = 0;
                    foreach ($t101_spp as $row) { ?>
                    <tr>
                        <td width="80px"><?php echo ++$start ?></td>
                        <!-- <td><?php //echo $t101_spp->idsiswa ?></td> -->
                        <td><?php echo $row->bulan ?></td>
                        <td><?php echo date_format(date_create($row->jatuhtempo), "d-m-Y") ?></td>
                        <td><?php echo $row->nobayar ?></td>
                        <td><?php echo ($row->nobayar == "" ? "" : date_format(date_create($row->tglbayar), "d-m-Y")) ?></td>
                        <td align="right"><?php echo number_format($row->byrspp) ?></td>
                        <td align="right"><?php echo number_format($row->byrcatering) ?></td>
                        <td align="right"><?php echo number_format($row->byrworksheet) ?></td>
                        <td><?php echo $row->ket ?></td>
                        <td align="left">
                            <?php if ($row->nobayar == '') { ?>
                            <a href='<?php echo site_url('t101_spp/bayar/'.$row->idspp.'/'.$row->idsiswa.'/'.$title.'/'.$urlDetail.'/'.$q); ?>' class='btn btn-warning btn-sm'>Bayar</a>
                            <!-- |
                            <a href='<?php //echo site_url('t101_spp/update/'.$t101_spp->idspp."/".$q); ?>' class='btn btn-warning btn-sm'>Update</a> -->
                            <?php } else { ?>
                            <a href='<?php echo site_url('t101_spp/cetak/'.$row->idspp.'/'.$row->idsiswa.'/'.$title); ?>' class='btn btn-info btn-sm' target='blank'>Cetak</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="row">
                    <div class="col-md-6">
                        <!-- <a href="#" class="btn btn-primary">Total Record : <?php //echo $total_rows ?></a> -->
                        <?php echo anchor(site_url('t101_spp/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                        <?php echo anchor(site_url('t101_spp/word'), 'Word', 'class="btn btn-primary"'); ?>
                    </div>
                    <!-- <div class="col-md-6 text-right">
                        <?php //echo $pagination ?>
                    </div> -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $this->load->view("template/foot"); ?>
<?php $this->load->view("template/js"); ?>
