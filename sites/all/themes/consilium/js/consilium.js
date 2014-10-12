jQuery(document).ready(function($){
	$('.portfolio-item').each(function(){
		$(this).hoverdir();
		var $this=$(this);
		$(this).hover(function(){
			var $caption = $(this).find('.portfolio-readmore');
			$caption.css({
				lineHeight: $this.height() +'px'
			})
		});
	});
})