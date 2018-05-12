@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Users
                    <a href="{{ route('users.index') }}" class="btn btn-danger float-right">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{ $errors->first('name', 'is-invalid') }}" id="name" name="name" value="{{ old('email') }}" placeholder="John Doe">
                            @if($error = $errors->first('name'))
                            <div class="invalid-feedback">
                                {{ $error }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control {{ $errors->first('email', 'is-invalid') }}" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter email">
                            @if($error = $errors->first('email'))
                            <div class="invalid-feedback">
                                {{ $error }}
                            </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
