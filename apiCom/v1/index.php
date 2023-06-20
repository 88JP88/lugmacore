<?php

require 'flight/Flight.php';

require 'database/db_users.php';
require 'env/domain.php';

 

Flight::route('POST /postMail', function () {
    header("Access-Control-Allow-Origin: *");
    $sender_id=(Flight::request()->data->sender_id);
    $receiver_id=(Flight::request()->data->receiver_id);
    $name=(Flight::request()->data->name);
    $content=(Flight::request()->data->content);
    $copy=(Flight::request()->data->copy);

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmacom/apiMail/v1/postMail/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'sender_id' =>$sender_id, 
                  'receiver_id' => $receiver_id,
                  'name' => $name,
                  'content' => $content,
                  'copy' => $copy
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

Flight::route('POST /putCategoryMail', function () {
    header("Access-Control-Allow-Origin: *");
   $general_id=(Flight::request()->data->general_id);
    $value=(Flight::request()->data->value);

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmacom/apiMail/v1/putCategoryMail/';

              // Definir los datos a enviar en la solicitud POST
              $data = array(
                  'general_id' =>$general_id, 
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
    
    $url = $sub_domain.'/lugmarepos/apiRepos/v1/putLoged/';

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
Flight::route('GET /getInboxMail/@id/@id2', function ($id,$id2) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmacom/apiMail/v1/getInboxMail/'.$id.'/'.$id2);
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
Flight::route('GET /getReciclerMail/@id/@id2', function ($id,$id2) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmacom/apiMail/v1/getReciclerMail/'.$id.'/'.$id2);
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


Flight::route('GET /getCopyMail/@id/@id2', function ($id,$id2) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmacom/apiMail/v1/getCopyMail/'.$id.'/'.$id2);
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


Flight::route('GET /getSendMail/@id', function ($id) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmacom/apiMail/v1/getSendMail/'.$id);
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



Flight::route('GET /getImportantMail/@id/@id2', function ($id,$id2) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmacom/apiMail/v1/getImportantMail/'.$id.'/'.$id2);
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

Flight::route('GET /getSpamMail/@id/@id2', function ($id,$id2) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmacom/apiMail/v1/getSpamMail/'.$id.'/'.$id2);
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


Flight::route('GET /getReadMail/@id/@id2', function ($id,$id2) {
    
    header("Access-Control-Allow-Origin: *");
    $sub_domaincons= new model_dom;
    $sub_domain=$sub_domaincons->dom();

    $response= file_get_contents($sub_domain.'/lugmacom/apiMail/v1/getReadMail/'.$id.'/'.$id2);
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
