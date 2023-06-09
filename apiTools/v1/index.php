<?php

require 'flight/Flight.php';

require_once 'env/domain.php';

Flight::route('GET /getPTasks/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getPTasks/'.$id);
    

       echo $response;

});


Flight::route('GET /getPTasksById/@id/@task', function ($task,$id) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getPTasksById/'.$task.'/'.$id);
    

       echo $response;
   

});



Flight::route('GET /getSchedule/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getSchedule/'.$id);
    
   

       echo $response;
});


Flight::route('GET /getAlert/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getAlert/'.$id);
  

       echo $response;

});



Flight::route('GET /getDis/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getDis/'.$id);
    

       echo $response;
       
   

});

Flight::route('GET /getDisById/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getDisById/'.$id);
   
   

       echo $response;
   

});

Flight::route('GET /getComments/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getComments/'.$id);
   

       echo $response;
   

});
Flight::route('GET /getCreatedGroups/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getCreatedGroups/'.$id);
    
   

       echo $response;
   

});


Flight::route('GET /getPublicGroups/', function () {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getPublicGroups/');
   
   

       echo $response;

});


Flight::route('GET /getGroupById/@id/@profile', function ($id,$profile) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getGroupById/'.$id.'/'.$profile);
   
   

       echo $response;

});

Flight::route('GET /getAdminGroupById/@id/@profile', function ($id,$profile) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getAdminGroupById/'.$id.'/'.$profile);
    
   

       echo $response;
   

});

Flight::route('GET /getGeneralGroupById/@id/', function ($id) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getGeneralGroupById/'.$id);
    
   

       echo $response;       
   

});

Flight::route('GET /getGroupInfo/@id/', function ($id) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getGroupInfo/'.$id);
  

       echo $response;       
   
   

});


Flight::route('GET /getGroupInfoUser/@id/@profile', function ($id,$profile) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getGroupInfoUser/'.$id.'/'.$profile);
   

       echo $response;      
   

});

Flight::route('GET /getModerGroupById/@id/@profile', function ($id,$profile) {
    header("Access-Control-Allow-Origin: *");

    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getModerGroupById/'.$id.'/'.$profile);
  
   

       echo $response;      
   

   

});


Flight::route('GET /getResponsibleGroups/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getResponsibleGroups/'.$id);
   

       echo $response;
});


Flight::route('GET /getSubResponsibleGroups/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getSubResponsibleGroups/'.$id);
  

       echo $response;

});


Flight::route('GET /getParticipantGroups/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getParticipantGroups/'.$id);
 

       echo $response;
   

});




Flight::route('GET /getUserGroups/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom_broker();
    $response= file_get_contents($sub_domain.'/lugmabroker/apiTools/v1/getUserGroups/'.$id);
    
   

       echo $response;
   

});
Flight::route('GET /getGroupsMakerCounter/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getGroupsMakerCounter/'.$id);
  

       echo $response;
       
   

});

Flight::route('GET /getGroupsPublicCounter/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getGroupsPublicCounter/'.$id);
  
   

       echo $response;
       
       
   

});

Flight::route('GET /getGroupsHighCounter/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getGroupsHighCounter/'.$id);
 
   

       echo $response;
       
       
   

});


Flight::route('GET /getGroupsLowCounter/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getGroupsLowCounter/'.$id);
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


Flight::route('GET /getGroupsMemberCounter/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getGroupsMemberCounter/'.$id);
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


Flight::route('GET /getGroupsTotalCounter/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getGroupsTotalCounter/'.$id);
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


