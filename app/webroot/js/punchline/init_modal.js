(function( $ ){

    var methods = {
        init : function( options ) {

            return this.each(function(){

                var $this = $(this),
                data = $this.data('initModal');

                // If the plugin hasn't been initialized yet
                if ( !data ) {
				
                    // TODO
                    $this.click(function(){
                        $('#modal').modal({
                            overlayClose : true,
                            onOpen: function (dialog) {
                                dialog.overlay.fadeIn(200, function () {
                                    dialog.container.fadeIn(200, function () {
                                        dialog.data.fadeIn(200);
                                        $('#shirt-carousel').jcarousel({
                                            scroll : 1,
                                            start : $this.data("index")
                                        });
                                    });
                                });
                            },
                            onClose: function (dialog) {
                                dialog.data.fadeOut(200, function () {
                                    dialog.container.fadeOut(200, function () {
                                        dialog.overlay.fadeOut(200, function () {
                                            $.modal.close();
                                        });
                                    });
                                });
                            }
                        });
                        return false;
                    });
					
                    $(this).data('initModal', {
                        target : $this
                    });
                }
            });
        }
    };

    $.fn.initModal = function( method ) {

        if ( methods[method] ) {
            return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.initModal' );
        }

    };

})( jQuery );
