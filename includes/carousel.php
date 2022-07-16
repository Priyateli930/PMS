<?php
include "connection.php";
?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="navbar.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PMS Website</title>
    </head>
<body>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <center>
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://th.bing.com/th/id/OIP.pXRgLCOKWO7asulqoJTv4AHaEo?w=271&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="https://th.bing.com/th/id/OIP.59UkZ1N1iKZ5WZhzv_r5-QHaE7?w=252&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7" alt="Chicago">
    </div>

    <div class="item">
      <img src="https://th.bing.com/th/id/OIP.V6w0tp4lT6iu9_fAgf0WJgHaFZ?w=230&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>
</body>
</html>