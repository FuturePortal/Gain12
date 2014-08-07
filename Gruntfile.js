module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        sass: {
            public: {
                files: {
                    'public/css/main.css': 'gain12/template/main.scss'
                }
            }
        },
        cssmin: {
            main: {
                options: {
                    banner: '/* Copyright Gain12 */'
                },
                files: {
                    'public/css/main.css': ['public/css/main.css']
                }
            }
        },
        watch: {
            main: {
                files: [
                    'gain12/component/**/*.scss',
                    'gain12/template/*.scss'
                ],
                tasks: ['default']
            }
        }
    });

    // Grunt plugins
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Tasks
    grunt.registerTask('default', ['sass', 'cssmin']);
    grunt.registerTask('clean-css', ['sass']);
    grunt.registerTask('watch-files', ['default', 'watch']);
};
