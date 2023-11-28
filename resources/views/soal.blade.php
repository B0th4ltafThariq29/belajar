@extends('adminlte::page')

@section('title','dashboard')

@section('content_header')
<div class="alert alert-warning d-flex">
    <i class="fas fa-fw fa-info-circle mr-3 mt-1"></i>
    <marquee>Ini merupakan Bank soal siswa SMK Multikarya || perhatikan saat melakukan penginputan, penghapusan dan pengeditan data ||
    <b>SMK Multikarya</b></marquee>
</div>
@endsection

@section('content')
<div class="pt-2">
     <div class="card ">
   <div class="card-header bg-primary">
     <h2>Bank Soal</h2>
   </div>
   <div class="card-body p-2">
    <a class="btn btn-primary m-3" href="/tambah-data" role="button"> <i class="fas fa-plus"></i> Tambah Soal </a>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr class="table-active">
                <th scope="col">No</th>
                <th scope="col">Guru</th>
                <th scope="col">Judul</th>
                <th scope="col">PG</th>
                <th scope="col">Essai</th>
                <th scope="col">Waktu</th>
                <th scope="col">Daftar Soal</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
   </div>
 </div>
</div>
@include('sweetalert::alert')

@stop

