<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      echo '<p>Selector de Clima</p>'; 
    
function recomendacion(){
    
    $clima = array (
      "Bogota" => "Frio", 
      "Monteria" => "Calido", 
      "Medellin" => "Templado" );

    $ubicacion = array (
      "Guajira" => "Norte", 
      "Leticia" => "Sur", 
      "Santander" => "Este", 
      "Antioquia" => "Oeste");

    $turismo = array (
      "Santa Marta" => "Mar", 
      "Villavicencio" => "Llanos", 
      "Riocha" => "Desierto", 
      "Quindio" => "Valle");

    switch("clima"){
      
            case "clima":
                echo array_search("Frio", $clima);
                break;
            case "ubicacion":
                echo array_search("Norte", $ubicacion);
                break; 
            case "turismo":
                echo array_search("Mar", $turismo);
                break; 
            } 
    }

    recomendacion();

    ?>
    
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>