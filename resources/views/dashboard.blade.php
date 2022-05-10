<x-app-layout>
    @extends('layouts.main')
    @section('links')
        <link rel="stylesheet" href="css/dash.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <div class="box adicionar col-lg-4 col-md-6 col-sm-12 col-12" id="adicionar" onmouseover="mudarCor('adicionar', '#40DFCB', 'white', 'white')" onmouseout="mudarCor('adicionar', 'white', 'black', '#40DFCB')">
            <div class="card">
                <h5>Terminou um projeto?</h5>
                <p>Que incrivel! Você terminou um projeto, adicione-o imediatamente no seu portfólio.</p>
                <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle1" type="button" class="botao">Adicionar um projeto</button>
            </div>
        </div>
        <div class="box remover col-lg-4 col-md-6 col-sm-12 col-12" id="remover" onmouseover="mudarCor('remover', '#FF807A', 'white', 'white')" onmouseout="mudarCor('remover', 'white', 'black', '#FF807A')">
            <div class="card">
                <h5>Deseja remover um projeto?</h5>
                <p>Caso haja algum problema com o seu projeto, basta removê-lo. Você pode adicioná-lo de volta.</p>
                <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle2" type="button" class="botao">Remover um projeto</button>
            </div>
        </div>
        <div class="box editar col-lg-4 col-md-6 col-sm-12 col-12" id="editar" onmouseover="mudarCor('editar', '#40D3F2', 'white', 'white')" onmouseout="mudarCor('editar', 'white', 'black', '#40D3F2')">
            <div class="card">
                <h5>Que tal um upgrade?</h5>
                <p>Sempre atualize seus projetos, tudo pode ficar melhor! Lembre-se de fazer um commit primeiro.</p>
                <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle3" type="button"  class="botao">Editar um projeto</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/dashboard" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="nome">
                            <input type="text" name="name" placeholder="Nome" required>
                        </div>
                        <div class="links">
                            <input type="text" name="link_site" placeholder="Link do site">
                            <input type="text" name="link_teste" placeholder="Link do teste">
                        </div>
                        <div class="descricao">
                            <textarea name="description" placeholder="Descrição" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="descricao">
                            <textarea name="tecnologies" placeholder="Tenologies" cols="30" rows="10" required></textarea>
                        </div>
                        <!--<div class="tecnologias">
                            <div><input type="checkbox" name="html"><label for="html"> HTML</label></div>
                            <div><input type="checkbox" name="css"><label for="css"> CSS</label></div>
                            <div><input type="checkbox" name="js"><label for="javascript"> Javascript</label></div>
                            <div><input type="checkbox" name="jquery"><label for="jquery"> JQuery</label></div>
                            <div><input type="checkbox" name="php"><label for="php"> PHP</label></div>
                            <div><input type="checkbox" name="laravel"><label for="laravel"> Laravel</label></div>
                            <div><input type="checkbox" name="phpmailer"><label for="phpmailer"> PHP Mailer</label></div>
                            <div><input type="checkbox" name="bootstrap"><label for="bootstrap"> Bootstrap</label></div>
                            <div><input type="checkbox" name="ajax"><label for="ajax"> AJAX</label></div>
                            <div><input type="checkbox" name="sql"><label for="sql"> SQL</label></div>
                        </div>-->
                        <div class="img-data">
                            <div class="imagem col-12 col-lg-6">
                                <input type="file" id = "image"name="image" class="col-12" required>
                                <div class="preview" id="preview"></div>
                            </div>
                            <div class="data col-12 col-lg-5">
                                <div><label for="data-inicio">Data início</label><input name="starts" type="date"></div>
                                <div><label for="data-termino">Data término</label><input name="ends" type="date"></div>
                            </div>
                        </div>
                        <div class="submit"><input type="submit" value="Adicionar Projeto"></div>
                    </form>      
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="projetos">
                        @foreach($projects->reverse() as $project)
                            <div data-bs-target="#modalConfirm" data-bs-toggle="modal" style="background-image: url(img/{{$project->image}});" onclick='setAction("{{ $project->id }}")'></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="projetos">
                        @foreach($projects->reverse() as $project)
                            <div data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" style="background-image: url(img/{{$project->image}});" onclick='modalInfo("{{$project->id}}", "{{$project->name}}", "{{$project->link_site}}", "{{$project->link_teste}}", "{{$project->description}}", "{{$project->tecnologies}}", "{{$project->image}}", "{{$project->starts}}", "{{$project->ends}}")'></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="update_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="nome">
                            <input id="name" type="text" name="name" placeholder="Nome">
                        </div>
                        <div class="links">
                            <input id = "link_site" type="text" name="link_site" placeholder="Link do site">
                            <input id = "link_teste"type="text" name="link_teste" placeholder="Link do teste">
                        </div>
                        <div class="descricao">
                            <textarea name="description" placeholder="Descrição" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="descricao">
                            <textarea name="tecnologies" placeholder="Tenologies" id="tecnologies" cols="30" rows="10"></textarea>
                        </div>
                        <!--<div class="tecnologias">
                            <div><input type="checkbox" name="html"><label for="html"> HTML</label></div>
                            <div><input type="checkbox" name="css"><label for="css"> CSS</label></div>
                            <div><input type="checkbox" name="js"><label for="javascript"> Javascript</label></div>
                            <div><input type="checkbox" name="jquery"><label for="jquery"> JQuery</label></div>
                            <div><input type="checkbox" name="php"><label for="php"> PHP</label></div>
                            <div><input type="checkbox" name="laravel"><label for="laravel"> Laravel</label></div>
                            <div><input type="checkbox" name="phpmailer"><label for="phpmailer"> PHP Mailer</label></div>
                            <div><input type="checkbox" name="bootstrap"><label for="bootstrap"> Bootstrap</label></div>
                            <div><input type="checkbox" name="ajax"><label for="ajax"> AJAX</label></div>
                            <div><input type="checkbox" name="sql"><label for="sql"> SQL</label></div>
                        </div>-->
                        <div class="img-data">
                            <div class="imagem col-12 col-lg-6">
                                <input type="file" id="image_update" name="image" class="col-12">
                                <div class="preview" id="preview_update"></div>
                            </div>
                            <div class="data col-12 col-lg-5">
                                <div><label id = "stats" for="data-inicio">Data início</label><input name="starts" type="date"></div>
                                <div><label id = "ends"for="data-termino">Data término</label><input name="ends" type="date"></div>
                            </div>
                        </div>
                        <div class="submit"><input type="submit" value="Atualizar Projeto"></div>
                    </form>      
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="modalConfirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tem Certeza?</h5>
                </div>
                <div class="modal-footer">
                    <form id="formDelete" method="POST"> @csrf @method('DELETE')</form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <button type="submit" id="deleteSubmit" form="formDelete" class="btn btn-primary">Sim</button>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/jquery.js"></script>
        <script src="js/welcome.js"></script>
    @endsection
</x-app-layout>
