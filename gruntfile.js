module.exports = function(grunt) {

	// 1. Configure tasks
	grunt.initConfig({

		pkg: grunt.file.readJSON( 'package.json' ),

		uglify: {
			build: {
				src: 'themes/portfolio15/dev/js/*.js',
				dest: 'themes/portfolio15/js/main.min.js'
			},
			dev: {
				options: {
					beautify: true,
					mangle: false,
					compress: false,
					preserveComments: 'all'
				},
				src: 'themes/portfolio15/dev/js/*.js',
				dest: 'themes/portfolio15/js/main.min.js'
			}
		},

		// Compile .scss-files in 'dev' folder into 1 style.css file that WP can read
		sass: {
			dev: {
				options: {
					outputStyle: 'expanded' // 'expanded' = makes the output .css-file easy to read
				},
				files: {
					'themes/portfolio15/style.css': 'themes/portfolio15/dev/scss/style.scss'
				}
			},
			build: {
				options: {
					outputStyle: 'compressed' // 'compressed' = minifies the output for live server
				},
				files: {
					'themes/portfolio15/style.css': 'themes/portfolio15/dev/scss/style.scss'
				}
			}
		},

		// Initialize 'grunt watch'-task with livereload (also install livereload plugin in browser to make it work)
		watch: {
      options: {
        livereload: true,
      },
			js: {
				files: [ 'themes/portfolio15/dev/js/*.js' ],
				tasks: [ 'uglify:dev' ] // Concatenate scripts on change, but don't minify while developing (see options under 'uglify' ^)
			},
			css: {
				files: [ 'themes/portfolio15/dev/scss/**/*.scss' ],
				tasks: [ 'sass:dev' ] // Concatenate styles on change, but don't minify while developing (see options under 'sass' ^)
			},
      livereload: {
        files: [ 'themes/portfolio15/*.html', 'themes/portfolio15/*.php', 'themes/portfolio15/images/**/*.{png,jpg,jpeg,gif,webp,svg}']
      }
		}

	});

	// 2. Load plugins
	grunt.loadNpmTasks( 'grunt-contrib-uglify' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' ); // Runs on command 'grunt watch'
	grunt.loadNpmTasks( 'grunt-sass' );

	// 3. Register task(s)
	grunt.registerTask('default', [ 'uglify:dev', 'sass:dev' ]); // Runs on command 'grunt' as it is set to default
	grunt.registerTask('build', [ 'uglify:build', 'sass:build' ]); // Runs on command 'grunt build'

};