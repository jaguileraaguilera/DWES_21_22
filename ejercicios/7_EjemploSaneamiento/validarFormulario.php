<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Saneado</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
  </head>
  <body>
    
      <h1>Formulario saneado</h1>
      
      <!-- Examinamos cada campo eliminando lo que no sirve:  -->
        <!--Eliminamos del nombre las etiquetas HTML -->
      
        <?=filter_var($_POST["nombre"],  FILTER_SANITIZE_STRING)?>
        <br>
        
        <!-- mantenemos en la edad los digitos, carecteres de signo (+/-) y elimina el resto -->
      
        <?=filter_var($_POST["edad"], FILTER_SANITIZE_NUMBER_INT)?>
        <br>
        
        <!-- eliminamos de la URL todos los caracteres excepto letras digitos y !*'(),{}`<>#%;$-_.+/?:@&= -->
      
        <?=filter_var($_POST["web"], FILTER_SANITIZE_URL)?>
        <br>
        <!-- Eliminamos del correo todos los caracteres menos letra, digitos y $%&'*+-/=#[^_`{|}~@.[] -->
      
        <?=filter_var($_POST["correo"],  FILTER_SANITIZE_EMAIL)?>
        <br>
        
        <!-- Después de limpiar la información, debemos comprobar que cumple con lo requisitos establecidos -->
        <?php 
        if(!isset($_POST["nombre"])){
            echo "ERROR: El campo nombre es obligatorio.<br>";
        }
        ?>
    
        <?php  
            if(!filter_var($_POST["edad"], FILTER_VALIDATE_INT)){
                echo "ERROR: El campo edad debe ser un número entero.<br>";
            }
        ?>
    
        <?php 
            if(!filter_var($_POST["web"], FILTER_VALIDATE_URL)){
                echo "ERROR: El campo web no es correcto.<br>";
            }
        ?>
   
        <?php 
            if(!filter_var($_POST["correo"],  FILTER_VALIDATE_EMAIL)){
                echo "ERROR: El campo email no es correcto.<br>";
            }
        ?>
    
  </body>
</html>