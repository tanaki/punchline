(function( $ ){
	
	var current = 1,
		max = null,
		items = null,
		offset = 0,
		isAnimating = false,
		numberItems = 4;
	
	var methods = {
		init : function( options ) {
			
			items = $("#shirts-carousel ul li");
			
			methods._initList();
			methods._initPos();
			
			$(".next").click(function(e){
				e.preventDefault();
				methods.next();
			});
			
			$(".prev").click(function(e){
				e.preventDefault();
				methods.prev();
			});
			
            $(window).keyup(function(e){
                if(e.keyCode == 37) {
                    methods.prev();
                }
                if(e.keyCode == 39) {
                    methods.next();
                }
            });
			
		},
		
		resize : function() {
			current = 1;
			methods._initList();
			methods._initPos();
		},
		
		_initList : function() {
			$(".prev").addClass("disabled");
			max = Math.ceil(items.length / numberItems);
			$("#shirts-carousel .carousel-list-container").css("width", $(window).width());
			
			numberItems = Math.floor( $(window).width() / 275 );
			if ( numberItems > 4 ) numberItems = 4;
			
			offset = Math.round(($(window).width() - (numberItems * 275)) / 2 );
			if ( offset < 0 ) offset = 0;
		},
		
		_initPos : function(){
			items.each(function(i, el){
				if ( i < 4 ) {
					$(el).animate({
						"left": i * 275 + offset
					}, 400);
				} else {
					$(el).css("left", $(window).width());
				}
			});
		},
		
		next : function(){
			
			if ( current == max || isAnimating ) return;
			
			$(".prev").removeClass("disabled");
			if ( current == max - 1 ) $(".next").addClass("disabled");
			else $(".next").removeClass("disabled");
			
			isAnimating = true;
			for ( var i = (current - 1) * numberItems; i < current * numberItems; i++ ) {
				methods._go(items[i], -275, null);
			}
			current++;
			for ( var i = (current - 1) * numberItems; i < current * numberItems; i++ ) {
				methods._go(items[i], (i - ((current - 1) * numberItems)) * 275 + offset, function(){
					isAnimating = false;
				});
			}
			
		},
		prev : function(){
			
			if ( current <= 1 || isAnimating ) return;
		
			$(".next").removeClass("disabled");
			if ( current <= 2 ) $(".prev").addClass("disabled");
			else $(".prev").removeClass("disabled");
			
			isAnimating = true;
			for ( var i = (current - 1) * numberItems; i < current * numberItems; i++ ) {
				methods._go(items[i], $(window).width(), null);
			}
			current--;
			for ( var i = (current - 1) * numberItems; i < current * numberItems; i++ ) {
				methods._go(items[i], (i - ((current - 1) * numberItems)) * 275 + offset, function(){
					isAnimating = false;
				});
			}
		},
		_go : function(target, left, callback){
			$(target).animate({
				"left": left
			}, 600, "easeInOutSine", callback);
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
