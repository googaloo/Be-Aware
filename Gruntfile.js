module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: ['src/**/*.js'],
        dest: 'dist/<%= pkg.name %>.js'
      }
    },

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: {                         // Dictionary of files
          'css/style.css': 'css/scss/main.scss'
        }
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      sass: {
        options: { livereload: true },
        files: '**/*.scss',
        tasks: ['sass']
      },
      css: {
        options: { livereload: true },
        files: ['css/style.css'],
        tasks: []
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('default', ['watch']);

};