<?php
    require_once'scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/1755.scss');
    $str = $scss->compile($str);
    file_put_contents('css/1755.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/1755.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>1755</title>
</head>

<body>
    <?php 
        @include '1755.php';
    ?>
</body>


</html>