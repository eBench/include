module.exports = function(grunt) {

	// 1. All configuration goes here
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				options: {
					sourcemap: 'auto',
				},
				files: {
					'style.css' : './scss/site.scss'
				}
			}
		},
		watch: {
			files: '*.html',
			css: {
				files: 'scss/*.scss',
				tasks: ['sass'],
				options: {
					livereload: true
				}
			}
		}


	});

	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	grunt.registerTask('default', ['watch']);

};
