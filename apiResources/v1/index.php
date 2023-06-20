<?php

require 'flight/Flight.php';

require 'database/db_users.php';
require 'env/domain.php';

 

Flight::route('POST /postSignIn', function () {
    header("Access-Control-Allow-Origin: *");
    $resource_id=(Flight::request()->data->resource_id);
    $profile_id=(Flight::request()->data->profile_id);
    $name=(Flight::request()->data->name);
    $last_name=(Flight::request()->data->last_name);
    $value=(Flight::request()->data->value);

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmaresources/apiResources/v1/postSignIn/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'resource_id' =>$resource_id, 
                  'profile_id' => $profile_id,
                  'name' => $name,
                  'last_name' => $last_name,
                  'value' => $value
                  );
                  
              $curl = curl_init();
              
              // Configurar las opciones de la sesión cURL
              curl_setopt($curl, CURLOPT_URL, $url);
              curl_setopt($curl, CURLOPT_POST, true);
              curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
             // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
              
              // Ejecutar la solicitud y obtener la respuesta
              $response1 = curl_exec($curl);
              //var_dump($data);
              // Cerrar la sesión cURL
              curl_close($curl);
echo $response1;

});


Flight::route('POST /postLoged', function () {
    header("Access-Control-Allow-Origin: *");
    $resource_id=(Flight::request()->data->resource_id);
  $profile_id=(Flight::request()->data->profile_id);
  $name=(Flight::request()->data->name);
  $last_name=(Flight::request()->data->last_name);
  $value=(Flight::request()->data->value);
  $invite=(Flight::request()->data->invite);

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmaresources/apiResources/v1/postLoged/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'resource_id' =>$resource_id, 
                  'profile_id' => $profile_id,
                  'name' => $name,
                  'last_name' => $last_name,
                  'value' => $value,
                  'invite' => $invite
                  );
                  
              $curl = curl_init();
              
              // Configurar las opciones de la sesión cURL
              curl_setopt($curl, CURLOPT_URL, $url);
              curl_setopt($curl, CURLOPT_POST, true);
              curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
             // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
              
              // Ejecutar la solicitud y obtener la respuesta
              $response1 = curl_exec($curl);
              //var_dump($data);
              // Cerrar la sesión cURL
              curl_close($curl);
echo $response1;

});


Flight::route('GET /allMyStudents/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiStudents/v1/allMyStudents/'.$id);
   

       echo $response;
});

Flight::route('GET /allMyStudentsProfile/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiStudents/v1/allMyStudentsProfile/'.$id);
   

       echo $response;
});

Flight::route('GET /allMyStudentsLackProfile/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiStudents/v1/allMyStudentsLackProfile/'.$id);
   

       echo $response;
});


Flight::route('GET /allMyStudentsInviteResponse/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiStudents/v1/allMyStudentsInviteResponse/'.$id);
   

       echo $response;
});


Flight::route('GET /allMyStudentsInviteNotResponse/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiStudents/v1/allMyStudentsInviteNotResponse/'.$id);
   

       echo $response;
});

Flight::route('GET /oneMyStudents/@id/@student', function ($id,$student) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiStudents/v1/oneMyStudents/'.$id."/".$student);
    
       echo $response;
});

Flight::route('GET /filterMyStudents/@id/@student/@type', function ($id,$student,$type) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiStudents/v1/filterMyStudents/'.$id."/".$student."/".$type);
    
       echo $response;
});


Flight::route('GET /filterMyTeachers/@id/@teacher/@type', function ($id,$teacher,$type) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiTeachers/v1/filterMyTeachers/'.$id."/".$teacher."/".$type);
    
       echo $response;
});

Flight::route('GET /allMyTeachers/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiTeachers/v1/allMyTeachers/'.$id);
   

       echo $response;
});

Flight::route('GET /allMyTeachersProfile/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiTeachers/v1/allMyTeachersProfile/'.$id);
   

       echo $response;
});

Flight::route('GET /allMyTeachersLackProfile/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiTeachers/v1/allMyTeachersLackProfile/'.$id);
   

       echo $response;
});


Flight::route('GET /allMyTeachersInviteResponse/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiTeachers/v1/allMyTeachersInviteResponse/'.$id);
   

       echo $response;
});


Flight::route('GET /allMyTeachersInviteNotResponse/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiTeachers/v1/allMyTeachersInviteNotResponse/'.$id);
   

       echo $response;
});
Flight::route('GET /oneMyTeachers/@id/@teacher', function ($id,$teacher) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiTeachers/v1/oneMyTeachers/'.$id."/".$teacher);
    
       echo $response;
});


Flight::route('GET /allMyCoor/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiCoordinate/v1/allMyCoor/'.$id);
   

       echo $response;
});

Flight::route('GET /oneMyCoor/@id/@coor', function ($id,$coor) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmaresources/apiCoordinate/v1/oneMyCoor/'.$id."/".$coor);
    
       echo $response;
});


Flight::start();
