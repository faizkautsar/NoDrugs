@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Hukum</h5>
<a href="{{route('hukum.tambah')}}" class="btn btn-info">Tambah</a>
      <table class="table table-bordered">
            <thead>
             <tr>
              <th>NO</th>
              <th>Keterangan</th>
              <th>Isi</th>


            </tr>
            </thead>
            <tbody>
             @foreach($hukum as $h)
             <td>{{$h->id}}</td>
             <td>{{$h->keterangan}}</td>
             <td>{{$h->isi}}</td>



           </tr>

@endforeach

  </tbody>
</table>
</div>
@endsection
