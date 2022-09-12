@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
            {{Session::get('message')}}
            </div>
            @endif
            <form method="POST" action="{{route('category.store')}}">@csrf 
                <div class="card">
                    <div class="card-header">{{ __('Manage Food Category') }}
                    <a href="{{route('category.index')}}">
                        <button class="btn btn-outline-primary" style="margin-left: 550px;">Go to the List</button>
                    </a></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
