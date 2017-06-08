<?php
include '../libreria.php';

$oUsu = new usuario($_REQUEST["nomusuario"],$_REQUEST["clave"]);

if($oUsu->VerificaLocal())
    echo "todo bien";

else 
    echo "todo mal";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

