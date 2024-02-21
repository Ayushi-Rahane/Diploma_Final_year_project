<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="x-icon" href="../../cnc-logo.png">
  <title>
    Admin Panel
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.min.css" rel="stylesheet" />
   <!--Alertify Js-->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
   <!--to do list css -->
   <link rel="stylesheet" href="../assets/css/todolist.css">
  <style>
     .form-control{
      border: 1px solid #b3a1a1 !important;
      padding:8px 10px;
     }
     
        /* Add this style to your existing styles */
        .container {
            max-height: 600px; /* Adjust this value as needed */
            overflow-y: auto;
        }

        /* Add this style to ensure the body fills the height of the viewport */
        body {
            height: 100vh;
            margin: 0;
            padding: 0;
        }
    

   </style> 
</head>


<body class="g-sidenav-show  bg-gray-200">
<?php
include("sidebar.php");
?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <?php
include("navbar.php");
?>

