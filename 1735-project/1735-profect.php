<?php
    require_once'scss.inc.php';
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
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>1735</title>
</head>

<body>
    <div class="style-1735">
        <div class="container">
            <div class="img-project d-flex">
                <div class="p-1"><img src="img/img-left" alt="img"></div>
                <div class="p-1"><img src="img/img-right" alt="img"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="title-left">
                        Rhoncus dolor – semper malesuada ipsumaccumsan mauris id consectetur sem!
                    </div>
                    <div class="button-left align-items-center position-relative">
                        <a href="#">Visit Website <i class="fas fa-link position-absolute"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-content-right">
                    <div class="title-header-right">
                        Phasellus quis risus eu risus eleifend molestie non ac nulla. Nullam et volutpat elit. Fusce
                        auctor turpis nibh, id commodo tellus dictum sit amet. Suspendisse pulvinar nulla et lacus
                        fringilla sem. Cras pulvinar enim ut rhoncus faucibus. Cras quis eleifend purus. In quis congue
                        felis, sit amet mollis ligula.
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="sed d-flex align-items-center">
                                <i class="fas fa-hand-holding-heart"></i>
                                <div class="sed-title">
                                    Sed molestie sollicitudin tempor
                                </div>
                            </div>
                            <div class="sed d-flex align-items-center">
                                <i class="fas fa-id-card-alt"></i>
                                <div class="sed-title">
                                    Curabitur lorem ipsum dolor
                                </div>
                            </div>
                            <div class="sed d-flex align-items-center">
                                <i class="fas fa-columns"></i>
                                <div class="sed-title">
                                    Nulla from loremipsum
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 align-items-center">
                            <div class="sed d-flex align-items-center">
                                <i class="fas fa-hand-holding-heart"></i>
                                <div class="sed-title">
                                    Sed molestie sollicitudin tempor
                                </div>
                            </div>
                            <div class="sed d-flex align-items-center">
                                <i class="fas fa-id-card-alt"></i>
                                <div class="sed-title">
                                    Curabitur lorem ipsum dolor
                                </div>
                            </div>
                            <div class="sed d-flex align-items-center">
                                <i class="fas fa-columns"></i>
                                <div class="sed-title">
                                    Nulla from loremipsum
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 title-footer">
                            <p>Suspendisse pulvinar nulla et lacus fringilla sem. Cras pulvinar enim ut rhoncus
                                faucibus. Cras quis eleifend purus. In quis congue felis, sit amet mollis ligula.</p>
                            <p>Cras pulvinar enim ut rhoncus faucibus – quis eleifend purus. In quis congue felis, sit
                                amet mollis ligula.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>