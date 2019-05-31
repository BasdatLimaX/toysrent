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
        <h2 style="margin-top:0px">Alamat Read</h2>
        <table class="table">
	    <tr><td>Jalan</td><td><?php echo $jalan; ?></td></tr>
	    <tr><td>Nomor</td><td><?php echo $nomor; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $kota; ?></td></tr>
	    <tr><td>Kodepos</td><td><?php echo $kodepos; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('alamat') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>