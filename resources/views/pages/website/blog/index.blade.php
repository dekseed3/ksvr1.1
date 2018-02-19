@extends('layouts.home')

@section('styles')
  <link href="{{ asset('css/css-home/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/css-home/main.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/css-home/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/css-home/responsive.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/css-home/animate.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/css-home/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/css-home/ionicons.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')


  <!--======= CONTENT =========-->
  <div class="content-1 fix-nav-space">

    <!--======= SUB BANNER =========-->
    <section class="sub-banner" data-stellar-background-ratio="0.5">
      <div class="overlay">
        <div class="container">
          <h3>ข่าวสารและกิจกรรม</h3>
          <p>กิจกรรมของหน่วย กิจกรรมนอกหน่วย หน่วยทหารแพทย์เคลื่อนที่และออกเยี่ยมบ้านพื้นที่รับผิดชอบ</p>

          <!--======= Breadcrumbs =========-->
          <ol class="breadcrumb">
            <li><a href="{{route('main')}}">หน้าแรก</a></li>
            <li class="{{Nav::isRoute('blog.index')}}">ข่าวสารและกิจกรรม</li>
          </ol>
        </div>
      </div>
    </section>

    <!--======= Blog =========-->
    <section class="blog blog-pages">
      <div class="container">

        <!--======= Blog POST =========-->
        <ul>
          <!-- Blog Post 1 -->
          <li class="row">
            <!-- Post Image -->
            <div class="col-md-7 text-center">
              <div class="post-img"> <img class="img-responsive" src="images/blog-img-large-1.jpg" alt="" > </div>
            </div>

            <!-- Post Text Sec -->
            <div class="col-md-5">
              <div class="text-section text-center"> <a href="#.">ตรวจสุขภาพช่องปากและฟันของเด็กศูนย์พัฒนาเด็กเล็ก รพ.ค่ายกฤษณ์สีวะรา</a> <span>เผยแพร่โดย <strong>Admin</strong> วันที่ <strong>22 พ.ย 2560</strong></span>
                <hr>
                <p>แผนกทันตกรรม ตรวจสุขภาพช่องปากและฟันของเด็กศูนย์พัฒนาเด็กเล็ก รพ.ค่ายกฤษณ์สีวะรา รอบ 6 เดือน</p>
                <a href="#." class="btn btn-1">อ่านต่อ..</a> </div>
            </div>
          </li>

          <!-- Blog Post 2 -->
          <li class="row">
            <!-- Post Text Sec -->
            <div class="col-md-5">
              <div class="text-section text-center"> <a href="#.">A Vital Measure: Your Surgeon’s Skill</a> <span>post by <strong>John Doe</strong> on <strong>April 5th, 2015</strong></span>
                <hr>
                <p>Claritas est etiam processus dynamicus, qui sequ itur mutationem consuetudium lectorum. Mirum etiam proce ssusest notare quam littera.</p>
                <a href="#." class="btn btn-1">View more</a> </div>
            </div>
            <!-- Post Image -->
            <div class="col-md-7 text-center">
              <div class="post-img left"> <img class="img-responsive" src="images/blog-img-large-2.jpg" alt="" > </div>
            </div>
          </li>

          <!-- Blog Post 3 -->
          <li class="row">
            <!-- Post Image -->
            <div class="col-md-7 text-center">
              <div class="post-img left"> <img class="img-responsive" src="images/blog-img-large-3.jpg" alt="" > </div>
            </div>
            <!-- Post Text Sec -->
            <div class="col-md-5">
              <div class="text-section text-center"> <a href="#.">The Hospital-Dependent Patient</a> <span>post by <strong>John Doe</strong> on <strong>April 5th, 2015</strong></span>
                <hr>
                <p>Claritas est etiam processus dynamicus, qui sequ itur mutationem consuetudium lectorum. Mirum etiam proce ssusest notare quam littera.</p>
                <a href="#." class="btn btn-1">View more</a> </div>
            </div>
          </li>

          <!-- Blog Post 4 -->
          <li class="row">
            <!-- Post Text Sec -->
            <div class="col-md-5">
              <div class="text-section text-center"> <a href="#.">Should Medical School Last Just 3 Years?</a> <span>post by <strong>John Doe</strong> on <strong>April 5th, 2015</strong></span>
                <hr>
                <p>Claritas est etiam processus dynamicus, qui sequ itur mutationem consuetudium lectorum. Mirum etiam proce ssusest notare quam littera.</p>
                <a href="#." class="btn btn-1">View more</a> </div>
            </div>
            <!-- Post Image -->
            <div class="col-md-7 text-center">
              <div class="post-img left"> <img class="img-responsive" src="images/blog-img-large-4.jpg" alt="" > </div>
            </div>
          </li>

          <!-- Blog Post 4 -->
          <li class="row">
            <!-- Post Image -->
            <div class="col-md-7 text-center">
              <div class="post-img left"> <img class="img-responsive" src="images/blog-img-large-5.jpg" alt="" > </div>
            </div>
            <!-- Post Text Sec -->
            <div class="col-md-5">
              <div class="text-section text-center"> <a href="#.">Spending More and Getting Less for Health Care</a> <span>post by <strong>John Doe</strong> on <strong>April 5th, 2015</strong></span>
                <hr>
                <p>Claritas est etiam processus dynamicus, qui sequ itur mutationem consuetudium lectorum. Mirum etiam proce ssusest notare quam littera.</p>
                <a href="#." class="btn btn-1">View more</a> </div>
            </div>
          </li>
        </ul>

        <!--======= PAGINATION =========-->
        <nav>
          <ul class="pagination">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
          </ul>
        </nav>
      </div>
    </section>

    <!--======= Contact Info =========-->
    <section class="contact-info">
      <div class="container">

        <!--Address-->
        <ul class="row">
          <li class="col-md-3"> <i class="ion-ios-location-outline"></i>
            <h5>ที่อยู่</h5>
            <p>เลขที่ 100/548 หมู่ 11 ตำบลธาตุเชิงชุม อำเภอเมือง จังหวัดสกลนคร 47000</p>
          </li>

          <!--Hot line-->
          <li class="col-md-3"> <i class="ion-iphone"></i>
            <h5>เบอร์โทรศัพท์</h5>
            <p>+66-42-712867</p>
            <p>+66-42-712785 (โทรสาร)</p>
          </li>

          <!--Email Contact-->
          <li class="col-md-3"> <i class="ion-ios-email-outline"></i>
            <h5>ที่อยู่อีเมล์</h5>
            <p>ksvrhospital@hotmail.com</p>
            <p>ksvrhosp@gmail.com</p>
          </li>

          <!--Website-->
          <li class="col-md-3"> <i class="ion-social-facebook"></i>
            <h5>Facebook</h5>
            <p>https://www.facebook.com/ksvrhospital </p>
          </li>
        </ul>
      </div>
    </section>
  </div>



@endsection

@section('scripts')
  <script src="{{ asset('js/js-home/jquery-1.11.0.min.js') }}"></script>
  <script src="{{ asset('js/js-home/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/js-home/own-menu.js') }}"></script>
  <script src="{{ asset('js/js-home/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/js-home/jquery.superslides.js') }}"></script>
  <script src="{{ asset('js/js-home/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/js-home/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/js-home/jquery-ui-1.10.3.custom.js') }}"></script>
  <script src="{{ asset('js/js-home/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/js-home/jquery.isotope.min.js') }}"></script>
  <script src="{{ asset('js/js-home/jquery.flexslider-min.js') }}"></script>
  <script src="{{ asset('js/js-home/appointment.js') }}"></script>
  <script src="{{ asset('js/js-home/jquery.downCount.js') }}"></script>
  <script src="{{ asset('js/js-home/counter.js') }}"></script>
  <script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
  <script src="{{ asset('js/js-home/main.js') }}"></script>
@endsection
