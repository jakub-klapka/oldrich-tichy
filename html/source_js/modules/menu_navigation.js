/* global define */
define( ['jquery'], function( $ ){

	return {

		init: function() {

			this.menu = $( '#menu' );
			this.menu_items = this.menu.find( 'li' );
			this.activeBreakpoint = 0;
			this.indicator = $('#menu_indicator');

			this.setBreakpoints();

			this.bindEvents();

		},

		bindEvents: function() {

			$( window ).on( 'scroll', $.proxy( this.checkForBreakpoint, this ) );

			this.menu.find('a').on('click', function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
			});

			$('.toolbar__logo:first' ).on( 'click', function(event) {
				event.preventDefault();
				$( 'html,body' ).animate( { scrollTop: 0 }, 500 );
			});

		},

		setBreakpoints: function() {

			var breakpoints = [0];

			$.each( this.menu_items, function( i, item ){

				var id = $( item ).find( 'a' ).attr( 'href' ),
					el_offset = $( id ).offset().top;

				breakpoints.push( el_offset );

			} );

			this.breakpoints = breakpoints;
			this.reversed_breakpoints = breakpoints.slice().reverse();

		},

		checkForBreakpoint: function() {

			var scroll_position = $( window ).scrollTop(),
				current_breakpoint = false,
				found = false;

			$.each( this.reversed_breakpoints, function( i, breakpoint ){
				if( found === true ) {
					return;
				}
				if( scroll_position >= breakpoint ) {
					current_breakpoint = breakpoint;
					found = true;
				}
			} );

			if( this.activeBreakpoint !== current_breakpoint ) {
				this.switchBreakpoint( current_breakpoint );
			}


		},

		switchBreakpoint: function( breakpoint ) {

			this.activeBreakpoint = breakpoint;

			if( breakpoint === 0 ) {
				this.indicator.css({
					width: 0,
					'transform': 'translateX(0px)'
				});
				return;
			}

			var nth_element = this.breakpoints.indexOf( breakpoint ),
				menu_element = this.menu_items.eq( nth_element - 1 ),
				el_width = menu_element.outerWidth(),
				offset = menu_element.position().left;

			this.indicator.css({
				width: el_width,
				'transform': 'translateX(' + offset + 'px)'
			});

		}

	};

} );