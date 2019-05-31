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
        <h2 style="margin-top:0px">Barang_dikirim List</h2>
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
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('barang_dikirim/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('barang_dikirim/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('barang_dikirim'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
<<<<<<< HEAD
		<th>Id Barang</th>
=======
		<th>Nama Barang</th>
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
		<th>Tanggal Review</th>
		<th>Review</th>
		<th>Action</th>
            </tr><?php
            foreach ($barang_dikirim_data as $barang_dikirim)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
<<<<<<< HEAD
			<td><?php echo $barang_dikirim->id_barang ?></td>
=======
			<td><?php echo $barang_dikirim->nama_item.' '.$barang_dikirim->warna ?></td>
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
			<td><?php echo $barang_dikirim->tanggal_review ?></td>
			<td><?php echo $barang_dikirim->review ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('barang_dikirim/read/'.$barang_dikirim->no_resi),'Read'); 
				echo ' | '; 
				echo anchor(site_url('barang_dikirim/update/'.$barang_dikirim->no_resi),'Update'); 
				echo ' | '; 
				echo anchor(site_url('barang_dikirim/delete/'.$barang_dikirim->no_resi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
<<<<<<< HEAD
        </div>
    </body>
</html>
=======
        </div>
>>>>>>> a29ded696404e94d086f963b26bf51a5064336c7
