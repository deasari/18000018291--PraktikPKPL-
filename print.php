<?php 
require 'config.php';
include $view;
$lihat = new view($config);
$toko = $lihat -> toko();
$hsl = $lihat -> penjualan();
?>
<html>
<head>
	<title>print</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
	<script>window.print();</script>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="clearfix"></div>
			<center>
				<img src="assets/img/user/20210411_123959.png" class="img-circle" width="100" height="110">
				<p><?php echo $toko['alamat_toko'];?> - <?php echo $toko['tlp'];?></p>
				
			</div>
			<div class="clearfix">
				Kasir : <?php  echo $_GET['nm_member'];?>
				&nbsp; &nbsp;<?php  echo date("j F Y, G:i");?>
			</div>
			<table class="table table-bordered" style="width:100%;">
				<tr>
					<td><b>No.</b></td>
					<td><b>Barang</b></td>
					<td><b>Jumlah</b></td>
					<td><b>Total</b></td>
				</tr>
				<?php $no=1; foreach($hsl as $isi){?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $isi['nama_barang'];?></td>
						<td><?php echo $isi['jumlah'];?></td>
						<td><?php echo $isi['total'];?></td>
					</tr>
					<?php $no++; }?>
				</table>
				<div class="pull-right">
					<?php $hasil = $lihat -> jumlah(); ?>
					Total : Rp.<?php echo number_format($hasil['bayar']);?>,-
					<br/>
					Bayar : Rp.<?php echo number_format($_GET['bayar']);?>,-
					<br/>
					Kembali : Rp.<?php echo number_format($_GET['kembali']);?>,-
				</div>
				<div class="clearfix"></div>
				<center>
					<p>Terima Kasih Telah berbelanja di toko kami !</p>
				</center>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
