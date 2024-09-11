<?php
  require_once 'app/repositories/userRepository.php';

  class userService {
    private $userRepository;

    // Constructor:
    public function __construct(userRepository $userRepository) {
      $this->userRepository;
    }

    public function createuser($data) {
      $user = new User();
      $user->nombre = $data['nombre'];
      $user->apaterno = $data['apaterno'];
      $user->amaterno = $data['amaterno'];
      $user->direccion = $data['direccion'];
      $user->telefono = $data['telefono'];
      $user->ciudad = $data['ciudad'];
      $user->usuario = $data['usuario'];
      $user->password = password_hash($data['password'], PASSWORD_BCRYPT);
      $user->rol = $data['rol'];
     
      return $this->userRepository->create($user);
    }
  }
?>