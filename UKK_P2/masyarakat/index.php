<?php
session_start();
include './layout/header.php';

  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    
    switch ($page) {
      case 'login':
        include_once '../login.php';
        break;
      case 'registrasi':
        include_once '../registrasi.php';
        break;
      default:
        include 'home.php';
        break;
    }
  } else {
    include 'home.php';
  }
  ?>
  