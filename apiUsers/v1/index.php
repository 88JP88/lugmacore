<?php

require 'flight/Flight.php';

require 'database/db_users.php';



Flight::route('POST /post', function () {
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


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


    require('../../apiUsers/v1/model/modelSecurity/crypt/cryptic.php');


//$alfanumerico = bin2hex(random_bytes(50));

$dato = "Esta es informacion importante";
//Encripta informaciÃ³n:
$dato_encriptado = $encriptar($pass);
$dato_encriptado1 = $encriptar($word);
    require('../../apiRepos/v1/model/modelSecurity/uuid/uuidd.php');
    $con=new generateUuid();
        $myuuid = $con->guidv4();
        $myuuid2 = $con->guidv4();
        $myuuid3 = $con->guidv4();
        $primeros_ocho = substr($myuuid, 0, 8);
        $primeros_ocho2 = substr($myuuid2, 0, 8);
        $primeros_ocho3 = substr($myuuid3, 0, 8);
    $query= mysqli_query($conectar,"SELECT username FROM users where username='$user'");
    $nr=mysqli_num_rows($query);

    if($nr>=1){
        $info=[

            'data' => "ups! el nombrede usuario está repetido , intenta nuevamente, gracias."
            
        ];
     echo json_encode(['info'=>$info]);
     //echo "ups! el id del repo está repetido , intenta nuevamente, gracias.";
    }else{

      
        $query= mysqli_query($conectar,"SELECT sub_id FROM subscriptionlist where sub_id='$code' and secret_word='$dato_encriptado1' and is_active=0");
        $nr=mysqli_num_rows($query);
    
        if($nr<=0){
            $info=[
    
                'data' => "ups! el codigo o la palabra clave son erroneas , intenta nuevamente, gracias."
                
            ];
         echo json_encode(['info'=>$info]);
         //echo "ups! el id del repo está repetido , intenta nuevamente, gracias.";
        }else{
            if (strpos($user, " ") === false && strlen($user) < 13 && preg_match('/^[^@#%&,:ñÑ]+$/', $user)) {
                          

                if (preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,}$/', $pass) && strlen($user) > 7 && $pass==$pass1)  {
                    $userm=$user."@lugma.com";
                    $query= mysqli_query($conectar,"INSERT INTO users (username,name,last_name,contact,keyword,user_id,mail) VALUES ('$user','$name','$last_name','$contact','$dato_encriptado','$primeros_ocho','$userm')");
                            

                    $query= mysqli_query($conectar,"SELECT rate_day FROM subscriptions where sub_id='$type'");
                    
    
                    $subs=[];
    
                    while($row = $query->fetch_assoc())
                    {
                            $sub=[
                                'rate' => $row['rate_day']
                            ];
                            
                            array_push($subs,$sub);
                            
                    }
                    $row=$query->fetch_assoc();
    
                    $response= json_encode(['subs'=>$subs]);
                    $fechaActual = date("Y-m-d");
                    $data = json_decode($response);
                    foreach ($data->subs as $character) {
                    
                        $resultado =  $character->rate;
    
                        $query1= mysqli_query($conectar,"INSERT INTO profiles (profile_id,user_id,rol,imageUrl,sub_id,sub_days,sub_date) VALUES ('$primeros_ocho2','$primeros_ocho','$rol','$name','$type','$resultado','$fechaActual')");
                        

                        if($rol=="student")
                        {
                            $query1= mysqli_query($conectar,"INSERT INTO students (student_id,profile_id,name,last_name) VALUES ('$primeros_ocho3','$primeros_ocho2','$name','$last_name')");
                        

                        }
                        if($rol=="teacher")
                        {
                            $query1= mysqli_query($conectar,"INSERT INTO teachers (teacher_id,profile_id,name,last_name) VALUES ('$primeros_ocho3','$primeros_ocho2','$name','$last_name')");
                        

                        }
                        if($rol=="coordinate")
                        {
                            $query1= mysqli_query($conectar,"INSERT INTO coordinates (coor_id,profile_id,name,last_name) VALUES ('$primeros_ocho3','$primeros_ocho2','$name','$last_name')");
                        

                        }
                        if($rol=="api_user")
                        {
                            $query1= mysqli_query($conectar,"INSERT INTO api_users (user_id,profile_id,name,last_name) VALUES ('$primeros_ocho3','$primeros_ocho2','$name','$last_name')");
                        

                        }
                    }
                    for ($i = 0; $i < 24; $i++) {
                        $rel=$i.":00";
                        $query1= mysqli_query($conectar,"INSERT INTO schedules (user_id,time) VALUES ('$primeros_ocho','$rel')");
                        
                    }
                    $query1= mysqli_query($conectar,"UPDATE schedules  SET mon=' ',tus=' ',wen=' ',thu=' ',fri=' ',sat=' ',sun=' ' WHERE user_id='$primeros_ocho'");
                    $query2= mysqli_query($conectar,"UPDATE  subscriptionlist SET user_id='$primeros_ocho',is_active=1 where sub_id='$code' and secret_word='$dato_encriptado1' and is_active=0");
                    

                    //echo $username;
                    //echo $primeros_ocho;
                    echo "true"; // muestra "/mi-pagina.php?id=123"
    
    
                    //echo "La cadena contiene números, letras mayúsculas, minúsculas y símbolos";
                } else {
                    echo "La contraseña debe contener minimo 8 caracteres (mayusculas*,minusculas*,numeros*,simbolos*) o las contraseñas no coinciden";
                }

               
                
            } else {
                echo "usuario con espacios o cadena de texto mayor a 12 caracteres";
            }
                          
                            }
                        }
});

Flight::route('POST /postSub', function () {
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $mail=(Flight::request()->data->mail);
    $word=(Flight::request()->data->word);
    $type=(Flight::request()->data->type);


    require('../../apiUsers/v1/model/modelSecurity/crypt/cryptic.php');


//$alfanumerico = bin2hex(random_bytes(50));

$dato = "Esta es informacion importante";
//Encripta informaciÃ³n:
$dato_encriptado = $encriptar($word);
    require('../../apiRepos/v1/model/modelSecurity/uuid/uuidd.php');
    $con=new generateUuid();
        $myuuid = $con->guidv4();
        $primeros_ocho = substr($myuuid, 0, 8);
    $query= mysqli_query($conectar,"SELECT sub_id FROM subscriptionlist where mail='$mail' and status=1");
    $nr=mysqli_num_rows($query);

    if($nr>=1){
        $info=[

            'data' => "ups! el nombrede usuario está repetido , intenta nuevamente, gracias."
            
        ];
     echo json_encode(['info'=>$info]);
     //echo "ups! el id del repo está repetido , intenta nuevamente, gracias.";
    }else{

        //$correo = "ejemplo@dominio.com"; // Cambia esta cadena por la que quieras verificar

        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

          if  (preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,}$/', $word) && strlen($word) > 7)  
                    {
            $query= mysqli_query($conectar,"INSERT INTO subscriptionlist (sub_id,mail,secret_word,sub_type) VALUES ('$primeros_ocho','$mail','$dato_encriptado','$type')");
       
    
    echo $primeros_ocho;
                    }else{
                        echo "Palabra clave muy corta o no contiene caracteres mayusculas minusculas o simbolos minumo 8 caracteres";
                    }
        } 
        else {
            echo "Correo incorrecto";
        }
        

   
    
   
    }
});




Flight::route('POST /putPass', function () {
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $pass=(Flight::request()->data->pass);
    $npass=(Flight::request()->data->npass);
    $npass2=(Flight::request()->data->npass2);
    $user=(Flight::request()->data->user_id);

    
    $query= mysqli_query($conectar,"SELECT name FROM users where keyword='$pass' and user_id='$user'");
    $nr=mysqli_num_rows($query);

    if($nr<=0){
        $info=[

            'data' => "ups! la contraseña es incorrecta , intenta nuevamente, gracias."
            
        ];
     echo json_encode(['info'=>$info]);
     //echo "ups! el id del repo está repetido , intenta nuevamente, gracias.";
    }else{

      if($npass==$npass2){

        $query= mysqli_query($conectar,"UPDATE users SET keyword='$npass2' WHERE user_id='$user'");
       
    echo 'true';
       
    

      }else{

        $info=[

            'data' => "ups! las contraseñas no coinciden , intenta nuevamente, gracias."
            
        ];
     echo json_encode(['info'=>$info]);
      }

   
    }
});

Flight::route('POST /putUser', function () {
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $name=(Flight::request()->data->name);
    $last_name=(Flight::request()->data->last_name);
    $contact=(Flight::request()->data->contact);
    $user_id=(Flight::request()->data->user_id);

   

   
    $query= mysqli_query($conectar,"UPDATE users SET name='$name',last_name='$last_name',contact='$contact' WHERE user_id='$user_id'");
       
    
   
    echo $uri; // muestra "/mi-pagina.php?id=123"

    }
);

Flight::route('POST /validate', function () {
    header("Access-Control-Allow-Origin: *");
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $user1=(Flight::request()->data->user);
    $pass=(Flight::request()->data->pass);

    require('../../apiRepos/v1/model/modelSecurity/uuid/uuidd.php');
    $con=new generateUuid();
        $myuuid = $con->guidv4();
        //$primeros_ocho = substr($myuuid, 0, 8);
        require('../../apiUsers/v1/model/modelSecurity/crypt/cryptic.php');


//$alfanumerico = bin2hex(random_bytes(50));

$dato = "Esta es informacion importante";
//Encripta informaciÃ³n:
$dato_encriptado = $encriptar($pass);
    $query= mysqli_query($conectar,"SELECT username FROM users where keyword='$dato_encriptado' and username='$user1' and session_counter <=2");
    $nr=mysqli_num_rows($query);

    if($nr>=1){
        
        $query= mysqli_query($conectar,"SELECT session_counter,user_id FROM users where username='$user1'");
       

        $users=[];
 
        while($row = $query->fetch_assoc())
        {
                $user=[
                    'counter' => $row['session_counter'],
                    'user' => $row['user_id']
                ];
                
                array_push($users,$user);
                
        }
        $row=$query->fetch_assoc();

        $response= json_encode(['users'=>$users]);
       
        $data = json_decode($response);
        foreach ($data->users as $character) {
          
           
        }
    
      $suma=  $character->counter;
      $us=  $character->user;
      $suma1=$suma+1;
      $query= mysqli_query($conectar,"UPDATE users SET session_counter='$suma1' WHERE username='$user1'");
       

      $query= mysqli_query($conectar,"SELECT sub_date,sub_days FROM profiles where user_id='$us'");
       

      $subs=[];
  
      while($row = $query->fetch_assoc())
      {
              $sub=[
                  'date' => $row['sub_date'],
                  'days' => $row['sub_days']
              ];
              
              array_push($subs,$sub);
              
      }
      $row=$query->fetch_assoc();
  
      $response= json_encode(['subs'=>$subs]);
      $fechaActual = date("Y-m-d");

      $data = json_decode($response);
      foreach ($data->subs as $character) {
        
          $resultado =  $character->date;
          $resultado1 =  $character->days;
          if($resultado==$fechaActual){
            echo "true";
          }if($resultado!=$fechaActual){
            $resta=$resultado1-1;
            $query1= mysqli_query($conectar,"UPDATE profiles SET sub_days='$resta',sub_date='$fechaActual' where user_id='$us'");
            echo "true";
          }
  
           
      }

    
   
      }else{

        echo json_encode(['info'=>$info]);
        //echo "ups! el id del repo está repetido , intenta nuevamente, gracias.";
     

   
   
    }
});



Flight::route('POST /validateOut', function () {
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $user1=(Flight::request()->data->user);

    
        //$primeros_ocho = substr($myuuid, 0, 8);
       
    
        
        $query= mysqli_query($conectar,"SELECT session_counter,user_id FROM users where username='$user1'");
       

        $users=[];
 
        while($row = $query->fetch_assoc())
        {
                $user=[
                    'counter' => $row['session_counter'],
                    'user' => $row['user_id']
                ];
                
                array_push($users,$user);
                
        }
        $row=$query->fetch_assoc();

        $response= json_encode(['users'=>$users]);
       
        $data = json_decode($response);
        foreach ($data->users as $character) {
          
           
        }
    
      $suma=  $character->counter;
      $us=  $character->user;
      $suma1=$suma-1;
      $query= mysqli_query($conectar,"UPDATE users SET session_counter='$suma1' WHERE username='$user1'");
       

  
           
      echo "true";

    
   
      
});


