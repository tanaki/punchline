(function( $ ){

	var isAnimating = false;
	
	var _animate = function(target, tClass) {
		
            var largeImg = $(target).data('img-large');
            var smallImg = $('.current').data('img-small');

            isAnimating = true

            $('.current img').fadeOut(200, function(){
                $(this).attr('src', smallImg).fadeIn(200);
            });
            $('.current').animateToClass(tClass, 400, function(){
                $(this)
                    .removeClass('current')
                    .addClass(tClass)
                    .attr('style', '');
            });

            $('img', target).fadeOut(200, function(){
                $(this).attr('src', largeImg).fadeIn(200);
            });
            $(target).animateToClass('current', 400, function(){
                $(this)
                    .removeClass(tClass)
                    .addClass('current')
                    .attr('style', '');
                isAnimating = false;
            });
	};

	$.fn.menu = function() {
            var self = this;
            $('#menu a').click(function(){
                var targetClass = $(this).attr('class');
                if(targetClass == 'current' || isAnimating || !isOpen) return false;

                // animation
                _animate(this, targetClass);
                
                $(openPage).toggleContent('close');
                openPage = $(this).attr('href');
                return false;
            });
	};

})( jQuery );
