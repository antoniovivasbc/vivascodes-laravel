var modal_1 = document.getElementById('modal');
function modal(name, link, description, tecnologies){
    $('#description').text(description);
    $('#name').text(name);
    document.getElementById('link').href = link;
    $('#tecnologies').text(tecnologies);
    modal_1.style.visibility = 'visible';
    modal_1.style.opacity = '1';
}
function fecha_modal(){
    modal_1.style.opacity = '0';
    modal_1.style.visibility = 'hidden'; 
}