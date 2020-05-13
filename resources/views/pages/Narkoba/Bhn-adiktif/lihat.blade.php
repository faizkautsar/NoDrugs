@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <div class="row">
    <div class="col-md-12 mr-b-30">
        <div class="card blog-post-new">
            <div class="card-header sub-heading-font-family border-bottom-0 p-0">
                <figure>
                    <a href="javascript:void(0);">
                        <img class="card-img-top" src="{{asset('uploads/narkoba/BahanAdiktif/'.$bhn_adiktif->gambar)}}" height="400" alt="">
                    </a>
                </figure><span class="badge badge-danger text-uppercase">{{$bhn_adiktif->nama}}</span>

            </div>
            <div class="card-body sub-heading-font-family">
                <h5 class="card-title sub-heading-font-family mb-3">{{$bhn_adiktif->nama}}</h5>
                <div class="col-sm-12 col-md-12">
                   <div class="icon-box icon-box-side icon-box-circle icon-box-outline">
                       <header><a href="#" class="bw-3"><i class="lnr lnr-book"></i></a>
                       </header>
                       <section>
                           <h6 class="icon-box-title">Keterangan</h6>
                           <p>{!!$bhn_adiktif->keterangan!!}</p>
                       </section>
                   </div>
               </div>
               <div class="col-sm-12 col-md-12">
                  <div class="icon-box icon-box-side icon-box-circle-bg">
                    <header class="align-self-start"><a href="#" class="bg-danger"><i class="lnr lnr-sad"></i></a>
                                          </header>
                      <section>
                          <h6 class="icon-box-title">Dampak</h6>
                          <p class="text-danger">{!!$bhn_adiktif->dampak!!}</p>

                      </section>
                  </div>
              </div>

            </div>

            <div class="card-action">
              <button type="button" onclick="window.location='{{route("bhn_adiktif.index")}}'" class="btn btn-info" name="button">Kembali</button>

            </div>

        </div>
    </div>
</div>
@endsection
