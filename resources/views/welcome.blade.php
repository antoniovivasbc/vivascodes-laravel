@extends('layouts.main')
@section('links')
<link rel="stylesheet" href="css/welcome.css">
@section('content')

<div class="box">
    <div class="box adicionar col-lg-4 col-md-6 col-sm-12 col-12" id="adicionar" onmouseover="mudarCor('adicionar', '#40DFCB', 'white', 'white', 'black')" onmouseout="mudarCor('adicionar', 'white', 'black', '#40DFCB', 'white')">
        <div class="card">
            <h5>Terminou um projeto?</h5>
            <p>Que incrivel! Você terminou um projeto, adicione-o imediatamente no seu portfólio.</p>
            <button class="botao">Adicionar um projeto</button>
        </div>
    </div>
    <div class="box remover col-lg-4 col-md-6 col-sm-12 col-12" id="remover" onmouseover="mudarCor('remover', '#FF807A', 'white', 'white', 'black')" onmouseout="mudarCor('remover', 'white', 'black', '#FF807A', 'white')">
        <div class="card">
            <h5>Deseja remover um projeto?</h5>
            <p>Caso haja algum problema com o seu projeto, basta removê-lo. Você pode adicioná-lo de volta.</p>
            <button class="botao">Remover um projeto</button>
        </div>
    </div>
    <div class="box editar col-lg-4 col-md-6 col-sm-12 col-12" id="editar" onmouseover="mudarCor('editar', '#40D3F2', 'white', 'white', 'black')" onmouseout="mudarCor('editar', 'white', 'black', '#40D3F2', 'white')">
        <div class="card">
            <h5>Que tal um upgrade?</h5>
            <p>Sempre atualize seus projetos, tudo pode ficar melhor! Lembre-se de fazer um commit primeiro.</p>
            <button class="botao">Editar um projeto</button>
        </div>
    </div>
</div>
@section('scripts')
<script src="js/welcome.js"></script>
@endsection