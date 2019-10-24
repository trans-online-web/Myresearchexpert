@extends('layouts.app')

@section('content')
    <header class="service">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h1 class="font-weight-light">Story</h1>
                    <p class="lead3">
                        <a href="/blog">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-hand-point-left"></i>
                                Back
                            </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <blog-content></blog-content>
@endsection
