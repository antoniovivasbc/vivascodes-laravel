function insta(){
    window.open("https://www.instagram.com/lamoliendapanaderia/");
}
function face(){
    window.open("https://www.facebook.com/panaderialamolienda");
}
function wpp(){
    window.open("https://api.whatsapp.com/send?l=pt&phone=34695022614");
}
function productos(){
    window.location = "productos.html";
}
var elementoDown = $('.down');
var elementoLeft = $('.left');
var elementoRight = $('.right');
var animationClass = "anime-start";
var offset = $(window).height() * 4/5;
debounce = function(func, wait, inmediate){
    var timeout;
    return function(){
        var context = this, args = arguments;
        var later = function(){
            timeout = null;
            if(!inmediate) func.apply(context, args);
        };
        var callNow = inmediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if(callNow) func.apply(context, args);
    };
};
function animeDownScroll(){
    var topDistance = $(document).scrollTop();
    elementoDown.each(function(){
        var itemTop = $(this).offset().top;
        if(topDistance > itemTop - offset){
            $(this).addClass(animationClass);
        }else{
            $(this).removeClass(animationClass);
        }
    })
}
function animeLeftScroll(){
    var topDistance = $(document).scrollTop();
    elementoLeft.each(function(){
        var itemTop = $(this).offset().top;
        if(topDistance > itemTop - offset){
            $(this).addClass(animationClass);
        }else{
            $(this).removeClass(animationClass);
        }
    })
}
function animeRightScroll(){
    var topDistance = $(document).scrollTop();
    elementoRight.each(function(){
        var itemTop = $(this).offset().top;
        if(topDistance > itemTop - offset){
            $(this).addClass(animationClass);
        }else{
            $(this).removeClass(animationClass);
        }
    })
}
animeDownScroll();
animeLeftScroll();
animeRightScroll();
animeDownScroll();
$(document).scroll(debounce(function(){
    animeDownScroll();
    animeLeftScroll();
    animeRightScroll();
}, 100))