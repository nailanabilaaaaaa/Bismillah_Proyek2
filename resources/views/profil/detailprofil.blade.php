@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Detail Profil
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID : </b>{{$profil->id}}</li>
                    <li class="list-group-item"><b>Title : </b>{{$profil->title}}</li>
                    <li class="list-group-item"><b>Content : </b>{{$profil->content}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('profil.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection