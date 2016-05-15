@extends('layouts/app');

@section('content')
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Thank you for your information. Please check details below.
        </div>
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Information sent:</h4>
                <p class="card-text">This is the information you just sent to us.</p>
            </div>
            <div class="card-block">
                <ul>
                    <li>Name: {{$data[0]->name}} {{$data[0]->lastname}}</li>
                    <li>Email: {{$data[0]->email}}</li>
                    <li>Phone: {{$data[0]->phone}}</li>
                </ul>
            </div>
        </div>
    </div>


@endsection
