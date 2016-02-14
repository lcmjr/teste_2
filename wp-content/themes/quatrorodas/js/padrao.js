$(window).ready(function() {
    $('.dropdown').mouseenter(function(){
        $(this).children('.menu-dropdown').slideDown(250);
    }).mouseleave(function(){
        $(this).children('.menu-dropdown').slideUp(200);
    });
    $('#btn-lupa').click(function(){
        if(!$(this).hasClass('btn-lupa-ativo')){
            if($('#btn-menu').hasClass('btn-menu-ativo'))
                fechar_menu_responsivo();
            abrir_busca_responsivo();
        }else
            fechar_busca_responsivo();
    });
    $('#btn-menu').click(function(){
        if(!$(this).hasClass('btn-menu-ativo')){
            if($('#btn-lupa').hasClass('btn-lupa-ativo'))
                fechar_busca_responsivo();
            abrir_menu_responsivo();
        }else
            fechar_menu_responsivo();
    });
}).scroll(function(){
    if($(window).scrollTop()>10)
        $('#menu-principal-container').addClass('scroll-menu');
    else
        $('#menu-principal-container').removeClass('scroll-menu');
});
function abrir_busca_responsivo(){
    $('.container-busca').slideDown(250,function(){
        $('#btn-lupa').addClass('btn-lupa-ativo');
    });
}
function fechar_busca_responsivo(){
    $('.container-busca').slideUp(250,function(){
        $('#btn-lupa').removeClass('btn-lupa-ativo');
    });
}
function abrir_menu_responsivo(){
    $('#layer-responsiva').show(200);
    $('.menu-principal').slideDown(250,function(){
        $('#btn-menu').addClass('btn-menu-ativo');
    });
}
function fechar_menu_responsivo(){
    $('#layer-responsiva').hide(200);
    $('.menu-principal').slideUp(250,function(){
        $('#btn-menu').removeClass('btn-menu-ativo');
    });
}