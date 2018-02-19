<nav class="navbar" role="navigation" aria-label="main navigation">

  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{asset('images/captiveportal-logo1.png')}}" alt="โรงพยาบาลค่ายกฤษณ์สีวะรา" style="max-height: 3rem;">
      </a>
      @if (Request::segment(1) == "manage")
        <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
          <span class="icon">
            <i class="fa fa-arrow-circle-right"></i>
          </span>
        </a>
      @endif

      <button class="button navbar-burger">
       <span></span>
       <span></span>
       <span></span>
     </button>
    </div>
    <div class="navbar-menu">
      {{-- <div class="navbar-start">
        <a class="navbar-item is-tab is-active">Learn</a>
        <a class="navbar-item is-tab">Discuss</a>
        <a class="navbar-item is-tab">Share</a>
      </div> <!-- end of .navbar-start --> --}}


      <div class="navbar-end nav-menu" style="overflow: visible">
        @guest
          <a href="{{route('main')}}" class="navbar-item is-tab">หน้าแรก</a>
          <a href="#" class="navbar-item is-tab">ติดต่อเรา</a>
        @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">{{Auth::user()->name}}</a>
            <div class="navbar-dropdown is-right" >
              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fas fa-user m-r-5"></i>
                </span>ข้อมูลส่วนตัว
              </a>

              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-bell m-r-5"></i>
                </span>Notifications
              </a>
                @if(Auth::user()->id == '1')
                  <a href="{{route('manage.dashboard')}}" class="navbar-item">
                    <span class="icon">
                      <i class="fa fa-fw fa-cog m-r-5"></i>
                    </span>ระบบจัดการข้อมูลทั่วไป
                  </a>
                @endif
                <a href="{{route('manage_website.dashboard')}}" class="navbar-item">
                  <span class="icon">
                    <i class="fa fa-fw fa-cog m-r-5"></i>
                  </span>ระบบเว็บไซต์
                </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fas fa-sign-out-alt m-r-5"></i>
                </span>
                Logout
              </a>
              @include('_includes.forms.logout')
            </div>
          </div>
        @endguest
      </div>
    </div>

  </div>
</nav>
