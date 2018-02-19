
  <!-- HEADER ===========================================-->
  <header class="navbar-fixed-top">
    <div class="container">
      <!--======= LOGO =========-->
      <div class="logo"> <a href="{{route('main')}}"><img src="{{asset('images/captiveportal-logo1.png')}}" alt="โรงพยาบาลค่ายกฤษณ์สีวะรา" style="max-height: 5rem;"></a> </div>

      <!--======= NAVIGATION =========-->
      <nav class="webimenu">
        <!-- MENU BUTTON RESPONSIVE -->
        <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>

        <ul class="ownmenu">
          <li class="{{Nav::isRoute('main')}}"><a href="{{route('main')}}"><i class="fas fa-home fa-fw"></i> หน้าแรก</a>

          </li>
          <li><a href="#"><i class="far fa-file-alt fa-fw"></i> เกี่ยวกับโรงพยาบาล</a>
            <!--======= MEGA MENU =========-->
            <ul class="megamenu full-width animated-3s fadeIn">
              <li class="row nav-post">
                <div class="col-sm-6 boder-da-r">
                  <ul>
                    <li><a href="#"><i class="fas fa-caret-right"></i> ประวัติโรงพยาบาล </a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i> พันธกิจ วิสัยทัศน์และค่านิยม </a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i> คณะผู้บริหาร </a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i> นโยบายคุณภาพ </a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i> เข็มมุ่ง จุดเน้นในการพัฒนา ปี ๕๙ - ๖๐ </a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i> โครงสร้างองค์กร </a></li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul>
                    <li><a href="#"><i class="fas fa-caret-right"></i> ข้อมูลตัวชี้วัด รพ.ค่ายฯ</a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i> ข้อมูลตัวชี้วัด โครงการ THIP</a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i> ข้อมูลสถิติ</a></li>
                    <li><a href="#"><i class="fas fa-caret-right"></i> KM – โรงพยาบาลค่ายกฤษณ์สีวะรา</a></li>
                    <li class="{{Nav::isRoute('downloads')}}"><a href="{{route('downloads')}}"><i class="fas fa-caret-right"></i> ดาวห์โหลดไฟล์</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fas fa-ambulance fa-fw"></i> บริการของเรา </a>
            {{-- <ul class="dropdown animated-3s fadeIn">
              <li><a href="#">ตรวจโรคผู้ป่วยนอก</a></li>
              <li><a href="#">แพทย์ทางเลือก ฝั่งเข็ม</a></li>
              <li><a href="#">กายภาพบำบัด</a></li>
              <li><a href="#">คลินิคจัดฟัน</a></li>
              <li><a href="#">หน่วยไตเทียม</a></li>
              <li><a href="#">นวดแผนไทย</a></li>
            </ul> --}}
          </li>
          <li class="#"><a class="nav-link" href="#">
            <i class="fas fa-calendar-alt fa-fw"></i> ข่าวสารและกิจกรรม</a>
          <ul class="dropdown animated-3s fadeIn">
            <li><a href="#"><i class="fas fa-caret-right"></i> กิจกรรมของหน่วย</a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> กิจกรรมนอกหน่วย</a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> หน่วยแพทย์เคลื่อนที่</a></li>
            <li><a href="#"><i class="fas fa-caret-right"></i> ออกเยี่ยมบ้านในพื้นที่รับผิดชอบ</a></li>
            <li class="{{Nav::isRoute('tenders')}}"><a href="{{route('tenders')}}"><i class="fas fa-caret-right"></i> ประกาศจัดซื้อจัดจ้าง</a></li>
            <li class="{{Nav::isRoute('jobs')}}"><a href="{{route('jobs')}}" ><i class="fas fa-caret-right"></i> ประกาศรับสมัครงาน</a></li>
          </ul>
          </li>
          <li class="{{Nav::isRoute('contact')}}"><a class="nav-link" href="{{route('contact')}}" ><i class="fas fa-location-arrow fa-fw"></i> ติดต่อเรา</a> </li>
          <li>
          @if (Route::has('login'))
                  @if (Auth::check())
                        <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                        <ul class="dropdown animated-3s fadeIn">
                          <li><a href="#">
                            <span class="icon">
                              <i class="far fa-fw fa-user" aria-hidden="true"></i>
                            </span>ข้อมูลส่วนตัว</a>
                          </li>
                          <li><a href="#">
                            <span class="icon">
                              <i class="fas fa-fw fa-bell"></i>
                            </span>Notifications</a>
                          </li>
                          <li>
                            <a href="{{route('manage_website.dashboard')}}">
                              <span class="icon">
                               <i class="fas fa-fw fa-archive"></i>
                             </span>ประกาศจัดซื้อจัดจ้าง</a></li>

                          <hr class="navbar-divider">

                          <li><a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                              <span class="icon">
                                <i class="fa fa-fw fa-sign-in-alt"></i>
                              </span> ออกจากระบบ</a>
                            @include('_includes.forms.logout')
                          </li>
                        </ul>
                  @else
                      <a href="{{route('login')}}" class="btn2"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</a>
                  @endif
          @endif
          </li>
        </ul>
      </nav>

    </div>
  </header>
