<!DOCTYPE html>

<html lang="en">
    
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="EJEMPLO DE FUNCI&Oacute;N">
        <meta name="author" content="Gerardo Oliver Jiménez">
        <title>Desarrollo Web Avanzado</title>
        <img src="imagenes\logo_unir.jpg" width="20%">
    
    </head>

    <body>
    
        <div class="container">
    
            <h1>EJEMPLO DE ARREGLO : Gerardo Oliver Jimen&eacute;z</h1>
            <p>
            
                El programa siguiente utilizan 2 arreglos, el primero una serie de n&uacute;meros del 1 al 10 separados por comas(,)<br>
                y otro arreglo de 10 n&uacute;meros generado aleatoriamente y se evaluara del arreglo proporcionado por<br>
                el usuario que elementos se encuentran en el arreglo generado de forma din&aacute;mica y cuantas veces se repiten:
                
                <br><br>
                
                <form method="POST">
                    <p>Arreglo de N&uacute;meros</p>
                    <input type="text" name="inp_numUno" maxlength="20" placeholder="n&uacute;meros separados por comas (,)">
                        <br>
                        <br>
                    <button type="submmit" name="btn_Comparar" onclick="realizarComparacion()">Comparar Arreglos</button>
                        <br>

                </form>

                <?php
                    realizarComparacion();
                ?>

            </p>

        </div>  
    
    </body>

</html>

<?php
    function realizarComparacion(){

        if(isset($_POST['btn_Comparar'])){

            if((isset($_POST['inp_numUno']) && empty($_POST['inp_numUno']))){

                echo '<br><strong>Favor de ingresar los n&uacute;meros separados por comas (,) para poder continuar.</strong>';

            }else{
                
                $arregloUsuario = explode(',', $_POST['inp_numUno']);

                if(count($arregloUsuario) > 0){

                    $arrayAleatorio[] = null;

                    for ($i=0; $i < 10; $i++) { 
                        array_push($arrayAleatorio, rand(1,10));
                    }

                    echo 'Arrego del Usuario: '.$_POST['inp_numUno'].'<br>';
                    echo 'Arrego Aleatorio: ';

                    $cadenaArrAleatorio = '';
                    for($a=1; $a < count($arrayAleatorio); $a++){
                    
                        $cadenaArrAleatorio .= $arrayAleatorio[$a].', ';
                    
                    }
                    
                    echo substr($cadenaArrAleatorio, 0, -2).'<br>';

                    for($a = 0; $a < count($arregloUsuario); $a++){

                        $contadorRepeticiones = 0;

                        for($b=1; $b < count($arrayAleatorio); $b++ ){

                            if(intval($arregloUsuario[$a]) === $arrayAleatorio[$b]){
                                
                                $contadorRepeticiones++;

                            }

                        }

                        if($contadorRepeticiones > 1){
                            echo '<br><strong>El n&uacute;mero '.$arregloUsuario[$a].' en la posicion '.$a.' se encuentra '.$contadorRepeticiones.' veces en el arreglo aleatorio.</strong>';
                        
                        }else if($contadorRepeticiones === 1){

                            echo '<br><strong>El n&uacute;mero '.$arregloUsuario[$a].' en la posicion '.$a.' se encuentra '.$contadorRepeticiones.' ves en el arreglo aleatorio.</strong>';
                        
                        }else{
                            
                            echo '<br><strong>El n&uacute;mero '.$arregloUsuario[$a].' en la posicion '.$a.' no se encuentra en el arreglo aleatorio.</strong>';

                        }
                       

                    }


                }else{
                    
                    echo '<br><strong>Favor de ingresar los n&uacute;meros separados por comas (,) para poder continuar.</strong>';

                }
                
            }

        }

    }

?>