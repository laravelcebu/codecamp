@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Marlyn Sanctuary
                    <br>
                    (Carpe Diem)
                    <!-- <a href="{{ route('users.create') }}" class="btn btn-success float-right">Create User</a> -->
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">            
                                <img  src="{{ asset('marlyn/marlyn.jpg') }}" height="100" width="70">     
</th>
                                <td>Marlyn Tamayo</td>
                                <td>USJ-R BSIT major in Web Development</td> 
                                <td>"Smile is a simple gesture yet such a powerful asset."</td>
                                <td>Signing of.......</td>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td>
                                   
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
