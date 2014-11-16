'use strict';
module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		project: {
			// assets: ['assets'],
			css: ['sass/style.scss']
		},

		sass: {
			dev: {
				options: {
					style: 'nested' //nested, compact, compressed, expanded
				},
				files: {
					'css/style.css': 'sass/style.scss'
				}
			}
		},

		concat: {
			fastclick: {
				src: ['js/highlight/styles/tomorrow-night.css'],
				dest: 'sass/_highlight.scss'
			}
		},

		// uglify: {
		// 	dist: {
		// 		files: {
		// 			'js/highlight.min.js': ['node_modules/highlight.js/lib/index.js']
		// 			// ,'js/custom.min.js': ['js/custom/*.js']
		// 		}
		// 	}
		// },

		watch: {
			sass: {
				files: 'sass/{,*/}*.{scss,sass}',
				tasks: ['sass:dev']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	// grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', [
		'watch'
	]);
}

