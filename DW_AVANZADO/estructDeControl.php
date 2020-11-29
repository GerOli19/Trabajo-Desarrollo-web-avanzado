<!DOCTYPE html>

<html lang="en">
    
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="ESTRUCTURAS DE CONTROL">
        <meta name="author" content="Gerardo Oliver Jiménez">
        <title>Desarrollo Web Avanzado</title>
        <img src="imagenes\logo_unir.jpg" width="20%">
    
    </head>

    <body>
    
        <div class="container">
    
            <h1>ESTRUCTURAS DE CONTROL : Gerardo Oliver Jimen&eacute;z</h1>
            <p>
            
                El programa siguiente simula la tirada de un dado y cada numero obtenido 
                nos mostrara un mensaje diferente indicando el numero obtenido,<br> 
                un mensaje y la estructura de control utilizada estas ser&aacute;n IF - WHILE - FOR:
                
                <br><br>
                
                <form method="POST">
                    
                    <button type="submmit" name="btn_lanzarDado">Lanzar Dado</button>

                    <?php
                        $dado = new Lanzar();
                        $dado -> lanzarDado();
                    ?>
                </form>
                
                <?php

                    class Lanzar{

                        public function lanzarDado(){
                           
                            if(isset($_POST['btn_lanzarDado'])){
                                $dado = rand(1,6);
                                $arrayResultadosAnteriores[] = '';
                                
                                if(6 === $dado){

                                    echo '<br><br><strong>Respuesta de la estructura IF: </strong><p>Has obtenido la Maxima Puntuacion: '.$dado.'</p>';    
                                
                                }else if(1 === $dado){
                                    
                                    echo '<br><br><strong>Respuesta de la estructura IF: </strong><p>Has obtenido la Minima Puntuacion: '.$dado.'</p>';    

                                }

                                $contA = 1;
                                $cadena = '';
                                while ($contA < $dado) {
                                    array_push($arrayResultadosAnteriores, $contA);
                                    $cadena .= $contA.', ';
                                    $contA++;
                                }
                                
                                if(strlen($cadena) > 0){

                                    echo '<br><strong>Respuesta de la estructura WHILE: </strong><br><p>Los numeros menores al resultado obtenido son : '.substr($cadena, 0, -2).'</p>';

                                }

                                $cadenaFor = '';
                                for ($i=1; $i < count($arrayResultadosAnteriores); $i++) { 
                                    
                                    $cadenaFor .= $i.', ';
                                
                                }

                                if(strlen($cadenaFor) > 0){

                                    echo '<br><strong>Respuesta de la estructura FOR: </strong><br><p>Los numeros menores al resultado obtenido son : '.substr($cadena, 0, -2).'</p>';

                                }

                                echo '<br><strong>El numero obtenido fue:'.$dado.'</strong><br>'; 

                            }

                        }

                    }

                ?>

            </p>

        </div>  
    
    </body>

</html>