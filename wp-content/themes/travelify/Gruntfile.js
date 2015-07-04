module.exports = function (grunt) {
    grunt.initConfig({
        compass: {
            dev: {
                options: {
                    sassDir: 'sass',
                    cssDir: 'css'
                }
            }
        },
        cssmin: {
            dev: {
                files: [{
                    src: 'css/main.css',
                    dest: 'css/main.css'
                }]
            }
        },
        clean: {
            css: ['css/*.css'],
            js: ['library/js/*.js']
        },
        watch: {
            css: {
                files: ['sass/*.scss', 'library/js-src/*.js'],
                tasks: ['clean:css', 'clean:js', 'compass:dev', 'copy:dev', 'uglify:prod']
            }
        },
        uglify: {
            prod: {
                files: [{
                    expand: true,
                    cwd: 'library/js-src/',
                    src: '*.js',
                    dest: 'library/js/'
                }]
            }
        },
        copy: {
            dev: {
                files: [
                    {cwd: 'bower/bower_components/requirejs/',
                     src: ['require.js'], dest: 'library/js-src/', expand: true},
                    {cwd: 'bower/bower_components/fancybox/source/',
                     src: ['jquery.fancybox.js'], dest: 'library/js-src/', expand: true}
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('default', ['compass:dev', 'cssmin:dev']);
    grunt.registerTask('dev', 'For developers', function() {
        grunt.task.run('watch:css');
    });
};
