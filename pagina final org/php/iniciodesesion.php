

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <!--Librerarias-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Metrophobic&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <!--Librerarias-->
    <link rel="stylesheet" href="css/iniciodesesion.css">
</head>
<body class="body">
    <div class="containerboton">
        <input type="checkbox" id="btn-mas">
        <div class="redes">
            <!--Aqui van los iconos y enlaces del boton flotante si algo ponemos el formulario aqui-->
            <a href="https://www.instagram.com/mundo_fitness_11_6?utm_source=qr&igsh=N3EwbmgyajVmenls"><i class="fab fa-instagram"  style="color: black;margin-top: 22px"></i></a>
            <a href="https://forms.gle/cgKcoEucqHpn8r5S6"><img class="img-form" src="formg.png" alt=""></a>           
        </div>
        <div class="btn-mas2">
            <label for="btn-mas" alt=""><img class="img-boton2" src="icono.jfif"></label>
        </div>
    </div>
    <header>
        <a href="http://127.0.0.1:5501/index.html" class="logo">
            Mundo Fitness
        </a>
        <div class="toggleMenu" onclick="toggleMenu()"></div>
        <ul class="navigation">
            <li><a class="btn-neon" href="http://127.0.0.1:5501/html/entrenamiento.html" >
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Entrenamiento
                </a>
            </li>
            <li><a class="btn-neon" href="http://127.0.0.1:5501/html/alimentacion.html">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Alimentación
                </a>
            </li>
        </ul>
    </header>
    <div class="separacion"></div>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="assest/login_usuario_bd.php" class="formulario__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="assest/registro_usuario_bd.php" class="formulario__register" method="POST">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="inicio_de_sesion.js"></script>
</body>
</html>