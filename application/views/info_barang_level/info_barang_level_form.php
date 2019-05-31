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
        <h2 style="margin-top:0px">Info_barang_level <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="float">Harga Sewa <?php echo form_error('harga_sewa') ?></label>
            <input type="text" class="form-control" name="harga_sewa" id="harga_sewa" placeholder="Harga Sewa" value="<?php echo $harga_sewa; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Porsi Royalti <?php echo form_error('porsi_royalti') ?></label>
            <input type="text" class="form-control" name="porsi_royalti" id="porsi_royalti" placeholder="Porsi Royalti" value="<?php echo $porsi_royalti; ?>" />
        </div>
	    <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('info_barang_level') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>