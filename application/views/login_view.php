
    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 mb-40">
                    <div class="login-register-form-wrap">
                        <h3>Login</h3>
                        <form action="<?php echo base_url('auth/login') ?>" method="POST" class="mb-30">
                            <div class="row">
                                <div class="col-12 mb-15">
                                    <input type="email" name="email" placeholder="Masukkan Alamat Email">
                                </div>
                                <div class="col-12 mb-15">
                                    <input type="password" name="no_ktp" placeholder="Masukkan No KTP">
                                </div>
                                <div class="col-12"><input type="submit" value="Login"></div>

                            </div>
                        </form>

                        <!-- <h4>You can also login with...</h4>
                        <div class="social-login">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-2 col-12 mb-40 text-center">
                    <span class="login-register-separator"></span>
                </div>

                <div class="col-lg-6 col-12 mb-40 ml-auto">
                    <div class="login-register-form-wrap">
                        <h3>Register</h3>
                        <form action="<?php echo $action; ?>" method="post">
                            <div class="row">

                                <div class="form-group col-md-6 col-12 mb-15">
                                    <label for="char">Nomor KTP <?php echo form_error('no_ktp') ?></label>
                                    <input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="Nama Lengkap" value="<?php echo $no_ktp; ?>" />
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15">
                                    <label for="char">Nama Lengkap <?php echo form_error('nama_lengkap') ?></label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" />
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15">
                                    <label for="char">Email <?php echo form_error('email') ?></label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15">
                                    <label for="date">Tanggal Lahir <?php echo form_error('tanggal_lahir') ?></label>
                                    <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15">
                                    <label for="char">No Telp <?php echo form_error('no_telp') ?></label>
                                    <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15">
                                    <label for="char">Role <?php echo form_error('role') ?></label>
                                    <div class="radio" style="text-align: center">
                                      <label style="margin-right: 40px"><input type="radio" name="role">Admin</label>
                                      <label><input type="radio" name="role" checked>Anggota</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-12">
                                    <input type="submit" value="Register">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div><!-- Page Section End -->

