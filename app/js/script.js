jQuery(window).load(function(){
    new mlPushMenu( document.getElementById( 'mp-menu' ), document.querySelector( '.menu-act' ), {
        type : 'cover'
    } );
    jQuery('.separador-relatos').find('.read-more').on('click', function(e){
        e.preventDefault();
        jQuery(this).parents('.separador-relatos').toggleClass('texto-expandido');
    });
    
    jQuery("#telefone, #celular").mask("(00) 00000-0000");
});
