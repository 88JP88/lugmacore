<?php
    
    class post_functions {
        function post_alert($data) {
            $dta = [
                'sdate' => $data['sdate'],
                'value' => $data['value'],
                'user' => $data['user']
            ];
            require_once 'env/domain.php';
            $sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
            $url = $sub_domain.'/lugmatools/apiTools/v1/postAlert/';
    
            // Definir los datos a enviar en la solicitud POST
            $curl = curl_init();
    
            // Configurar las opciones de la sesión cURL
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dta));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
            // Establecer el encabezado con el API key
            
            // Ejecutar la solicitud y obtener la respuesta
            $response = curl_exec($curl);
    
            // Cerrar la sesión cURL
            curl_close($curl);
    
            return $response;
        }
    }
      
?>