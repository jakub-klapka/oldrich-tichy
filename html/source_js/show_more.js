/* global jQuery */
( function( $ ){

    var ShowMore = {

        init: function( el ) {

            this.el = el;
            this.button = this.createButton();
            this.open = false;

            this.bindEvents();
        },

        bindEvents: function() {
            this.button.on( 'click', $.proxy( this.toggle, this ) );
        },

        createButton: function() {

            var button = $( '<button></button>' )
                .addClass( 'show_more__button' )
                .attr( 'aria-controls', this.el.attr( 'id' ) );

            this.el.after( button );

            return button;
        },

        toggle: function() {

            if( !this.open ) {
                this.el.velocity( 'slideDown', { duration: 500 } );
                this.open = true;
                this.el.attr( 'aria-hidden', 'false' );
                this.button.addClass( 'is-open' );
            } else {
                this.el.velocity( 'slideUp', { duration: 500 } );
                this.open = false;
                this.el.attr( 'aria-hidden', 'true' );
                this.button.removeClass( 'is-open' );
            }

        }

    };


    $( function() {

        $( '.show_more' ).each( function(){
            Object.create( ShowMore ).init( $( this ) );
        } );

    } );

} )( jQuery );