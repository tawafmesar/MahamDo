<?php

// Error Reporting

  ini_set('display_errors' , 'On');
  error_reporting(E_ALL);

  include 'files/dbconnect.php';

  $sessionUser = '';
  if (isset($_SESSION['user'])) {
    $sessionUser = $_SESSION['user'];

  }


 // include the Important file


  include 'files/head.php';
