@extends('layouts.manage_website')

@section('content')
  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">เพิ่มข้อมูลประกาศจัดซื้อจัดจ้าง</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('tenders.store')}}" method="POST" enctype="multipart/form-data">
      {{method_field('POST')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <b-field horizontal label="ชื่อรายการ :">
            <b-input name="name" placeholder="ชื่อรายการ" expanded></b-input>
        </b-field>

        <b-field horizontal label="หมวดหมู่ :">
            <b-select name="cate_tenders" placeholder="เลือกหมวดหมู่">
              @foreach ($cate_tenders as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
              @endforeach
            </b-select>
        </b-field>

        {{-- <b-field horizontal label="รายละเอียด :">
            <b-input type="textarea" placeholder="รายละเอียด" name="description" ></b-input>
        </b-field> --}}

        <b-field horizontal label="ไฟล์ดาวห์โหลด :">

          <b-input type="file" name="file" class=""></b-input>
          {{-- <label class="file-label">
            <input type="file" name="photos[]" class="file-input" multiple />
            <span class="file-cta">
              <span class="file-icon">
                <i class="fas fa-upload"></i>
              </span>
              <span class="file-label">
                Choose a file…
              </span>
            </span>
          </label> --}}

        </b-field>

        <b-field horizontal><!-- Label left empty for spacing -->
            <p class="control">
                <button class="button is-link"><span class="icon-link"><i class="fas fa-archive"></i></span>
                  เพิ่มรายการ
                </button>
                <a href="javascript:history.back()" class="button is-active">
                  <span class="icon-link"><i class="fas fa-arrow-alt-circle-left"></i></span> กลับ</a>
            </p>
        </b-field>
        </div> <!-- end of .column -->
      </div>
    </form>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  <script>
  export default {
        data() {
            return {
                files: []
            }
        }
    }

  </script>
@endsection
