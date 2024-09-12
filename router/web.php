<?php 
  // Primero va a Middleware, luego al controlador, luego al servicio
  require_once 'app/controllers/userController.php';

  // Primero a manera de prueba se crea el metodo para guardar
  $userController = new userController(new userService(new UserRepository()));

  // Comprobamos que peticion viene desde el servidor:
  switch($_SERVER['REQUEST_METHOD']) {
    case 'POST':
      $userController->create();
      break;
  }
?>