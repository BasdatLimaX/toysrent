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
        <h2 style="margin-top:0px">Barang_dikirim <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Id Barang <?php echo form_error('id_barang') ?></label>
            <input type="text" class="form-control" name="id_barang" id="id_barang" placeholder="Id Barang" value="<?php echo $id_barang; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Tanggal Review <?php echo form_error('tanggal_review') ?></label>
            <input type="text" class="form-control" name="tanggal_review" id="tanggal_review" placeholder="Tanggal Review" value="<?php echo $tanggal_review; ?>" />
        </div>
	    <div class="form-group">
            <label for="review">Review <?php echo form_error('review') ?></label>
            <textarea class="form-control" rows="3" name="review" id="review" placeholder="Review"><?php echo $review; ?></textarea>
        </div>
	    <input type="hidden" name="no_resi" value="<?php echo $no_resi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('barang_dikirim') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>