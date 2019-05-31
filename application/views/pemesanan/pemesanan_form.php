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
        <h2 style="margin-top:0px">Pemesanan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="timestamp">Datetime Pemesanan <?php echo form_error('datetime_pemesanan') ?></label>
            <input type="text" class="form-control" name="datetime_pemesanan" id="datetime_pemesanan" placeholder="Datetime Pemesanan" value="<?php echo $datetime_pemesanan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kuantitas Barang <?php echo form_error('kuantitas_barang') ?></label>
            <input type="text" class="form-control" name="kuantitas_barang" id="kuantitas_barang" placeholder="Kuantitas Barang" value="<?php echo $kuantitas_barang; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Harga Sewa <?php echo form_error('harga_sewa') ?></label>
            <input type="text" class="form-control" name="harga_sewa" id="harga_sewa" placeholder="Harga Sewa" value="<?php echo $harga_sewa; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Ongkos <?php echo form_error('ongkos') ?></label>
            <input type="text" class="form-control" name="ongkos" id="ongkos" placeholder="Ongkos" value="<?php echo $ongkos; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">No Ktp Pemesan <?php echo form_error('no_ktp_pemesan') ?></label>
            <input type="text" class="form-control" name="no_ktp_pemesan" id="no_ktp_pemesan" placeholder="No Ktp Pemesan" value="<?php echo $no_ktp_pemesan; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <input type="hidden" name="id_pemesanan" value="<?php echo $id_pemesanan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pemesanan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>