<?php
$header = <<<navbar
<body>
<div class="header">
    <div class="logo d-flex justify-content-between px-4 align-items-center">
        <a href="$path./index.php"> <img src="$path./img/SVG/logo.svg" alt="logo" height="70" width="80" class="py-1"></a>
        <ul class="d-flex list-unstyled m-0 ">
            <li><a href="#" class="btn  fw-bold $display"> Conseils </a></li>
            <li><a href="$path./index.php" class="btn  fw-bold $display"> Accueil </a></li>
            <li><a href="#" class="link-language btn ">عربي <i class="fas fa-globe" style="color : #F4CF1B"></i> </a></li>
        </ul>
    </div>
</div>
navbar;
echo $header;