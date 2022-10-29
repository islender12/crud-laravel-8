<table class="table">
    <thead>
        <th>ID</th>
        <th>Titulo</th>
        <th>Creador</th>
        <th colspan="2" class="text-center">Acción</th>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user->name }}</td>
                <td>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Desea Eliminar?')">Eliminar</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('posts.edit', Crypt::encrypt($post->id))}}" class="btn btn-sm btn-primary">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
