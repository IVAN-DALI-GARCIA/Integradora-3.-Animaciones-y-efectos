<?php 
session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
  }
  //require 'database.php';

  require_once "controladores/plantilla.controlador.php";

  $plantilla = new PlantillaControlador();
  $plantilla->plantilla();