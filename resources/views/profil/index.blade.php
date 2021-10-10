@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Profil Sekolah</h2>
                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('profil.create') }}"> Input Profil</a>
                </div>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($profil as $data)
        <tr>
            <td>{{ $data->title}}</td>
            <td>{{ $data->content}}</td>
            <td>
                <form action="{{ route('profil.destroy',$data->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('profil.show',$data->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('profil.edit',$data->id) }}">Edit</a>
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection