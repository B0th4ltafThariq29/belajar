@extends('adminlte::page')

@section('title','dashboard')

@section('content_header')
<div class="alert alert-warning d-flex">
    <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
    <marquee>Ini merupakan data dari siswa SMK Multikarya || perhatikan saat melakukan penginputan, penghapusan dan pengeditan data ||
    <b>SMK Multikarya</b></marquee>
</div>
@endsection

@section('content')
<div class="pt-2">
     <div class="card ">
   <div class="card-header bg-primary">
     <h2>Data Siswa</h2>
   </div>
   <div class="card-body p-2">
    <a class="btn btn-primary m-3" href="/tambah-data" role="button"> <i class="fas fa-plus"></i> Tambah Data Siswa </a>
    <a class="btn btn-danger m-3" href="#" role="button"> <i class="fas fa-print"></i> print </a>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr class="table-active">
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

                @foreach ($siswa as $siswa)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>
                    @if($siswa->profile_image)
                    <img src="{{ asset('/images/' . $siswa->profile_image) }}" alt="Siswa Image" width="100">
                    @else
                    No Image
                    @endif
                    </td>
                    <td>
                        <a class="btn btn-primary mb-1" href="/data/edit/{{ $siswa->id }}" role="button"> <i class="fas fa-cog"></i> Edit</a>
                        <a class="btn btn-danger mb-1" href="/data/delete/{{ $siswa->id }}" role="button" data-confirm-delete="true"> <i class="fas fa-trash"></i> Hapus </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
   </div>
 </div>
</div>
@include('sweetalert::alert')

@stop

