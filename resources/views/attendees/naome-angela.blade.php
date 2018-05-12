@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Naome Angela L. Banda
                    <a href="{{ route('users.create') }}" class="btn btn-success float-right">Create User</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
 		 <th scope="col">-------</th>
                                <th scope="col">Name</th>
                                <th scope="col">School</th>
                                <th scope="col">Age</th>
                              


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
	<td> <img src="{{asset('a/nayums.jpg'}}"></td>
                                <td> Naome Angela Banda </td>
                                <td> BSIT-3 major in Web Dev </td>
                                <td> 19</td>
                                
                                
                                    <a href="{{ route('users.edit', $user->id) }}" href="" class="btn btn-primary">Edit</a>
                                   
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
