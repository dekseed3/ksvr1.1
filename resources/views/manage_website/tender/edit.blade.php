@extends('layouts.manage_website')

@section('content')
  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">แก้ไขประกาศจัดซื้อจัดจ้าง</h1>
      </div>
    </div>
    <hr class="m-t-0">

              @if ($errors->count() > 0)
                   @foreach($errors->all() as $error)
                       <b-notification type="is-info">
                         {{ $error }}
                       </b-notification>
                   @endforeach
              @endif
       <form id="update" action="{{ route('tenders.update', $tenders->id)}}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
           {{ method_field('PUT') }}
      <div class="columns">
        <div class="column">
          <b-field horizontal label="ชื่อรายการ :">
            <b-input name="name" value="{{$tenders->name}}" expanded></b-input>
        </b-field>

        <b-field horizontal label="หมวดหมู่ :">
            <b-select name="cate_tenders" placeholder="เลือกหมวดหมู่">
              @foreach ($cate_tenders as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
              @endforeach
            </b-select>
        </b-field>
{{--
        <b-field horizontal label="รายละเอียด :">
            <b-input type="textarea" value="{{$tenders->description}}" name="description" ></b-input>
        </b-field> --}}
        <b-field horizontal label="ไฟล์ดาวห์โหลด :">
          <div class="field-body">
          <div class="field">
            <p class="control">
              <a href="{{ url( 'files/'.$tenders->file) }}" target="_blank"><span class="input is-static">{{$tenders->filename}}</span></a><b-input type="file" name="file" class=""></b-input>
            </p>
          </div>
        </div>

                </b-field>
        <b-field horizontal><!-- Label left empty for spacing -->
            <p class="control">
                <button class="button is-link"><span class="icon-link"><i class="fas fa-archive"></i></span>
                  เปลียนแปลงรายการ
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
  {{-- <script>

    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep',
        rolesSelected: {!! $user->roles->pluck('id') !!}
      }
    });

  </script> --}}
@endsection
