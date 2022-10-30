<table class="table">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Cantidad de Post</th>
        <th colspan="2" class="text-center">Acción</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->get_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->posts->count() }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('¿Desea Eliminar?')">Eliminar</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('users.edit', Crypt::encrypt($user->id)) }}"
                        class="btn btn-sm btn-primary">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
