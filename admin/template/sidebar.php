   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php 
      $id = $_SESSION['admin']['id_member'];
      $hasil_profil = $lihat -> member_edit($id);
      ?>
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">

           <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar'];?>" class="img-circle" width="100" height="110"></a></p>
           <h5 class="centered"><?php echo $hasil_profil['nm_member'];?></h5>
           <h5 class="centered">( <?php echo $hasil_profil['NIK'];?> )</h5>

           <li class="mt">
            <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="index.php?page=jual" >
              <i class="fa fa-shopping-cart"></i>
              <span>KASIR </span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>Master <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
            </a>
            <ul class="sub">
              <li><a  href="index.php?page=barang">Barang</a></li>
              <li><a  href="index.php?page=kategori">Kategori</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>Transaksi <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
            </a>
            <ul class="sub">
              <li><a  href="index.php?page=laporan">Laporan Penjualan</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-cog"></i>
              <span>Setting <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
            </a>
            <ul class="sub">
              <li><a href="index.php?page=pengaturan">Pengaturan Toko</a></li>
            </ul>
            <ul class="sub">
              <li><a href="index.php?page=pengaturan_user">Pengaturan User</a></li>
            </ul>
          </li>
        </ul>
        <li class="sub-menu">
          <a href="logout.php" >
            <i class="fa fa-sign-out"></i>
            <span>Keluar </span>
          </a>
        </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

