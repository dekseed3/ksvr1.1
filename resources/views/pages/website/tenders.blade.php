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
        <h3>ประกาศจัดซื้อจัดจ้าง</h3>
        {{-- <p>Provide useful information on health and wellness<br> --}}

        <!--======= Breadcrumbs =========-->
        <ol class="breadcrumb">
          <li><a href="{{route('main')}}">หน้าแรก</a></li>
          <li><a href="#">ข่าวสารและกิจกรรม</a></li>
          <li class="{{Nav::isRoute('tenders')}}">ประกาศจัดซื้อจัดจ้าง<br>
        </ol>
      </div>
    </div>
  </section>

  <!--======= SHORTCODES =========-->
  <div class="shortcodes">
    <div class="container">
      <div class="row">

        <!--======= ACCORDION =========-->
        <div class="col-md-12">
          <h3>ประกาศจัดซื้อจัดจ้าง</h3>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">

              <!--======= PANEL HEADING =========-->
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <span class="icon-accor"><i class="fa fa-gear"></i></span> จัดซื้อยาเวชภัณฑ์</a> </h4>
              </div>

              <!--======= ADD INFO HERE =========-->
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
<p>

  @foreach ($tenders as $tender)

     - <a href="{{ asset( 'files/' . $tender->file) }}" target="_blank">{{$tender->description}} {{--ประกาศ ณ วันที่ {{ date('j F y', strtotime($tender->updated_at))}}--}} </a><br>
  @endforeach
    - <a href="{{ asset('files/070225561.pdf') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๒ รายการ ประกาศ ณ วันที่ ๗ กุมภาพันธ์ ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/02022561.pdf') }}" target="_blank">ประกาศผู้ประกาศผู้ชนะการเสนอราคา ประกวดราคาซื้อยาสำหรับผู้ป่วย จำนวน ๑ รายการ ประกาศ ณ วันที่ ๒ กุมภาพันธ์ ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/115399.50.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Esomeprazole 40 Mg. 14 Tab. จำนวน ๑ รายการ ประกาศ ณ วันที่ ๕ กุมภาพันธ์ ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/CCF23012561.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๑ รายการ ประกาศ ณ วันที่ ๒๓ มกราคม ๒๕๖๑ </a><br>
    - <a href="{{ asset('files/22012561.pdf') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๑ รายการ ประกาศ ณ วันที่ ๒๒ มกราคม ๒๕๖๑ </a><br>
    - <a href="{{ asset('files/498085.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๓๐ มกราคม ๒๕๖๑ </a><br>

        - <a href="{{ asset('files/361018.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๒ รายการ ประกาศ ณ วันที่ ๑๕ มกราคม ๒๕๖๑ </a><br>
    - <a href="{{ asset('files/15-01-2561.pdf') }}" target="_blank">ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างประจำปีงบประมาณ พ.ศ.๒๕๖๑ ประกาศ ณ วันที่ ๑๕ มกราคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/220000.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Metadoxine 500 Mg. (100 Tab) ประกาศ ณ วันที่ ๑๕ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/238182.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Amino acid solution 500 Ml. ประกาศ ณ วันที่ ๑๕ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/361125.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Insulin glargine injection 100 ยูนิต (5 Vial) ประกาศ ณ วันที่ ๑๕ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/15-01-2561.pdf') }}" target="_blank">ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างประจำปีงบประมาณ พ.ศ.๒๕๖๑ ประกาศ ณ วันที่ ๑๕ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/161570.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๒ รายการ ประกาศ ณ วันที่ ๑๑ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/410880.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๓ รายการ ประกาศ ณ วันที่ ๑๑ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/188557.50.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๓ รายการ ประกาศ ณ วันที่ ๑๑ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/179760.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Rosuvastatin 20 Mg. (28 Tab) ประกาศ ณ วันที่ ๑๑ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/119952.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Pregabailn 75 Mg. (56 Tab) ประกาศ ณ วันที่ ๑๑ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/465150.40.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Vildagliptin 50 Mg. + Metformina HCL 1000 Mg. 60 Tab ประกาศ ณ วันที่ ๑๑ มกราคม ๒๕๖๑ </a><br>

  - <a href="{{ asset('files/102506.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๒ รายการ ประกาศ ณ วันที่ ๙ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/322495.86.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๒ รายการ ประกาศ ณ วันที่ ๙ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/498085.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๙ มกราคม ๒๕๖๑ </a><br>
  - <a href="{{ asset('files/20122560.pdf') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ จัดซื้อยาเวชภัณฑ์ทางพยาธิวิทยา จำนวน ๒ รายการ ประกาศ ณ วันที่ ๒๐ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/4980851.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๑๒ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/433885.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ซื้อยาสำหรับผู้ป่วย จำนวน ๒ รายการ ประกาศ ณ วันที่ ๑๒ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/330000.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ซื้อยาสำหรับผู้ป่วย จำนวน ๒ รายการ ประกาศ ณ วันที่ ๑๒ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/298530.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Pravastatin sodium 40 Mg. (30 Tab) (Mevalotin) ประกาศ ณ วันที่ ๑๒ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/231120.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Lansoprazole 30 Mg. (28 Tab) (Prevacid) ประกาศ ณ วันที่ ๑๒ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/214000.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Sulfinpyrazone 100 Mg. (100 Tab) ประกาศ ณ วันที่ ๑๒ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/160500.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Mecobalamin 500 mcg. (30 Tab) ประกาศ ณ วันที่ ๑๒ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/498085.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/466734.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/353100.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Sevelamercarbonate 800 Mg. (30 Tab) (Renvela) ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/242885.72.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/240750.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Insulin glargine injection 100 ยูนิต (5 Vial)361125.PDF  ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/223500.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๓ รายการ ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/181664.60.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/133750.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Valsartan 160 Mg. (28 Tab) ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
  - <a href="{{ asset('files/116815.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๔ รายการ ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
