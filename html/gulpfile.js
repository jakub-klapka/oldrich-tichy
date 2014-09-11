/* global require */
/*
gulp tasks:
	dev - watchers
	css - compile sass
 */

var gulp = require( 'gulp' ),
	sass = require( 'gulp-sass' ),
	plumber = require( 'gulp-plumber' ),
	autoprefixer = require( 'gulp-autoprefixer' ),
	merge_stream = require( 'merge-stream' ),
	path = require( 'path' ),
	livereload = require( 'gulp-livereload' ),
	svg_sprites = require( 'gulp-svg-sprites' ),
	imagemin = require( 'gulp-imagemin' );

var sass_config = {

};

var dev_tasks = [];

/*
SVG Sprite
 */
gulp.task( 'svg_sprite', function(){
	return gulp.src( 'source_svg_sprite/**/*.svg' )
		.pipe( plumber() )
		.pipe( imagemin() )
		.pipe( svg_sprites({
			cssFile: "../source_css/modules/_svg_sprite.scss",
			svg: {
				sprite: "images/svg_sprite.svg"
			},
			svgPath: '../%f',
			preview: false,
			templates: {
				css: require( 'fs' ).readFileSync("source_svg_sprite/scss_template.tmpl", "utf-8")
			}
		}) )
		.pipe( gulp.dest( 'build' ) );
} );

/*
CSS
 */
gulp.task( 'css', ['svg_sprite'], function(){
	return gulp.src( 'source_css/**/*.scss', { base: 'source_css' } )
		.pipe( plumber() )
		.pipe( sass( sass_config ) )
		.pipe( autoprefixer() )
		.pipe( gulp.dest( 'build/css' ) );

} );


gulp.task( 'css_watch', function() {
	gulp.watch( ['source_css/**/*.scss'], function( evt ){

		if( path.basename( evt.path ).substr( 0, 1 ) == '_' ) {
			return gulp.src( 'source_css/**/*.scss', { base: 'source_css' } )
				.pipe( plumber() )
				.pipe( sass( sass_config ) )
				.pipe( autoprefixer() )
				.pipe( gulp.dest( 'build/css' ) );
		}

		return gulp.src( evt.path, { base: 'source_css' } )
			.pipe( plumber() )
			.pipe( sass( sass_config ) )
			.pipe( autoprefixer() )
			.pipe( gulp.dest( 'build/css' ) );
	} );
} );
dev_tasks.push( 'css_watch' );


/*
Livereload
 */
gulp.task( 'livereload', function(){
	livereload.listen();
	gulp.watch( ['*.html', 'build/**/*'], function( evt ){
		livereload.changed( evt.path );
	} );
} );
dev_tasks.push( 'livereload' );

/*
Task def
 */
gulp.task( 'dev', dev_tasks );