<!-- /page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Data Pengguna</h3>
            </div>
        </div>
        <div class="x_content">
            <br />
            <form action="<?php echo base_url(); ?>klinik/tambahDataPengguna" method="post" class="form-horizontal form-label-left">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="nama_pengguna" name="nama_pengguna" required="required" class="form-control ">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">No Telpon <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="no_telpon_pengguna" name="no_telpon_pengguna" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Role <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <select class="select2_single form-control" tabindex="-1" required="required" id="role" name="role">
                            <option>Silahkan pilih role</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Perawat">Perawat</option>
                        </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <textarea class="form-control" rows="3" placeholder="Alamat" required="required" id="alamat_pengguna" name="alamat_pengguna"></textarea>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="password" class="form-control" placeholder="Password" required="required" id="password" name="password">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Status <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 ">
                        <select class="select2_single form-control" tabindex="-1" required="required" id="status" name="status">
                            <option>Silahkan pilih status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak_aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /page content -->