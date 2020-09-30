<?php
/**
 * 1.5.4. Admin: klik button Cetak
 */
?>
<?php
// session_start();
// if(isset($_SESSION['login'])){
// 	include "koneksi.php";

?>

<!DOCTYPE html>
<html>
    <head>
    	<title>Cetak Bukti Pembayaran</title>
    	<style type="text/css">
    		body
            {
    			font-family: Courier;
    			font-size: 10pt;
    		}

    		@media print
            {
    			.no-print
                {
    				display: none;
    			}
    		}

    		table
            {
    			border-collapse: collapse;
    		}
    	</style>
    </head>
    <body>
    	<h3 align="center">BUKTI PEMBAYARAN BIAYA SEKOLAH<br/><?php echo $this->session->userdata("namasekolah"); ?></h3>
    	<hr/>
    	<?php
        $ds = $t004_siswa;
        $d = $t101_spp;
    		$total = 0;
    		$total +=$d['byrspp']+$d['byrcatering']+$d['byrworksheet'];
    	?>
    	<table cellspacing="0" cellpadding="4">
    		<tr>
    			<td width="200">Nama Siswa</td>
    			<td width="5">:</td>
    			<td width="350"><?php echo $ds->namasiswa; ?></td>
    			<td width="200">No. Bayar</td>
    			<td width="5">:</td>
    			<td width="250"><?php echo $d['nobayar']; ?></td>
    		</tr>
    		<tr>
    			<td width="200">No Induk</td>
    			<td width="5">:</td>
    			<td width="350"><?php echo $ds->nis; ?></td>
    			<td width="200">Tanggal Bayar</td>
    			<td width="5">:</td>
    			<td width="250"><?php echo date_format(date_create($d['tglbayar']), "d-m-Y"); ?></td>
    		</tr>
    		<tr>
    			<td width="200">Kelas</td>
    			<td width="5">:</td>
    			<td width="250"><?php echo $ds->kelas; ?></td>
    			<td width="200">Periode</td>
    			<td width="5">:</td>
    			<td width="250"><?php echo $d['bulan']; ?></td>
    		</tr>
    	</table>

    	<hr/>

    	<table cellspacing="0" cellpadding="4">
    		<tr>
    			<td width="455">Item Pembayaran</td>
    			<td align="right" colspan="3">Nominal</td>
    		</tr>
    		<tr>
    			<td width="455"></td>
    			<td align="right" colspan="3"></td>
    		</tr>
    		<tr>
    			<td width="455">Biaya SPP</td>
    			<td width="0">:</td>
    			<td width="5">Rp.</td>
    			<td align="right" width="155"><?php echo number_format($d['byrspp']); ?></td>
    		</tr>
    		<tr>
    			<td width="455">Biaya Catering</td>
    			<td width="0">:</td>
    			<td width="5">Rp.</td>
    			<td align="right" width="155"><?php echo number_format($d['byrcatering']); ?></td>
    		</tr>
    		<tr>
    			<td width="455">Biaya Worksheet</td>
    			<td width="0">:</td>
    			<td width="5">Rp.</td>
    			<td align="right" width="155"><?php echo number_format($d['byrworksheet']); ?></td>
    		</tr>
    		<tr>
    			<td width="455">&nbsp;</td>
    			<td width="0">&nbsp;</td>
    			<td colspan="2"><hr/></td>
    		</tr>
    		<tr>
    			<td align="right" width="455">Total</td>
    			<td width="0">:</td>
    			<td width="5">Rp.</td>
    			<td align="right" width="155"><b><?php echo number_format($total); ?></b></td>
    		</tr>
    	</table>

    	<br><hr/>

    	<table>
    		<tr>
    			<td></td>
    			<td width="400px">
    				<p>Bojonegoro, <?php echo date('d-m-Y'); ?><br/>
    				Petugas</p>
    				<br/>
    				<br/>
    				<p>____________________</p>
    			</td>
    		</tr>
    	</table>

    	<a href="#" class="no-print" onclick="window.print();">Cetak / Print</a>
    </body>
</html>

<?php
// }
// else{
// 	header('location:login.php');
// }
?>
