@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Detail Menu Profil
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID : </b>{{$profil->id}}</li>
                    <li class="list-group-item"><b>PROFIL SEKOLAH : </b>{{$profil->profil_sekolah}}</li>
                    <li class="list-group-item"><b>MOTTO SEKOLAH : </b>{{$profil->motto_sekolah}}</li>
                    <li class="list-group-item"><b>VISI SEKOLAH : </b>{{$profil->visi_sekolah}}</li>
                    <li class="list-group-item"><b>MISI SEKOLAH : </b>{{$profil->misi_sekolah}}</li>
                    <li class="list-group-item"><b>TUJUAN SEKOLAH : </b>{{$profil->tujuan_sekolah}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('menuprofil.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection