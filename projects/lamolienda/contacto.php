<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Antonio Vivas">
    <meta name="description" content="Panaderia La Molienda">
    <meta name="keywords" content="la molienda, lamolienda, pan, panaderia, panadeiros, pasteleria, enpanadilla">
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="content-language" content="es"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>La Molienda</title>
    <link rel="shortcut icon" href="img/main-logo.png" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="" class="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pages" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="nosotros.html">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="productos.html">Productos</a>
              </li>
              <li class="nav-item contacto">
                <a class="nav-link" href="contacto.php">Contacto</a>
              </li>
            </ul>
          </div>
          <img src="img/logo.png" style="opacity:0;" alt="" class="logo logo2">
        </div>
    </nav>
    <div class="flex-box contacto2">
        <div class="contact-container">
            <h4>Contacta com nosotros</h4>
            <h6>Email: exemplo@gmail.com</h6>
            <h6>Si desea contactar con nosotros puede hacerlo a través del e-mail o de este formulario. <br> ¡Estaremos encantados de atenderle!</h6>
            <div class="login-container">
                <form action="php/email.php" method="POST" class="form-contato">
                    <div class=" name-email">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name="nome">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo Electrónico" name="email">
                    </div>
                    <div class="textarea">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensaje" rows="3" name="mensagem"></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary enviar">Enviar</button>
                    </div>
                </form>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11816.3076930921!2d-8.715171606810554!3d42.23416956875634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f63936011c3d1%3A0x5d6967fae321eba0!2sPanader%C3%ADa%20y%20Pasteler%C3%ADa%20La%20Molienda!5e0!3m2!1sen!2ses!4v1637257728489!5m2!1sen!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        <img src="" alt="">
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="info">
                <ul>
                    <li><strong> Dirección: </strong> Rúa Travesía de Vigo, 43, 36206 Vigo, Pontevedra, España</li>
                    <li><strong> Horario: </strong> Lunes - Viernes: 	7:00–16:00, 17:30–20:00 / Sabado y Domingo:  8:00–15:00</li>
                    <li><strong> Teléfono: </strong> +34 986 11 76 45</li> <br>
                    <li><strong>Salud y seguridad: Se requiere el uso de mascarilla · El personal usa mascarillas</li></strong>
                </ul>
            </div>
            <div class="social-media">
                <img src="img/instagram.png" onclick="insta()" alt="">
                <img src="img/facebook.png" onclick="face()" alt="">
                <img src="img/whatsapp.png" onclick="wpp()" alt="">
            </div>  
        </div>
        <hr>
        <div class="copyright">© Todos os direitos reservados</div>
    </footer>
</body>
<script src="js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</html>