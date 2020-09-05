<div id="top_navigation">
  <!-- top navigation -->
  <div class="top_nav">
    <div class="nav_menu">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <?= $pengguna['nama']; ?>
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="javascript:;"><i class="fa fa-user" aria-hidden="true"></i> Akun</a>
              <a class="dropdown-item" href=""><i class="fas fa-user-cog fa-fw"></i> Pengaturan</a>
              <a class="dropdown-item" href="<?= base_url() ?>auth/logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
<!-- /top navigation -->

<div id="content">