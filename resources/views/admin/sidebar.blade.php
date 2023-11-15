<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href='/home' style="color: rgb(241, 236, 236); font-weight: bold; font-size: 28px"><span class="text-primary" style="color: #20c997">Med</span>-Center</a>
          <a class="sidebar-brand brand-logo-mini" href="/home" style="color: rgb(241, 236, 236); font-weight: bold; font-size: 16px"><span class="text-primary" style="color: #20c997">M</span>-C</a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="profile-name">
                    <x-app-layout>

                    </x-app-layout>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category pt-4 pb-1 border-t border-gray-200">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href={{url('home')}}>
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href={{url('add_doctor_view')}}>
              <span class="menu-icon">
                <i class="mdi mdi-account-plus"></i>
              </span>
              <span class="menu-title">Add Doctors</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href={{url('showdoctor')}}>
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-outline"></i>
              </span>
              <span class="menu-title">All Doctors</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href={{url('showappointment')}}>
              <span class="menu-icon">
                <i class="mdi mdi-book-multiple"></i>
              </span>
              <span class="menu-title">Appointments</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href={{url('addblog')}}>
              <span class="menu-icon">
                <i class="mdi mdi-note"></i>
              </span>
              <span class="menu-title">Add Blog</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href={{url('showblog')}}>
              <span class="menu-icon">
                <i class="mdi mdi-note-plus"></i>
              </span>
              <span class="menu-title">All Blog</span>
            </a>
          </li>
        </ul>
      </nav>
