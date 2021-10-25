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
function modalForm(){
    
}