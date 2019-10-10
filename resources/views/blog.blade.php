@extends('layouts.app')

@section('content')
    <header class="service">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h1 class="font-weight-light">Blog</h1>
                    <p class="lead3"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="justify-content-center py-3">
            <h1>Subscribe to our Newsletter</h1>
            <div class="row">
                <form action="{{ url('newsletter') }}" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" name="user_email" id="exampleInputEmail" class="form-control">
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
