<?php
    require_once'lib/scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/1735.scss');
    $str = $scss->compile($str);
    file_put_contents('css/1735.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/1735.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>1735</title>
</head>

<body>
    <?php @include'1735-project.php' ?>
</body>

</html>