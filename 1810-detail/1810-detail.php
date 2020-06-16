<?php
    require_once 'scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $sass = new Compiler;
    $str = file_get_contents('sass/1810-11-detail.scss');
    $str = $sass->compile($str);
    file_put_contents('css/1810-11-detail.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/1810-11-detail.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>1810-11-detail</title>
</head>

<body>
    <?php @include '1810.php'?>
</body>

</html>