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
        <h2 style="margin-top:0px">Alamat <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Jalan <?php echo form_error('jalan') ?></label>
            <input type="text" class="form-control" name="jalan" id="jalan" placeholder="Jalan" value="<?php echo $jalan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Nomor <?php echo form_error('nomor') ?></label>
            <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor" value="<?php echo $nomor; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kota <?php echo form_error('kota') ?></label>
            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" value="<?php echo $kota; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kodepos <?php echo form_error('kodepos') ?></label>
            <input type="text" class="form-control" name="kodepos" id="kodepos" placeholder="Kodepos" value="<?php echo $kodepos; ?>" />
        </div>
	    <input type="hidden" name="no_ktp_anggota" value="<?php echo $no_ktp_anggota; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('alamat') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>