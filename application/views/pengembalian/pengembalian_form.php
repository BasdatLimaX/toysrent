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
        <h2 style="margin-top:0px">Pengembalian <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Id Pemesanan <?php echo form_error('id_pemesanan') ?></label>
            <input type="text" class="form-control" name="id_pemesanan" id="id_pemesanan" placeholder="Id Pemesanan" value="<?php echo $id_pemesanan; ?>" />
        </div>
	    <div class="form-group">
            <label for="metode">Metode <?php echo form_error('metode') ?></label>
            <textarea class="form-control" rows="3" name="metode" id="metode" placeholder="Metode"><?php echo $metode; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="double">Ongkos <?php echo form_error('ongkos') ?></label>
            <input type="text" class="form-control" name="ongkos" id="ongkos" placeholder="Ongkos" value="<?php echo $ongkos; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">No Ktp Anggota <?php echo form_error('no_ktp_anggota') ?></label>
            <input type="text" class="form-control" name="no_ktp_anggota" id="no_ktp_anggota" placeholder="No Ktp Anggota" value="<?php echo $no_ktp_anggota; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Nama Alamat Anggota <?php echo form_error('nama_alamat_anggota') ?></label>
            <input type="text" class="form-control" name="nama_alamat_anggota" id="nama_alamat_anggota" placeholder="Nama Alamat Anggota" value="<?php echo $nama_alamat_anggota; ?>" />
        </div>
	    <input type="hidden" name="no_resi" value="<?php echo $no_resi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengembalian') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>