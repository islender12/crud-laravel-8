@extends('users.plantilla')
@section('content')
@include('navbar')
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-sm-4">
            <p class="text-center">Editar Post</p>
        </div>
        <div class="col-sm-4">
            <form action="{{ route('posts.update', Crypt::encrypt($post->id)) }}" method="POST" class="flex-grow-1">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label>title</label>
                    <input type="text" name="title" class="form-control" placeholder="Nombre" value="{{ $post->title }}">
                </div>
                @include('users.errorsform')
                <button class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@endsection
