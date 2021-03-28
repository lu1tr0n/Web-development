<h3>Test Dispinibilidad de sitio.</h3>
<h5>Elsolitario.org</h5>
<?php

    require('Util.php');

    $Util = new Util();

    $URL = 'https://elsolitario.org/';

    if($Util->isSiteAvailible($URL)){
        echo 'El sitio web está disponible.';      
    }else{
    echo 'Vaya, el sitio no se encuentra. :('; 
    }

?>