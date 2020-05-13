@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Statistik</h5>
<a href="{{route('statistik.tambah')}}" class="btn btn-info">Tambah</a>
</div>
<div class="row">
  <div class="col-12">
    <table class="" id="myTable">
      <thead>
           <tr>
            <th>NO</th>
            <th>Daerah</th>
            <th>Kasus</th>
            <th>Tersangka</th>
            <th>Pasien</th>
          </tr>
      </thead>
      <tbody>
        <tr>
           @foreach($statistik as $s)
           <td>{{$s->id}}</td>
           <td>{{$s->daerah}}</td>
           <td>{{$s->kasus}}</td>
            <td>{{$s->tersangka}}</td>
            <td>{{$s->pasien}}</td>
         </tr>

@endforeach

    </tbody>
  </table>
</div>
</div>
@endsection
