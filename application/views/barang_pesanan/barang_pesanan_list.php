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
        <h2 style="margin-top:0px">Barang_pesanan List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('barang_pesanan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('barang_pesanan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('barang_pesanan'); ?>" class="btn btn-default">Reset</a>
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
		<th>Tanggal Sewa</th>
		<th>Lama Sewa</th>
		<th>Tanggal Kembali</th>
		<th>Nama Status</th>
		<th>Id Barang</th>
		<th>Action</th>
            </tr><?php
            foreach ($barang_pesanan_data as $barang_pesanan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $barang_pesanan->tanggal_sewa ?></td>
			<td><?php echo $barang_pesanan->lama_sewa ?></td>
			<td><?php echo $barang_pesanan->tanggal_kembali ?></td>
			<td><?php echo $barang_pesanan->nama_status ?></td>
			<td><?php echo $barang_pesanan->id_barang ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('barang_pesanan/read/'.$barang_pesanan->id_pemesanan),'Read'); 
				echo ' | '; 
				echo anchor(site_url('barang_pesanan/update/'.$barang_pesanan->id_pemesanan),'Update'); 
				echo ' | '; 
				echo anchor(site_url('barang_pesanan/delete/'.$barang_pesanan->id_pemesanan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
    </body>
</html>