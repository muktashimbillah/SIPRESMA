<style>
   .long-logo {
      background-image: url('../img/logo/logo-long.png');
      background-position: center;
      background-size: initial;
   }
</style>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center long-logo px-5">

   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="index.html">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span></a>
   </li>
   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-fw fa-bars"></i>
         <span>Daftar Prestasi</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="#pretasi-akademik">Akademik</a>
            <a class="collapse-item" href="#prestasi-non-akadeik">Non Akademik</a>
         </div>
      </div>
   </li>

   <li class="nav-item ">
      <a class="nav-link" href="{{ route('mahasiswa.list') }}">
         <i class="fas fa-fw fa-bars"></i>
         <span>Daftar Mahasiswa Prestasi</span></a>
   </li>

   <!-- Divider -->
   <!-- <hr class="sidebar-divider"> -->
   <li class="nav-item ">
      <a class="nav-link" href="#prestasi-create">
         <i class="fas fa-fw fa-archive"></i>
         <span>Laporkan Prestasi</span></a>
   </li>


   <!-- <hr class="sidebar-divider"> -->
   <li class="nav-item ">
      <a class="nav-link" href="#akun-pengaturan">
         <i class="fas fa-fw fa-key"></i>
         <span>Pengaturan Pendaftaran</span></a>
   </li>


   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">




</ul>
<!-- End of Sidebar -->