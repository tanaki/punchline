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
			
			if ( $.browser.webkit ) {
				
				var subtitle = $('.subtitle').get(0);
				subtitle.style.webkitTransitionProperty = "right";
				subtitle.style.webkitTransitionDuration = "500ms";
				subtitle.style.right = "0px";
				subtitle.addEventListener( 'webkitTransitionEnd', methods._animTitle);
				
			} else {
				$('.subtitle').animate({
					'right' : 0
					}, 500, function(){
						$('.title').animate({
							'right': 0
						}, 500, function(){
							$this.animate({
								'width': '100%'
							}, 500, function(){
								$this.animate({
									'margin-top' : -158
								}, 300, function(){
									$this.delay(100).animate({
										'height' : 316
									}, 300, function(){
										setTimeout(function(){
											$(window).trigger('open_complete')
										}, 500);
									});
								});
							});
						});
					});
			}
		},
		
		_animTitle : function(e){
			e.target.removeEventListener('webkitTransitionEnd', methods._animTitle, false);
			var title = $('.title').get(0);
			title.style.webkitTransitionProperty = "right";
			title.style.webkitTransitionDuration = "500ms";
			title.style.right = "0px";
			title.addEventListener( 'webkitTransitionEnd', methods._animWidth);
		},
		
		_animWidth : function(e){
			e.target.removeEventListener('webkitTransitionEnd', methods._animWidth, false);
			
			var el = $(".main-content").get(0);
			el.style.webkitTransitionProperty = "width";
			el.style.webkitTransitionDuration = "500ms";
			el.style.width = "100%";
			el.addEventListener('webkitTransitionEnd', methods._animMargin );
		},
		
		_animMargin : function(e){
			e.target.removeEventListener('webkitTransitionEnd', methods._animMargin, false );
			e.target.style.webkitTransitionProperty = "margin-top";
			e.target.style.marginTop = "-158px";
			e.target.addEventListener('webkitTransitionEnd', methods._animHeight );
		},
		
		_animHeight : function(e){
			e.target.removeEventListener('webkitTransitionEnd', methods._animHeight, false );
			e.target.style.webkitTransitionProperty = "height";
			e.target.style.height = "316px";
			e.target.addEventListener('webkitTransitionEnd', function(){
				$(window).trigger('open_complete');
			});
			
		},
		
		close : function(){
			var $this = $(this);
			$(window).trigger('close_started');
			
			if ( $.browser.webkit ) {
				
				var el = $this.get(0);
				el.style.webkitTransitionProperty = "height";
				el.style.webkitTransitionDuration = "400ms";
				el.style.height = "9px";
				el.addEventListener( 'webkitTransitionEnd', methods._closeMargin);
				
			} else {
				$this.animate({ 'height' : 9 }, 400,
					function(){
						$this.animate({ 'margin-top' : 0 }, 400,
							function(){
								$this.animate( { 'width' : 0 }, 400,
								function(){
									$('.title').animate({ 'right' : '-250%' }, 400,
									function(){
										$('.subtitle').animate({ 'right' : '100%' }, 400,
										function(){
											$this.removeClass("ready");
											$this.attr('style', '');
											$(window).trigger('close_complete');
										});
									});
								});
							});
					});
			}
		},
		
		_closeMargin : function(e){
			e.target.removeEventListener('webkitTransitionEnd', methods._closeMargin, false );
			e.target.style.webkitTransitionProperty = "margin-top";
			e.target.style.marginTop = "0";
			e.target.addEventListener('webkitTransitionEnd', methods._closeWidth );
		},
		
		_closeWidth : function(e){
			e.target.removeEventListener('webkitTransitionEnd', methods._closeWidth, false );
			e.target.style.webkitTransitionProperty = "width";
			e.target.style.width = "0";
			e.target.addEventListener('webkitTransitionEnd', function(){
				
				var title = $('.title').get(0);
				title.style.webkitTransitionDuration = "400ms";
				title.style.webkitTransitionProperty = "right";
				title.style.right = "-250%";
				title.addEventListener('webkitTransitionEnd', function(){
					
					var subtitle = $('.subtitle').get(0);
					subtitle.style.webkitTransitionDuration = "400ms";
					subtitle.style.webkitTransitionProperty = "right";
					subtitle.style.right = "100%";
					subtitle.addEventListener('webkitTransitionEnd', function(){
						$(".ready")
							.removeClass("ready")
							.attr('style', '');
						$(window).trigger('close_complete');
					});
				});
			});
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