Flight::route('GET /getAlertCounter/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $response= file_get_contents($sub_domain.'/lugmatools/apiTools/v1/getAlertCounter/'.$id);
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



Flight::route('POST /putSchedule', function () {
    
    header("Access-Control-Allow-Origin: *");
    $day=(Flight::request()->data->day);
    $id=(Flight::request()->data->id);
    $value=(Flight::request()->data->value);
    $user=(Flight::request()->data->user_id);
    
    $data = array(
        'id' =>$id, 
        'day' => $day,
        'value' => $value,
        'user_id' => $user
        );
    
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$url = $sub_domain.'/lugmatools/apiTools/v1/putSchedule/';
    
// Definir los datos a enviar en la solicitud POST
$curl = curl_init();

// Configurar las opciones de la sesión cURL
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Establecer el encabezado con el API key
$headers = array(
    'Content-Type: application/json'
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($curl);

// Cerrar la sesión cURL
curl_close($curl);

     echo $response;
   
    
});

Flight::route('POST /postAlert', function () {
    header("Access-Control-Allow-Origin: *");
    //require_once('../../apiTools/v1/controller/post_functions.php');
    //require_once('../../apiTools/v1/controller/auth.php');

    // Obtener todos los encabezados de la solicitud
    
            $data1 =array (
                'sdate' => Flight::request()->data->sdate,
                'value' => Flight::request()->data->value,
                'user' => Flight::request()->data->profile_id
                
            );
            
            require_once 'env/domain.php';
            $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
            $url = $sub_domain.'/lugmatools/apiTools/v1/postAlert/';
    
            // Definir los datos a enviar en la solicitud POST
            $curl = curl_init();
    
            // Configurar las opciones de la sesión cURL
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
            // Establecer el encabezado con el API key
            $headers = array(
                'Content-Type: application/json'
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            
            // Ejecutar la solicitud y obtener la respuesta
            $response = curl_exec($curl);
    
            // Cerrar la sesión cURL
            curl_close($curl);
    
            echo $response;
      
});


Flight::route('POST /postGroups', function () {
   
    $data1=array(
            
        
        'group'=>(Flight::request()->data->group),
        'description'=>(Flight::request()->data->description),
       'qty'=>(Flight::request()->data->qty),
    'responsable_1'=>(Flight::request()->data->responsable_1),
    'responsable_2'=>(Flight::request()->data->responsable_2),
    'profile_id'=>(Flight::request()->data->profile_id)

    );
    require_once 'env/domain.php';
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/postGroups/';

    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();

    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);

    // Cerrar la sesión cURL
    curl_close($curl);

    echo $response;

});



Flight::route('POST /putMakerGroups', function () {
    $data1=array(
            
        
        'group'=>(Flight::request()->data->group),
        'description'=>(Flight::request()->data->description),
       'qty'=>(Flight::request()->data->qty),
   
    'status'=>(Flight::request()->data->status),
    'public'=>(Flight::request()->data->public),
    'auto_join'=>(Flight::request()->data->auto_join),
    'auto_add'=>(Flight::request()->data->auto_add),
    'group_id'=>(Flight::request()->data->group_id),
    'profile_id'=>(Flight::request()->data->profile_id)

    );
    require_once 'env/domain.php';
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/putMakerGroups/';

    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();

    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);

    // Cerrar la sesión cURL
    curl_close($curl);

    echo $response;

    
});

Flight::route('POST /putAdminGroups', function () {
    $data1=array(
            
        
        'group'=>(Flight::request()->data->group),
        'description'=>(Flight::request()->data->description),
       'qty'=>(Flight::request()->data->qty),
   
    'status'=>(Flight::request()->data->status),
    'public'=>(Flight::request()->data->public),
    'auto_join'=>(Flight::request()->data->auto_join),
    'auto_add'=>(Flight::request()->data->auto_add),
    'group_id'=>(Flight::request()->data->group_id),
    'profile_id'=>(Flight::request()->data->profile_id)

    );
    require_once 'env/domain.php';
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/putAdminGroups/';

    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();

    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);

    // Cerrar la sesión cURL
    curl_close($curl);

    echo $response;

    
});

Flight::route('POST /putHideUsersGroups', function () {
   
    //$uri = $_SERVER['REQUEST_URI'];


   
    $data1=array(
            
        
        'value'=>(Flight::request()->data->value),
        'group_id'=>(Flight::request()->data->group_id),
       'profile_id'=>(Flight::request()->data->profile_id)
   
    

    );
    require_once 'env/domain.php';
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/putHideUsersGroups/';

    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();

    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);

    // Cerrar la sesión cURL
    curl_close($curl);

    echo $response;

    
    
});

Flight::route('POST /putMakerAdminModerGroups', function () {
   
    //$uri = $_SERVER['REQUEST_URI'];

    

   
    $data1=array(
            
        
        'value'=>(Flight::request()->data->value),
        'group_id'=>(Flight::request()->data->group_id),
       'profile_id'=>(Flight::request()->data->profile_id),
       'user'=>(Flight::request()->data->user)
   
    

    );
    require_once 'env/domain.php';
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/putMakerAdminModerGroups/';

    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();

    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);

    // Cerrar la sesión cURL
    curl_close($curl);

    echo $response;

    
});


Flight::route('POST /delMakerGroups', function () {
   ////$uri = $_SERVER['REQUEST_URI'];

   
    $group_id=(Flight::request()->data->group_id);
    $profile_id=(Flight::request()->data->profile_id);


   
    $data1=array(
            
        
        'group_id'=>(Flight::request()->data->group_id),
       'profile_id'=>(Flight::request()->data->profile_id)
   
    

    );
    require_once 'env/domain.php';
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/delMakerGroups/';

    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();

    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);

    // Cerrar la sesión cURL
    curl_close($curl);

    echo $response;

    
});


Flight::route('POST /putAlert', function () {
  

    
    $data1 =array (
        'status' => Flight::request()->data->status,
        'profile' => Flight::request()->data->profile,
        'alert_id' => Flight::request()->data->alert_id
        
    );
    require_once 'env/domain.php';
    $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/putAlert/';

    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();

    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);

    // Cerrar la sesión cURL
    curl_close($curl);

    echo $response;
       
    

     
   
    
});

