<!DOCTYPE html>
  <html>
      <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
      </head>
  <body>
      <h1>Rutas senderismo</h1>
      <a href="v_agregarRuta.php">Nueva Ruta</a>
      <hr>
      <form method="post" action="./agregarRuta.php" enctype="multipart/form-data">
        <fieldset>
            <legend><h3>Alta nueva Ruta</h3></legend>
            
            <label for="titulo">Titulo</label>
            <input id="titulo" name="titulo" type="text">
            
            <label for="descripcion">Descripción</label>
            <input id="descripcion" name="descripcion" type="text">
            
            <label for="desnivel">Desnivel (m)</label>
            <input id="desnivel" name="desnivel" type="number">
            
            <label for="Distancia">Distancia (km)</label>
            <input id="distancia" name="distancia" type="number">
            
            <label for="dififultad">Dificultad</label>
            <input id="dificultad" name="dificultad" type="number">
            
            <label for="dififultad">Notas</label>
            <input id="notas" name="notas" type="notas">
            
            <input type="submit" value="Alta ruta">
        </fieldset>
    </form>
  </body>
</html>



