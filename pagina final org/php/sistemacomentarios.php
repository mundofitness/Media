<?php
    require('funciones/conexion.php');
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesión");
                window.locartion="http://localhost/pagina%20final%20org/pagina%20final%20org/inicio%20de%20sesion/iniciodesesion.php";
            </script>
        ';
        session_destroy();
        die();
    }
    $errores= array();
    $sql = "SELECT * from comentarios";

    $result = $mysqli->query($sql);
    //var_dump($result);
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Comentarios</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Metrophobic&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <!--Librerarias-->
    <script src="https://kit.fontawesome.com/1dc6c6b8f8.js" crossorigin="anonymous"></script>
    <!--Libreria iconos-->

    
</head>
<body>
    <script src="/javascript/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <header>
        <a href="http://127.0.0.1:5501/index.html" class="logo">
            Mundo Fitness
        </a>
        <div class="toggleMenu" onclick="toggleMenu()"></div>
        <ul class="navigation">
            <li><a class="btn-neon" href="assest/cerrar_sesion.php" >
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Cerrar Sesión
                </a>
            </li>
            <li><a style="color: black;" class="" href="http://127.0.0.1:5501/html/alimentacion.html">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Alimentación
                </a>
            </li>
            <li>
                <a class="btn-neon" href="http://localhost/pagina%20final%20org/pagina%20final%20org/inicio%20de%20sesion/iniciodesesion.php">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                </a>
            </li>
        </ul>
    </header>
    <div class="espacio"></div>
    <div class="container">
        <div class="comentarios">
            <h2>Sistema de comentarios</h2>
            <?php
                if($result){
                    if($result->num_rows > 0){
                        while($comentario=$result->fetch_assoc()){

                       
            ?>
            <div class="comentario">
                <p><span>Autor:</span><?php echo  htmlspecialchars($comentario['nombre']); ?></p>
                <p><span>Calificación:</span><?php echo htmlspecialchars($comentario['calificacion']); ?></p>
                <p><span>Fecha:</span><?php echo htmlspecialchars($comentario['fecha']); ?></p>
                <p><span>Comentario:</span><?php echo htmlspecialchars($comentario['comentario']); ?></p>
                <div class="acciones">
                    <a href="borrar.php?id=<?php echo htmlspecialchars($comentario['id']); ?>"><button class="borrar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/></svg>  Borrar</button></a>
                    <a href="editar.php?id=<?php echo htmlspecialchars($comentario['id']); ?>"><button class="editar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/></svg>  Editar</button></a>
                </div>
            </div>
            <?php
                            }
                        }else{
                            $errores[]="no hay ningun comentario";
                        }
                    }else{
                        $errores[] = "hubo un error en la consulta";
                    }

                    if(count($errores)>0){
                        echo "<div class='error'>";
                        foreach($errores as $error){
                            echo "".$error."<br>";
                        }
                        echo"</div";
                    }
            ?>
        </div>
    </div>
    <center class="cerrar_sesionboton">
        <a class="btn-neon" href="assest/cerrar_sesion.php" >
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Cerrar Sesión
        </a>
    </center>
    <div class="btn-add">
        <a href="insertar.php"><button class="añadir"><svg class="icono_add" xmlns="http://www.w3.org/2000/svg" style="margin-top: 10px;margin:10px;margin-bottom: 0px;" width="1em" height="1em" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/></svg></button></a>
    </div>
</body>
</html>