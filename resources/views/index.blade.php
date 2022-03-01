@extends('layouts.main')
@section('links')
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
@section('content')
<section id= "home">
        <div class="mascara">
            <div class = "nav">
                <div class='toggle-btn'>
                    <img onclick='sidebar()' src="img/menu.png" alt="">
                </div>
                <div class="nav-item1">
                    <a href="#home"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="nav-item3">
                    <img onclick="redirecionar()" src="img/whatsapp.png" alt="">
                    <img onclick="redirecionar2()" src="img/github.png" alt="">
                    <img onclick="redirecionar3()" src="img/linkedin.png" alt="">
                </div>
            </div>
            <div id="sidebar">
                <a href="#home"> Hello World </a>
                <a href="#programming"> Programming </a>
                <a href="#portfolio"> Portfolio </a>
                <a href="" onclick="redirecionar()"> Contato </a>
                <div class="icones2">
                    <img onclick="redirecionar()" src="img/whatsapp.png" alt="">
                    <img onclick="redirecionar2()" src="img/github.png" alt="">
                    <img onclick="redirecionar3()" src="img/linkedin.png" alt="">
                </div>
            </div>
            <h1 class="titulo">> Hello World</h1>
            <div class='flexbox'>
                <div class="apresentacao">
                    <img src="img/foto.png" alt="" class="perfil">
                    <div>
                        <h1>Antonio Vivas</h1>
                        <h2>Full stack web developer</h2>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <section id="programming">
        <h2 class="titulo">> Programming</h2>
        <div class="linguagens">
            <div>
                <p>
                I am a full stack developer that love the back-end programming. I have made this website to show my skills and projects that I have done, 
                currently I work using the following tecnologies below. I hope you enjoy my job!
                </p>
                <div class="linguagensimg">
                    <img src="img/htmlimg.png" alt="">
                    <img src="img/cssimg.png" alt="">
                    <img src="img/jsimg.png" alt="">
                    <img src="img/jqueryimg.png" alt="">
                    <img src="img/phpimg.png" alt="">
                    <img src="img/sqlimg.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div id='modal'>
            <div class='modal-content-container'>
                <img onclick="fecha_modal()" id='close' src="img/close.png" alt="">
                <div class='modal-content'>
                    <h1>Plazza Veículos</h1>
                </div>
                <div class='descricao'>
                    <h3>Description</h3>
                    <div>
                        <p>
                            Plazza Veículos is a car store, its website has an interface for the clients and a dashboard where the employees can manage the cars (add, edit or remove). Currently this site is not an e-commerce.
                        </p>
                    </div>
                </div>
                <div class='tecnologias'>
                    <h3>Technologies</h3>
                    <div>
                        <img src="img/htmlimg.png" alt="">
                        <img src="img/cssimg.png" alt="">
                        <img src="img/jsimg.png" alt="">
                        <img src="img/jqueryimg.png" alt="">
                        <img src="img/phpimg.png" alt="">
                        <img src="img/phpmailerimg.png" alt="">
                        <img src="img/sqlimg.png" alt="">
                    </div>
                </div>
                <div class='modal-btn-container'>
                    <a href="https://www.plazzaveiculos.com.br" target="_blank"><button class='modal-btn right'>Visit the site</button></a>
                </div>
            </div>
        </div>
        <div id='modal2'>
            <div class='modal-content-container'>
                <img onclick="fecha_modal2()" id='close' src="img/close.png" alt="">
                <div class='modal-content'>
                    <h1>Açougue Do Fiel</h1>
                </div>
                <div class='descricao'>
                    <h3>Description</h3>
                    <div>
                        <p>
                            POS system for a bakery and grocery, the system has products register, edition, search, sales report and stock spreadsshee. The employee can only sell items.
                        </p>
                    </div>
                </div>
                <div class='tecnologias'>
                    <h3>Technologies</h3>
                    <div>
                        <img src="img/htmlimg.png" alt="">
                        <img src="img/cssimg.png" alt="">
                        <img src="img/jsimg.png" alt="">
                        <img src="img/jqueryimg.png" alt="">
                        <img src="img/phpimg.png" alt="">
                        <img src="img/ajaximg.png" alt="">
                        <img src="img/sqlimg.png" alt="">
                    </div>
                </div>
                <div class='modal-btn-container'>
                    <a href="https://www.vivascodes.com/acouguedofiel" target="_blank"><button class='modal-btn left'>Link to test</button></a>
                </div>
            </div>
        </div>
        <div id='modal3'>
            <div class='modal-content-container'>
                <img onclick="fecha_modal3()" id='close' src="img/close.png" alt="">
                <div class='modal-content'>
                    <h1>Vivas Acessorios</h1>
                </div>
                <div class='descricao'>
                    <h3>Description</h3>
                    <div>
                        <p>
                            Vivas Acessorios was my aunt's store, so I used this to make my first website. This website shows the products, but does not have a dashboard, everything is made manually on code.
                        </p>
                    </div>
                </div>
                <div class='tecnologias'>
                    <h3>Technologies</h3>
                    <div>
                        <img src="img/htmlimg.png" alt="">
                        <img src="img/cssimg.png" alt="">
                        <img src="img/jsimg.png" alt="">
                    </div>
                </div>
                <div class='modal-btn-container'>
                    <a href="https://www.vivascodes.com/vivasacessorios" target="_blank"><button class='modal-btn left'>Link to test</button></a>
                </div>
            </div>
        </div>
        <div id='modal4'>
            <div class='modal-content-container'>
                <img onclick="fecha_modal4()" id='close' src="img/close.png" alt="">
                <div class='modal-content'>
                    <h1>Closer Language Center</h1>
                </div>
                <div class='descricao'>
                    <h3>Description</h3>
                    <div>
                        <p>
                            This website is a online course plataform, videos are integrated with vimeo, students can comment below the video and "finish class" to increase the course progress. There is a reCAPTCHA below the sign in form, and a session to recorvery the password via e-mail. It is a personal project to a friend. This website has an integration with hotmart API to receive the data from students that bought the course.
                        </p>
                    </div>
                </div>
                <div class='tecnologias'>
                    <h3>Technologies</h3>
                    <div>
                    <img src="img/htmlimg.png" alt="">
                        <img src="img/cssimg.png" alt="">
                        <img src="img/jsimg.png" alt="">
                        <img src="img/jqueryimg.png" alt="">
                        <img src="img/phpimg.png" alt="">
                        <img src="img/phpmailerimg.png" alt="">
                        <img src="img/ajaximg.png" alt="">
                        <img src="img/sqlimg.png" alt="">
                    </div>
                </div>
                <div class='modal-btn-container'>
                    <a href="https://www.vivascodes.com/closerlanguagecenter" target="_blank"><button class='modal-btn left'>Link to test</button></a>
                </div>
            </div>
        </div>
        <div id='modal5'>
            <div class='modal-content-container'>
                <img onclick="fecha_modal5()" id='close' src="img/close.png" alt="">
                <div class='modal-content'>
                    <h1>La Molienda</h1>
                </div>
                <div class='descricao'>
                    <h3>Description</h3>
                    <div>
                        <p>
                            Institutional website with emphasis in web development performance using three.js, and e-mail contact through form. This website was a challenge about the front-end and time, so I tried to improve my bootstrap skills and I made it in about 2 weeks. I have looked for anime.js and three.js to find a way to make a good animation using javascript.
                        </p>
                    </div>
                </div>
                <div class='tecnologias'>
                    <h3>Technologies</h3>
                    <div>
                    <img src="img/htmlimg.png" alt="">
                        <img src="img/cssimg.png" alt="">
                        <img src="img/jsimg.png" alt="">
                        <img src="img/jqueryimg.png" alt="">
                        <img src="img/phpimg.png" alt="">
                        <img src="img/phpmailerimg.png" alt="">
                    </div>
                </div>
                <div class='modal-btn-container'>
                    <a href="https://www.vivascodes.com/lamolienda" target="_blank"><button class='modal-btn left'>Link to test</button></a>
                </div>
            </div>
        </div>
        <h2 class="titulo">> Portfolio</h2> 
        <div class="gif-container">
            <img src="img/full-stack-development.gif" alt="">
        </div>
        <div class="biblioteca">
            <div onclick="modal5()" id="lamolienda" class = "site" style="background-image: url(img/lamolienda.jpg);"><div onclick="modal5()"  class = "filho">La Molienda</div></div>
            <div onclick="modal()" id="plazza" class = "site" style="background-image: url(img/plazza.jpg);"><div onclick="modal()"  class = "filho">Plazza Veículos</div></div>
            <div onclick="modal2()" id="acougue" class = "site" style="background-image: url(img/fundo-acougue.jpg);"><div onclick="modal2()"  class = "filho">Açougue Do Fiel</div></div>
            <div onclick="modal4()" id="closerlanguagecenter" class = "site" style="background-image: url(img/closerlanguagecenter.jpg);"><div onclick="modal4()"  class = "filho">Closer Language Center</div></div>
            <div onclick="modal3()" id="vivasacessorios" class = "site" style="background-image: url(img/vivasacessorios.png);"><div onclick="modal3()"  class = "filho">Vivas Acessorios</div></div>
        </div>
        <div id="footer">
            <p>© Copyright - <span>Vivas Codes</span></p>
        </div>
    </section>
@section('scripts')
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>
@endsection