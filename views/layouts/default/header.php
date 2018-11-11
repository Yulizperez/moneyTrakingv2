<!DOCTYPE html>

<html lang="en">

<head>


    <link type="/views/layouts/fonts/img/logo.php">
    <h3 class="text-center" style="text-underline-color: #2e6da4">Money Traking</h3>

<meta charset="UTF-8">

    <title>Money Tracking <?php if(isset($this->titulo)) { echo $this->titulo; } ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["ruta_css"]; ?>bootstrap.min.css">
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    <?php 
        if ($this->_msg->hasMessages()) {
            echo $this->_msg->display();
        }
    ?>
