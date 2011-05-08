(function( $ ){
	$.fn.preload = function() {
		var counter = 0;
		
		$.imgpreload(aImages,
		{
			each: function()
			{
				var angle = Math.ceil(((counter + 1) * (Math.PI * 2)) / aImages.length);
				var canvas = $("#canvas-loading").get(0);
				if (canvas.getContext) {
					var ctx = canvas.getContext("2d");						
					ctx.clearRect(0, 0, 100, 100);
					ctx.beginPath();
					var x              = 50;
					var y              = 50;
					var radius         = 20;
					var startAngle     = 0;
					var endAngle       = angle;
					var anticlockwise  = false;
					
					ctx.lineWidth = 15;
					ctx.strokeStyle = "rgba(0, 0, 0, 0.5)";
					
					ctx.arc(x, y, radius, startAngle, endAngle, anticlockwise);
					ctx.stroke();
				}
				counter++;
			},
			all: function()
			{
				$("#loading")
					.animate({"opacity" : 0}, 200, function(){
						$("#loading").remove();

						$("#wrapper")
							.css("opacity", 0)
							.removeClass("hidden")
							.animate({"opacity" : 1}, 300, function(){
								$(window).trigger("preload_complete");
							});
					});
			}
		});
	};
})( jQuery );