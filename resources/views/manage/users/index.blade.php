@extends('layouts.manage')

@section('content')
    <div class="container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">จัดการข้อมูลกำลังพล</h1>
        </div>
        <div class="column">
          <a href="{{route('users.create')}}" class="button is-link is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> เพิ่มข้อมูลกำลังพลใหม่</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow" style="width: 100%;">
            <thead>
              <tr>
                <th class="has-text-centered">ลำดับที่</th>
                <th>ชื่อ</th>
                <th>อีเมล์</th>
                <th>สร้างเมื่อ</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($users as $index => $user)
                <tr>
                  <th class="has-text-centered">{{ $index +1 }}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td class="has-text-centered">{{$user->created_at->toFormattedDateString()}}</td>
                  <td class="has-text-right">
                    <a class="button is-outlined m-r-5" href="{{route('users.show', $user->id)}}">แสดงข้อมูล</a>
                    <a class="button is-light" href="{{route('users.edit', $user->id)}}">แก้ไขข้อมูล</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$users->links()}}
    </div>
@endsection
