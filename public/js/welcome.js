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
    console.log("oi")
    var fileInput = document.getElementById('image');
    var preview = document.getElementById("preview")
    var file = fileInput.files[0];
    preview.src = URL.createObjectURL(file);
});  

$('#image_update').bind('input', function() {
    var preview = document.getElementById('preview_update');
    var fileInput = document.getElementById('image_update');
    var file = fileInput.files[0];
    preview.src = URL.createObjectURL(file);
});
function modalInfo(id, name, link, description, tecnologies, image, starts, ends){
    $('#name').val(name);
    $('#link').val(link);
    $('#description').text(description);
    $('#tecnologies').text(tecnologies);
    $('#starts').text(starts);
    $('#ends').text(ends);
    document.getElementById('preview_update').style.background = "url(img/"+image+") no-repeat";
    document.getElementById("update_form").action = "/dashboard/" + id;
}
function setAction(id){
    document.getElementById("formDelete").action = "/dashboard/" + id;
}