@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Pencegahan</h5>
<a href="{{route('pencegahan.tambah')}}" class="btn btn-info">Tambah</a>
      <table class="table table-bordered">
            <thead>
             <tr>
              <th>NO</th>
              <th>Aspek</th>
              <th>Keterangan</th>


            </tr>
            </thead>
            <tbody>

             @foreach($pencegahan as $up)
             <td>{{$up->id}}</td>
             <td>{{$up->aspek}}</td>
             <td>{{str_limit($up->keterangan,80,'....')}}</td>



           </tr>

@endforeach

  </tbody>
</table>
</div>
@endsection
