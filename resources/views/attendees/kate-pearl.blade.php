@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    All about Kate
                    <a href="{{ route('users.create') }}" class="btn btn-success float-right">Create User</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Likes:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>kate</td>
                                <td>I like green tea and lofixIndie songs</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" href="" class="btn btn-primary">Edit</a>
                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                        <button type="submit" href="" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
