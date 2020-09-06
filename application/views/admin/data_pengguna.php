<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pengguna</h3>

      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <form action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari data pengguna.." name="keyword">
              <div class="input-group-append">
                <button class="btn btn-dark" type="submit">Cari</button>
              </div>
            </div>
          </form>
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
          <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
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


          <?php foreach ($pengguna as $users) : ?>
            <tr class="even pointer">
              <td class=" "><?= $users['nama']; ?></td>
              <td class=" "><?= $users['kode_role']; ?></td>
              <td class=" "><?= $users['no_telp']; ?></td>
              <td class=" "><?= $users['alamat']; ?></td>
              <?php if ($users['status'] == 0) {
                $status_user = 'Aktif';
              } else {
                $status_user = 'Tidak Aktif';
              }
              ?>
              <td class=" "><?= $status_user; ?></td>
              <td class=" last">
                <a href="<?= base_url(); ?>admin/ubah/<?= $users['kode_user']; ?>" class="btn btn-info btn-sm float rihgt" type="button">Ubah </a>
                <a href="<?= base_url(); ?>admin/hapus/<?= $users['kode_user']; ?>" class="btn btn-info btn-sm tombol-hapus">Hapus</a>
              </td>

            </tr>
          <?php endforeach; ?>
          <?php if (empty($pengguna)) : ?>
            <tr>
              <td colspan="6">
                <div class="alert alert-danger" role="alert">
                  <center> Data pengguna tidak ditemukan. </center>
                </div>
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /page content -->