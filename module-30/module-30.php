<?php
    require_once'scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    $scss = new Compiler();
    $str = file_get_contents('sass/30.scss');
    $str = $scss->compile($str);
    file_put_contents('css/30.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/30.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>30 sreenshort</title>
</head>

<body>
    <?php include '30.php' ?>
</body>
<script>
    // function mouseOver(){
    //     document.getElementsByClassName("box-content").style.opacity = "50%";
    // }
    // function mouseOut(){
    //     document.getElementsByClassName("box-content").style.opacity = "100%";
    // }
</script>
</html>