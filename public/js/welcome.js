function mudarCor(id, bg, letra, botao){
    var elemento = document.getElementById(id);
    var card = elemento.querySelectorAll(".card");
    var button = elemento.querySelectorAll(".botao");
    elemento.style.background = bg;
    card[0].style.background = bg;
    card[0].style.color = letra;
    button[0].style.background = botao;
    button[0].style.color = bg;
}
$('#image').bind('input', function() {
    var preview = document.getElementById('preview');
    var fileInput = document.getElementById('image');
    var fileName = fileInput.files[0].name;
    preview.style.background = "url(img/"+fileName+") no-repeat ";
    console.log(fileName);
});
$('#image_update').bind('input', function() {
    var preview = document.getElementById('preview_update');
    var fileInput = document.getElementById('image_update');
    var fileName = fileInput.files[0].name;
    preview.style.background = "url(img/"+fileName+") no-repeat ";
    console.log(fileName);
});
function modalInfo(id, name, link_site, link_teste, description, tecnologies, image, starts, ends){
    $('#name').val(name);
    $('#link_site').val(link_site);
    $('#link_teste').val(link_teste);
    $('#description').text(description);
    $('#tecnologies').text(tecnologies);
    $('#starts').text(starts);
    $('#ends').text(ends);
    document.getElementById('preview_update').style.background = "url(img/"+image+") no-repeat";
}
function setAction(id){
    document.getElementById("formDelete").action = "/dashboard/" + id;
}