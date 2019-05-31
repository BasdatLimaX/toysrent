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
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('level_keanggotaan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('level_keanggotaan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('level_keanggotaan'); ?>" class="btn btn-default">Reset</a>
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
                <th>Nama Level</th>
		<th>Minimum Poin</th>
		<th>Deskripsi</th>
		<th>Action</th>
            </tr><?php
            foreach ($level_keanggotaan_data as $level_keanggotaan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $level_keanggotaan->nama_level ?></td>
            <td><?php echo $level_keanggotaan->minimum_poin ?></td>
			<td><?php echo $level_keanggotaan->deskripsi ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('level_keanggotaan/read/'.$level_keanggotaan->nama_level),'Read'); 
				echo ' | '; 
				echo anchor(site_url('level_keanggotaan/update/'.$level_keanggotaan->nama_level),'Update'); 
				echo ' | '; 
				echo anchor(site_url('level_keanggotaan/delete/'.$level_keanggotaan->nama_level),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
        </div>