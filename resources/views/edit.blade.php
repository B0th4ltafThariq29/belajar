@extends('adminlte::page')

@section('title','Tambah Data Siswa')

@section('content_header')
<div class="alert alert-info d-flex">
    <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
    <p>Masukkan data dengan benar</p>
</div>
<h1>Edit Data Siswa</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            @foreach($siswa as $siswa)
            <form method="post" action="/data/update/" >
                @csrf

                <input type="hidden" name="id" value="{{ $siswa->id }}">

                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama_siswa" placeholder="Nama" value="{{ $siswa->nama }}">
                <label for="" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="{{ $siswa->kelas }}">
                <label for="" class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{ $siswa->jurusan }}">
                <label for="" class="form-label">Foto</label>
                <div class="form-group">
                    <input type="file" name="profile_image" placeholder="Masukan Gambar" class="form-control" value=""{{ $siswa->profile_image }}"">
                </div>
                <br>
                <button type="submit" class="btn btn-success mt-4">Submit</button>
          </form>
          @endforeach
        </div>
    </div>


@stop

