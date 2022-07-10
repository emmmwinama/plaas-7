@extends('layouts.app')

@section('content')
    <div class="jumbotron-fluid border toolbar-common">
        <div class="container py-4 px-2">
            <h1>Toolbar here</h1>
        </div>
    </div>
    <div class="container py-4">
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $crops as $crop)
                    <tr>
                        <td>{{ $crop->name }}</td>
                        <td>{{ $crop->category }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $crops->links() }}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        Story header--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        --}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
