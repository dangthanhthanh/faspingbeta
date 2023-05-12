@php
  $notify=4;
  $time=5;
  $name_admin="admin thah";
  $img_admin="http://127.0.0.1:8000/client/images/product-item-1.jpg";
  $level="1";
@endphp
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('admin.dashboard')}}" class="logo d-flex align-items-center">
        <img src="{{asset('admin/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="{{route('admin.dashboard')}}">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="{{route('admin.dashboard')}}" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">{{$notify}}</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have {{$notify}} new notifications
                <p>in the {{$time}} hours since the most recent access time</p>
                <a href="{{route('admin.dashboard')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-circle text-success"></i>
              <div>
                <h4>From User</h4>
                <p>You have {{$notify}} new messenger</p>
                <p>in the {{$time}} hours since the most recent access time</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-circle text-success"></i>
              <div>
                <h4>From Orther Administration</h4>
                <p>You have {{$notify}} new messenger</p>
                <p>in the {{$time}} hours since the most recent access time</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-circle text-success"></i>
              <div>
                <h4>From System</h4>
                <p>You have {{$notify}} new notification</p>
                <p>in the {{$time}} hours since the most recent access time</p>
                {{-- //he thong thong bao co bao nhieu don hang, 
                  luoc truy cap, 
                  so luong account duoc tao moi, 
                  so luong account bi huy dang cho su ly,
                  so luong don hang duoc tao,
                  so luong don hang bi huy tren he thong,
                  so luong don hang bi huy khi giao hang,
                   --}}
              </div>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="{{route('admin.dashboard')}}">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{$img_admin}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$name_admin}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{$name_admin}}</h6>
              <span>Level {{$level}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('admin.dashboard')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>