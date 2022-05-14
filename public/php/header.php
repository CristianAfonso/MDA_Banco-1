<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/nav.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<nav>
    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn" onclick="myFunction();equis(this)">
                <div class="nav-container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <div class="dropdown-content" id="myDropdown">
              <div class="header">
                <h2>Banco MDA</h2>
              </div>
              <div class="row">
                <div class="column">
                    <lu class="column-header">
                      <div class="img-container">
                          <img class="img" src="../images/clock.png" alt="bankLogo">
                        </div>
                        <h3 style="display:inline-block; white-space:nowrap;">Mi día a día</h3>
                    </lu>
                  <a href="retiro.html">Retirar dinero</a>
                  <a href="./user_isLoged.php">Mi perfil</a>
                  <a href="pretransferencias.html">Realizar una transferencia</a>
                </div>
                <div class="column">
                    <lu class="column-header">
                        <div class="img-container">
                            <img class="img" src="../images/bankLogo.png" alt="bankLogo">
                          </div>
                          <h3 style="display:inline-block; white-space:nowrap;">Conoce tu banco</h3>
                      </lu>
                  <a href="divisaExchanger.php">Calculadora de divisas</a>
                  <a href="sobreNosostros.php">Más sobre nosotros</a>
                  <a href="terminosycondiciones.php">Términos y condiciones</a>
                </div>
            </div>
          </div> 
          <?php
            ob_start();
            session_start();
            include 'db_connect.php';
            if (isset($_SESSION['fullname'])) {
                echo'<div class="login-container">
                <label> '; echo $_SESSION['fullname']; echo'</label>
                <a href="./user_logout.php" class="register-button"><i class="fa fa-fw fa-user"></i>Cerrar Sesión</a>
                </div>';
            }else{
                    echo'<div class="login-container">
                    <form method="post" action="./user_login.php">
                        <input type="text" placeholder="DNI" name="idnum">
                        <input type="password" placeholder="Contraseña" name="psw">
                        <input type="submit" class="login-btn" name="login-btn"/>
                        <a href="./register.php" class="register-button"><i class="fa fa-fw fa-user"></i>Registrarse</a>
                    </form>
                </div>';
            }
          ?>
          <a href="./index.php" class="logo-container">
          <img src="../images/bankLogo.png" alt="logo" class="logo-nav"></a>
        </div>
      </nav>
      <script src="../js/nav.js"></script>
