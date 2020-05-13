@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Rehabilitasi</h5>
<a href="{{route('rehabilitasi.tambah')}}" class="btn btn-info">Tambah</a>
</div>
<div class="row">
  <div class="col-12">
    <table class="" id="myTable">
            <thead>
             <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>Umur</th>
              <th>Alamat</th>
              <th>Keterangan</th>
              <th>Rujukan</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
             @foreach($rehabilitasi as $r)
             <tr>
             <td>{{$r->id}}</td>
             <td>{{$r->nama}}</td>
             <td>{{$r->umur}}</td>
              <td>{{$r->alamat}}</td>
              <td>{{$r->keterangan}}</td>
              <td>{{$r->rujukan}}</td>
              <td>
                <a href="{{route('rehabilitasi.ubah', $r->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <a href="{{route('rehabilitasi.hapus', $r->id)}}" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus?')"
                  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>

             </td>

           </tr>
           @endforeach

         </tbody>
       </table>
     </div>
     </div>

@endsection
