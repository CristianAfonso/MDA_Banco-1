<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Registrar</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="../css/register.css">
        <link rel="stylesheet" href="../css/nav.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(function () {
                $('.nav').load("./header.php");
                $('.footer').load("./footer.php");
            });
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <div class="nav"></div>
    <body>

    <div id="customheader">
        <div id="left"><img src="../images/logo.png" alt="logo" class="register-img logo"></div>
        <div id="center"><h1>REGISTRATE</h1><br>Hazte cliente de nuestro banco ahora</div>
        <div id="right"><img src="../images/ukraine.png" alt="donation" class="register-img donation"></div>
    </div>

    <div class="container">
        <form class ="form" id="form" method="post" action="../php/user_reg.php">

            <div class="userdetails">
                <div class="input-box">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="Name" id="Name" placeholder="Nombre y apellidos" required>
                    <small>mensaje</small>
                </div>
                <div class="input-box">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="IDnum" id="IDnum" placeholder="DNI/NIF/NIE" required>
                    <small>mensaje</small>
                </div>
                <div class="input-box">
                    <i class="fas fa-envelope-square icon"></i>
                    <input type="text" name="Email" id="Email" placeholder="Correo electronico" required>
                    <small>mensaje</small>
                </div>
                <div class="input-box">
                    <i class="fas fa-phone-square-alt icon"></i>
                    <input type="text" name="Phone" id="Phone" placeholder="Numero de contacto" required>
                    <small>mensaje</small>
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-house icon"></i>
                    <input type="text" name="Address" id="Address" placeholder="Domicilio" required>
                    <small>mensaje</small>
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-house icon"></i>
                    <input type="text" name="Zipcode" id="Zipcode" placeholder="Código postal" required>
                    <small>mensaje</small>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock icon"></i>
                    <input type="Password" name="Pass" id="Pass" placeholder="Contraseña" required>
                    <small>mensaje</small>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock icon"></i>
                    <input type="Password" name="Pass2" id="Pass2" placeholder="Repetir contraseña" required>
                    <small>mensaje</small>
                </div>
                <div class="input-box">
                    <i class="fas fa-lock icon"></i>
                    <input type="text" name="account" id="account" placeholder="Nombre de la cuenta" required>
                    <small>mensaje</small>
                </div>
            </div>
            <div class="check-box">
                <input type="checkbox" id="accept" name="accept" value="confirm" required>
                <label for="accept"> He leido y acepto <a href="terminosycondiciones.html">los términos y condiciones de uso</a></label>
            </div>

            <input type="submit" class="button" name="cnfrm-submit"/>
            <p>¿Ya tienes una cuenta? <a href="./index.php">Inicia sesion</a></p>
        </form>
    </div>
    <script src="../js/regvalidation.js"></script>
    <div class="footer"></div>
    </body>
    


    
</html>