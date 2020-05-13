@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Dampak Negatif</h5>
<a href="{{route('dampak.tambahkan')}}" class="btn btn-info">Tambah</a>
      <table class="table table-bordered">
            <thead>
             <tr>
              <th>NO</th>
              <th>Anggota Tubuh</th>
              <th>Keterangan</th>
              <th>bahaya</th>
              <th>gambar</th>

            </tr>
            </thead>
            <tbody>

             @foreach($bahaya as $b)
             <td>{{$b->id}}</td>
             <td>{{$b->tubuh}}</td>
             <td>{{$b->keterangan}}</td>
             <td>{{$b->bahaya}}</td>
             <td>{{$b->gambar}}</td>



           </tr>

@endforeach

  </tbody>
</table>
</div>
@endsection
