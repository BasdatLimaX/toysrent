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
	    <tr><td>Nama Lengkap</td><td><?php echo $head['nama_lengkap']; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('chat') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>

    <h2 style="margin-top:0px">Chat History</h2>
    <table class="table table-bordered" style="margin-bottom: 10px">
		<tr>
        <th>No</th>
        <th>Pesan</th>
        <th>Date Time</th>
        </tr>
        <?php 
        $start = 0;
        foreach($detail as  $data) {   ?>
	    <tr>
        <td><?php echo ++$start ?></td>
        <td><?php echo $data->pesan ?></td>
        <td><?php echo $data->date_time ?></td>
        </tr>
        <?php } ?>
        
	</table>
        </body>
</html>