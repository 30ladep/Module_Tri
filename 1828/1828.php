<?php
    require_once'lib/scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/1828.scss');
    $str = $scss->compile($str);
    file_put_contents('css/1828.css', $str);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/1828.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <title>1828</title>
</head>

<body>
    <?php @include '1828-contact.php';?>
</body>

</html>