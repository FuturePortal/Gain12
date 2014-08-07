module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        sass: {
            public: {
                files: {
                    'public/css/main.css': 'gain12/template/main.scss'
                }
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    // grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');

    // Default task(s).
    grunt.registerTask('default', ['sass']);

};
