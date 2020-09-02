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
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_pasien" >Kode Pasien<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="kode_pasien" required="required" class="form-control ">
					</div>
                </div>
                <div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Pemeriksaan <span class="required">*</span>
					</label>
						<div class="col-md-6 col-sm-6 ">
                    	  <input id="tanggal_pemeriksaan" class="date-picker form-control" placeholder="Tanggal-Bulan-Tahun" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                    <label class="control-label col-md-3 col-sm-3 label-align">Anamnesis<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<textarea class="form-control" rows="3" placeholder="" required="required" id="anamnesis"></textarea>
					</div>
				</div>  
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Tekanan Darah<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="tekanan_darah" required="required" class="form-control ">
					</div>
				</div><div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Nadi<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="nadi" required="required" class="form-control ">
					</div>
				</div>
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Suhu<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="suhu" required="required" class="form-control ">
					</div>
				</div>
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Keterangan lain<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="keterangan_lain" required="required" class="form-control ">
					</div>
				</div>
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Hasil Diagnosis<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="hasil_diagnosis" required="required" class="form-control ">
					</div>
				</div> 
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Terapi<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="terapi" required="required" class="form-control ">
					</div>
				</div>
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Rekomendasi Lain<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="rekomendasi_lain" required="required" class="form-control ">
					</div>
				</div>
				<div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align">Biaya Periksa<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="biaya_periksa" required="required" class="form-control ">
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