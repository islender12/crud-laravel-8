@extends('users.plantilla')
@section('content')
@include('navbar')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                @include('users.errorsform')
                @include('users.createuser')
                @include('users.tabuser')
            </div>
        </div>
    </div>
@endsection
