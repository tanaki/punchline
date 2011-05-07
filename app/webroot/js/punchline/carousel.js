(function( $ ){

	var methods = {
		init : function( options ) {

			return this.each(function(){

				var $this = $(this),
					data = $this.data('carousel');

				// If the plugin hasn't been initialized yet
				if ( !data ) {
					
					var marginLeft = ($(window).width() - 1000) / 2;
					$this.find("ul").css("width", $(window).width());
					
					$this.find("li").each(function(i, el){
						if( i > 3) {
							$(el).css("right", -250);
						} else {
							// $(el).animate({"left": (i * 250) + marginLeft}, 500);
							$(el).animate({"right":  ((i * 250) + marginLeft )}, 500, function(){
								if (i == 3) $(window).trigger('anim_teeshirt_over');
							});
						}
					});
					
					$this.find(".shop-prev").click(function(){
						
						// TODO prev
						return false;
					});
					
					$this.find(".shop-next").click(function(){
						
						$this.find("li").each(function(i, el){
							if( i < 4 ) {
								$(el).animate({
									"right" : $(window).width()
								}, 500);
								// "left" : -250
							} else if( i > 3 && i < 8 ) {
								$(el).animate({
									"right" :  ((i - 4) * 250) + marginLeft
								}, 500);
								// "left" : ((i - 4) * 250) + marginLeft
							}
						});
						
						return false;
					});
					
					$(this).data('carousel', {
						target : $this
					});
				}
			});
		}
	};

	$.fn.carousel = function( method ) {

		if ( methods[method] ) {
			return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.carousel' );
		}

	};

})( jQuery );
