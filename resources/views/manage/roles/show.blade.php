@extends('layouts.manage')

@section('content')
  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
        <h5>{{$role->description}}</h5>
      </div>
      <div class="column">

        <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> แก้ไขบทบาท</a>
        <a href="javascript:history.back()" class="button is-light is-pulled-right" style="margin: 0px 15px 0px 0px;"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <h2 class="title">สิทธิ์การใช้งานระบบ:</h1>
                <ul>
                  @foreach ($role->permissions as $r)
                    <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection
