<div class="card border-0 shadow-md">
    <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
            <div class="row justify-content-center">
                @csrf
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="text" name="name" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" name="email" class="form-control" placeholder="correo">
                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="col-sm-2 mb-2 mb-sm-0">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
