jQuery(document).ready(function(){

	/* Open lightbox on button click */
	$('.lightbox-toggle2').click(function(){
		$('.backdrop2').animate({'opacity':'.50'}, 300, 'linear').css('display', 'block');
		$('.box2').fadeIn();
	});

	/* Click to close lightbox */
	$('.close2, .backdrop2').click(function(){
		$('.backdrop2').animate({'opacity':'0'}, 300, 'linear', function(){
			$('.backdrop2').css('display', 'none');
		});
		$('.box2').fadeOut();
	});

});