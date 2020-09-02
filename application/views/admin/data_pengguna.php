<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pengguna</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Pengguna...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Cari</button>
            </span>
          </div>
        </div>

      </div>
    </div>

    <div class="clearfix"></div>
    <span class="input-group-btn">
      <a href="pendaftaran_pengguna" class="btn btn-dark"> Tambah Pengguna</a>
    </span>
    <div class="table-responsive">
      <?php if ($this->session->flashdata('flash')) : ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Pengguna
          <strong>berhasil </strong> <?= $this->session->flashdata('message'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


      <?php endif; ?>

      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr class="headings">
            <th class="column-title">Nama</th>
            <th class="column-title">Role </th>
            <th class="column-title">No Telpon</th>
            <th class="column-title">Alamat</th>
            <th class="column-title">Status</th>
            <th class="column-title no-link last">
              <span class="nobr">Aksi</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pengguna as $user) : ?>
            <tr class="even pointer">
              <td class=" "><?= $user['Nama_user']; ?></td>
              <td class=" "><?= $user['Role']; ?></td>
              <td class=" "><?= $user['No_Telp']; ?></td>
              <td class=" "><?= $user['Alamat']; ?></td>
              <td class=" "><?= $user['Status']; ?></td>
              <td class=" last">
                <a href="<?= base_url(); ?>klinik/ubah/<?= $user['Kode_user']; ?>" class="btn btn-info btn-sm float rihgt" type="button">Ubah </a>
                <a href="<?= base_url(); ?>klinik/hapus/<?= $user['Kode_user']; ?>" class="btn btn-info btn-sm">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /page content -->