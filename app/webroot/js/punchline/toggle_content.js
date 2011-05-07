(function( $ ){

	var methods = {
		init : function( options ) {
                    return this.each(function(){
                        
                        var data = $this.data('open');
                        
                        // If the plugin hasn't been initialized yet
                        if ( !data ) {
                            $(this).data('open', {
                                target : $this
                            });
                        }
                    });
		},
		open : function(){
                    var $this = $(this);

                    $('.subtitle').animate({
                            'right' : '0%'
                        }, 350, 'easeOutSine', function(){
                            $('.title').animate({
                                'right' : '0%'
                            }, 350, 'easeOutSine', function(){
                                $this.animate({
                                    'width' : $(window).width()
                                }, 250, 'easeOutSine', function(){
                                    $this.animate({
                                        'margin-top' : -158
                                    }, 400, 'easeInQuint', function(){
                                        $this.animate({
                                                'height' : 316
                                            }, 300, 'easeOutBack', function(){
                                                $this.addClass("ready");
                                                $this.attr('style', '');
                                                $(window).trigger('open_complete');
                                            });
                                        }
                                    );
                                });
                            });
                        });
		},
		close : function(){
			var $this = $(this);
			
			$(window).trigger('close_started');
			$this.animate({ 'height' : 3 }, 200,
                            function(){
                                $this.animate({ 'margin-top' : 0 }, 200,
                                    function(){
                                        $this.animate( { 'width' : 0 }, 200,
                                        function(){
                                            $('.title').animate({ 'right' : '-250%' }, 200,
                                            function(){
                                                $('.subtitle').animate({ 'right' : '100%' }, 200,
                                                function(){
                                                    $this.removeClass("ready");
                                                    $this.attr('style', '');
                                                    $(window).trigger('close_complete');
                                                });
                                            });
                                        });
                                    });
                            });
			
			// $('.subtitle').animate({
					// 'right' : '0%'
				// }, 500, function(){
					// $('.title').animate({
						// 'right' : '0%'
					// }, 500, function(){
						// $this.animate(
						// { 'width' : $(window).width() }, 500,
						
					// });
				// });
		}
	};

	$.fn.toggleContent = function( method ) {

		if ( methods[method] ) {
			return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.toggleContent' );
		}

	};

})( jQuery );