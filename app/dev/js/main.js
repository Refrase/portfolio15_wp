// jshint devel:true

jQuery( document ).ready( function() {

	/* ----- Show thumb-menu hovering 'More' ----- */
	$( '#menuBtnPiece' ).on( 'mouseenter', function() {
		$( '.menu--thumbs' ).stop( true, true ).show({
			effect: 'slide',
			direction: 'up'
		});
	});

	$( '#menuThumbs' ).on( 'mouseleave', function() {
		$( '.menu--thumbs' ).stop( true, true ).hide({
			effect: 'slide',
			direction: 'up'
		});
	});


});
