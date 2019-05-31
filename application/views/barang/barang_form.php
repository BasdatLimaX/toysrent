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
        <h2 style="margin-top:0px">Barang <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Nama Item <?php echo form_error('nama_item') ?></label>
            <input type="text" class="form-control" name="nama_item" id="nama_item" placeholder="Nama Item" value="<?php echo $nama_item; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Warna <?php echo form_error('warna') ?></label>
            <input type="text" class="form-control" name="warna" id="warna" placeholder="Warna" value="<?php echo $warna; ?>" />
        </div>
	    <div class="form-group">
            <label for="url_foto">Url Foto <?php echo form_error('url_foto') ?></label>
            <textarea class="form-control" rows="3" name="url_foto" id="url_foto" placeholder="Url Foto"><?php echo $url_foto; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="kondisi">Kondisi <?php echo form_error('kondisi') ?></label>
            <textarea class="form-control" rows="3" name="kondisi" id="kondisi" placeholder="Kondisi"><?php echo $kondisi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Lama Penggunaan <?php echo form_error('lama_penggunaan') ?></label>
            <input type="text" class="form-control" name="lama_penggunaan" id="lama_penggunaan" placeholder="Lama Penggunaan" value="<?php echo $lama_penggunaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">No Ktp Penyewa <?php echo form_error('no_ktp_penyewa') ?></label>
            <input type="text" class="form-control" name="no_ktp_penyewa" id="no_ktp_penyewa" placeholder="No Ktp Penyewa" value="<?php echo $no_ktp_penyewa; ?>" />
        </div>
	    <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>