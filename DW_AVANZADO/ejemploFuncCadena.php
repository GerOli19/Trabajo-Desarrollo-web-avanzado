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
            
                El programa siguiente utilizan 2 cadenas de texto en el cual se comparar&aacute; si las cadenas son iguales o no,<br>
                se cambiar&aacute; toda la cadena a min&uacute;sculas y may&uacute;sculas, tambi&eacute;n se reemplazar&aacute;n todas las letras (a, e, i, o, u)<br>
                y se mostraran todos los resultados para poder observar las operaciones realizadas con las cadenas proporcionadas:
                
                <br><br>
                
                <form method="POST">
                    <p>Cadena 1</p>
                    <input type="text" name="inp_cadenaUno" maxlength="20" placeholder="Cadena Uno">

                    <p>Cadena 2</p>
                    <input type="text" name="inp_cadenaDos" maxlength="20" placeholder="Cadena Dos">
                        <br>
                        <br>
                    <button type="submmit" name="btn_operacionesCadenas" onclick="operacionesConCadenas()">Operaciones con Cadenas</button>
                        <br>

                </form>

                <?php
                    operacionesConCadenas();
                ?>

            </p>

        </div>  
    
    </body>

</html>

<?php
    function operacionesConCadenas(){

        if(isset($_POST['btn_operacionesCadenas'])){

            if((isset($_POST['inp_cadenaUno']) && empty ($_POST['inp_cadenaUno'])) || (isset($_POST['inp_cadenaDos']) && empty ($_POST['inp_cadenaDos']))){

                echo '<br><strong>Favor de ingresar las 2 cadenas para poder continuar.</strong>';

            }else{

                $cadena1 = $_POST['inp_cadenaUno'];
                $cadena2 = $_POST['inp_cadenaDos'];

                if(strcmp($cadena1, $cadena2) === 0){

                    echo '<br><strong>Las cadena 1: '.$cadena1.' es igual a la cadena 2: '.$cadena2.'</strong>';

                }else{

                    echo '<br><strong>Las cadena 1: '.$cadena1.' es diferente a la cadena 2: '.$cadena2.'</strong>';

                }

                echo '<br><br><strong>Las cadena 1: '.$cadena1.' en solo letras mayusculas: '.strtoupper($cadena1).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las A por 0: '.str_replace('A', '0', strtoupper($cadena1)).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las E por 1: '.str_replace('E', '1', strtoupper($cadena1)).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las I por 2: '.str_replace('I', '2', strtoupper($cadena1)).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las O por 3: '.str_replace('O', '3', strtoupper($cadena1)).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las U por 4: '.str_replace('U', '4', strtoupper($cadena1)).'</strong>';
                echo '<br><br><strong>Las cadena 1: '.$cadena1.' en solo letras minusculas: '.strtolower($cadena1).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las a por 0: '.str_replace('a', '0', strtolower($cadena1)).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las e por 1: '.str_replace('e', '1', strtolower($cadena1)).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las i por 2: '.str_replace('i', '2', strtolower($cadena1)).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las o por 3: '.str_replace('o', '3', strtolower($cadena1)).'</strong>';
                echo '<br><strong>Las cadena 1: '.$cadena1.' remplazando las u por 4: '.str_replace('u', '4', strtolower($cadena1)).'</strong>';

                echo '<br><br><strong>Las cadena 2: '.$cadena2.' en solo letras mayusculas: '.strtoupper($cadena2).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las A por 0: '.str_replace('A', '0', strtoupper($cadena2)).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las E por 1: '.str_replace('E', '1', strtoupper($cadena2)).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las I por 2: '.str_replace('I', '2', strtoupper($cadena2)).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las O por 3: '.str_replace('O', '3', strtoupper($cadena2)).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las U por 4: '.str_replace('U', '4', strtoupper($cadena2)).'</strong>';
                echo '<br><br><strong>Las cadena 2: '.$cadena2.' en solo letras minusculas: '.strtolower($cadena2).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las a por 0: '.str_replace('a', '0', strtolower($cadena2)).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las e por 1: '.str_replace('e', '1', strtolower($cadena2)).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las i por 2: '.str_replace('i', '2', strtolower($cadena2)).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las o por 3: '.str_replace('o', '3', strtolower($cadena2)).'</strong>';
                echo '<br><strong>Las cadena 2: '.$cadena2.' remplazando las u por 4: '.str_replace('u', '4', strtolower($cadena2)).'</strong>';
                

            }

        }

    }

?>