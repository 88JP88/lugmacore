<?php

require 'flight/Flight.php';

require 'database/db_users.php';
require 'env/domain.php';

 


Flight::route('GET /getInfo', function () {
    
    header("Access-Control-Allow-Origin: *");
    
    require_once '../../version/version.php';
$version_view=new model_ver;
$version=$version_view->versioning();


$versiones=[];
array_push($versiones,$version);
// Convertir el array en un JSON
$correosJSON = json_encode(["lugmacore_versions"=>$versiones]);

// Mostrar el resultado
echo $correosJSON;

      
});


Flight::start();
