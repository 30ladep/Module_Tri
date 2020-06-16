<?php
// $url_host = 'http://' . $_SERVER['HTTP_HOST'];
// $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
// $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

// preg_match_all($pattern_uri, __DIR__, $matches);
// $url_path = $url_host . $matches[1][0];
// $url_path = str_replace('\\', '/', $url_path);

    // require_once 'scss.inc.php';

    // use ScssPhp\ScssPhp\Compiler;

    // $scss = new Compiler();

    // $scss->setImportPaths('sass/');

    // $styles = $scss->compile('@import "1769-styles.scss";');

    // $css = fopen('css/1769-styles.css','w');
    
    // fwrite($css,$styles);

    require_once'scss.inc.php';
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
    <link href="css/1596-styles.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet"/>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/scripts.js"></script>
    <title>Document</title>
</head>
<body>
   <?php
     include "./1596-home.php";
   ?>
</body>
</html>