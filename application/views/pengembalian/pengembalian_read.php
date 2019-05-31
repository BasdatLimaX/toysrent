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
        <h2 style="margin-top:0px">Pengembalian Read</h2>
        <table class="table">
	    <tr><td>Id Pemesanan</td><td><?php echo $id_pemesanan; ?></td></tr>
	    <tr><td>Metode</td><td><?php echo $metode; ?></td></tr>
	    <tr><td>Ongkos</td><td><?php echo $ongkos; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>No Ktp Anggota</td><td><?php echo $no_ktp_anggota; ?></td></tr>
	    <tr><td>Nama Alamat Anggota</td><td><?php echo $nama_alamat_anggota; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengembalian') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>