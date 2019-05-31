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
        <h2 style="margin-top:0px">Barang_pesanan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="timestamp">Tanggal Sewa <?php echo form_error('tanggal_sewa') ?></label>
            <input type="text" class="form-control" name="tanggal_sewa" id="tanggal_sewa" placeholder="Tanggal Sewa" value="<?php echo $tanggal_sewa; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Lama Sewa <?php echo form_error('lama_sewa') ?></label>
            <input type="text" class="form-control" name="lama_sewa" id="lama_sewa" placeholder="Lama Sewa" value="<?php echo $lama_sewa; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Tanggal Kembali <?php echo form_error('tanggal_kembali') ?></label>
            <input type="text" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="Tanggal Kembali" value="<?php echo $tanggal_kembali; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nama Status <?php echo form_error('nama_status') ?></label>
            <input type="text" class="form-control" name="nama_status" id="nama_status" placeholder="Nama Status" value="<?php echo $nama_status; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Barang <?php echo form_error('id_barang') ?></label>
            <input type="text" class="form-control" name="id_barang" id="id_barang" placeholder="Id Barang" value="<?php echo $id_barang; ?>" />
        </div>
	    <input type="hidden" name="id_pemesanan" value="<?php echo $id_pemesanan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('barang_pesanan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>