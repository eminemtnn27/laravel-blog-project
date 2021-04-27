
<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('login')}}">
        <img width=95 src="{{asset('back/')}}/img/logo.png" alt="" /> 
      </a>
      <hr  class="sidebar-divider my-0">  
      <div align="center" href="{{route('login')}}">
        <b > <font  color="white">Admin <br>ElEmekleri Blog Sitesi</font></b></div> 
      <li class="nav-item @if(Request::segment(2)=="panel") active @endif">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Panel</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        İçerik Yönetimi
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link  @if(Request::segment(2)=="makaleler") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-edit"></i>
          <span>Makaleler</span>
        </a>
        <div id="collapseTwo" class="collapse  @if(Request::segment(2)=="makaleler") show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Makale İşlemleri:</h6>
            <a class="collapse-item  @if(Request::segment(2)=="makaleler") and |Request::segment(3)) active @endif " href="{{route('admin.makaleler.index')}}">Tüm Makaleler</a>
            <a class="collapse-item @if(Request::segment(2)=="makaleler") and Request::segment(3)=="oluştur") active @endif" href="{{route('admin.makaleler.create')}}">Makale Oluştur</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" @if(Request::segment(2)=="kategoriler") style="color:white  !important;" @endif  href="{{route('admin.category.index')}}" >
          <i @if(Request::segment(2)=="kategoriler") style="color:white  !important;" @endif class="fas fa-fw fa-list"></i>
          <span>Kategoriler</span>
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  @if(Request::segment(2)=="sayfalar") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
            <i class="fas fa-fw fa-folder"></i>
            <span>Sayfalar</span>
          </a>
          <div id="collapsePage" class="collapse  @if(Request::segment(2)=="sayfalar") show @endif" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Sayfa İşlemleri:</h6>
              <a class="collapse-item  @if(Request::segment(2)=="sayfalar") and |Request::segment(3)) active @endif " href="{{route('admin.page.index')}}">Tüm Sayfalar</a>
              <a class="collapse-item @if(Request::segment(2)=="sayfalar") and Request::segment(3)=="oluştur") active @endif" href="{{route('admin.page.create')}}">Sayfa Oluştur</a>
            </div>
          </div>
        </li>
       
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Ayarlar
      </div>
      
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Panel</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Ekranı:</h6>
            <a class="collapse-item" href="{{route('login')}}">Giriş</a>
            <a class="collapse-item" href="{{route('back.register')}}">Kaydol</a>
            <a class="collapse-item" href="{{route('back.register')}}">Şifremi Unuttum</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      
    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">



            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Mesaj Kutusu
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="{{route('gelenKutusu')}}">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Merhaba! Yaşadığım bir problemde bana yardım edip edemeyeceğinizi merak ediyorum.</div>
                    <div class="small text-gray-500">Melis Tek · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Geçen ay sipariş ettiğiniz fotoğraflar bende size nasıl gönderilsin istersiniz?</div>
                    <div class="small text-gray-500">Ceyhan Çene · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth:: user()->name}} </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ayarlar
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Çıkış Yap
                </a>
              </div>
            </li>

          </ul>

        </nav>

                <div class="container-fluid">

                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                    <a href="{{route('homepage')}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa- globe fa-sm text-white-50"></i>Siteyi Görüntüle</a>
                  </div>

                  <!-- Content Row -->
