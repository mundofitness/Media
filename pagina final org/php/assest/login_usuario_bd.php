<?php
    session_start();
    include 'conexion.php';
  
    
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $contrasena= hash('sha512',$contrasena);


    $validar_login=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' and
    contrasena='$contrasena'"); 

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario']=$correo;
        header("location:http://localhost/pagina%20final%20org/pagina%20final%20org/inicio%20de%20sesion/sistemacomentarios.php");
        exit;
    }else{
        header("location:http://127.0.0.1:5501/html/fallo.html");
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
            </script>
        ';
        exit;
    }
?>