Flight::route('GET /get/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $query= mysqli_query($conectar,"SELECT u.user_id,u.username,u.name,u.last_name,u.contact,p.rol,p.profile_id,p.imageUrl,p.sub_days FROM users u JOIN profiles p ON p.user_id=u.user_id  where u.username='$id'");
       

        $users=[];
 
        while($row = $query->fetch_assoc())
        {
                $user=[
                    'user_id' => $row['user_id'],
                    'username' => $row['username'],
                    'name' => $row['name'],
                    'last_name' => $row['last_name'],
                    'contact' => $row['contact'],
                    'rol' => $row['rol'],
                    'profile' => $row['profile_id'],
                    'image' => $row['imageUrl'],
                    'days' => $row['sub_days']
                ];
                
                array_push($users,$user);
                
        }
        $row=$query->fetch_assoc();

        echo json_encode(['users'=>$users]);
       
  
  // echo $uri; // muestra "/mi-pagina.php?id=123"

       
   

});


Flight::route('GET /getPublicUsers/', function () {
    header("Access-Control-Allow-Origin: *");
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $query= mysqli_query($conectar,"SELECT u.user_id,u.username,u.name,u.last_name,u.contact,p.rol,p.profile_id,p.imageUrl,p.sub_days FROM users u JOIN profiles p ON p.user_id=u.user_id  where u.is_public=1");
       

        $users=[];
 
        while($row = $query->fetch_assoc())
        {
                $user=[
                    'username' => $row['username'],
                    'name' => $row['name'],
                    'last_name' => $row['last_name'],
                    'contact' => $row['contact'],
                    'rol' => $row['rol'],
                    'profile' => $row['profile_id'],
                    'image' => $row['imageUrl'],
                    'user_id' => $row['user_id']
                ];
                
                array_push($users,$user);
                
        }
        $row=$query->fetch_assoc();

        echo json_encode(['users'=>$users]);
       
  
  // echo $uri; // muestra "/mi-pagina.php?id=123"

       
   

});



Flight::route('GET /getSchedule/@id', function ($id) {
    header("Access-Control-Allow-Origin: *");

    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $query= mysqli_query($conectar,"SELECT id,time,mon,tus,wen,thu,fri,sat,sun FROM schedules  where user_id='$id'");
       

        $sches=[];
 
        while($row = $query->fetch_assoc())
        {
                $sche=[
                    'id' => $row['id'],
                    'time' => $row['time'],
                    'mon' => $row['mon'],
                    'tus' => $row['tus'],
                    'wen' => $row['wen'],
                    'thu' => $row['thu'],
                    'fri' => $row['fri'],
                    'sat' => $row['sat'],
                    'sun' => $row['sun']
                ];
                
                array_push($sches,$sche);
                
        }
        $row=$query->fetch_assoc();

        echo json_encode(['sches'=>$sches]);
       
  
  // echo $uri; // muestra "/mi-pagina.php?id=123"

       
   

});




Flight::route('POST /putSchedule', function () {
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $day=(Flight::request()->data->day);
    $id=(Flight::request()->data->id);
    $value=(Flight::request()->data->value);
    $user=(Flight::request()->data->user_id);

    
    

        $query= mysqli_query($conectar,"UPDATE schedules SET $day='$value' WHERE user_id='$user' and id='$id'");
       
    echo 'true';
       
    

     
   
    
});



Flight::route('GET /getSubs/', function () {
    header("Access-Control-Allow-Origin: *");
    $conectar=conn();
    $uri = $_SERVER['REQUEST_URI'];


    $query= mysqli_query($conectar,"SELECT sub_id,name,info,total_ammount,day_amount,rate_day,sub_type FROM subscriptions where status=1 and is_active=1");
       

        $subs=[];
 
        while($row = $query->fetch_assoc())
        {
                $sub=[
                    'sub_id' => $row['sub_id'],
                    'name' => $row['name'],
                    'info' => $row['info'],
                    'total' => $row['total_ammount'],
                    'day' => $row['day_amount'],
                    'rate' => $row['rate_day'],
                    'type' => $row['sub_type']
                ];
                
                array_push($subs,$sub);
                
        }
        $row=$query->fetch_assoc();

        echo json_encode(['subs'=>$subs]);
       
  
  // echo $uri; // muestra "/mi-pagina.php?id=123"

       
   

});


Flight::start();
