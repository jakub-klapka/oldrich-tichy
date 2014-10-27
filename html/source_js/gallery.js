/* global jQuery */
( function ( $ ) {

    var Gallery = {

        init: function( el ) {

            this.gallery = el;
            this.full_image_el = this.gallery.find('.gallery__full_image');
            this.full_image_image = this.full_image_el.find( '.gallery__full_image__image' );
            this.full_image_close = this.full_image_el.find( '.gallery__full_image__close' );
            this.full_image_prev = this.full_image_el.find( '.gallery__full_image__prev' );
            this.full_image_next = this.full_image_el.find( '.gallery__full_image__next' );
            this.full_image_desc = this.full_image_el.find( '.gallery__full_image__description' );

            this.cat_menu = this.gallery.find( '.gallery__menu' );
            this.cat_menu_items = this.cat_menu.find( '.gallery__menu__item' );

            this.images_wrap = this.gallery.find('.gallery__items');
            this.gallery_items = this.images_wrap.find( '.gallery__items__item' );

            this.full_open = false;
            this.prev_image = false;
            this.next_image = false;

            this.bindEvents();

            this.onHeightChange = function() {
                $( document ).trigger( 'lumi_height_changed' );
            };
        },

        bindEvents: function() {

            var self = this;
            this.images_wrap.on( 'click', '.gallery__items__item', function(){
                self.showFull( $( this ), true );
            } );

            this.full_image_close.on( 'click', $.proxy( this.closeFullImage, this ) );

            this.cat_menu.on( 'click', 'button', function() {
                self.filter( $( this ) );
            } );

            this.full_image_prev.on( 'click', function(){
                self.showFull( self.prev_image );
            } );

            this.full_image_next.on( 'click', function(){
                self.showFull( self.next_image );
            } );



        },

        showFull: function( image, scroll ) {
            scroll = scroll || false;

            this.gallery_items.removeClass( 'is-active' );
            image.addClass( 'is-active' );

            this.full_image_image
                .attr( 'src', '' )
                .attr( 'width', image.data( 'width' ) )
                .attr( 'height', image.data( 'height' ) )
                .attr( 'alt', image.data( 'alt' ) )
                .attr( 'src', image.data( 'full' ) );
            this.onHeightChange();
            this.full_image_desc.html( image.find( '.gallery__items__item__description_placeholder' ).html() );

            if( !this.full_open ) {
                this.full_image_el.velocity( 'slideDown', { duration: 500, complete: this.onHeightChange } );
            }

            this.full_open = true;

            if( scroll ) {
                $( 'body, html' ).animate( { scrollTop: $( '#dilo' ).offset().top }, 500 );
            }

            this.getPrevNext( image );

            if( this.prev_image !== false ) {
                this.full_image_prev.show();
            } else {
                this.full_image_prev.hide();
            }

            if( this.next_image !== false ) {
                this.full_image_next.show();
            } else {
                this.full_image_next.hide();
            }


        },

        getPrevNext: function( current ) {

            var visible_images = this.gallery_items.filter( ':visible' ),
                total = visible_images.length,
                current_index = ( visible_images.index( current ) ) + 1;

            if( current_index === 1 && current_index === total ) {
                this.prev_image = false;
                this.next_image = false;
                return;
            }

            if( current_index === 1 ) {
                this.prev_image = false;
                this.next_image = visible_images.eq( ( current_index - 1 ) + 1 );
                return;
            }

            if( current_index === total ) {
                this.prev_image = visible_images.eq( ( current_index - 1 ) - 1 );
                this.next_image = false;
                return;
            }

            this.next_image = visible_images.eq( ( current_index - 1 ) + 1 );
            this.prev_image = visible_images.eq( ( current_index - 1 ) - 1 );

        },

        closeFullImage: function() {
            this.full_image_el.velocity( 'slideUp', { duration: 500, complete: this.onHeightChange } );
            this.gallery_items.removeClass( 'is-active' );
            this.full_open = false;
        },

        filter: function( button ) {
            this.cat_menu_items.removeClass( 'active' );
            button.parent().addClass( 'active' );

            if( this.full_open ) {
                this.closeFullImage();
            }

            var cat = button.data('cat' ),
                new_items,
                old_items;

            if( cat === 'all' ) {
                new_items = this.gallery_items.not( ':visible' );
                old_items = $();
            } else {
                var all_new_items = this.gallery_items.filter( '[data-cat="' + cat + '"]' );
                old_items = this.gallery_items.filter( ':visible' ).not( all_new_items );
                new_items = all_new_items.not( ':visible' );
            }

            var self = this;
            old_items.velocity( 'fadeOut', {
                duration: 500,
                display: 'inline-block',
                complete: function( el ){
                    $( el ).hide();
                    self.onHeightChange();
                }
            } );
            new_items.velocity( 'fadeIn', {
                duration: 500,
                display: 'inline-block'
            } );

        }

    };


    $( function() {

        $( '.gallery' ).each( function(){
            Object.create( Gallery ).init( $( this ) );
        } );

    } );

} )( jQuery );