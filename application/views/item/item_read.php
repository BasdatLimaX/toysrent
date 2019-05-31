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
        <h2 style="margin-top:0px">Item Read</h2>
        <table class="table">
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Usia Dari</td><td><?php echo $usia_dari; ?></td></tr>
	    <tr><td>Usia Sampai</td><td><?php echo $usia_sampai; ?></td></tr>
	    <tr><td>Bahan</td><td><?php echo $bahan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('item') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>