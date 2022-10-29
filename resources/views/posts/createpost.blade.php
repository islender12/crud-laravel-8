<div class="card border-0 shadow-md">
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST">
            <div class="row justify-content-center">
                @csrf
                <div class="col-sm-5 mb-12 mb-sm-4">
                    <input type="text" name="title" class="form-control" placeholder="Titulo">
                </div>
                <div class="col-sm-5 mb-12 mb-sm-4">
                    <select name="user" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2 mb-12 mb-sm-4">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
