<?php
require('funciones/conexion.php');
$errores= array();

if(isset($_POST['enviar'])){
    $mi_nombre= $mysqli->real_escape_string($_POST['miNombre']);
    $mi_calificacion=$mysqli->real_escape_string($_POST['miCalificacion']);
    $mi_comentario=$mysqli->real_escape_string($_POST['miComentario']);
    //var_dump($_POST);
    if(!empty($mi_nombre) && !empty($mi_calificacion) && !empty($mi_comentario)){

        $mi_fecha=date('Y-m-d H:i:s');
        
        $sql = "INSERT INTO comentarios (id, nombre, comentario, fecha, calificacion) VALUES (NULL, '$mi_nombre', '$mi_comentario', '$mi_fecha', '$mi_calificacion')";
        $result = $mysqli->query($sql);
    }else{
        $errores[]="Rellena todos los campos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Comentarios</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="comentarios">
            <h2>Insertar comentarios</h2>
            <?php
                if(isset($result)){
                    if($result){
                        echo "<div class='succes'>comentario insertado correctamente </div>";
                    }else{
                        $errores[]="sucedió un error";
                    }
                }
            ?>
            <?php
                    
                if(count($errores)>0){
                    echo "<div class='error'>";
                    foreach($errores as $error){
                        echo "!!!!!!!!!!!!! error jajajajjaja".$error."<br>";
                    }
                    echo"</div>";
                }
                $mysqli->close();
                    
            ?>

            <div class="formulario">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <label for="">Nombre</label>
                    <input type="text" name="miNombre">
                    <label for="">calificacion</label>
                    1
                    <input type="radio" name="miCalificacion" value="1">
                    2
                    <input type="radio" name="miCalificacion" value="2">
                    3
                    <input type="radio" name="miCalificacion" value="3">
                    4
                    <input type="radio" name="miCalificacion" value="4">
                    5
                    <input type="radio" name="miCalificacion" value="5" checked>
                    <label for="">Comentario</label>
                    <textarea name="miComentario" id="" cols="30" rows="10"></textarea>
                    <input type="submit" value="Enviar" name="enviar">
                </form>

            </div>
                <a href="sistemacomentarios.php" style="color: aqua; text-decoration: none;">Regresar a la pagina de inicio</a>


        </div>
    </div>
</body>
</html>