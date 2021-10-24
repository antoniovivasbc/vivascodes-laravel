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
                <a href="#portfolio"> Portfólio </a>
                <a href="" onclick="redirecionar()"> Contato </a>
                <div class="icones2">
                    <img onclick="redirecionar()" src="img/whatsapp.png" alt="">
                    <img onclick="redirecionar2()" src="img/github.png" alt="">
                    <img onclick="redirecionar3()" src="img/linkedin.png" alt="">
                </div>
            </div>
            <div class="titulo">
                > Hello World
            </div>
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
        <div class="titulo titulo2">
            > Programming
        </div>
        <div class="linguagens">
            <div>
                <p>
                  Este site tem o propósito de apresentar o meu trabalho para
                  as pessoas e empresas, além de ser um ótimo meio de refinar minhas habilidades como programador,
                  onde posso fazer todo tipo de teste e atualização para que fique cada vez melhor. Atualmente uso e estudo a respeito das seguintes tecnologias abaixo.
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
                    <h3>Descrição</h3>
                    <div>
                        <p>
                            Plazza Veículos é uma loja de carros seminovos, este site possui a interface para o cliente e uma dashboard para os funcionários, por onde ocorre o gerenciamento dos veículos. No momento o site não realiza transações (e-commerce), o contato é feito através de whatsapp, instagram, facebook e e-mail. Cada veículo possui sua página individual com suas respectivas informações
                        </p>
                    </div>
                </div>
                <div class='tecnologias'>
                    <h3>Tecnologias utilizadas</h3>
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
                    <a href="https://www.vivascodes.com/plazzaveiculos/dashboard" target="_blank"><button class='modal-btn left'>Link para teste</button></a>
                    <a href="https://www.plazzaveiculos.com.br" target="_blank"><button class='modal-btn right'>Visite o site</button></a>
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
                    <h3>Descrição</h3>
                    <div>
                        <p>
                            Sistema PDV para açougue e mercadinho do Fiel, o sistema conta com frente de caixa, cadastro, pesquisa e edição dos produtos, relatório de vendas e planilha de estoque.
                        </p>
                    </div>
                </div>
                <div class='tecnologias'>
                    <h3>Tecnologias utilizadas</h3>
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
                    <a href="https://www.vivascodes.com/acouguedofiel" target="_blank"><button class='modal-btn left'>Link para teste</button></a>
                </div>
            </div>
        </div>
        <div class="titulo">
            > Portfólio
        </div> 
        <div class="gif-container">
            <img src="img/full-stack-development.gif" alt="">
        </div>
        <div class="biblioteca">
            <div onclick="modal()" id="plazza" class = "site" style="background-image: url(img/plazza.jpg);"><div onclick="modal()"  class = "filho">Plazza Veículos</div></div>
            <div onclick="modal2()" id="acougue" class = "site" style="background-image: url(img/fundo-acougue.jpg);"><div onclick="modal2()"  class = "filho">Açougue Do Fiel</div></div>
        </div>
        <div id="footer">
        <p>Desenvolvido por Antonio Vivas</p>
    </div>
    </section>
@section('scripts')
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>
@endsection
