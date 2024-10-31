<?php
    require('funciones/conexion.php');
    $errores=array();
    if(isset($_POST['enviar'])){
        $mi_nombre=$mysqli->real_escape_string($_POST['miNombre']);
        $mi_calificacion=$mysqli->real_escape_string($_POST['miCalificacion']);
        $mi_comentario=$mysqli->real_escape_string($_POST['miComentario']);
        $mi_id=$mysqli->real_escape_string($_POST['miID']);
        if(!empty($mi_nombre)&&!empty($mi_calificacion)&&!empty($mi_comentario)&&!empty($mi_id)){
            $mi_fecha=date("Y-m-d H:i:s");
            $sql="UPDATE comentarios SET nombre='$mi_nombre',comentario='$mi_comentario',calificacion='$mi_calificacion' WHERE id='$mi_id'";
            $result=$mysqli->query($sql);
        }else{
            $errores="Rellena todos los campos";
        }
    }else{
        $errores="No has enviado el formulario";
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
            <h2>Estado de la modificacion</h2>

            
                <?php
                    if(isset($result)){
                        if($result){
                            if($mysqli->affected_rows>0){
                                echo "<div class='succes'>comentario modificado correctamente correctamente </div>";
                            }else{
                                $errores[]="No se modifico ningun comentario";
                            }
                        }else{
                            $errores[]="error en la consulta";
                        }
                    }
                ?>
                <?php

                    if(count($errores)>0){
                        echo "<div class='error'>";
                        foreach($errores as $error){
                            echo "!!!!!!!!!!!!! error jajajajjaja".$error."<br>";
                        }
                        echo"</div";
                    }
                    $mysqli->close();
                ?>
                <a href="sistemacomentarios.php" style="color: aqua; text-decoration: none;">Regresar a la pagina de inicio</a>
           

            <?php

                    if(count($errores)>0){
                        echo "<div class='error'>";
                        foreach($errores as $error){
                            echo "!!!!!!!!!!!!!".$error."<br>";
                        }
                        echo"</div>";
                    }
            ?>
        </div>
    </div>
</body>
</html>