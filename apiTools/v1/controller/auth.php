<?php
    
    class authenticator {
        function auth($data1) {
            $url = 'http://localhost/lugmamain/apiAuth/v1/authApiKey/';
    
            $data = [
                'api_key' => $data1
            ];
    
            $curl = curl_init();
    
            // Configurar las opciones de la sesión cURL
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
            // Ejecutar la solicitud y obtener la respuesta
            $response1 = curl_exec($curl);
    
            // Cerrar la sesión cURL
            curl_close($curl);
    
            return $response1;
        }
    }
    
    
?>