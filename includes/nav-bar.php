<?php
$header = <<<navbar
<body>
<div class="header">
    <div class="logo d-flex justify-content-between px-4">
      <a href="$path./index.php"> <img src="img/SVG/logo.svg" alt="logo" height="70" width="80" class="py-1"></a>
        <ul class="d-flex list-unstyled">
            <li><a href="#" class="text-dark btn mt-4  $display "> Conseils </a></li>
            <li><a href="#" class="text-dark btn  mt-4 $display"> Accueil </a></li>
            <li><a href="#" class="link-language btn mt-3">عربي <i class="fas fa-globe" style="color : #F4CF1B"></i> </a></li>
        </ul>
    </div>
</div>
navbar;
echo $header;