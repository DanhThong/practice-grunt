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
        }
    });

    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', ['compass:dev', 'cssmin:dev']);
};
