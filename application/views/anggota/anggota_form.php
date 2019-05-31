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
        <h2 style="margin-top:0px">Anggota <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="float">Poin <?php echo form_error('poin') ?></label>
            <input type="text" class="form-control" name="poin" id="poin" placeholder="Poin" value="<?php echo $poin; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Level <?php echo form_error('level') ?></label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div>
	    <input type="hidden" name="no_ktp" value="<?php echo $no_ktp; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('anggota') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>