<!-- /page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Form Data Stok Opname Obat</h3>
			</div>
		</div>
		<div class="x_content">
			<br />
			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_pasien" >Kode Obat<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="kode_obat" required="required" class="form-control ">
					</div>
                </div>
                <!-- <div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Masuk <span class="required">*</span>
					</label>
						<div class="col-md-6 col-sm-6 ">
                    	  <input id="tanggal_masuk_obat" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
					<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Kadaluarsa <span class="required">*</span>
					</label>
						<div class="col-md-6 col-sm-6 ">
                    	  <input id="tanggal_kadaluarsa_obat" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
							<script>
								function timeFunctionLong(input) {
									setTimeout(function() {
									input.type = 'text';
									}, 60000);
								}
							</script>
						</div>
				</div> -->
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Stok<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="stok" required="required" class="form-control ">
					</div>
				</div>  
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Satuan<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="satuan" required="required" class="form-control ">
					</div>
				</div><div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Harga<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="harga" required="required" class="form-control ">
					</div>
				</div>
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Keterangan<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<textarea class="form-control" rows="3" placeholder="Keterangan" required="required" id="keterangan"></textarea>
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