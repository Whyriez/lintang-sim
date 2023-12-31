@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Tambah Foto kegiatan </h2>
            <form method="post" action="{{route('dashboard.galeri.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-grup row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label mx-1">Nama Kegiatan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kegiatan">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label mx-1">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="keterangan" rows="5"></textarea>
                    </div>
                    <fieldset class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Kegiatan</label>
                        <div class="col-sm-10 my-2">
                            <input type="file" class="form-control-file" name="foto_galeri">
                        </div>
                </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
