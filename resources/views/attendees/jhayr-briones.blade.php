@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="text-center">
                      <img src="{{asset('images/jhayr/jhayrbriones.jpg')}}" class="rounded">
                      <h1>{{$name}}</h1>
                      <h4>Web Developer</h4>
                      <h4>Social</h4>
                      <a href="https://www.facebook.com/jayr.briones.9" target="_blank"><img src="{{asset('images/jhayr/facebook.png')}}" height="65" class="rounded"></a>
                      <img src="{{asset('images/jhayr/twitter.png')}}" height="85" class="rounded">
                      <img src="{{asset('images/jhayr/instagram.jpg')}}" height="85" class="rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
