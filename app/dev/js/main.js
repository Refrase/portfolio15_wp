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

});
