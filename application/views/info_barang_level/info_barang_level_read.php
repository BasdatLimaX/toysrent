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
        <h2 style="margin-top:0px">Info_barang_level Read</h2>
        <table class="table">
	    <tr><td>Harga Sewa</td><td><?php echo $harga_sewa; ?></td></tr>
	    <tr><td>Porsi Royalti</td><td><?php echo $porsi_royalti; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('info_barang_level') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>