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
        <h2 style="margin-top:0px">Barang_pesanan Read</h2>
        <table class="table">
	    <tr><td>Tanggal Sewa</td><td><?php echo $tanggal_sewa; ?></td></tr>
	    <tr><td>Lama Sewa</td><td><?php echo $lama_sewa; ?></td></tr>
	    <tr><td>Tanggal Kembali</td><td><?php echo $tanggal_kembali; ?></td></tr>
	    <tr><td>Nama Status</td><td><?php echo $nama_status; ?></td></tr>
	    <tr><td>Id Barang</td><td><?php echo $id_barang; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('barang_pesanan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>