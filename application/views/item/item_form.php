<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url('../assets/images/hero/hero-1.jpg')">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Form Input Item</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Tambah Item</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">
            <form action="<?php echo $action; ?>" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="deskripsi">Nama <?php echo form_error('nama') ?></label>
                        <textarea class="form-control" rows="3" name="nama" id="deskripsi" placeholder="Nama"><?php echo $nama; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi <?php echo form_error('deskripsi') ?></label>
                        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bahan">Bahan <?php echo form_error('bahan') ?></label>
                        <textarea class="form-control" rows="3" name="bahan" id="bahan" placeholder="Bahan"><?php echo $bahan; ?></textarea>
                    </div>
                </div> 
            
                <div class="col-6">
                    <div class="form-group">
                        <label for="int">Usia Dari <?php echo form_error('usia_dari') ?></label>
                        <input type="text" class="form-control" name="usia_dari" id="usia_dari" placeholder="Usia Dari" value="<?php echo $usia_dari; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="int">Usia Sampai <?php echo form_error('usia_sampai') ?></label>
                        <input type="text" class="form-control" name="usia_sampai" id="usia_sampai" placeholder="Usia Sampai" value="<?php echo $usia_sampai; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="int">Kategori <?php echo form_error('kategori') ?></label>
                        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="kategori" value="<?php echo $kategori; ?>" />
                    </div>
                </div>
            </div>
        
	    
	    
	    <input type="hidden" name="nama" value="<?php echo $nama; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('item') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>