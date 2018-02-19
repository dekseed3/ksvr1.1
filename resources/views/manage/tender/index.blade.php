@extends('layouts.manage')

@section('content')

  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">ประกาศจัดซื้อจัดจ้าง</h1>
      </div>
      <div class="column">
        <a href="{{route('tenders-admin.create')}}" class="button is-link is-pulled-right button-link-manage">
          <span class="icon-link"><i class="fas fa-plus-circle fa-fw"></i></span> เพิ่มข้อมูลประกาศจัดซื้อจัดจ้าง</a>
        <a href="{{route('tenders')}}" class="button is-link is-pulled-right" target="_blank">
          <span class="icon-link"><i class="fas fa-eye fa-fw"></i></span> ดูหน้านี้</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns m-t-10">
      <div class="column">

        @if (session('message'))

          <b-notification type="is-info">
          {{ session('message') }}
        </b-notification>

      @endif

        <table class="table is-bordered" style="width: 100%;">
          <thead>
            <tr>
              <th class="has-text-centered" style="width: 6%;">ลำดับที่</th>
              <th class="has-text-centered" style="width: 64%;">หัวเรื่อง</th>
              <th class="has-text-centered">หมวดหมู่</th>
              <th class="has-text-centered">ไฟล์ดาวห์โหลด</th>
              <th class="has-text-centered" style="width: 8%;">ประกาศเมื่อวันที่</th>
              <th class="has-text-centered">#</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tenders as $index => $tender)
            <tr>
              <th class="has-text-centered">{{ $index +1 }}</th>
              <td>{{ $tender->name }}</td>
              <td class="has-text-centered">{{ $tender->cate_tender->name }}</td>
              <td class="has-text-centered"><a href="{{ asset( 'files/' . $tender->file) }}" target="_blank">{{ $tender->filename }}</a></td>
              <td class="has-text-centered">{{ $tender->created_at }}</td>
              {{-- @if(($tender->user_id) == (Auth::user()->id)) --}}
              <td class="has-text-centered">
                <a href="{{ route('tenders-admin.edit', $tender->id)}}" class="button is-link"><i class="far fa-edit btn-xs"></i></a>
                  <form id="delete" name="delete" action="{{ route('tenders-admin.destroy', $tender->id)}}" method="POST" onsubmit='return ConfirmDelete()'>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                      <button class="button is-danger"><i class="far fa-trash-alt btn-xs"></i></button>
                  </form>
              </td>
              {{-- @endif --}}
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      </div>
      {{$tenders->links()}}
  </div> <!-- end of .flex-container -->

@endsection
@section('scripts')
<script type="text/javascript">

function ConfirmDelete()
 {
   var x = confirm("คุณต้องการลบหรือไหม?");
      if (x)
          return true;
      else
          return false;
 }

</script>
@endsection
