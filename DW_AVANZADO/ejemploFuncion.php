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
    
            <h1>EJEMPLO DE FUNCI&Oacute;N : Gerardo Oliver Jimen&eacute;z</h1>
            <p>
            
                El programa siguiente utiliza una funci&oacute;n principal que dependiendo de la operacion seleccinada (suma, resta, multiplicaci&oacute;n y division)<br> 
                de 2 n&uacute;meros proporcionados por el usuario, se manda a llamar a otra funci&oacute;n que corresponde a la opci&oacute;n seleccionada:
                
                <br><br>
                
                <form method="POST">
                    <p>Primer Numero</p>
                    <input type="text" name="inp_numUno">

                    <p>Segundo Numero</p>
                    <input type="text" name="inp_numDos">
                        <br>
                    <p>Operacion</p>
                    <select name="sel_operacion">
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicacion</option>
                        <option value="division">Division</option>
                    </select>
                        <br>
                        <br>
                    <button type="submmit" name="btn_Calcular" onclick="realizarOperacion()">Calcular</button>
                        <br>

                </form>

                <?php
                    realizarOperacion();
                ?>

            </p>

        </div>  
    
    </body>

</html>

<?php
    function realizarOperacion(){

        if(isset($_POST['btn_Calcular'])){

            if((isset($_POST['inp_numUno']) && empty ($_POST['inp_numUno'])) || (isset($_POST['inp_numDos']) && empty ($_POST['inp_numDos']))){

                echo '<br><strong>Favor de ingresar los dos numeros mayores a 0 para poder continuar.</strong>';

            }else{

                if(!is_numeric($_POST['inp_numUno']) || !is_numeric($_POST['inp_numDos'])){
                    
                    echo '<br><strong>Favor de ingresar solo numeros mayores a 0 para poder continuar.</strong>';

                }else{
                    
                    $numUno = intval ($_POST['inp_numUno']);
                    $numDos = intval ($_POST['inp_numDos']);
                    $select = $_POST['sel_operacion'];

                    if('suma' === $select){

                        realizarSuma($numUno, $numDos);
    
                    }else if('resta' === $select){
    
                        realizarResta($numUno, $numDos);
    
                    }else if('multiplicacion' === $select){
    
                        realizarMultiplicacion($numUno, $numDos);
    
                    }else{
    
                        realizarDivision($numUno, $numDos);
    
                    }

                }
                
            }

        }

    }

    function realizarSuma($numUno, $numDos){
        
        $resultado = $numUno + $numDos;
        echo '<br><strong>El resultado mostrado desde la funcion realizarSuma es : '.$resultado.'</strong>';
        
    }

    function realizarResta($numUno, $numDos){

        $resultado = $numUno - $numDos;
        echo '<br><strong>El resultado mostrado desde la funcion realizarResta es : '.$resultado.'</strong>';
        
    }

    function realizarMultiplicacion($numUno, $numDos){

        $resultado = $numUno * $numDos;
        echo '<br><strong>El resultado mostrado desde la funcion realizarMultiplicacion es : '.$resultado.'</strong>';
        
    }

    function realizarDivision($numUno, $numDos){

        if($numUno > 0  && $numDos > 0){
            
            $resultado = $numUno / $numDos;
            echo '<br><strong>El resultado mostrado desde la funcion realizarDivision es : '.$resultado.'</strong>';
        
        }else{

            echo '<br><strong>No se pueden realizar diviciones entre 0</strong>';

        }
        
    }
?>