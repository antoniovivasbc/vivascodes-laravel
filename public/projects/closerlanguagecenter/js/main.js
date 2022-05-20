/* SIDEBAR */
var content = document.querySelector(".content");
var nav = document.querySelector("nav");
var sidebar_status = false;
var sidebar = document.querySelector(".sidebar");
var content = document.querySelector(".content");
var masc = document.querySelector(".masc0");

if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
    sidebar_status = true;
}
function hide_appear_sidebar(){
    if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        if(sidebar_status === false){
            sidebar_status = true;
            sidebar.style.width = "0px";
            content.style.width = "100vw";
            masc.classList.remove("masc");
            masc.classList.remove("masc1");
        }else{
            var nav_height = nav.offsetHeight;
            var content_height = content.offsetHeight;
            masc.style.height = content_height - nav_height + "px";
            sidebar_status = false;
            sidebar.style.width = "50vw";
            content.style.width = "50vw";
            masc.classList.add("masc1");
            masc.classList.add("masc");
        }
    
       }else{
            if(sidebar_status === false){
                sidebar_status = true;
            }else{
                sidebar_status = false;
            }
            if(sidebar_status === false){
                sidebar.style.width = "20vw";
                content.style.width = "80vw";
            }
            
            if(sidebar_status === true){
                sidebar.style.width = "0px";
                content.style.width = "100vw";
            }
       }
}
/* CLASSES DROPDOWN */
var dropdown_classes_status = false;
var classes = document.querySelector("#classes");

function classes_dropdown(){

    if(dropdown_classes_status === false){
        classes.style.height = "auto";
        dropdown_classes_status = true;
    }else{
        if(dropdown_classes_status === true){
        classes.style.height = "0px";
        dropdown_classes_status = false;
        }
    }
}
var dropdown_classes_status2 = false;
var classes2 = document.querySelector("#classes2");

function classes_dropdown2(){

    if(dropdown_classes_status2 === false){
        classes2.style.height = "auto";
        dropdown_classes_status2 = true;
    }else{
        if(dropdown_classes_status2 === true){
        classes2.style.height = "0px";
        dropdown_classes_status2 = false;
        }
    }
}
var dropdown_classes_status3 = false;
var classes3 = document.querySelector("#classes3");

function classes_dropdown3(){

    if(dropdown_classes_status3 === false){
        classes3.style.height = "auto";
        dropdown_classes_status3 = true;
    }else{
        if(dropdown_classes_status3 === true){
        classes3.style.height = "0px";
        dropdown_classes_status3 = false;
        }
    }
}
var dropdown_classes_status4 = false;
var classes4 = document.querySelector("#classes4");

function classes_dropdown4(){

    if(dropdown_classes_status4 === false){
        classes4.style.height = "auto";
        dropdown_classes_status4 = true;
    }else{
        if(dropdown_classes_status4 === true){
        classes4.style.height = "0px";
        dropdown_classes_status4 = false;
        }
    }
}
/* SIDEBAR END */
/*DROPDOWN*/
var dropdown_box = document.querySelector(".dropdown-content");
var dropdown_status = false;
function dropdown(){
    if(dropdown_status === false){
        dropdown_status = true;
        dropdown_box.style.height = "100px";
    }else{
        dropdown_status = false
        dropdown_box.style.height = "0px"
    }
}
/*DROPDOWN END*/
function movetosettings(){
    location.href = "http://closerlanguagecenter.coolpage.biz/settings";
}

