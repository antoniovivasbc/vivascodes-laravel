$('.site').hover(function(){
    var filho = $(this).find('.filho');
    filho.css("height", "100%");
});
$('.site').mouseout(function(){
    var filho = $(this).find('.filho');
    filho.css("height", "0");
});
$('.filho').hover(function(){
    $(this).css("height", "100%");
});
var validator = 0;
function sidebar(){
    var largura = screen.width;
    var sidebar = document.getElementById("sidebar");
    if(largura <= 600){
        if(validator == 0){
            validator = 1;
            sidebar.style.width = "50vw";
        }else{
            validator = 0;
            sidebar.style.width = "0px";
        } 
    }else if(largura > 600 && largura <= 800){
        if(validator == 0){
            validator = 1;
            sidebar.style.width = "30vw";
        }else{
            validator = 0;
            sidebar.style.width = "0px";
        } 
    }else if(largura > 800 && largura <= 1000){
        if(validator == 0){
            validator = 1;
            sidebar.style.width = "25vw";
        }else{
            validator = 0;
            sidebar.style.width = "0px";
        } 
    }else if(largura > 1000 && largura <= 1300){
        if(validator == 0){
            validator = 1;
            sidebar.style.width = "20vw";
        }else{
            validator = 0;
            sidebar.style.width = "0px";
        } 
    }else if(largura > 1300){
        if(validator == 0){
            validator = 1;
            sidebar.style.width = "15vw";
        }else{
            validator = 0;
            sidebar.style.width = "0px";
        } 
    }    
}
function redirecionar(){
    window.open("https://api.whatsapp.com/send?l=pt&phone=557185037829");
}
function redirecionar2(){
    window.open("https://github.com/antoniovivasbc");
}
function redirecionar3(){
    window.open("https://www.linkedin.com/in/antonio-vivas-41795720a/");
}
function closer(){
    window.open("http://antoniovivas.ueuo.com/closerlanguagecenter");
}
function acougue(){
    window.open("http://antoniovivas.ueuo.com/acouguedofiel");
}
function dashboard(){
    window.open("http://antoniovivas.ueuo.com/dashboard");
}



