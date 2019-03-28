<!doctype html>
<?php

require_once("dbconnect.php");

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

  <title>Taru Bloch</title>
  </head>
  
  <body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  
  <a class="navbar-brand" href="#"> Professor Tarannum Bloch</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    
	<ul class="navbar-nav">
      <li class="nav-item <?php if($page=="home"){ echo 'active'; } ?>">
        <a class="nav-link" href="index.php">Home</a>
      </li>
	  
      <li class="nav-item <?php if($page=="about"){ echo 'active'; } ?>">
        <a class="nav-link" href="about.php">About</a>
      </li>
      
	  
	  
	  <li class="nav-item <?php if($page=="contact"){ echo 'active'; } ?>">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
	
  </div>
</nav>  
