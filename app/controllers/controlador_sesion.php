<?php

include "../models/modelo_sesion.php";


if(isset($_POST['iniciarSesion'])) {
    
    $sql=iniciarSesion($_POST);

    return $sql;
}
?>