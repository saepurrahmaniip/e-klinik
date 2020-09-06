<!-- /page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Ubah Data Pengguna</h3>
            </div>
        </div>
        <div class="x_content">
            <br />
            <form method="post" class="form-horizontal form-label-left">
                <input type="hidden" name="kode_user" value="<?= $pengguna['kode_user']; ?>">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= $pengguna['nama']; ?>">
                    </div>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="no_telpon">No Telpon <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="no_telpon_pengguna" name="no_telpon_pengguna" class="form-control" value="<?= $pengguna['no_telp']; ?>">
                    </div>
                    <?= form_error('no_telpon_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Role <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <select class="select2_single form-control" id="role" name="role">
                            <?php foreach ($role as $r) : ?>
                                <?php if ($r == $pengguna['kode_role']) : ?>
                                    <option value="<?= $r; ?>" selected><?= $r; ?></option>
                                <?php else : ?>
                                    <option value="<?= $r; ?>"><?= $r; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Status <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <select class="select2_single form-control" id="status" name="status">
                            <?php foreach ($status as $s) : ?>
                                <?php if ($s == $pengguna['status']) : ?>
                                    <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                <?php else : ?>
                                    <option value="<?= $s; ?>"><?= $s; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" class="form-control" placeholder="Alamat" id="alamat_pengguna" name="alamat_pengguna" value="<?= $pengguna['alamat']; ?>">
                    </div>
                    <?= form_error('alamat_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Username <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?= $pengguna['username']; ?>">
                    </div>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <!-- <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password Baru<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div> -->
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="reset">Batal</button>
                        <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /page content -->