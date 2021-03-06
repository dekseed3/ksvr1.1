@extends('layouts.manage')

@section('content')
  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">สร้างบทบาทใหม่</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('roles.store')}}" method="POST">
      {{ csrf_field() }}
      <div class="columns">
        <div class="column">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">รายละเอียดบทบาท:</h1>
                  <div class="field">
                    <p class="control">
                      <label for="display_name" class="label">ชื่อ (อ่านง่าย)</label>
                      <input type="text" class="input" name="display_name" value="{{old('display_name')}}" id="display_name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="name" class="label">Slug (ไม่สามารถเปลี่ยนแปลงได้)</label>
                      <input type="text" class="input" name="name" value="{{old('name')}}" id="name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">บรรยาย ลักษณะ</label>
                      <input type="text" class="input" value="{{old('description')}}" id="description" name="description">
                    </p>
                  </div>
                  <input type="hidden" :value="permissionsSelected" name="permissions">
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">สิทธิ์การใช้งาน:</h1>
                  <b-checkbox-group>
                    @foreach ($permissions as $permission)
                      <div class="field">
                        <b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                      </div>
                    @endforeach
                  </ul>
                </div>
              </div>
            </article>
          </div> <!-- end of .box -->

          <button class="button is-primary">สร้างบทบาทใหม่</button>
          <a href="javascript:history.back()" class="button is-light" style="margin: 0px 0px 0px 15px;"> ยกเลิก</a>

        </div>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
  <script>

  var app = new Vue({
    el: '#app',
    data: {
      permissionsSelected: []
    }
  });

  </script>
@endsection
