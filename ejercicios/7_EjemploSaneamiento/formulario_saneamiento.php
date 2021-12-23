<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Saneado</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    
  </head>
  <body>
    
      <h1>Formulario</h1>
      
        <form role = "form" id = "myForm" action = "validarFormulario.php" method = "post" enctype="multipart/form-data">
           
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" minLength = "5" required = "true">
                         
              <label for="nombre" class="form-label">Edad</label>
              <input type="text" name="edad"  required = "true">
                          
              <label for="nombre" class="form-label">Página web</label>
              <input type="text" name="web" required = "true">
              
              <label for="correo">Correo electrónico</label>
              <input type="text" name="correo" >
              <button type="submit">Enviar</button>
        </form>
     
  </body>
</html>