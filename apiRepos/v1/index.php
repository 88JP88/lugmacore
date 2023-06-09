<?php

require 'flight/Flight.php';

require 'database/db_users.php';
require 'env/domain.php';

 

Flight::route('POST /post', function () {
    header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
   
    $user=(Flight::request()->data->user);
    $pass=(Flight::request()->data->pass);
    $tittle=(Flight::request()->data->tittle);
    $keywords=(Flight::request()->data->keywords);
    $type=(Flight::request()->data->type);
    $public=(Flight::request()->data->public);
    $value=(Flight::request()->data->value);

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmarepos/apiRepos/v1/post/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'user' =>$user, 
                  'pass' => $pass,
                  'tittle' => $tittle,
                  'keywords' => $keywords,
                  'type' => $type,
                  'public' => $public,
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
    
    header('Access-Control-Allow-Origin: *');

    

    $username=(Flight::request()->data->username);
    $tittle=(Flight::request()->data->tittle);
    $keywords=(Flight::request()->data->keywords);
    $type=(Flight::request()->data->type);
    $public=(Flight::request()->data->public);
    $value=(Flight::request()->data->value);

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmarepos/apiRepos/v1/postLoged/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'username' =>$username,
                  'tittle' => $tittle,
                  'keywords' => $keywords,
                  'type' => $type,
                  'public' => $public,
                  'value' => $value
                  );
              //$payload = http_build_query($data);
              // codificar el array asociativo en JSON
//$json_data = json_encode($data);



// enviar la respuesta con el payload codificado en JSON
//echo $payload;
              // Inicializar la sesión cURL
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


Flight::route('POST /putLoged', function () {
    
    header('Access-Control-Allow-Origin: *');
    

    $username=(Flight::request()->data->username);
    $tittle=(Flight::request()->data->tittle);
    $keywords=(Flight::request()->data->keywords);
    $type=(Flight::request()->data->type);
    $public=(Flight::request()->data->public);
    $value=(Flight::request()->data->value);
    $repo=(Flight::request()->data->repo);
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    
    $url = $sub_domain.'/lugmacore/apiRepos/v1/putLoged/';

    // Definir los datos a enviar en la solicitud POST
    $data = array(
        'username' =>$username,
        'tittle' => $tittle,
        'keywords' => $keywords,
        'type' => $type,
        'public' => $public,
        'value' => $value,
        'repo' => $repo
        );
    //$payload = http_build_query($data);
    // codificar el array asociativo en JSON
//$json_data = json_encode($data);



// enviar la respuesta con el payload codificado en JSON
//echo $payload;
    // Inicializar la sesión cURL
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

Flight::route('POST /delLoged', function () {
    
    header('Access-Control-Allow-Origin: *');

   
    $username=(Flight::request()->data->username);
    $repo=(Flight::request()->data->repo);
    
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();

    $url = $sub_domain.'/lugmarepos/apiRepos/v1/delLoged/';

    // Definir los datos a enviar en la solicitud POST
    $data = array(
        'username' =>$username,
        'repo' => $repo
        );
    //$payload = http_build_query($data);
    // codificar el array asociativo en JSON
//$json_data = json_encode($data);



// enviar la respuesta con el payload codificado en JSON
//echo $payload;
    // Inicializar la sesión cURL
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
Flight::route('GET /get/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmarepos/apiRepos/v1/get/'.$id);
    //echo $response;
    /*$url = 'http://localhost/xvision/api/controller/gatewayuser/v1/getAllUsers.php?id=1';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);*/
    //var_dump ($response);
    //$ss=json_encode($response);

       //echo $response;
   

       echo $response;
});

Flight::start();
