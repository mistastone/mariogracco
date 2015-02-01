module.exports = function(grunt) {

 // Project configuration.
 grunt.initConfig({
   pkg: grunt.file.readJSON('package.json'),
 //   jade: {
 //   		html: {
 //   			files: {
 //   				'dist/': ['dev/*.jade']
 //   			},
 //  			options: {
 //  				client: false
 //  			}
 //  		},
	// },
  sass: {
	dist: {
	files: {
	'style.css' : 'style.scss'
	}
	}
},

watch: {
	css: {
		files: ['style.scss'],
		tasks: ['sass', 'autoprefixer']
	},
	// html : {
	// 	files: ['dev/*.jade'],
	// 	tasks: ['jade']
	// },
	options: {
		livereload: true
	}
},
autoprefixer: {
	options: {
		browsers: ['last 5 version', 'ie 7', 'ie 8', 'ie 9']
	},
	no_dest: {
		src: 'style.css'
	}
 },

imagemin: {
    dynamic: {
        files: [{
            expand: true,
            cwd: 'images/',
            src: ['assets/images.{png,jpg,gif}'],
            dest: 'images/build/'
        }]
    }
},

//  connect: {
//  	server: {
//  		options: {
//  			port: 9001,
//  			base: 'dist/'
//  		}
//  	}
//  }
});

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-autoprefixer');
// grunt.loadNpmTasks('grunt-contrib-livereload');
// grunt.loadNpmTasks('grunt-contrib-imagemin');
// grunt.loadNpmTasks('grunt-jade');

 // Default task(s).
 grunt.registerTask('default', ['watch']);
};