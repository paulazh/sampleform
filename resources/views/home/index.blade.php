@extends('layouts/app');

@section('content')
    <div class="col-lg-8">
        @if (count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form_validate" method="post" action="store">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input class="form-control" type="text" name="name" value="{{old('name')}}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input class="form-control" type="text" name="lastname" value="{{old('lastname')}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="{{old('email')}}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input class="form-control" type="tel" name="phone" value="{{old('phone')}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    <div class="hidden-xs hidden-sm col-lg-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">My contact info:</h4>
                <p class="card-text">Quick example text with my contact information.</p>
            </div>
            <div class="card-block">
                <ul>
                    <li>Name: Paula Hernandez</li>
                    <li>Email: pzhernandez@gmail.com</li>
                    <li>Phone: (561)-729-7967</li>
                </ul>
                <br>
                <a href="#" class="btn btn-primary">Contact me</a>
            </div>
        </div>
    </div>


@endsection
