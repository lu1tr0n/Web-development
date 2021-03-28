<?php 

// URL de la página web
$url = 'https://elsolitario.org/'; 

// Extraer HTML usando curl
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 

$data = curl_exec($ch); 
curl_close($ch); 

// Cargar HTML en el objeto DOM
$dom = new DOMDocument(); 
@$dom->loadHTML($data); 

// Analizar DOM para obtener datos de título 
$nodes = $dom->getElementsByTagName('title'); 
$title = $nodes->item(0)->nodeValue; 

// Analizar DOM para obtener metadatos
$metas = $dom->getElementsByTagName('meta'); 

$description = $keywords = ''; 
for($i=0; $i<$metas->length; $i++){ 
    $meta = $metas->item($i); 
    
    if($meta->getAttribute('name') == 'description'){ 
        $description = $meta->getAttribute('content'); 
    } 
    
    if($meta->getAttribute('name') == 'keywords'){ 
        $keywords = $meta->getAttribute('content'); 
    } 
} 

echo "Titulo: $title". '<br/><br/><br/>'; 
echo "Descripcion: $description". '<br/><br/><br/>'; 
echo "Keywords: $keywords"; 

?>
