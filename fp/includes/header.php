<?php include "fp-config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/portal.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/photo.css">
    <link rel="stylesheet" href="css/aside.css">
</head>

<body>
    <nav>
      <div id="logo">JC Marble & Granite</div>

      <label for="drop" class="toggle">Menu</label>
      <input type="checkbox" id="drop" />
      <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li>
          <!-- First Tier Drop Down -->
          <label for="drop-1" class="toggle">Countertop +</label>
          <a href="#">Countertop</a>
          <input type="checkbox" id="drop-1" />
          <ul>
            <li><a href="granites.php">Granite</a></li>
          </ul>
        </li>
          
        <li>
          <!-- First Tier Drop Down -->
          <label for="drop-2" class="toggle">Cabinet +</label>
          <a href="#">Cabinet</a>
          <input type="checkbox" id="drop-2" />
          <ul>
            <li><a href="shaker.php">Shaker</a></li>
          </ul>
        </li>
          
        <li>
          <!-- First Tier Drop Down -->
          <label for="drop-3" class="toggle">Tile/floor +</label>
          <a href="#">Tile/floor</a>
          <input type="checkbox" id="drop-3" />
          <ul>
            <li><a href="tile.php">Tile</a></li>
          </ul>
        </li>
          
        <li>
          <!-- First Tier Drop Down -->
          <label for="drop-4" class="toggle">Service +</label>
          <a href="#">Service</a>
          <input type="checkbox" id="drop-4" />
          <ul>
            <li><a href="pickup.php">Pickup</a></li>
            <li><a href="maintain.php">Maintain</a></li>
          </ul>
        </li>
          
        <li>
          <!-- First Tier Drop Down -->
          <label for="drop-5" class="toggle">About +</label>
          <a href="#">About</a>
          <input type="checkbox" id="drop-5" />
          <ul>
            <li><a href="location.php">Location</a></li>
            <li><a href="question.php">Contact</a></li>
          </ul>
        </li>
        
      </ul>
    </nav>
