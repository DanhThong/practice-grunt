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
            css: ['css/*.css']
        },
        watch: {
            css: {
                files: 'sass/*.scss',
                tasks: ['clean:css', 'compass:dev']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['compass:dev', 'cssmin:dev']);
    grunt.registerTask('dev', 'For developers', function() {
        grunt.task.run('watch:css');
    });
};
