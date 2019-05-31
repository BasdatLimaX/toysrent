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
        <h2 style="margin-top:0px">Chat Read</h2>
        <table class="table">
	    <tr><td>Pesan</td><td><?php echo $pesan; ?></td></tr>
	    <tr><td>Date Time</td><td><?php echo $date_time; ?></td></tr>
	    <tr><td>No Ktp Anggota</td><td><?php echo $no_ktp_anggota; ?></td></tr>
	    <tr><td>No Ktp Admin</td><td><?php echo $no_ktp_admin; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('chat') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>