@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Joshua Ferrer</div>

                <div class="card-body" align="center" style="background-color:#EEF1F3;">
                    <marquee scrollamount="2300">
                        <img src="{{asset('img/ferrer.jpg')}}" style="width: 200px;margin-bottom: 15px;"/>
                    </marquee>
                    <marquee scrollamount="2850">
                        <div class="form-group">
                            <h3>Address: Salinas drive ext. Cebu City</h3>
                        </div>
                        <div class="form-group">
                            <h3>Birth Date: Aug 6, 1995</h3>
                        </div>
                        <div class="form-group">
                            <h3>Birth Place: Muntinlupa City</h3>
                        </div>
                        <div class="form-group">
                            <h3>Email: ferrerjoshua.dev@gmail.com</h3>
                        </div>
                        <div class="form-group">
                            <h3>Contact: 09225499460</h3>
                        </div>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
