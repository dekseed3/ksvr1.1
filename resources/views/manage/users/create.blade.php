@extends('layouts.manage')

@section('content')
  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">สร้างข้อมูลกำลังพลใหม่</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('users.store')}}" method="POST">
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">ชื่อ</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">อีเมล์:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">รหัสผ่าน</label>
            <p class="control">
              <input type="text" class="input" name="password" id="password" v-if="!auto_password" placeholder="สร้างรหัสผ่านด้วยตนเอง">
              <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">สร้างรหัสผ่านแบบสุ่ม</b-checkbox>
            </p>
          </div>
        </div> <!-- end of .column -->

        <div class="column">
          <label for="roles" class="label">บทบาท:</label>
          <input type="hidden" name="roles" :value="rolesSelected" />

            @foreach ($roles as $role)
              <div class="field">
                <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
              </div>
            @endforeach
        </div>
      </div> <!-- end of .columns for forms -->
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-link is-pulled-right" style="width: 150px;"><span class="icon-link"><i class="fas fa-archive"></i></span> สร้างใหม่</button>
          <a href="javascript:history.back()" class="button is-light is-pulled-right" style="margin: 0px 15px 0px 0px;"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>

        </div>
      </div>
    </form>
  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true,
        rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
      }
    });
  </script>
@endsection
