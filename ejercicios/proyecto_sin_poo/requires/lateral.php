<?php
function mostrarError($errores, $campo) {
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = '<div class = "alerta_alerta_error">'.$errores[$campo]."</div>";
    }
    
    return $alerta;
}
?>

<aside>
    <form method="post" action="./requires/registro.php" enctype="multipart/form-data">
        <fieldset>
            <legend><h3>Regístrate</h3></legend>
            <?php if (isset($_SESSION['completado'])): ?>
                <div class="alerta_alerta_exito">
                    <?=$_SESSION['completado'] ?>
                </div>
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta_alerta_error">
                <?=$_SESSION['errores']['general'] ?>
            </div>
            <?php endif;?>
            
            <label for="nombre">Nombre</label>
            <input id="nombre" name="nombre" type="text">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '';?>
            <label for="apellidos">Apellidos</label>
            <input id="apellidos" name="apellidos" type="text">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '';?>
            <label for="email">Email</label>
            <input id="email" name="email" type="email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '';?>
            <label for="password">Contraseña</label>
            <input id="password" name="password" type="password">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '';?>
            <input type="submit" value="Registrar">
        </fieldset>
    </form>
    <form method="post" action="./requires/login.php" enctype="multipart/form-data">
        <fieldset>
            <legend><h3>Identifícate</h3></legend>
            
            <label for="email">Email</label>
            <input id="email" name="email" type="email">
            
            <label for="password">Contraseña</label>
            <input id="password" name="password" type="password">
            
            <input type="submit" value="Entrar">
        </fieldset>
    </form>
</aside>
