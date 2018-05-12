@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Attendees
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Attendee URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attendees as $attendee => $link)
                            <tr>
                                <td>
                                    <a href="{{ $link }}">{{ $attendee }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
