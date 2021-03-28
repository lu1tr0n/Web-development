<?php

    class Util {
        
        public function isSiteAvailible($url){
            // Compruebe si se proporciona una URL válida
            if(!filter_var($url, FILTER_VALIDATE_URL)){
                return false;
            }
        
            // Inicializar cURL
            $curlInit = curl_init($url);
            
            // Establecer opciones
            curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
            curl_setopt($curlInit,CURLOPT_HEADER,true);
            curl_setopt($curlInit,CURLOPT_NOBODY,true);
            curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);
        
            // Obtener una respuesta
            $response = curl_exec($curlInit);
            
            // Cerrar una sesión de cURL
            curl_close($curlInit);
        
            return $response?true:false;
        }
    }

?>