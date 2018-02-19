@extends('layouts.manage')

@section('content')

  <div class="container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">หมวดหมู่ - ประกาศจัดซื้อจัดจ้าง</h1>
      </div>

    </div>
    <hr class="m-t-0">
    <div class="columns m-t-10">
      <div class="column is-three-quarters">
        <table class="table is-bordered">
          <thead>
            <tr>
              <th class="has-text-centered">ลำดับที่</th>
              <th class="has-text-centered" style="width: 64%;">ชื่อหมวดหมู่</th>
              <th class="has-text-centered">#</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cate_tenders as $index => $cate_tender)
            <tr>
              <th class="has-text-centered">{{ $index +1 }}</th>
              <td style="width: 64%;">{{ $cate_tender->name }}</td>


                  <td>



                    <form id="delete" action="{{ route('cate_tenders.destroy', $cate_tender->id)}}"
                          method="POST" onsubmit='return ConfirmDelete()'>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                          <button class="button is-danger"><i class="far fa-trash-alt btn-xs"></i></button>
                    </form>

                  </td>
            </tr>
            @endforeach

          </tbody>
        </table>

      </div>
      <div class="column">
        <div class="well">
          <form action="{{route('cate_tenders.store')}}" method="POST">
            {{csrf_field()}}
            <div class="columns">
              <div class="column">
                <div class="field">
                  <label for="name" class="label">ชื่อหมวดหมู่</label>
                  <p class="control">
                    <input type="text" class="input" name="name" id="name">
                  </p>
                </div>
            <div class="columns">
              <div class="column">
                <button class="button is-link is-pulled-right" style="width: 150px;"><span class="icon-link"><i class="fas fa-archive"></i></span> สร้างใหม่</button>
                <a href="javascript:history.back()" class="button is-light is-pulled-right" style="margin: 0px 15px 0px 0px;">
                  <span class="icon-link"><i class="fa fa-arrow-circle-left m-r-10"></i></span> กลับ</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


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
