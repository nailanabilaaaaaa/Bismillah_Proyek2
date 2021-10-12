@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Contact
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('menucontact.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" aria-describedby="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="text" name="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <textarea type="text" name="location" class="form-control" id="location" aria-describedby="location"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <a class="btn btn-success" href="{{ route('menucontact.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