- <a href="{{ asset('files/112892.PDF') }}" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๕ รายการ ประกาศ ณ วันที่ ๑ ธันวาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/281102.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Epoetin beta 5000 IU. (รีคอร์มอน 5000 ยูนิต/0.3 มล.) ประกาศ ณ วันที่ ๒๗ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/281101.pdf" target="_blank">ประกาศ เรื่อง เผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ พ.ศ.๒๕๖๑ ประกาศ ณ วันที่ ๒๔ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/5-20.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Nebivolol HCL 5 Mg. (28 Tab) ประกาศ ณ วันที่ ๒๐ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/6-20.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Tamsulosin HCL 0.4 mg. 30 Tab ประกาศ ณ วันที่ ๒๐ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/4-20.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๒๐ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/1-20.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๒๐ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/2-20.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Epoetin beta Injection 5000 IU. 3 Ml. ประกาศ ณ วันที่ ๒๐ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/3-20.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Insulin glargine injection 100IU. 3 Ml. ประกาศ ณ วันที่ ๒๐ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/7-14.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Amino acid solution 500 Ml. (Kidmin) ประกาศ ณ วันที่ ๑๔ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/1-14.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๑๔ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/2-14.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Alfuzosin 10 Mg. (30 tab) (Xatral XL) ประกาศ ณ วันที่ ๑๔ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/3-14.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Linagliptin 5 Mg. (30 Tab) (Trajenta) ประกาศ ณ วันที่ ๑๔ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/4-14.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Vildagliptin 50 Mg. (56 Tab) (Galvus) ประกาศ ณ วันที่ ๑๔ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/5-14.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๔ รายการ ประกาศ ณ วันที่ ๑๔ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/6-14.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย จำนวน ๒ รายการ ประกาศ ณ วันที่ ๑๔ พฤศจิกายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/Januvia-13.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Sitagliptin phosphate 100 Mg. (28 Tab) (Januvia) ประกาศ ณ วันที่ ๑๖ ตุลาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/Epoetin-12.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Epoetin beta Injection 5000 IU. 3 Ml. ประกาศ ณ วันที่ ๑๖ ตุลาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/Lanthanum-11.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Lanthanum Chewable 500 Ml. 90 Tab (Fosrenol) ประกาศ ณ วันที่ ๑๖ ตุลาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/6.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Amino acid solution 500 Ml. (Kidmin) ประกาศ ณ วันที่ ๒ ตุลาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/7.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Pravastatin sodium 40 Mg ประกาศ ณ วันที่ ๒ ตุลาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/8.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Atorvastatin 40 Mg. (30 Tab) ประกาศ ณ วันที่ ๒ ตุลาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/105.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Pitavastatin 2 mg. 100 Tab (Livalo) ประกาศ ณ วันที่ ๒ ตุลาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/10.pdf" target="_blank">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๒ ตุลาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/638-1.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๒๑ สิงหาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/634-1.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Vildagliptin 50 Mg. + Metformina HCL 1000 Mg. 60 Tab ประกาศ ณ วันที่ ๒๑ สิงหาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/617-1.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๑๕ สิงหาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/609-1.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Sevelamercarbonate 800 Mg. ประกาศ ณ วันที่ ๑๑ สิงหาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/604-1.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๓ รายการ ประกาศ ณ วันที่ ๘ สิงหาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/594-1.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Sitagliptin phosphate 100 Mg. 28 Tab ประกาศ ณ วันที่ ๔ สิงหาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/588.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๒๗ กรกฎาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/572.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๓ รายการ ประกาศ ณ วันที่ ๑๙ กรกฎาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/562.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๔ รายการ ประกาศ ณ วันที่ ๑๘ กรกฎาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/560.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Amlodipine 5 Mg.+ Valsartan 160 Mg. ประกาศ ณ วันที่ ๑๔ กรกฎาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/554.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๕ กรกฎาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/549.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Dapagliflozin 10 Mg. 30 Tab ประกาศ ณ วันที่ ๓ กรกฎาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/548.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Amino acid solution 500 Ml. (Kidmin) ประกาศ ณ วันที่ ๓๐ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/536_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๒๗ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/534_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๒๖ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/532_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Nebivolol HCL 5 Mg. (28 Tab) ประกาศ ณ วันที่ ๒๖ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/531_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๒๖ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/522_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๒๒ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/516_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Erythropoietin alfa injection 4000 IU. ประกาศ ณ วันที่ ๒๐ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/511_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๒๐ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/509_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๒๐ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/503_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Pregabailn 75 Mg. 56 Tab (Lybalin) ประกาศ ณ วันที่ ๑๖ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/502_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Metadoxine 500 Mg. 100 Tab ประกาศ ณ วันที่ ๑๖ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/493_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Sitagliptin phosphate 100 Mg. 28 Tab ประกาศ ณ วันที่ ๗ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/490_JPG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Epoetin beta Injection 5000 IU. 3 Ml. ประกาศ ณ วันที่ ๗ มิถุนายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/463-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Insulin glargine injection 100 ยูนิต ประกาศ ณ วันที่ ๒๓ พฤษภาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/462-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Pregabailn 75 Mg. (56 Tab) ประกาศ ณ วันที่ ๒๓ พฤษภาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/461-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Sevelamercarbonate 800 Mg. 30 Tab ประกาศ ณ วันที่ ๒๓ พฤษภาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/459-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๒๒ พฤษภาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/455-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย ๒ รายการ ประกาศ ณ วันที่ ๑๙ พฤษภาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/454-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Erythropoietin alfa injection 4000 IU. ประกาศ ณ วันที่ ๑๙ พฤษภาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/453-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๑๙ พฤษภาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/452-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Dexlansoprazole 30 Mg. 28 Tab ประกาศ ณ วันที่ ๑๙ พฤษภาคม ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/450-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Pitavastatin 2 Mg. 100 Tab ประกาศ ณ วันที่ ๒๘ เมษายน ๒๕๖๐ </a><br>
- <a href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/02/424-1_JPEG.pdf" target="_blank" rel="noopener noreferrer">ตารางแสดงวงเงินงบประมาณที่ได้รับจัดสรรและราคากลาง(ราคาอ้างอิง) ในการจัดซื้อจัดจ้างที่มิใช่งานก่อสร้าง โครงการ ซื้อยาสำหรับผู้ป่วย Human Recombinant Erythropietin Alpha Injection 5000 IU./5 Ml. ประกาศ ณ วันที่ ๒๘ เมษายน ๒๕๖๐ </a>
</p>
                </div>
              </div>
            </div>

            <!--======= ACCORDING 2 =========-->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed"><span class="icon-accor"><i class="fa fa-bell"></i></span> จัดซื้ออุปกรณ์</a> </h4>
              </div>

              <!--======= ADD INFO HERE =========-->
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
- <a style="line-height: 1.3em;" href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/03/28-9-2560-3.pdf" target="_blank"><span class="check" style="line-height: 1.3em;">ประกาศผู้ชนะการเสนอราคา จ้างทำความสะอาด ประจำปีงบประมาณ ๒๕๖๑ โดยวิธีเฉพาะเจาะจง</span><span style="line-height: 1.3em;">ประกาศ ณ​ วันที่ ๒๘ กันยายน ๒๕๖๐</span></a><br>

- <a style="line-height: 1.3em;" href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/03/28-9-2560-1.pdf" target="_blank"><span class="check" style="line-height: 1.3em;">ประกาศผู้ชนะการเสนอราคา เช่าเครื่องถ่ายเอกสาร ประจำปีงบประมาณ ๒๕๖๑ โดยวิธีเฉพาะเจาะจง</span><span style="line-height: 1.3em;">ประกาศ ณ​ วันที่ ๒๘ กันยายน ๒๕๖๐</span></a><br>

- <a style="line-height: 1.3em;" href="http://www.ksvrhospital.go.th/ksvr/wp-content/uploads/2015/03/28-09-2560-2.pdf" target="_blank"><span class="check" style="line-height: 1.3em;">ประกาศผู้ชนะการเสนอราคา เช่าเครื่องอ่านและแปลงสัญญาณภาพเอกซเรย์เป็นระบบดิจิตอล พร้อมระบบส่งและจัดเก็บภาพเอกซเรย์ จำนวน ๑ รายการ</span><span style="line-height: 1.3em;">ประกาศ ณ​ วันที่ ๒๖ กันยายน ๒๕๖๐</span></a><br>

- <a style="line-height: 1.3em;" href="../folder/16022560.pdf" target="_blank"><span class="check" style="line-height: 1.3em;">ประกาศ ประกวดราคาซื้อสิ่งอุปกรณ์ สายแพทย์ จำนวน ๗ รายการ</span><span style="line-height: 1.3em;">ประกาศ ณ​ วันที่ ๑๔ กุมภาพันธ์ ๒๕๖๐</span></a></li>
                </div>
              </div>
            </div>

          </div>
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
