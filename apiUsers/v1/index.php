<?php

use flight\net\Response;

require 'flight/Flight.php';

require 'database/db_users.php';
require_once 'env/domain.php';



Flight::route('POST /post', function () {


    $user=(Flight::request()->data->user);
    $name=(Flight::request()->data->name);
    $last_name=(Flight::request()->data->last_name);
    $contact=(Flight::request()->data->contact);
    $pass=(Flight::request()->data->pass);
    $pass1=(Flight::request()->data->pass1);
    $rol=(Flight::request()->data->rol);
    $type=(Flight::request()->data->subscription);
    $code=(Flight::request()->data->code);
    $word=(Flight::request()->data->word);

    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_main();
    $url = $sub_domain.'/lugmamain/apiUsers/v1/post/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'user' =>$user, 
                  'name' => $name,
                  'last_name' => $last_name,
                  'contact' => $contact,
                  'pass' => $pass,
                  'pass1' => $pass1,
                  'rol' => $rol,
                  'subscription' => $type,
                  'code' => $code,
                  'word' => $word
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

Flight::route('POST /postSub', function () {
    


    $mail=(Flight::request()->data->mail);
    $word=(Flight::request()->data->word);
    $type=(Flight::request()->data->type);

    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_main();
    $url = $sub_domain.'/lugmamain/apiUsers/v1/postSub/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'mail' =>$mail, 
                  'word' => $word,
                  'type' => $type
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




Flight::route('POST /putPass', function () {
    


    $pass=(Flight::request()->data->pass);
    $npass=(Flight::request()->data->npass);
    $npass2=(Flight::request()->data->npass2);
    $user=(Flight::request()->data->user_id);

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_main();
    $url = $sub_domain.'/lugmamain/apiUsers/v1/putPass/';

    // Definir los datos a enviar en la solicitud POST
    $data = array(
        'user_id' =>$user, 
        'pass' => $pass,
        'npass' => $npass,
        'npass2' => $npass2
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

Flight::route('POST /putUser', function () {
   

    $name=(Flight::request()->data->name);
    $last_name=(Flight::request()->data->last_name);
    $contact=(Flight::request()->data->contact);
    $user_id=(Flight::request()->data->user_id);
    $public=(Flight::request()->data->public);

    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_main();
    $url = $sub_domain.'/lugmamain/apiUsers/v1/putUser/';

    // Definir los datos a enviar en la solicitud POST
    $data = array(
        'user_id' =>$user_id, 
        'name' => $name,
        'last_name' => $last_name,
        'contact' => $contact,
        'public' => $public
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

    }
);

Flight::route('POST /validate', function () {
    header("Access-Control-Allow-Origin: *");
    
    $user1=(Flight::request()->data->user);
    $pass=(Flight::request()->data->pass);

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_main();
    $url = $sub_domain.'/lugmamain/apiUsers/v1/validate/';

    // Definir los datos a enviar en la solicitud POST
    $data = array(
        'user' =>$user1, 
        'pass' => $pass
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



Flight::route('POST /validateOut', function () {
   

    $user1=(Flight::request()->data->user);
    
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_main();
    $url = $sub_domain.'/lugmamain/apiUsers/v1/validateOut/';

    // Definir los datos a enviar en la solicitud POST
    $data = array(
        'user' =>$user1
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
//echo $response1;
//echo '<script>sessionStorage.removeItem("contact");</script>';

echo $response1;
      
});


Flight::route('GET /get/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_main();
    $response= file_get_contents($sub_domain.'/lugmamain/apiUsers/v1/get/'.$id);
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
  
  // echo $uri; // muestra "/mi-pagina.php?id=123"

       
   

});

Flight::route('GET /getMyProfileByProfile/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_main();
    $response= file_get_contents($sub_domain.'/lugmamain/apiUsers/v1/getMyProfileByProfile/'.$id);
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


Flight::route('GET /getByProfile/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_main();
    $response= file_get_contents($sub_domain.'/lugmamain/apiUsers/v1/getByProfile/'.$id);
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

Flight::route('GET /getPublicUsers/', function () {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_main();
    $response= file_get_contents($sub_domain.'/lugmamain/apiUsers/v1/getPublicUsers/');
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


Flight::route('GET /getSubs/', function () {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_main();
    $response= file_get_contents($sub_domain.'/lugmamain/apiUsers/v1/getSubs/');
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
