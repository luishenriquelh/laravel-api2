<h2>Listar todos os usuarios</h2>

<table>
    <tr>
        <td>ID</td>
        <td>nome</td>
        <td>email</td>
        <td>Acão</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="usuarios/{{ $user->id }}">Ver usuario</a>
            <form action="">
                <input type="hidden" name="user" value="">
                <input type="submit" value="Remover">
            </form>
        </td>
    </tr>
    @endforeach
</table>