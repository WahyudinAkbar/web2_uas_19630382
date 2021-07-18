@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-header">Edit Mahasiswa</div>

            <div class="card-body">
              <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post" class="form-item">
                @csrf
                <div class="form-group mb-3">
                  <div class="form-row">
                    <div class="col">
                      <label for="user_id">Nama Mahasiswa</label>
                      <select name="user_id" class="form-control">
                        <option value="" disabled selected>--Pilih Nama--</option>
                        @foreach ($user as $u)
                        <option value="{{ $u->id }}" {{ $mahasiswa->user_id == $u->id ? 'selected' : '' }} >{{ $u->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col">
                      <label for="npm">NPM</label>
                      <input type="number" maxlength="8" name="npm" value="{{ is_null($mahasiswa->npm) ? '' : $mahasiswa->npm }}" class="form-control" placeholder="Masukkan NPM" />
                    </div>
                    <div class="col">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" value="{{ is_null($mahasiswa->tempat_lahir) ? '' : $mahasiswa->tempat_lahir }}" class="form-control" placeholder="Masukkan Tempat Lahir" />
                    </div>
                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="form-row">
                    <div class="col">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" value="{{ is_null($mahasiswa->tgl_lahir) ? '' : $mahasiswa->tgl_lahir }}" class="form-control" placeholder="Masukkan Tanggal Lahir" />
                    </div>
                    <div class="col">
                      <label for="npm">Jenis Kelamin</label>
                      <select name="gender" value="{{ is_null($mahasiswa->gender) ? '' : $mahasiswa->gender }}" class="form-control">
                        <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                        <option value="L" {{ $mahasiswa->gender == 'L' ? 'selected' : '' }} >Laki-Laki</option>
                        <option value="P" {{ $mahasiswa->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="telpon">Telpon</label>
                      <input type="number" name="telpon" value="{{ is_null($mahasiswa->telpon) ? '' : $mahasiswa->telpon }}" class="form-control" placeholder="Masukkan No Telpon" />
                    </div>
                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="form-row">
                    <div class="col">
                      <label for="alamat">Alamat</label>
                      <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none">
                        {{ is_null($mahasiswa->alamat) ? '' : $mahasiswa->alamat }}
                      </textarea>
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
