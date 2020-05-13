@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Pencegahan</h5>
   <p class="text-muted">Upaya Pencegahan Meggunakan Narkoba</p>
    <form method="post" enctype="multipart/form-data" action="{{route('Pencegahan.store')}}">
      @csrf
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Aspek</label>
        <div class="col-md-9">
          <input class="form-control "
          name="aspek" placeholder="aspek" type="text" >
          </div>
      </div>
     <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l0">Keterangan</label>
              <div class="col-md-9">
                <input class="form-control "
                name="keterangan" placeholder="keterangan" type="text">
                </div>
      </div>
        <div class="form-actions">
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto btn-list">
                    <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
