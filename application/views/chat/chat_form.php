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
            <label for="char">No Ktp Anggota <?php echo form_error('no_ktp_anggota') ?></label>
            <input type="text" class="form-control" name="no_ktp_anggota" id="no_ktp_anggota" placeholder="No Ktp Anggota" value="<?php echo $no_ktp_anggota; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">No Ktp Admin <?php echo form_error('no_ktp_admin') ?></label>
            <input type="text" class="form-control" name="no_ktp_admin" id="no_ktp_admin" placeholder="No Ktp Admin" value="<?php echo $no_ktp_admin; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('chat') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>