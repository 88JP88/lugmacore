<?php

class model_ver {

function versioning() {
   // $sub_domain="https://dev-lugmacore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
   // $version="lugmacore->0.3.1-alpha apiCom->0.2.1-alpha apiRepos->0.1.0-alpha apiTools->0.1.0-alpha apiUsers->0.1.0-alpha";
    $dta=array(
        "lugmacore"=>"0.4.0-alpha",
        "apiCom"=>"0.2.1-alpha",
        "apiRepos"=>"0.1.0-alpha",
        "apiTools"=>"0.1.0-alpha",
        "apiUsers"=>"0.1.0-alpha",
        "apiLugmacore"=>"0.1.0-alpha",
    );
    return $dta;
}
}

?>