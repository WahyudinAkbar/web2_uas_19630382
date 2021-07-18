@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-header">Tambah Mata Kuliah</div>

            <div class="card-body">
              <form action="{{ route('simpan.makul') }}" method="post" class="form-item">
                @csrf
                <div class="form-group mb-3">
                  <div class="form-row">
                    <div class="col">
                      <label for="kd_makul">Kode Mata Kuliah</label>
                      <input type="text" name="kd_makul" class="form-control" placeholder="Masukkan Kode Makul" />
                    </div>
                    <div class="col">
                      <label for="nama_makul">Nama Mata Kuliah</label>
                      <input type="text" name="nama_makul" class="form-control" placeholder="Masukkan Nama Makul" />
                    </div>
                    <div class="col">
                      <label for="sks">SKS</label>
                      <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row float-right">
                    <div class="col">
                      <button type="submit" class="btn btn-primary me-2">Simpan</button>
                      <a href="{{ route('makul') }}" class="btn btn-danger">Batal</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
