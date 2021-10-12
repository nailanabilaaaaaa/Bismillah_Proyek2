@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 100rem;">
            <div class="card-header">
                Edit Contact
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
            <form method="post" action="{{ route('menucontact.update', $contact->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="phone">Phone</label>
                <textarea type="phone" name="phone" class="form-control" id="phone" value="{{ $contact->phone }}" aria-describedby="phone" ></textarea>
            </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <textarea type="email" name="email" class="form-control" id="email" value="{{ $contact->email }}" aria-describedby="email" ></textarea>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <textarea type="location" name="location" class="form-control" id="location" value="{{ $contact->location }}" aria-describedby="location" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">Update Contact</button>
            </form>
            </div>
            <a class="btn btn-success" href="{{ route('menucontact.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
