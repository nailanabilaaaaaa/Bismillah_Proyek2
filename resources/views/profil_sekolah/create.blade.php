@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Profil</div>
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
            <form method="post" action="{{ route('profil_sekolah.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" name="id" class="form-control" id="id" aria-describedby="id" >
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="title" name="title" class="form-control" id="title" aria-describedby="title" >
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="content" name="content" class="form-control" id="content" aria-describedby="content" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection