<?php
    include 'conexion.php';

    $nombre_completo=$_POST['nombre_completo'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
     //encriptar contraseña
    $contrasena=hash('sha512', $contrasena);
    //ingresar datos
    $query= "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) 
             VALUES('$nombre_completo','$correo','$usuario','$contrasena')";
    //verificar correo no repetido
    $verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
    if(mysqli_num_rows($verificar_correo)>0){
        echo '
            <script>
                alert("Este correo ya esta registrado intenta con uno diferente");
                window.location="http://localhost/pagina%20final%20org/pagina%20final%20org/inicio%20de%20sesion/iniciodesesion.php";
            </script>
        ';
        exit();
    }
     //verificar usuario no repetido
    $verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario)>0){
        echo '
            <script>
                alert("Este usuario ya esta registrado intenta con uno diferente");
                window.location="http://localhost/pagina%20final%20org/pagina%20final%20org/inicio%20de%20sesion/iniciodesesion.php";
            </script>
        ';
        exit();
    }
    //error o completo
    $ejecutar= mysqli_query($conexion,$query);

    if($ejecutar){
        echo'
        <script>
            alert("usuario almacenado exitosamente");
            window.location="http://localhost/pagina%20final%20org/pagina%20final%20org/inicio%20de%20sesion/iniciodesesion.php";
        </script>
        ';
        die();
    }else{
        echo'
        <script>
            alert("Intentelo de nuevo usuario no almacenado");
            window.location="http://localhost/pagina%20final%20org/pagina%20final%20org/inicio%20de%20sesion/iniciodesesion.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>