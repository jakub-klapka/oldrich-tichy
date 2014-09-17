/* global define */
define( ['jquery'], function( $ ){

	return {

		init: function( el ) {

			this.window = $( window );

			this.wrapper = el;
			this.image = el.find( '.image_paralax__image' );

			this.setVars();
			this.bindEvents();
			this.checkForScroll();

		},

		bindEvents: function() {

			this.window.scroll( $.proxy( this.checkForScroll, this ) );
			var t = this;
			this.window.resize( function(){
				t.setVars();
				t.checkForScroll();
			} );

		},

		setVars: function() {

			this.top_position = this.wrapper.offset().top;
			this.window_height = this.window.height();
			this.wrapper_height = this.wrapper.outerHeight();
			this.image_height = this.image.outerHeight();

		},

		checkForScroll: function() {

			var scroll_position = this.window.scrollTop();

			if( ( scroll_position + this.window_height ) < this.top_position || scroll_position > ( this.top_position + this.wrapper_height ) ) {
				//out of viewport
				return;
			}

			this.computeParalax( scroll_position );

		},

		computeParalax: function( scroll_position ) {

			var position_of_wrapper_middle = this.top_position + ( this.wrapper_height / 2 ),
				position_of_window_middle = scroll_position + ( this.window_height / 2 ),
				center_line = ( this.wrapper_height / 2 ) + ( this.window_height / 2 );

			var scale = ( position_of_wrapper_middle - position_of_window_middle ) / center_line,
				percentage = ( scale + 1 ) / 2,
				translate = ( this.image_height - this.wrapper_height ) * percentage;

			this.image.css( 'transform', 'translateY(-' + translate + 'px) translateZ(0)' );


		}

	};

} );