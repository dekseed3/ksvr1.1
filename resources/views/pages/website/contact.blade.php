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
        <h3>ติดต่อเรา</h3>
        <p>หากท่านสนใจบริการของเรา หรือต้องการสอบถามรายละเอียดเพิ่มเติม</p>

        <!--======= Breadcrumbs =========-->
        <ol class="breadcrumb">
          <li><a href="{{route('main')}}">หน้าแรก</a></li>
          <li class="{{Nav::isRoute('contact')}}">ติดต่อเรา</li>
        </ol>
      </div>
    </div>
  </section>

  <!--======= CONATCT =========-->
  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h4>ส่งข้อความถึงเรา</h4>

          <!--======= CONTACT FORM =========-->
          <div class="contact-form">



            <!--======= Success Msg =========-->


            <!--======= FORM  =========-->
            <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>ขอขอบคุณ ข้อความของคุณถูกส่งแล้ว</div>
          <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
            <ul class="row">
              <li class="col-sm-6">
                <label>ชื่อ-นามสกุล *
                  <input type="text" class="form-control" name="name" id="name" placeholder="">
                </label>
              </li>
              <li class="col-sm-6">
                <label>ที่อยู่อีเมล์ *
                  <input type="text" class="form-control" name="email" id="email" placeholder="">
                </label>
              </li>
              <li class="col-sm-6">
                <label>เบอร์โทรศัพท์ *
                  <input type="text" class="form-control" name="company" id="company" placeholder="">
                </label>
              </li>
              <li class="col-sm-6">
                <label>แผนกที่ต้องการติดต่อ
                  <input type="text" class="form-control" name="website" id="website" placeholder="">
                </label>
              </li>
              <li class="col-sm-12">
                <label>ข้อความ
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                </label>
              </li>
              <li class="col-sm-12">
                <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">ส่งข้อความ</button>
              </li>
            </ul>
          </form>

          </div>
        </div>


        <div class="col-md-4">
        <h4>เปิดเวลาทำการ</h4>
          <!-- Timing -->
          <div class="timing">
            <p>จันทร์ – อังคาร <span>08:00 - 16.00 น.</span></p>
            <p>พุธ <span>08:00 - 12.00 น.</span></p>
            <p>พฤหัสบดี – ศุกร์  <span>08:00 - 16.00 น.</span></p>

          </div>

          <!-- Follow Us -->
           <h4>ติดตามข่าวสารได้ที่</h4>

          <ul class="social_icons">
            <li class="facebook"><a href="https://www.facebook.com/ksvrhospital"><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
            <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


      <!--======= GOOGLE MAP =========-->
      <div id="map" class="g_map"></div>

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
          <p>www.facebook.com/ksvrhospital </p>
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
  <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
  <!-- begin map script-->
  <script type="text/javascript">
  /*==========  Map  ==========*/
  var map;
  function initialize_map() {
  if ($('#map').length) {
  	var myLatLng = new google.maps.LatLng(17.1876273,104.1058216,17);
  	var mapOptions = {
  		zoom: 17,
  		center: myLatLng,
  		scrollwheel: false,
  		panControl: false,
  		zoomControl: true,
  		scaleControl: false,
  		mapTypeControl: false,
  		streetViewControl: false
  	};
  	map = new google.maps.Map(document.getElementById('map'), mapOptions);
  	var marker = new google.maps.Marker({
  		position: myLatLng,
  		map: map,
  		tittle: 'Envato',
  		icon: './images/map-locator.png'
  	});
  } else {
  	return false;
  }
  }
  google.maps.event.addDomListener(window, 'load', initialize_map);
  </script>
@endsection
