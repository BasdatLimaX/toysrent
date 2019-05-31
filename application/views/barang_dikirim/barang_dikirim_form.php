<<<<<<< HEAD
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
=======
<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(../assets/images/Hero/heroku-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                    <h1>Review Barang</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="#">Barang</a></li>
                        <li><a href="#">Review Barang</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
<div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
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
<<<<<<< HEAD
	</form>
    </body>
</html>
=======
	</form>
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
