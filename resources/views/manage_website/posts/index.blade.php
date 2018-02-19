@extends('layouts.manage_website')

@section('content')

  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">This is the posts.index page</h1>
      </div>
      <div class="column">
        <a href="{{route('posts.create')}}" class="button is-link is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Post</a>
      </div>
    </div>
    <hr class="m-t-0">



  </div> <!-- end of .flex-container -->

@endsection
