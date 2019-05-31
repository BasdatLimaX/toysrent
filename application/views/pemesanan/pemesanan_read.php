<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Pemesanan Read</h2>
        <table class="table">
	    <tr><td>Datetime Pemesanan</td><td><?php echo $datetime_pemesanan; ?></td></tr>
	    <tr><td>Kuantitas Barang</td><td><?php echo $kuantitas_barang; ?></td></tr>
	    <tr><td>Harga Sewa</td><td><?php echo $harga_sewa; ?></td></tr>
	    <tr><td>Ongkos</td><td><?php echo $ongkos; ?></td></tr>
	    <tr><td>No Ktp Pemesan</td><td><?php echo $no_ktp_pemesan; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pemesanan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>