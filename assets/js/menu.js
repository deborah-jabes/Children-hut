// JavaScript Document
(function($){
	
    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $('#icon_menu').click(function(e){
		
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

})(jQuery);