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
          <h3>ดาวห์โหลดไฟล์</h3>
          <p>สาามารถดาวห์โหลดไฟล์ต่างๆ ได้ที่นี่</p>

          <!--======= Breadcrumbs =========-->
          <ol class="breadcrumb">
            <li><a href="{{route('main')}}">หน้าแรก</a></li>
            <li><a href="#">เกี่ยวกับโรงพยาบาล</a></li>
            <li class="{{Nav::isRoute('downloads')}}">ดาวห์โหลดไฟล์</li>
          </ol>
        </div>
      </div>
    </section>

    <!--======= SHORTCODES =========-->
    <div class="shortcodes">
      <div class="container">
        <div class="row">

          <!--======= ACCORDION =========-->
          <div class="col-sm-9">
            <h3>ดาวห์โหลดไฟล์</h3>
              <p><a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/21-ก.พ.60การพัฒนาคู่มือส่งเสริมและป้องกันภาวะข้อเข่าเสื่อม.pdf" target="_blank">- การพัฒนาคู่มือส่งเสริมและป้องกันภาวะข้อเข่าเสื่อม</a> </p>
              <p><a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/แผ่นพับเข่า.docx" target="_blank">- แผ่นพับเข่า</a></p>
          </div>


  </div>
  </div>
  </div>

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
  <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
  <!-- begin map script-->
  <script type="text/javascript">

  </script>
@endsection
