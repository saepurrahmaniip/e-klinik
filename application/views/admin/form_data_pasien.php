<!-- /page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Form Data Pasien</h3>
			</div>
		</div>
		<div class="x_content">
			<br />
			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_pasien" >Nama Pasien<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="nama_pasien" required="required" class="form-control ">
					</div>
                </div>
                <div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Tanggal Lahir <span class="required">*</span>
					</label>
						<div class="col-md-6 col-sm-6 ">
                	      <input type="text" id="tempat_lahir_pasien" required="required" class="form-control ">
                    	  <input id="tanggal_lahir_pasien" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
							<script>
								function timeFunctionLong(input) {
									setTimeout(function() {
									input.type = 'text';
									}, 60000);
								}
							</script>
						</div>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">No Telpon <span class="required">*</span>
					</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="no_telpon_pasien" required="required" class="form-control">
						</div>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin <span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 ">
                	    <select class="select2_single form-control" tabindex="-1" required="required" id="jenis_kelamin_pasien">
							<option>Silahkan pilih jenis kelamin</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
                </div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="pekerjaan">Pekerjaan <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="pekerjaan_pasien" required="required" class="form-control">
					</div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<textarea class="form-control" rows="3" placeholder="Alamat" required="required" id="alamat_pasien"></textarea>
					</div>
				</div> 
				<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button class="btn btn-primary" type="button">Batal</button>
							<button type="submit" class="btn btn-success">Simpan</button>
						</div>
					</div>
				</div>
			</form>
	</div>
</div>
<!-- /page content -->