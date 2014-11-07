/* global jQuery */
( function( $ ){


	var MenuNavigation = {

		init: function() {

			this.menu = $( '#menu' );
			this.menu_items = this.menu.find( 'li' );
			this.activeBreakpoint = 0;
			this.indicator = $('#menu_indicator');
			this.doc_height = $( document ).height();
			this.window_height = $( window ).height();

			this.setBreakpoints();

			this.bindEvents();

		},

		bindEvents: function() {

			var self = this;
			$( window ).load( function() {
				self.setBreakpoints();
				self.checkForBreakpoint();
			} );

			$( window ).on( 'scroll', $.proxy( this.checkForBreakpoint, this ) );

			$( document ).on( 'lumi_height_changed', function() {
				self.setBreakpoints();
				self.checkForBreakpoint();
			} );

			this.menu.find('a' ).add( '.home_slider__scroll_down' ).on('click', function(event){
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

			this.doc_height = $( document ).height();
			this.window_height = $( window ).height();

		},

		checkForBreakpoint: function() {

			var scroll_position = $( window ).scrollTop(),
				current_breakpoint = false,
				found = false;

			var self = this;
			$.each( this.reversed_breakpoints, function( i, breakpoint ){
				if( found === true ) {
					return;
				}
				if( scroll_position >= breakpoint ) {
					current_breakpoint = breakpoint;
					found = true;
				}
			} );

			if( ( scroll_position + this.window_height ) >= this.doc_height ) {
				//on the end of page
				current_breakpoint = this.breakpoints[this.breakpoints.length - 1];
			}

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


	$( function() {
		MenuNavigation.init();
	} );


} )( jQuery );
