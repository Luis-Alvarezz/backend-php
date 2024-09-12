<?php
  require_once 'app/services/userService.php';

  class userController {
    private $userService;

    public function __construct(userService $userService)
    {
      $this->userService = $userService;
    }

    // Funcion para leer formulario:
      public function create() {
        // almacenamiento del formulario a traves de data:
        $data = json_decode(file_get_contents('php://input', true));
        return $this->userService->createuser($data);
        // Antes de validar, debemos comprobar el token, esto en Middleware
      }
  }
?>