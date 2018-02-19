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

  <!--======= BANNER =========-->
  <div id="banner" class="full-screen">
    <div class="main-bnr">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 no-padding">

            <!--======= BANNER TEXT =========-->
            <div class="main-bnr-text">
              <h5>ยินดีต้อนเราเข้าสู่ เว็บไซต์</h5>
              <h1>โรงพยาบาล<br />ค่ายกฤษณ์สีวะรา</h1>
              <p>โรงพยาบาลค่ายกฤษณ์สีวะราเป็นโรงพยาบาลกองทัพบก ขนาด 60 เตียง ให้บริการแก่กำลังพลทหารและครอบครัวในพื้นที่ค่ายกฤษณ์สีวะรา หน่วยทหารในพื้นที่จังหวัดสกลนครและบุคคลพลเรือนทั่วไป</p>
              <!--======= BUTTON =========-->
              <div class="scroll"><a href="#department" class="btn btn-1">บริการของเรา</a> </div>
</div>
          </div>

          <!--======= BANNER BACKGROUND IMAGE =========-->
          <div class="col-md-6 no-padding main-bnr-bg" > </div>
        </div>
      </div>
      <div class="go-down scroll"> <a href="#blog"><i class="ion-ios-arrow-down"></i></a> </div>
    </div>
  </div>

  <!--======= CONTENT =========-->
  <div class="content">

    <!--======= Our Services =========-->
        <div class="services-about ser-style-2" id="blog">
          <div class="container">
            <!-- Tittle -->
            <div class="tittle tittle-2">
              <h3><i class="fas fa-calendar-alt fa-fw"></i> ข่าวสารและกิจกรรม</h3>
              <hr>

            </div>
            <div class="row">

              <!--======= founder sliders =========-->
              <div class="col-lg-12">
                <div class="services-slide">

                  <!-- Slider 1 -->
                  <div class="slide sec-ser "> <img class="img-responsive" src="{{ asset('images/pic/S_7109367401063.jpg') }}" alt="" >
                    <h6><a href="#.">เยี่ยมครอบครัว, บุตร ของกำลังพลที่มีความต้องการพิเศษ</a></h6>
                    <p>พันเอกอภิชาติ สุวาส ผู้อำนวยการโรงพยาบาลค่ายกฤษณ์สีวะรา เยี่ยมครอบครัว, บุตร ของกำลังพลที่มีความต้องการพิเศษ ..</p>
                  </div>

                  <!-- Slider 2 -->
                  <div class="slide sec-ser"> <img class="img-responsive" src="{{ asset('images/pic/DSC_6151.JPG') }}" alt="" >
                    <h6><a href="#.">จัด #ชุดออกหน่วยแพทย์เคลื่อนที่ ร่วมในพิธีกระทำสัตย์ปฏิญาณตนและสวนสนามนักศึกษาวิชาทหาร มณฑลทหารบกที่ ๒๙ </a></h6>
                    <p>โรงพยาบาลค่ายกฤษณ์สีวะรา ชุดออกหน่วยแพทย์เคลื่อนที่ ร่วมในพิธีกระทำสัตย์ปฏิญาณตนและสวนสนามนักศึกษาวิชาทหาร มณฑลทหารบกที่ ๒๙ ณ บริเวณสนามกีฬากลาง #จังหวัดสกลนคร</p>
                  </div>

                  <!-- Slider 2 -->
                  <div class="slide sec-ser"> <img class="img-responsive" src="{{ asset('images/pic/DSC_5902.JPG') }}" alt="" >
                    <h6><a href="#.">จัด #ชุดออกหน่วยแพทย์เคลื่อนที่ ร่วมในพิธีมอบบ้านใน "โครงการบ้านท้องถิ่น ประชารัฐร่วมใจ เทิดไท้องค์ราชัน ราชินี"</a></h6>
                    <p>โรงพยาบาลค่ายกฤษณ์สีวะรา ได้จัดชุดแพทย์เคลื่อนที่ ให้บริการทางการแพทย์ แก่ประชาชน ที่มาร่วมในพิธีมอบบ้านใน "โครงการบ้านท้องถิ่น ประชารัฐร่วมใจ เทิดไท้องค์ราชัน ราชินี" ณ ตำบลแมดนาท่ม อ.โคกศรีสุพรรณ จ.สกลนคร</p>
                  </div>

                  <!-- Slider 2 -->
                  <div class="slide sec-ser"> <img class="img-responsive" src="{{ asset('images/pic/05122560/DSC_4978.JPG') }}" alt="" >
                    <h6><a href="#.">ชุดแพทย์เดินเท้า กิจกรรม<br />"ความสุขจากพ่อสู่ ผืนแผ่นดิน"</a></h6>
                    <p>รพ.ค่ายกฤษณ์สีวะรา จัด #ชุดแพทย์เดินเท้า ให้บริการทางการแพทย์แก่ประชาชน #จิตอาสา ในการจัดกิจกรรมบำเพ็ญสาธารณประโยชน์ "ความสุขจากพ่อสู่ ผืนแผ่นดิน" ณ บริเวณศาลากลาง #จังหวัดสกลนคร </p>
                  </div>

                  <!-- Slider 2 -->
                  <div class="slide sec-ser"> <img class="img-responsive" src="{{ asset('images/pic/30112560.jpg') }}" alt="" >
                    <h6><a href="#.">ต้อนรับการตรวจเยี่ยมและนิเทศโรคลมร้อน</a></h6>
                    <p>โรงพยาบาลค่ายกฤษณ์สีวะรา ต้อนรับการตรวจเยี่ยมและนิเทศโรคลมร้อน ของ พล.ต.ธนา สุรารักษ์ แพทย์ใหญ่ ทภ.2 พร้อมด้วยคณะ</p>
                  </div>
                  <!-- Slider 2 -->
                  <div class="slide sec-ser"> <img class="img-responsive" src="{{ asset('images/pic/27112560.jpg') }}" alt="" >
                    <h6><a href="#.">#ชุดแพทย์เดินเท้า โครงการจิตอาสา" #เราทำความ ดี ด้วยหัวใจ"</a></h6>
                    <p>รพ.ค่ายกฤษณ์สีวะรา ได้จัด #ชุดแพทย์เดินเท้า ให้บริการทางการแพทย์แก่พี่น้องประชาชน ที่มาร่วม โครงการจิตอาสา" #เราทำความ ดี ด้วยหัวใจ" กิจกรรม KICK OFF " #ลงแขกเกี่ยวข้าว สืบสานวัฒนธรรมพื้นบ้าน" ..</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <!--======= Department =========-->
    <section class="department depart-style-2" id="department">

      <!--Tittle-->
      <div class="container">
        <div class="tittle tittle-2">
          <h3><i class="fas fa-ambulance fa-fw"></i> บริการของเรา</h3>
          <hr>
          {{-- <p>Claritas est etiam processus dynamicus, qui sequ itur mutationem consuetudium lectorum.</p> --}}
        </div>
      </div>

      <!-- Tab Panel -->
      <div role="tabpanel">
        <div class="dep-sec-nav ab-cnter">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#dental" role="tab" data-toggle="tab">ตรวจโรคผู้ป่วยนอก</a></li>
            <li role="presentation"><a href="#cardiology" role="tab" data-toggle="tab">แพทย์ทางเลือก ฝั่งเข็ม </a></li>
            <li role="presentation"><a href="#for-disabled" role="tab" data-toggle="tab">แผนกกายภาพบำบัด </a></li>
            <li role="presentation"><a href="#ophthalmology" role="tab" data-toggle="tab">หน่วยไตเทียม </a></li>
            <li role="presentation"><a href="#emergency" role="tab" data-toggle="tab">แผนกแพทย์แผนไทย </a></li>
            <li role="presentation"><a href="#x-ray" role="tab" data-toggle="tab">คลินิคจัดฟัน </a></li>
          </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">

          <!-- Dental Depatment -->
          <div role="tabpanel" class="tab-pane fade in active" id="dental">
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep">
              <!-- Depatment Dental Image -->
              <div class="dentel-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>ตรวจโรคผู้ป่วยนอก</h2>
              </div>
              <p>แผนกผู้ป่วยนอกของโรงพยาบาลค่ายกฤษณ์สีวะรา พร้อมให้บริการตรวจ วินิจฉัย ดูแล รักษาพยาบาลโรคทั่วไปในผู้ป่วยทุกเพศ ทุกวัย โดยทีมแพทย์หลากหลายสาขา ผู้มีความเชี่ยวชาญ รวมถึงทีมบุคลากรทางการพยาบาลที่มีประสบการณ์และความชำนาญในการดูแลผู้ป่วย ด้วยเครื่องมือและอุปกรณ์ทางการแพทย์ที่ใช้เทคโนโลยีทันสมัย ได้รับการรับรองมาตรฐานโรงพยาบาลระดับประเทศจาก HA </p>
              <br>
              <p>
                มีทีมแพทย์หลากหลายสาขา อาทิเช่น
              </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>โสต ศอ นาสิก</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>อายุรกรรม</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ตรวจโรคทั่วไป</p>
                </li>
              </ul>
              <!-- BTN -->
              <a href="#." class="btn"> อ่านต่อ..</a>
              <!-- BTN 1 -->
              <a href="#." class="btn btn-1 margin-l-20"> ติดต่อเรา</a> </div>
          </div>

          <!-- Cardiology Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="cardiology">
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep">
              <!-- Depatment Dental Image -->
              <div class="cardio-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>แพทย์ทางเลือก ฝั่งเข็ม </h2>
              </div>
              <p>การฝังเข็มรักษาโรคเป็นการรักษาโรคตามศาสตร์แผนจีน  วิวัฒนาการและสืบทอดกันมาหลายพันปี แล้วปัจจุบันองค์การอนามัยโลก(WHO) รับรองว่าเป็นการรักษาโรคที่ได้ผลอีกทางเลือกหนึ่ง
