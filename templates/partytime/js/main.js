(function($){
	 var body 		= $('body'),
		  menu 		= $('.menu'),
		  btnMovil 	= $('#btn_mobile');

		menu.find('.menu > li:nth-child(1)').addClass('fusia').find('.nav-child').addClass('fusia');
		menu.find('.menu > li:nth-child(2)').addClass('azul').find('.nav-child').addClass('azul');;
		menu.find('.menu > li:nth-child(3)').addClass('amarillo').find('.nav-child').addClass('amarillo');;
		menu.find('.menu > li:nth-child(4)').addClass('cafe').find('.nav-child').addClass('cafe');;
	 // NAV MOBILE
	    btnMovil.click(function(){
	        menu.toggle();
	       
	    });

	 //$.fn.cycle.defaults.autoSelector = '.slideshow';
})(jQuery);



