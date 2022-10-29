@extends('users.plantilla')
@section('content')
@include('navbar')
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-sm-4 text-center">
            <p>Editar Usuario</p>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-8">
                    <form action="{{ route('users.update', $user) }}" method="POST" class="flex-grow-1">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" placeholder="Nombre"
                                value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label>Correo</label>
                            <input type="text" name="email" class="form-control form-control-md" placeholder="Nombre"
                                value="{{ $user->email }}">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                        @include('users.errorsform')
                        <button class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
