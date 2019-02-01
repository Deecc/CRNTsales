module.exports = (grunt) => {
    grunt.initConfig({
        sass: {
            development: {
                options: {
                },
                files: {
                    'public/css/app.css' : 'resources/assets/sass/app.scss'
                }
            },
            production: {
                options: {
                },
                files: {
                    'public/css/app.css' : 'resources/assets/sass/app.scss'
                }
            },
        },
        watch: {
            files: ['<%= sass.files %>'],
            tasks: ['sass']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.registerTask('default', ['sass']);
    grunt.registerTask('heroku:production', 'sass');
};