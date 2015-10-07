// jshint devel:true

jQuery( document ).ready( function($) {

	/* ----- Show menu labels when hovering main menu -----*/
	var menuLinks = $( '.menu--main li a' );

	var showLabel = function() { $( this ).children( 'span' ).stop( true ).fadeIn( 600 ); };
  var hideLabel = function() { $( this ).children( 'span' ).hide(); };

  var bindLabelToggle = function() {
  	menuLinks.bind( 'mouseenter', showLabel );
		menuLinks.bind( 'mouseleave', hideLabel );
  };

  var unbindLabelToggle = function() {
  	menuLinks.unbind( 'mouseenter', showLabel );
		menuLinks.unbind( 'mouseleave', hideLabel );
  };

	if ( $( window ).width() > 762 ) { bindLabelToggle(); }; // 768 - 6px (scrollbar)

	$( window ).on( 'resize', function() {
		// If screen wider than 768px: Bind function that hides/shows labels for menuicons to to '.menu--main li a'
		if ( $( window ).width() > 762 ) {
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
	var bindEnableHorizontalScroll = function() {
		$( '.menu--categ' ).bind( 'mousewheel', function(event, delta) {
		  this.scrollLeft -= (delta * 1); // Speed
		  event.preventDefault();
		});
	};

	var unbindEnableHorizontalScroll = function() {
		$( '.menu--categ' ).unbind( 'mousewheel', function(event, delta) {
		  this.scrollLeft -= (delta * 1); // Speed
		  event.preventDefault();
		});
	};

	// Brug kun, hvis vinduet er så smalt at menuen ikke kan være der
	if ( $( window ).width() < 660 ) { bindEnableHorizontalScroll(); }
	else { unbindEnableHorizontalScroll(); };
	// ... og hvis vinduet gøres smallere efter load
	$( window ).on( 'resize', function() {
		if ( $( window ).width() < 660 ) {
			bindEnableHorizontalScroll();
		} else {
			unbindEnableHorizontalScroll();
		}
	});
	/* ----- / -----*/

	/* ----- Vis kategorier - Variér, hvor kraftig effekten er -----*/
	$( '#menuCateg' ).hide();
	$( '#menuCateg' ).css( 'opacity', 1 );

	var randDistance = Math.floor((Math.random() * 50) + 1);
	var randDuration = Math.floor((Math.random() * 1000) + 1);

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
	  $( '.piece__video' ).css({
	  	width: $( '.piece__pic' ).innerWidth() + 'px',
	  	height: $( '.piece__pic' ).innerWidth() * 0.56 + 'px'
	  });
	};
	setVideoSizeToParent();

  // Følg størrelse ved ændring af vinduesstørrelse
  $( window ).resize( setVideoSizeToParent );
	/* ----- / -----*/

	/* ----- Portrait-video (iPhone app) følger parentstørrelse -----*/
	function setPortraitVideoSizeToParent() {
	  var videoWrap = $( '.piece__pic--interact--iframe' ).innerWidth();
	  $( '.piece__clip' ).css({
	  	width: videoWrap + 'px',
	  	height: videoWrap * 1.76 + 'px'
	  });
	};
	setPortraitVideoSizeToParent();

  // Følg størrelse ved ændring af vinduesstørrelse
  $( window ).resize( setPortraitVideoSizeToParent );
	/* ----- / -----*/

	/* ----- Airlook-video følger parentstørrelse -----*/
	function setAirlookSizeToParent() {
	  $( '.piece__video--airlook' ).css({
	  	width: $( '.piece__pic-visuali--airlook' ).innerWidth() + 'px',
	  	height: $( '.piece__pic-visuali--airlook' ).innerWidth() * 0.56 + 'px'
	  });
	};
	setAirlookSizeToParent();

  // Følg størrelse ved ændring af vinduesstørrelse
  $( window ).resize( setAirlookSizeToParent );
	/* ----- / -----*/

	/* ----- Site følger parentstørrelse -----*/
	function setIframeSizeToParent() {
		var iframeWrap = $( '.piece__pic-x--iframe' ).innerWidth();
		if ( iframeWrap > 768 ) { // Sæt til desktop landscape
		  $( '.piece__iframe' ).css({
		  	width: iframeWrap + 'px',
		  	height: iframeWrap * 0.56 + 'px'
		  });
		} else { // Sæt til portrait iPad/iPhone forhold
			$( '.piece__iframe' ).css({
		  	width: iframeWrap + 'px',
		  	height: iframeWrap * 1.333 + 'px'
		  });
		}
	};
	setIframeSizeToParent();

  // Følg størrelse ved ændring af vinduesstørrelse
  $( window ).resize( setIframeSizeToParent );
	/* ----- / -----*/

	/* ----- Hent rotationstal på skillwheel, så hover kan fortsætte herfra -----*/
	// function getRotationValue() {
	// 	var rotationPos = $( '.skillwheel' ).css( 'transform' );
	// 	var values = rotationPos.split('(')[1],
 //    values = values.split(')')[0],
 //    values = values.split(',');

 //    var a = values[0];
	// 	var b = values[1];
	// 	var c = values[2];
	// 	var d = values[3];

	// 	var rotationPosCalc = Math.round(Math.asin(b) * (180/Math.PI));

	// 	console.log( rotationPosCalc );
	// 	return rotationPosCalc;
	// };

	$( '.skillwheel' ).on('mouseenter click', function() {
	// 	var rotationPosCalc = getRotationValue();
	// 	$( this ).css({
	// 		// 'transform': 'rotate(' + rotationPosCalc + 'deg)',
	// 		'animation-duration': '10s'
	// 	});
			$( '.me__face--serious' ).hide();
			$( '.me__face--running' ).show();
	});

	$( '.skillwheel' ).on( 'mouseleave', function() {
	// 	var rotationPosCalc = getRotationValue();
	// 	$( this ).css({
	// 		'animation-duration': '30s'
	// 	});
			$( '.me__face--serious' ).show();
			$( '.me__face--running' ).hide();
	});
	/* ----- / -----*/

});
