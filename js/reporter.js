jQuery(document).ready(function(){
	function css3reporter() {
		var winwidth = jQuery(window).width();
		jQuery('body').attr('data-content', winwidth);
	}
	css3reporter();
	jQuery(window).resize( css3reporter );
});