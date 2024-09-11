<?php
  use Dotenv\Dotenv;

  // Cargar todos los datos del archivo de Entorno de Desarrollo
  $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
  $dotenv->load();

 // Generamos arreglo
  return [
    'host' => $_ENV['DB_HOST'],
    'database'=> $ENV['DB_DATABASE'],
    'username' => $ENV['DB_USERNAME'],
    'password' => $ENV['DB_PASSWORD'],
  ];
  
?>