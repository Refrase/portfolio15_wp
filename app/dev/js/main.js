// jshint devel:true

jQuery( document ).ready( function($) {

	/* ----- Slide kategorier ind -----*/
	$( '#menuCateg' ).hide();
	$( '#menuCateg' ).css( 'opacity', 1 );
	$( '#menuCateg' ).stop( true, true ).show({
		effect: 'slide',
		direction: 'up',
		easing: 'easeOutExpo',
		duration: 1600
	});
	/* ----- / -----*/

	/* ----- Omarrangér kategorier efter plads [Isotope] -----*/
	$( '.piece-cats' ).isotope({
	  itemSelector: '.piece-cat',
	  layoutMode: 'fitRows'
	});
	/* ----- / -----*/

	/* ----- Sæt og opdatér margin-bottom på .cards lig med margin-right på samme -----*/
	var setCardMargBtmSameAsMargRgt = function() {
		var cardMarginRight = $( '.card' ).css( 'margin-right' );
		$( '.card' ).css( 'margin-bottom', cardMarginRight );
	};

	// Hvis vinduet har mindst to kolonner
	var oneColBreakP = 659 - 15; // De 15 må være scrollbar der kompenseres for?
	// Gør det på document.ready
	if ( $( window ).width() > oneColBreakP ) { setCardMargBtmSameAsMargRgt(); }
	// ... og window.resize
	$( window ).on( 'resize', function() {
		console.log( $( window ).width() );
		if ( $( window ).width() > oneColBreakP ) {
			setCardMargBtmSameAsMargRgt();
		};
		// Sæt margin-bottom til $dist-l, hvis den kommer under igen
		if ( $( window ).width() < oneColBreakP ) {
			$( '.card' ).css( 'margin-bottom', '32px' );
		};
	});
	/* ----- / -----*/

});
