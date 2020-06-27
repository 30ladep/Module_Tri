<?php

    require_once'lib/scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/1596-styles.scss');
    $str = $scss->compile($str);
    file_put_contents('css/1596-styles.css', $str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/1596-styles.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="fonts/all.min.css" rel="stylesheet"/>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <title>Document</title>
</head>
<body>
   <?php
     include "./1596-home.php";
   ?>
</body>
</html>