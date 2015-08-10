// jshint devel:true

jQuery( document ).ready( function($) {

	/* ----- Mousewheel horizontal scroll when hovering specified elem (for submenu) -----*/
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

	/* ----- Vis kategorier ind - Variér, hvilken effect der bruges fra gang til gang -----*/
	$( '#menuCateg' ).hide();
	$( '#menuCateg' ).css( 'opacity', 1 );

	var menuShowCount = Math.floor((Math.random() * 2) + 1);

	var effectAttr = {
		effect: 'bounce',
		direction: 'up',
		distance: 10,
		easing: 'easeOutExpo',
		duration: 400
	}

	if ( menuShowCount === 1 ) { effectAttr.effect = 'slide' };
	if ( menuShowCount === 2 ) { effectAttr.effect = 'bounce' };

	$( '#menuCateg' ).stop( true, true ).show( effectAttr );
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

});
