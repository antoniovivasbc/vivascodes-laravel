@extends('layouts.main')
@section('links')
<link rel="stylesheet" href="css/welcome.css">
@section('content')
<!--modal--><!--
<div class="mascara">
    <div class="conteudo">
        <form action="">
            <div class="nome">
                <input type="text" placeholder="Nome">
            </div>
            <div class="links">
                <input type="text" placeholder="Link do site">
                <input type="Link Teste">
            </div>
            <div class="descricao">
                <textarea name="" placeholder="Descrição" id="" cols="30" rows="10">

                </textarea>
            </div>
            <div class="tecnologias">
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
            </div>
            <div class="funcionalidades">
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
                <div><input type="checkbox"> <label for=""></label></div>
            </div>
            <div class="imagem"><input type="file"></div>
            <div class="data"><input type="date"><input type="date"></div>
            <div class="submit"><input type="submit"></div>
        </form>
    </div>
</div>-->
<div class="box">
    <div class="box adicionar col-lg-4 col-md-6 col-sm-12 col-12" id="adicionar" onclick="modalForm()" onmouseover="mudarCor('adicionar', '#40DFCB', 'white', 'white', 'black')" onmouseout="mudarCor('adicionar', 'white', 'black', '#40DFCB', 'white')">
        <div class="card">
            <h5>Terminou um projeto?</h5>
            <p>Que incrivel! Você terminou um projeto, adicione-o imediatamente no seu portfólio.</p>
            <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle2" type="button" class="botao">Adicionar um projeto</button>
        </div>
    </div>
    <div class="box remover col-lg-4 col-md-6 col-sm-12 col-12" id="remover" onmouseover="mudarCor('remover', '#FF807A', 'white', 'white', 'black')" onmouseout="mudarCor('remover', 'white', 'black', '#FF807A', 'white')">
        <div class="card">
            <h5>Deseja remover um projeto?</h5>
            <p>Caso haja algum problema com o seu projeto, basta removê-lo. Você pode adicioná-lo de volta.</p>
            <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle" type="button" class="botao">Remover um projeto</button>
        </div>
    </div>
    <div class="box editar col-lg-4 col-md-6 col-sm-12 col-12" id="editar" onmouseover="mudarCor('editar', '#40D3F2', 'white', 'white', 'black')" onmouseout="mudarCor('editar', 'white', 'black', '#40D3F2', 'white')">
        <div class="card">
            <h5>Que tal um upgrade?</h5>
            <p>Sempre atualize seus projetos, tudo pode ficar melhor! Lembre-se de fazer um commit primeiro.</p>
            <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle" type="button"  class="botao">Editar um projeto</button>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action=""  class="busca">
            <input placeholder="Search" type="text">
        </form>
        <div class="projetos">
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
            <div data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"></div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
                <div class="nome">
                    <input type="text" placeholder="Nome">
                </div>
                <div class="links">
                    <input type="text" placeholder="Link do site">
                    <input type="text" placeholder="Link do teste">
                </div>
                <div class="descricao">
                    <textarea name="" placeholder="Descrição" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="tecnologias">
                    <div><input type="checkbox" name="html"><label for="html"> HTML</label></div>
                    <div><input type="checkbox" name="css"><label for="css"> CSS</label></div>
                    <div><input type="checkbox" name="javascript"><label for="javascript"> Javascript</label></div>
                    <div><input type="checkbox" name="jquery"><label for="jquery"> JQuery</label></div>
                    <div><input type="checkbox" name="php"><label for="php"> PHP</label></div>
                    <div><input type="checkbox" name="laravel"><label for="laravel"> Laravel</label></div>
                    <div><input type="checkbox" name="phpmailer"><label for="phpmailer"> PHP Mailer</label></div>
                    <div><input type="checkbox" name="bootstrap"><label for="bootstrap"> Bootstrap</label></div>
                    <div><input type="checkbox" name="ajax"><label for="ajax"> AJAX</label></div>
                    <div><input type="checkbox" name="sql"><label for="sql"> SQL</label></div>
                </div>
                <div class="img-data">
                    <div class="imagem col-12 col-lg-6">
                        <input type="file" class="col-12">
                        <div class="preview">
                        </div>
                    </div>
                    <div class="data col-12 col-lg-5">
                        <div><label for="data-inicio">Data início</label><input type="date"></div>
                        <div><label for="data-termino">Data término</label><input type="date"></div>
                    </div>
                </div>
                
                <div class="submit"><input type="submit" value="Adicionar Projeto"></div>
            </form>      
        </div>
    </div>
  </div>
</div>
@section('scripts')
<script src="js/welcome.js"></script>
@endsection