</p>
              <br>
              <p>ตามทฤษฎีแพทย์แผนจีนเชื่อว่า การฝังเข็มทำให้เลือดและระบบลมปราณไหลเวียนดีขึ้น ซึ่งจะช่วยปรับสมดุลย์ของร่างกายที่เจ็บป่วย นอกจากนี้การศึกษาของแพทย์แผนปัจจุบันพบว่าการฝังเข็มทำให้เกิดการหลั่งสาร “เอนเคพฟาลีน และเอนดอร์ฟิน” ซึ่งจะไปช่วยระงับอาการปวดได้ กับสารที่เรียกว่า “ออโตคอย” ที่คอยช่วยลดอาการอักเสบได้อีกด้วย</p>
              <h4>โรคที่สามารถรักษาได้ด้วยวิธีฝังเข็มได้แก่</h4>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ระบบทางเดินหายใจ</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>โรคตา</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ช่องปาก</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ระบบทางเดินอาหาร</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ระบบประสาทและกล้ามเนื้อ</p>
                </li>

              </ul>
              <!-- BTN -->
              <a href="#." class="btn"> อ่านต่อ..</a>
              <!-- BTN 1 -->
              <a href="#." class="btn btn-1 margin-l-20"> ติดต่อเรา</a> </div>
          </div>

          <!-- For-Disabled Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="for-disabled">
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep">
              <!-- Depatment Dental Image -->
              <div class="for-dis-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>แผนกกายภาพบำบัด</h2>
              </div>
              <p>แผนกกายภาพบำบัดให้บริการในเชิงรุกกับผู้ป่วยทั้งในชุมชน ผู้ป่วยติดเตียง ผู้พิการ และผู้สูงอายุ  รวมทั้งให้บริการผู้ป่วย OPD และ IPD โดยให้การรักษาทางกายภาพบำบัด ทั้งใช้เครื่องมือที่มีมาตรฐานและมีความทันสมัยเพื่อให้การรักษาให้มีประสิทธิภาพ และได้ผล โดยมีเครื่องมือดังนี้</p>
              <br>
              {{-- <p>Claritas est etiam processus dynamicus, qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p> --}}
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>เครื่องดึงคอ-ดึงหลัง (Traction) เป็นหน้าจอทัศสกรีน </p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>เครื่องอัลตร้าซาวน์คอมบาย (Ultrasound combined)</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>เครื่องอัลตร้าซาวน์ (Ultrasoun) </p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>เครื่อง TENS/ES เป็นเครื่องที่มีขนาดเล็กกะทัดรัด </p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>เครื่อง TENS </p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>แผ่นประคบร้อน </p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>เตียงฝึกยืน (Tube table) </p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>บาร์ฝึกเดิน (Parallel bar) </p>
                </li>
              </ul>
              <!-- BTN -->
              <a href="#." class="btn"> อ่านต่อ..</a>
              <!-- BTN 1 -->
              <a href="#." class="btn btn-1 margin-l-20"> ติดต่อเรา</a> </div>
          </div>

          <!-- Ophthalmology Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="ophthalmology">
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep">
              <!-- Depatment Dental Image -->
              <div class="opth-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>หน่วยไตเทียม</h2>
              </div>
              <p>ให้บริการฟอกเลือดด้วยเครื่องไตเทียมที่ทันสมัย โดยทีมแพทย์และพยาบาลที่ชำนาญเฉพาะทาง ข้าราชการและประกันสังคมสามารถเบิกได้ตามสิทธิ์ สถานที่สะอาดปลอดโปร่ง กว้างขวาง คลินิกโรคไตเปิดบริการทุกวัน</p>
              <br>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN -->
              <a href="#." class="btn"> อ่านต่อ..</a>
              <!-- BTN 1 -->
              <a href="#." class="btn btn-1 margin-l-20"> ติดต่อเรา</a> </div>
          </div>

          <!-- Emergency Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="emergency">
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep">
              <!-- Depatment Dental Image -->
              <div class="emer-bg"></div>
            </div>
            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>แผนกแพทย์แผนไทย</h2>
              </div>
              <p>ให้บริการตรวจวินิจฉัยรักษา และส่งเสริมสุขภาพด้วยวิธีการทางการแพทย์แผนไทยและสมุนไพร แก่ผู้มารับบริการและประชาชนทั่วไปทั้งผู้ป่วยOPD และIPDในการรักษา ฟื้นฟู ป้องกัน และการส่งเสริมสุขภาพด้วยการนวดไทยและประคบสมุนไพร การแนะนำให้ความรู้เกี่ยวกับยาไทยและสมุนไพรไทย</p>
              <br>
              {{-- <p>Claritas est etiam processus dynamicus,to make a diagnosis and implement cutting-edge therapies. qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts --> --}}
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ให้บริการหัตถบำบัดนวดรักษา นวดเพื่อสุขภาพ</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ให้บริการประคบสมุนไพร</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ส่งเสริมการใช้ยาสมุนไพร และให้คำแนะนำเกี่ยวกับสมุนไพรไทย</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ฟื้นฟูสุขภาพมารดาหลังคลอด ประคบสมุนไพรกระตุ้นน้ำนม</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ฟื้นฟูกลุ่มผู้ป่วยอัมพฤกษ์อัมพาต,กล้ามเนื้ออ่อนแรง</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>ให้ความรู้ประชาสัมพันธ์ในการดูแลสุขภาพด้านการแพทย์แผนไทยให้ประชาชนทั่วไป</p>
                </li>

              </ul>
              <!-- BTN -->
              <a href="#." class="btn"> อ่านต่อ..</a>
              <!-- BTN 1 -->
              <a href="#." class="btn btn-1 margin-l-20"> ติดต่อเรา</a> </div>
          </div>

          <!-- X Ray Depatment -->
          <div role="tabpanel" class="tab-pane fade" id="x-ray">
            <!-- Depatment Dental Background -->
            <div class="dep-sec-img img-bg-dep">
              <!-- X RAY BACKGROUND IMAGE -->
              <div class="x-ray-bg"></div>
            </div>

            <!-- Depatment Text Section -->
            <div class="dep-sec-txt">
              <div class="tittle">
                <h2>คลินิคจัดฟัน</h2>
              </div>
              <p>We are a team of young professionals passionate in our work. We work in a friendly and efficient using the latest technologies and sharing our expertise</p>
              <br>
              <p>Claritas est etiam processus dynamicus,to make a diagnosis and implement cutting-edge therapies. qui sequitur mut ationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, antep osuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
              <!-- Small Facts -->
              <ul class="fact row">
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Qualified Staff of Doctors</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Feel like you are at Home Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>24x7 Emergency Services</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Save your Money and Time with us</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medicine Research</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Dental Care</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Medical Consulting</p>
                </li>
                <li class="col-sm-6">
                  <p><i class="ion-erlenmeyer-flask"></i>Blood Bank</p>
                </li>
              </ul>
              <!-- BTN -->
              <a href="#." class="btn"> อ่านต่อ..</a>
              <!-- BTN 1 -->
              <a href="#." class="btn btn-1 margin-l-20"> ติดต่อเรา</a> </div>
          </div>
        </div>
      </div>
    </section>

    <!--======= FOUNDER =========-->
    <section id="founder">
      <div class="container">
        <div class="row">

          <!--Tittle-->
          <div class="col-lg-4 padding-r-80">
            <div class="tittle">
              <h2><i class="fas fa-user-md fa-3x"></i></h2>
              <h3><strong>แนะนำแพทย์</strong></h3>
            </div>
            <p> โรงพยาบาลค่ายกฤษณ์สีวะรา มีความยินดี<br>ที่จะแนะนำให้ทุกท่านรู้จักกับแพทย์ ผู้เชี่ยวชาญที่คอยดูแลผู้ป่วยอย่างใกล้ชิด </p>
            <br>
            {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet.</p> --}}
          </div>

          <!--======= founder sliders =========-->
          <div class="col-lg-8">
            <div class="founder-slide">

              <!-- Slider 1 -->
              <div class="slide"> <img class="img-responsive" src="{{ asset('images/S_7050416178645.jpg') }}" alt="">
                <h4>พันเอก อภิชาต สุวาส</h4>
                <p>โสต ศอ นาสิก</p>
              </div>

              <!-- Slider 2 -->
              <div class="slide"> <img class="img-responsive" src="{{ asset('images/DSC_2078.jpg') }}" alt="">
                <h4>พันตรี อณุชิฏฬ์ สุขสมัย</h4>
                <p>อายุรกรรม</p>
              </div>

              <!-- Slider 3 -->
              <div class="slide"> <img class="img-responsive" src="{{ asset('images/DSC_2085.jpg') }}" alt="">
                <h4>ร้อยโท ชาติพัฒน์ คำขจร</h4>
                <p>ตรวจโรคทั่วไป</p>
              </div>

              <!-- Slider 4 -->
              <div class="slide"> <img class="img-responsive" src="{{ asset('images/DSC_2072.jpg') }}" alt="">
                <h4>ร้อยโท ธนาวัฒน์ เลิศสิริชินกร</h4>
                <p>ตรวจโรคทั่วไป</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    {{-- <!--======= MAKE AN APPOINTMENT =========-->
    <section class="make-oppient">
      <div class="appointment">
        <div class="container">
          <div class="row">
            <!--======= Image =========-->
            <div class="col-sm-5"> <img class="img-responsive" src="images/oppitent-img.png" alt="" > </div>
            <div class="col-sm-7">

              <!--======= FORM =========-->
              <div class="tittle">
                <h2>กำหนดนัดหมาย</h2>
              </div>
              <form role="form" id="appointment" method="post">
                <ul class="row">
                  <li class="col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full name * ">
                  </li>
                  <li class="col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email * ">
                  </li>
                  <li class="col-sm-6">
                    <input type="text" class="form-control"  name="phone" id="phone" placeholder="Phone" >
                  </li>
                  <li class="col-sm-6">
                    <select class="form-control selectpicker" name="select1" id="select1">
                      <option selected>Select Department</option>
                      <option>Dental</option>
                      <option>Cardiology</option>
                      <option>For disabled</option>
                      <option>Ophthalmology</option>
                      <option>Emergency</option>
                      <option>X-ray</option>
                    </select>
                  </li>
                  <li class="col-sm-12">
                    <input type="text" name="datepicker" class="form-control" id="datepicker" placeholder="DD/MM/YY">
                    <i class="fa fa-calendar"></i> </li>
                  <li class="col-sm-12">
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                  </li>
                  <li class="col-sm-12">
                    <button type="submit" value="submit" class="btn" id="btn_submit">make an appointment</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

  <!--======= TESTIMONILAS =========-->
  <section id="prople-says">
    <div class="overlay">
      <div class="container">

        <!--======= TITTLE =========-->
        <div class="tittle tittle-2 ">
          <h3>วิสัยทัศน์</h3>
        </div>
        <div class="qou"> <i class="fa fa-quote-left"></i> <i class="fa fa-quote-right"></i> </div>
        <div class="testi">

            <div class="item">
              <p>“เป็นโรงพยาบาลชั้นนำขนาด ๖๐ เตียง
ของกองทัพบกที่มีคุณภาพได้มาตรฐาน<br />
เป็นที่เชื่อมั่นของกำลังพล ครอบครัวและประชาชน”</p>
              <div class="avatar"><img src="{{ asset('images/avatar-1.jpg') }}" alt="" style="height: 121px;
            	width: 121px;
            	position: relative;
            	overflow: hidden;
            	margin-right: 20px;
            	display: inline-block;
            	border-radius: 50%;"></div>
              <h5>พันเอก อภิชาต สุวาส</h5>
              <span>ผู้อำนวยการโรงพยาบาลค่ายกฤษณ์สีวะรา</span> </div>

        </div>
      </div>
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
@endsection
