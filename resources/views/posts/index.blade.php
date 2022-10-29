@extends('users.plantilla')
@section('content')
    @include('navbar')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                @include('users.errorsform')
                @include('posts.createpost')
                @include('posts.tabpost')
            </div>
        </div>
    </div>
@endsection
