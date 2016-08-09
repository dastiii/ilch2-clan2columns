module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        // define a string to put between each file in the concatenated output
        separator: ';'
      },
      dist: {
        // the files to concatenate
        src: [
          'node_modules/jquery/dist/jquery.js',
          'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
          'src/js/*.js',
        ],
        // the location of the resulting JS file
        dest: 'dist/js/<%= pkg.name %>.js'
      }
    },
    uglify: {
      options: {
        // the banner is inserted at the top of the output
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      dist: {
        files: {
          'dist/js/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },
    jshint: {
      // define the files to lint
      files: ['Gruntfile.js', 'src/**/*.js'],
      // configure JSHint (documented at http://www.jshint.com/docs/)
      options: {
        // more options here if you want to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true
        }
      }
    },
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: {                         // Dictionary of files
          'dist/css/<%= pkg.name %>.css': 'src/scss/app.scss',       // 'destination': 'source'
        }
      }
    },
    watch: {
      css: {
        files: 'src/scss/*.scss',
        tasks: ['sass', 'cssmin']
      },
      js: {
        files: ['<%= jshint.files %>'],
        tasks: ['jshint']
      }
    },
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1,
        sourceMap: true
      },
      target: {
        files: {
          'dist/css/<%= pkg.name %>.min.css': ['dist/css/<%= pkg.name %>.css']
        }
      }
    },
    copy: {
      main: {
        files: [
          {
            expand: true,
            cwd: 'node_modules/bootstrap-sass/assets/fonts',
            src: '**',
            dest: 'dist/fonts/',
          },
          {
            expand: true,
            cwd: 'node_modules/font-awesome/fonts',
            src: '**',
            dest: 'dist/fonts/',
          },
        ],
      },
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'sass', 'cssmin', 'copy']);
  grunt.registerTask('scss', ['sass', 'cssmin']);

};
