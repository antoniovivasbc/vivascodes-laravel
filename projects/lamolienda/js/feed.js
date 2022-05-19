$(function(){
    const token = "0";
    const url = "https://graph.instagram.com/me/media?access_token="+token+"&fields=media_url,media_type,caption,permalink";
    $.get(url).then(function(response){
        //console.log('retorno : ', response.data);
        let dadosJson = response.data;
        let conteudo = '<div class="swiper-wrapper">'
        for(let i = 0; i < 10; i++){
            let feed = dadosJson[i];
            let titulo = feed.caption !== null ? feed.caption : '';
            let tipo = feed.media_type;
            if(tipo === 'VIDEO'){
                conteudo += '<div class="swiper-slide"><video controls><source src="'+feed.media_url+'" type="video/mp4"></video></div>';
            }else if(tipo === 'IMAGE'){
                conteudo += '<div class="swiper-slide"> <img src="'+feed.media_url+'" title="'+titulo+'" alt="'+titulo+'" onclick="window.open(\''+feed.permalink+'\')"/> </div>';
            }
        }
        conteudo += '</div>';
        $('#insta').html(conteudo);
    })
})