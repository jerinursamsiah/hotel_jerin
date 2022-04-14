 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">hotel <sup>jerin</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url('index.php/admin');?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Pesan kamar
</div>


<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('index.php/data_kamar');?>">
        <i class="fas fa-fw fa-table"></i>
        <span> Kamar</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?= base_url('index.php/data_jenis_kamar');?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data jenis kamar</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?= base_url('index.php/data_konsumen');?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Konsumen</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?= base_url('index.php/data_user');?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Data User</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?= base_url('index.php/data_transaksi');?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Transaksi</span></a>
        </li>
<!-- Nav Item - Logout -->
<li class="nav-item">
<a class="nav-link" href="<?= base_url('index.php/auth/logout');?>">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
        </li>
 
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">





</ul>