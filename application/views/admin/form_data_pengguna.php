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
			<form method="post" action="<?php echo base_url('admin/pendaftaran_pengguna'); ?>" class="form-horizontal form-label-left">
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="nama" name="nama" class="form-control" value="<?= set_value('nama'); ?>">
					</div>
					<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="no_telpon">No Telpon <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="no_telpon_pengguna" name="no_telpon_pengguna" class="form-control" value="<?= set_value('no_telpon_pengguna'); ?>">
					</div>
					<?= form_error('no_telpon_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 label-align">Role <span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 ">
						<select class="select2_single form-control" id="role" name="role">
							<option>Silahkan pilih role</option>
							<option value="1">Dokter</option>
							<option value="2">Perawat</option>
						</select>
					</div>
					<?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" class="form-control" placeholder="Alamat" id="alamat_pengguna" name="alamat_pengguna" value="<?= set_value('alamat_pengguna'); ?>">
					</div>
					<?= form_error('alamat_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align">Username <span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?= set_value('username'); ?>">
					</div>
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align">Password <span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 ">
						<input type="password" class="form-control" placeholder="Password" id="password" name="password">
					</div>
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
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