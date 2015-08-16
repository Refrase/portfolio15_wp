// jshint devel:true

jQuery( document ).ready( function($) {

	/* ----- Show menu labels when hovering main menu -----*/
	var menuLinks = $( '.menu--main li a' );

	var showLabel = function() { $( this ).children( 'span' ).stop( true ).fadeIn( 500 ); };
  var hideLabel = function() { $( this ).children( 'span' ).hide(); };

  var bindLabelToggle = function() {
  	menuLinks.bind( 'mouseenter', showLabel );
		menuLinks.bind( 'mouseleave', hideLabel );
  };

  var unbindLabelToggle = function() {
  	menuLinks.unbind( 'mouseenter', showLabel );
		menuLinks.unbind( 'mouseleave', hideLabel );
  };

	if ( $( window ).width() > 768 ) { bindLabelToggle(); };

	$( window ).on( 'resize', function() {
		// If screen wider than 768px: Bind function that hides/shows labels for menuicons to to '.menu--main li a'
		if ( $( window ).width() > 768 ) {
			$( '.menu--main li a span' ).css( 'display', 'none' );
			bindLabelToggle();
		// If narrower: Unbind it (because only label is shown on mobile sizes, so it shouldn't be toggleable)
		} else {
			$( '.menu--main li a span' ).css( 'display', 'inline-block' );
			unbindLabelToggle();
		}
	});
	/* ----- / ----- */

	/* ----- Change background on page-show.php every x seconds -----*/
	var randomNumBG = Math.floor( Math.random() * 5 );

	var BGs = [];
	BGs[0] = 'wp-content/themes/portfolio15/images/showbg1.png';
	BGs[1] = 'wp-content/themes/portfolio15/images/showbg2.png';
	BGs[2] = 'wp-content/themes/portfolio15/images/showbg3.png';
	BGs[3] = 'wp-content/themes/portfolio15/images/showbg4.gif';
	BGs[4] = 'wp-content/themes/portfolio15/images/showbg5.png';

	function chooseBG() {
  	$( '.intro-bg' ).css({ 'background-image': "url('" + BGs[randomNumBG] + "')" });
	}

	chooseBG();
	/* ----- / ----- */

	/* ----- Mousewheel horizontal scroll when hovering specified elem (for submenu) -----*/
	var enableHorizontalScroll = function() {
		$( '.menu--categ' ).mousewheel(function(event, delta) {
		  this.scrollLeft -= (delta * 30); // Speed
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

	/* ----- Vis kategorier - Variér, hvor kraftig effekten er -----*/
	$( '#menuCateg' ).hide();
	$( '#menuCateg' ).css( 'opacity', 1 );

	var randDistance = Math.floor((Math.random() * 50) + 1);
	var randDuration = Math.floor((Math.random() * 1200) + 1);

	var effectAttr = {
		effect: 'bounce',
		direction: 'down',
		distance: randDistance,
		easing: 'easeOutExpo',
		duration: randDuration
	}

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
