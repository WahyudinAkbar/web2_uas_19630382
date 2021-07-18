@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-header">Edit Nilai</div>

            <div class="card-body">
              <form action="{{ route('update.nilai', $nilai->id) }}" method="post" class="form-item">
                @csrf
                <div class="form-group mb-3">
                  <div class="form-row">
                    <div class="col-3">
                      <label for="mahasiswa_id">Nama Mahasiswa</label>
                    </div>
                    <div class="col">
                      <select name="mahasiswa_id" class="form-control">
                        <option value="" disabled selected>--Pilih Mahasiswa--</option>
                        @foreach ($mahasiswa as $mhs)
                        <option value="{{ $mhs->id }}" {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }} >{{ $mhs->user->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-row my-4">
                    <div class="col-3">
                      <label for="makul_id">Nama MataKuliah</label>
                    </div>
                    <div class="col">
                      <select name="makul_id" class="form-control">
                        <option value="" disabled selected>--Pilih MataKuliah--</option>
                        @foreach ($makul as $mkl)
                        <option value="{{ $mkl->id }}" {{ $nilai->makul_id == $mkl->id ? 'selected' : '' }} >{{ $mkl->nama_makul }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-3">
                      <label for="nilai">Nilai</label>
                    </div>
                    <div class="col">
                      <input type="text" name="nilai" value="{{ $nilai->nilai }}" class="form-control" placeholder="Masukkan Nilai" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row float-right">
                    <div class="col">
                      <button type="submit" class="btn btn-primary me-2">Simpan</button>
                      <a href="{{ route('nilai') }}" class="btn btn-danger">Batal</a>
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
