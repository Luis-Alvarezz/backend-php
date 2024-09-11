<?php
  // Archivo para la conexion con la ruta de la base de datos
  // require_once '/app/interfaces/userInterface.php';
  require_once 'app/interfaces/userInterface.php';
  require_once 'config/database.php';

  // Con Implement (POO) es para traer contenido de una clase
  class userRepository implements userInterface {
    private $db;
    // Constructor de la clase:
    public function __construct() {
      $config = require 'config/database.php';
      $this->db = new PDO("mysql:host={$config['host']};dbname={$config['database']}; {$config['username']}, {$config['password']}");
    }

    // Primer funcion: Crear un usuario:
    public function create(user $user) { // REcibo al usuario con todo lo que viene del modelo 
      // Query:
      $insert = $this->db->prepare('INSERT INTO usuarios(nombre, apaterno, amaterno, direccion, telefono, ciudad, usuario, password, rol) VALUES(?,?,?,?,?,?,?,?,?)');
      return $insert->execute([$user->nombre, $user->apaterno, $user->amaterno, $user->direccion, $user->telefono, $user->ciudad, $user->usuario, $user->password, $user->rol]);
    }
  } 
?>