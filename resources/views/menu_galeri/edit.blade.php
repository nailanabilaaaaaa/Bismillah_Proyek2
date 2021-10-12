@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Menu Profil
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('menuprofil.update', $profil->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" name="id" class="form-control" id="id" value="{{ $profil->id }}" ariadescribedby="id" >
                </div>
                <div class="form-group">
                    <label for="profil_sekolah">PROFIL SEKOLAH</label>
                    <textarea type="profil_sekolah" name="profil_sekolah" class="form-control" id="profil_sekolah" value="{{ $profil->profil_sekolah }}" aria-describedby="profil_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="motto_sekolah">MOTTO SEKOLAH</label>
                    <textarea type="motto_sekolah" name="motto_sekolah" class="form-control" id="motto_sekolah" value="{{ $profil->motto_sekolah }}" aria-describedby="motto_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="visi_sekolah">VISI SEKOLAH</label>
                    <textarea type="visi_sekolah" name="visi_sekolah" class="form-control" id="visi_sekolah" value="{{ $profil->visi_sekolah }}" aria-describedby="visi_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="foto_visi">FOTO VISI</label>
                    <input type="file" name="foto_visi" class="form-control" id="foto_visi" aria-describedby="foto_visi" value="{{ $profil->foto_visi }}">
                    <img width="150px" src="{{asset('storage/'.$profil->foto_visi)}}"> 
                </div>
                <div class="form-group">
                    <label for="misi_sekolah">MISI SEKOLAH</label>
                    <textarea type="misi_sekolah" name="misi_sekolah" class="form-control" id="misi_sekolah" value="{{ $profil->misi_sekolah }}" aria-describedby="misi_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="foto_misi">FOTO MISI</label>
                    <input type="file" name="foto_misi" class="form-control" id="foto_misi" aria-describedby="foto_misi" value="{{ $profil->foto_misi }}" >
                    <img width="150px" src="{{asset('storage/'.$profil->foto_misi)}}"> 
                </div>
                <div class="form-group">
                    <label for="tujuan_sekolah">TUJUAN SEKOLAH</label>
                    <textarea type="tujuan_sekolah" name="tujuan_sekolah" class="form-control" id="tujuan_sekolah" value="{{ $profil->tujuan_sekolah }}" aria-describedby="tujuan_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="foto_tujuan1">FOTO TUJUAN 1</label>
                    <input type="file" name="foto_tujuan1" class="form-control" id="foto_tujuan1" aria-describedby="foto_tujuan1" value="{{ $profil->foto_tujuan1 }}" >
                    <img width="150px" src="{{asset('storage/'.$profil->foto_tujuan1)}}"> 
                </div>
                <div class="form-group">
                    <label for="foto_tujuan2">FOTO TUJUAN 2</label>
                    <input type="file" name="foto_tujuan2" class="form-control" id="foto_tujuan2" aria-describedby="foto_tujuan2" value="{{ $profil->foto_tujuan2 }}" >
                    <img width="150px" src="{{asset('storage/'.$profil->foto_tujuan2)}}"> 
                </div>
                <button type="submit" class="btn btn-primary float-right">Update Profil Sekolah</button> 
            </form>
            </div>
        </div>
    </div>
</div>
@endsection