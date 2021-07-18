@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-header">Tambah Mata Kuliah</div>

            <div class="card-body">
              <form action="{{ route('simpan.mahasiswa') }}" method="post" class="form-item">
                @csrf
                <div class="form-group mb-3">
                  <div class="form-row">
                    <div class="col">
                      <label for="user_id">Nama Mahasiswa</label>
                      <select name="user_id" class="form-control">
                        <option value="" disabled selected>--Pilih Nama--</option>
                        @foreach ($user as $u)
                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col">
                      <label for="npm">NPM</label>
                      <input type="number" maxlength="8" name="npm" class="form-control" placeholder="Masukkan NPM" />
                    </div>
                    <div class="col">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" />
                    </div>
                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="form-row">
                    <div class="col">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" />
                    </div>
                    <div class="col">
                      <label for="npm">Jenis Kelamin</label>
                      <select name="gender" class="form-control">
                        <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="telpon">Telpon</label>
                      <input type="number" name="telpon" class="form-control" placeholder="Masukkan No Telpon" />
                    </div>
                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="form-row">
                    <div class="col">
                      <label for="alamat">Alamat</label>
                      <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none"></textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row float-right">
                    <div class="col">
                      <button type="submit" class="btn btn-primary me-2">Simpan</button>
                      <a href="{{ route('mahasiswa') }}" class="btn btn-danger">Batal</a>
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
