 <!-- page content -->
 <div class="right_col" role="main">
   <div class="">

     <div class="clearfix"></div>

     <div class="row">
       <div class="col-lg-8">
         <?= $this->session->flashdata('flash'); ?>
       </div>
     </div>

     <div class="card mb-3 col-lg-8">
       <div class="row no-gutters">
         <div class="col-md-4">
           <img src="<?= base_url(); ?>/assets/images/media.jpg" class="card-img">
         </div>
         <div class="col-md-8">
           <div class="card-body">
             <h5 class="card-title"><?= $user['nama']; ?></h5>
             <p class="card-text"><?= $user['alamat']; ?></p>
             <!--<p class="card-text"><small class="text-muted">Member since <?= date('Y', $user['tanggal_pembuatan']); ?></small></p>-->
           </div>
         </div>
       </div>
     </div>

   </div>
   <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->
 <!-- page content -->