<div >
    <form action="{{ route('usuarios.actualizar',$usuario->id)}}" method="POST">
        <! –– username section ––>
        @method('PUT')
            @csrf
            <label for="username_new">Nombre de usuario</label> <br>
            <input type="text" name="name" placeholder="Nombre" value="{{$usuario->name}}"><br>
            {!! $errors ->first('name','<small>:message</small><br>')!!}
        <! ––  password section ––>

        <label for="password">Cambiar contraseña </label><br>
        <input type="text" name="password" placeholder="contraseña" value="{{$usuario->password}}"><br>
        {!! $errors ->first('password','<small>:message</small><br>')!!}
        <! ––  Email section ––>

        <label for="Email">Ingresar correo electronico </label><br>
        <input type="email" name="email" placeholder="Correo" value="{{$usuario->email}}"><br>
        {!! $errors ->first('email','<small>:message</small><br>')!!}

        <label for="Phone">Ingresar Telefono  </label><br>
        <input type="text" name="phone" placeholder="Tlf" value="{{$usuario->phone}}"><br>
        {!! $errors ->first('phone','<small>:message</small><br>')!!}

        <label for="rol">Ingresar Rol  </label><br>
        <input type="text" name="rol" placeholder="su ocupación" value="{{$usuario->rol}}"><br>
        {!! $errors ->first('rol','<small>:message</small><br>')!!}

        <input type="submit" name="Guardar">
    </form>
