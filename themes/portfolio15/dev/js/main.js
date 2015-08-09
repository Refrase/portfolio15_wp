// jshint devel:true

jQuery( document ).ready( function($) {

	/* ----- Mousewheel horizontal scroll when hovering specified elem -----*/
	var enableHorizontalScroll = function() {
		$( '.menu--categ' ).mousewheel(function(event, delta) {
		  this.scrollLeft -= (delta * 2); // Speed
		  event.preventDefault();
		});
	};

	// Brug kun, hvis vinduet er så smalt at menuen ikke kan være der
	if ( $( window ).width() < 660 ) { enableHorizontalScroll(); };
	// ... og hvis vinduet gøres smallere efter load
	$( window ).on( 'resize', function() {
		if ( $( window ).width() < 660 ) {
			enableHorizontalScroll();
		}
	});
	/* ----- / -----*/

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

	/* ----- Video følger parentstørrelse -----*/
	function setVideoSizeToParent() {
	  $( '#piece__video' ).css({
	  	width: $( '.piece' ).innerWidth() + 'px',
	  	height: $( '.piece' ).innerWidth() * 0.56 + 'px'
	  });
	};
	setVideoSizeToParent();

  // Følg størrelse ved ændring af vinduesstørrelse
  $( window ).resize( setVideoSizeToParent );
	/* ----- / -----*/

	/* ----- Sæt og opdatér margin-bottom på .cards lig med margin-right på samme -----*/
	// BLEV BRUGT MED NEAT SOM GRID LØSNING
	// var setCardMargBtmSameAsMargRgt = function() {
	// 	var cardMarginRight = $( '.card' ).css( 'margin-right' );
	// 	$( '.card' ).css( 'margin-bottom', cardMarginRight );
	// };

	// Hvis vinduet har mindst to kolonner
	// var oneColBreakP = 659 - 15; // De 15 må være scrollbar der kompenseres for?
	// // Gør det på document.ready
	// if ( $( window ).width() > oneColBreakP ) { setCardMargBtmSameAsMargRgt(); }
	// // ... og window.resize
	// $( window ).on( 'resize', function() {
	// 	console.log( $( window ).width() );
	// 	if ( $( window ).width() > oneColBreakP ) {
	// 		setCardMargBtmSameAsMargRgt();
	// 	};
	// 	// Sæt margin-bottom til $dist-l, hvis den kommer under igen
	// 	if ( $( window ).width() < oneColBreakP ) {
	// 		$( '.card' ).css( 'margin-bottom', '32px' );
	// 	};
	// });
	/* ----- / -----*/

});
