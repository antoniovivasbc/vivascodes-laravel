function redirecionasite(){
    window.open("https://www.plazzaveiculos.com.br");
}

var validator = 0;
function sidebar(){
    var largura = screen.width;
    var sidebar = document.getElementById("sidebar");
    var toggle = document.getElementById("toggle");
    if(largura <= 500){
        if(validator == 0){
            validator = 1;
            sidebar.style.width = "50vw";
            toggle.style.left = "50vw";
        }else{
            validator = 0;
            sidebar.style.width = "0px";
            toggle.style.left = "0";
        } 
    }else if(largura > 500 && largura <= 850){
        if(validator == 0){
            validator = 1;
            sidebar.style.width = "30vw";
            toggle.style.left = "30vw";
        }else{
            validator = 0;
            sidebar.style.width = "0px";
            toggle.style.left = "0";
        } 
    }else if(largura > 850 && largura <= 959){
        if(validator == 0){
            validator = 1;
            sidebar.style.width = "20vw";
            toggle.style.left = "20vw";
        }else{
            validator = 0;
            sidebar.style.width = "0px";
            toggle.style.left = "0";
        } 
    }
}

function refresh(){
    location.reload(true);
}