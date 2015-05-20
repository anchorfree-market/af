module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
        cssDir: 'application/themes/af/',
    cssmin: {
      options: {
        root: './',
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: [{
          // convert css files to min.css
          expand: true,
          cwd: 'application/themes/af/css',
          src: ['*.css', '!*.min.css'],
          dest: 'application/themes/af/css',
          ext: '.min.css'
        },
        {
          // combine css files
          'application/themes/af/css/styles-final.css': ['application/themes/af/css/bootstrap-custom.min.css', 'application/themes/af/css/styles.min.css']
        },
        {
          // convert css files to min.css
          expand: true,
          cwd: 'concrete/blocks/page_list',
          src: ['*.css', '!*.min.css'],
          dest: 'concrete/blocks/page_list',
          ext: '.min.css'
        }
        ]
      }
    },
  /*  
    */
    /*
    uglify: {
      options: {
        mangle: false
      },
      my_target: {
        files: {
          '../Documents/AF/AR-477-new-hss-exit-page/template/js/jquery.rating.min.js' : ['../Documents/AF/AR-477-new-hss-exit-page/template/js/jquery.rating.js']
        }
      }
    },
    */
     watch: {
      css: {
          files: "application/themes/af/css/*.css",
          tasks: ['cssmin'],
          options: {
            spawn: false,
            debounceDelay: 2500
          }
        }
      }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).

  //grunt.registerTask('default', ['uglify', 'watch']);
  grunt.registerTask('default', ['cssmin', 'watch']);

};