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
        <h2 style="margin-top:0px">Chat <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="pesan">Pesan <?php echo form_error('pesan') ?></label>
            <textarea class="form-control" rows="3" name="pesan" id="pesan" placeholder="Pesan"><?php echo $pesan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="timestamp">Date Time <?php echo form_error('date_time') ?></label>
            <input type="text" class="form-control" name="date_time" id="date_time" placeholder="Date Time" value="<?php echo $date_time; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nama Pengirim<?php echo form_error('nama_lengkap') ?></label>
            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Pengirim" value="<?php echo $nama_lengkap; ?>" />
        </div>
	   
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('chat') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>