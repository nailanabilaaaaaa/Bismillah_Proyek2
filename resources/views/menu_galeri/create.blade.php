@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">Tambah Menu Profil</div>
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
            <form method="post" action="{{ route('menuprofil.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" name="id" class="form-control" id="id" aria-describedby="id" >
                </div>
                <div class="form-group">
                    <label for="profil_sekolah">PROFIL SEKOLAH</label>
                    <textarea type="profil_sekolah" name="profil_sekolah" class="form-control" id="profil_sekolah" aria-describedby="profil_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="motto_sekolah">MOTTO SEKOLAH</label>
                    <textarea type="motto_sekolah" name="motto_sekolah" class="form-control" id="motto_sekolah" aria-describedby="motto_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="visi_sekolah">VISI SEKOLAH</label>
                    <textarea type="visi_sekolah" name="visi_sekolah" class="form-control" id="visi_sekolah" aria-describedby="visi_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="foto_visi">FOTO VISI</label>
                    <input type="file" name="foto_visi" class="form-control" id="foto_visi" aria-describedby="foto_visi" value="{{old('foto_visi')}}" >
                </div>
                <div class="form-group">
                    <label for="misi_sekolah">MISI SEKOLAH</label>
                    <textarea type="misi_sekolah" name="misi_sekolah" class="form-control" id="misi_sekolah" aria-describedby="misi_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="foto_misi">FOTO MISI</label>
                    <input type="file" name="foto_misi" class="form-control" id="foto_misi" aria-describedby="foto_misi" value="{{old('foto_misi')}}" >
                </div>
                <div class="form-group">
                    <label for="tujuan_sekolah">TUJUAN SEKOLAH</label>
                    <textarea type="tujuan_sekolah" name="tujuan_sekolah" class="form-control" id="tujuan_sekolah" aria-describedby="tujuan_sekolah" ></textarea>
                </div>
                <div class="form-group">
                    <label for="foto_tujuan1">FOTO TUJUAN 1</label>
                    <input type="file" name="foto_tujuan1" class="form-control" id="foto_tujuan1" aria-describedby="foto_tujuan1" value="{{old('foto_tujuan1')}}" >
                </div>
                <div class="form-group">
                    <label for="foto_tujuan2">FOTO TUJUAN 2</label>
                    <input type="file" name="foto_tujuan2" class="form-control" id="foto_tujuan2" aria-describedby="foto_tujuan2" value="{{old('foto_tujuan2')}}" >
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection