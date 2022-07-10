@extends('layouts.app')

@section('content')
    <div class="jumbotron-fluid border toolbar-common">
        <div class="container py-4 px-2">
            <h1>Toolbar here</h1>
        </div>
    </div>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-dark">
                {{ $crop->name }}
                there
            </div>
            <div class="col-md-8 bg-primary">

            </div>
        </div>
    </div>
@endsection
