<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backend-PHP CRUD + Bootstrap Proyect</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Administración de Usuarios</h1>

    <div class="row">
      <div class="col-3">
        <form id="formCrearUsuario" class="mb-5">
          <h2>Crear Usuario</h2>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" form="nombre" id="nombre" class="form-control" required>

            <label for="apaterno">Apellido Paterno</label>
            <input type="text" form="apaterno" id="apaterno" class="form-control" required>

            <label for="amaterno">Apellido Materno</label>
            <input type="text" form="amaterno" id="amaterno" class="form-control">

            <label for="direccion">Dirección</label>
            <input type="text" form="direccion" id="direccion" class="form-control">

            <label for="telefono">Telefono</label>
            <input type="text" form="telefono" id="telefono" class="form-control">

            <label for="ciudad">Ciudad</label>
            <input type="text" form="ciudad" id="ciudad" class="form-control">

            <label for="usuario">Usuario</label>
            <input type="text" form="usuario" id="usuario" class="form-control" required>

            <label for="password">Contraseña</label>
            <input type="password" form="password" id="password" class="form-control" required>
            
            <label for="usuario">Rol</label>
            <select name="rol" id="rol" class="form-control">
              <option value="">--> Seleccione una opcion<--</option>
              <option value="admin">Administrador</option>
              <option value="user">Usuario</option>
            </select>

            <label for="usuario">Usuario</label>
            <input type="text" form="usuario" id="usuario" class="form-control" required>
        </div> <!-- .form-group -->
        </form>
      </div> <!-- -.col-3 -->
      
      <div class="col-9"></div>
    </div>
  </div>
  <script src="./js/app.js"></script>
</body>
</html>