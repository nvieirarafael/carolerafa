'use strict';

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    responsive_images: {
        myTask: {
          options: {
          sizes: [{
            width: 140,
            name: 'xsmall'
          }, {
            width: 200,
            name: 'small'
          }, {
            width: 300,
            name: 'medium'
          }, {
            width: 700,
            name: 'large'
          }, {
            width: 1000,
            name: 'xlarge'
          }, {
            width: 1300,
            name: 'xxlarge'
          }, {
            width: 1800,
            name: 'xxxlarge'
          }]
        },
        files: [{
          expand: true,
          src: ['**/*.{jpg,gif,png}'],
          cwd: 'photos/galery/',
          // dest: ''
        }]
        }
      }
  });

  // grunt.loadNpmTasks('grunt-contrib-connect');
  // grunt.loadNpmTasks('grunt-contrib-copy');
  // grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-responsive-images');

  grunt.registerTask('default', ['myTask']);
};