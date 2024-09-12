<?php
  // Archivo para comprobar el token 
  use Firebase\JWT\JWT;

  class authToken {
    public function checkToken($token) {
      // Leemos token desde el frontend
      $secret = $_ENV['JWT_SECRET']; // Leemos token
      try {
        // Validación del token decodificandolo:
          $decode = JWT::decode($token, $secret, ['HS256']);
          return $decode;
      } catch(Exception $err) {
        return null;
      }
    }
  }

?>