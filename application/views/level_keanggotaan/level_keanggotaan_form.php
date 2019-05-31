<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(../assets/images/Hero/heroku-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Daftar Barang</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="#">Barang</a></li>
                        <li><a href="#">Daftar Barang</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
<div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">

        <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="float">Nama Level <?php echo form_error('nama_level1') ?></label>
            <input type="text" class="form-control" name="nama_level1" id="nama_level1" placeholder="Nama Level" value="<?php echo $nama_level1; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Minimum Poin <?php echo form_error('minimum_poin') ?></label>
            <input type="text" class="form-control" name="minimum_poin" id="minimum_poin" placeholder="Minimum Poin" value="<?php echo $minimum_poin; ?>" />
        </div>
	    <div class="form-group">
            <label for="deskripsi">Deskripsi <?php echo form_error('deskripsi') ?></label>
            <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
        </div>
	    <input type="hidden" name="nama_level" value="<?php echo $nama_level; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('level_keanggotaan') ?>" class="btn btn-default">Cancel</a>
	</form>