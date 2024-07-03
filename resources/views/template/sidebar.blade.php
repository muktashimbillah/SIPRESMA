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
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
   </a>


   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="{{ route('dashboard') }}">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span></a>
   </li>
   @if(auth()->user()->role == 'admin')
   <!-- Nav Item - Pages Collapse Menu -->
   <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-fw fa-bars"></i>
         <span>Daftar Tagihan</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="#pretasi-akademik">Per Pelanggan</a>
            <a class="collapse-item" href="#prestasi-non-akadeik">Per Bulan</a>
         </div>
      </div>
   </li> -->

   <li class="nav-item ">
      <a class="nav-link" href="{{route('admin.pelanggan')}}">
         <i class="fas fa-fw fa-bars"></i>
         <span>Daftar Pelanggan</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="{{route('admin.ketegori')}}">
         <i class="fas fa-fw fa-bars"></i>
         <span>Daftar kategori</span></a>
   </li>
   <li class="nav-item ">
      <a class="nav-link" href="{{route('admin.meters.list')}}">
         <i class="fas fa-fw fa-bars"></i>
         <span>Daftar Meteran</span></a>
   </li>

   @endif
   @if(auth()->user()->role == 'user')
   <li class="nav-item ">
      <a class="nav-link" href="{{route('customer.bills')}}">
         <i class="fas fa-fw fa-bars"></i>
         <span>Tagihan</span></a>
   </li>


   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-fw fa-bars"></i>
         <span>Riwayat Tagihan</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Meteran:</h6>
            @foreach(Auth::user()->meterReadings as $meter)
            <a class="collapse-item" href="{{ route('user.billHistory', $meter->id) }}">Meteran {{ $meter->number_parameter }}</a>
            @endforeach
         </div>
      </div>
   </li>

   @endif

   <!-- Divider -->





   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->