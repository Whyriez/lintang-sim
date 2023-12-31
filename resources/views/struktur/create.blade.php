@extends('template-dashboard')

@section('content')
    <div class="card shadow">
        <div class="card-body p-4">
            <h2 class="fw-bolder text-primary">Tambah Struktur Organisasi</h2>
            <form action="{{ route('dashboard.struktur.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="form-group">
                    <label for="inputPassword3" class="col-sm-2 col-form-label ">Foto Organisasi</label>
                    <div class="col-sm-10 my-2">
                        <input type="file" class="form-control-file" name="foto_struktur" id="foto_kompetensi">
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