Flight::route('POST /putTask', function () {
    
      
        //$uri = $_SERVER['REQUEST_URI'];

        $task=(Flight::request()->data->task);
        $sdata=(Flight::request()->data->sdata);
        $fdata=(Flight::request()->data->fdata);
        $priority=(Flight::request()->data->priority);
        $profile=(Flight::request()->data->profile);
        $task_id=(Flight::request()->data->task_id);

        $data = array(
            'task' =>$task, 
            'sdata' => $sdata,
            'fdata' => $fdata,
            'priority' => $priority,
            'profile' => $profile,
            'task_id' => $task_id

            );
        
        $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/putTask/';
        
    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();
    
    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);
    
    // Cerrar la sesión cURL
    curl_close($curl);
    
            echo $response;
        
    
});


Flight::route('POST /putTaskStatus', function () {
    
     
        //$uri = $_SERVER['REQUEST_URI'];

        $status=(Flight::request()->data->status);
        $profile=(Flight::request()->data->profile);
        $task_id=(Flight::request()->data->task_id);

        $data = array(
            'status' =>$status, 
            'profile' => $profile,
            'task_id' => $task_id

            );
        
        $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/putTaskStatus/';
        
    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();
    
    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);
    
    // Cerrar la sesión cURL
    curl_close($curl);
    
         echo $response;
   
    
});

Flight::route('POST /putTaskDel', function () {
    
        $status=(Flight::request()->data->status);
        $profile=(Flight::request()->data->profile);
        $task_id=(Flight::request()->data->task_id);

        $data = array(
            'status' =>$status, 
            'profile' => $profile,
            'task_id' => $task_id

            );
        
        $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/putTaskDel/';
        
    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();
    
    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);
    
    // Cerrar la sesión cURL
    curl_close($curl);
    
         echo $response;
    
});


Flight::route('POST /postTask', function () {
    

        $task=(Flight::request()->data->task);
        $sdata=(Flight::request()->data->sdata);
        $fdata=(Flight::request()->data->fdata);
        $priority=(Flight::request()->data->priority);
        $profile=(Flight::request()->data->profile);

        $data = array(
            'task' =>$task, 
            'sdata' => $sdata,
            'fdata' => $fdata,
            'priority' => $priority,
            'profile' => $profile
            );
        
        $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
    $url = $sub_domain.'/lugmatools/apiTools/v1/postTask/';
        
    // Definir los datos a enviar en la solicitud POST
    $curl = curl_init();
    
    // Configurar las opciones de la sesión cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    // Establecer el encabezado con el API key
    $headers = array(
        'Content-Type: application/json'
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($curl);
    
    // Cerrar la sesión cURL
    curl_close($curl);
    
         echo $response;
  
});



Flight::route('POST /postDis', function () {
    
        

       

    
        $data1 =array (
            'name' => Flight::request()->data->name,
            'profile_id' => Flight::request()->data->profile_id,
            'content' => Flight::request()->data->content,
            'group_id' => Flight::request()->data->group_id
            
            
        );
        require_once 'env/domain.php';
        $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
        $url = $sub_domain.'/lugmatools/apiTools/v1/postDis/';
    
        // Definir los datos a enviar en la solicitud POST
        $curl = curl_init();
    
        // Configurar las opciones de la sesión cURL
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        // Establecer el encabezado con el API key
        $headers = array(
            'Content-Type: application/json'
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
        // Ejecutar la solicitud y obtener la respuesta
        $response = curl_exec($curl);
    
        // Cerrar la sesión cURL
        curl_close($curl);
    
        echo $response;
           
        
    
         
      
});


Flight::route('POST /postComment', function () {


    
     
    
        $data1 =array (
            'dis_id' => Flight::request()->data->dis_id,
            'profile_id' => Flight::request()->data->profile_id,
            'group_id' => Flight::request()->data->group_id,
            'comment' => Flight::request()->data->comment
            
        );
        require_once 'env/domain.php';
        $sub_domaincon=new model_dom;
    $sub_domain=$sub_domaincon->dom();
        $url = $sub_domain.'/lugmatools/apiTools/v1/postComment/';
    
        // Definir los datos a enviar en la solicitud POST
        $curl = curl_init();
    
        // Configurar las opciones de la sesión cURL
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data1));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        // Establecer el encabezado con el API key
        $headers = array(
            'Content-Type: application/json'
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
        // Ejecutar la solicitud y obtener la respuesta
        $response = curl_exec($curl);
    
        // Cerrar la sesión cURL
        curl_close($curl);
    
        echo $response;
           
        
    
         
       
});


Flight::start();
