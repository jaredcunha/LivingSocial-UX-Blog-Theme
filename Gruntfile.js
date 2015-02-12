module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'images/build/'
                }]
            }
        },

        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: '**/*.scss',
                tasks: ['sass'],
                options: {
                    spawn: false,
                }
            }, 
            scripts: {
                files: ['js/**/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            }   
        },

        concat: {   
            dist: {
                src: [
                    'js/libs/*.js', 'js/plugins/*.js', 'js/scripts/*.js' // All JS in the libs folder
                ],
                dest: 'js/build/global.js',
            }
        },

        uglify: {
            build: {
                src: 'js/build/global.js',
                dest: 'js/build/global.min.js'
            }
        }, 

        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    precision: '10'
                },
                files: {
                    'css/build/global.css': 'css/scss/global.scss'
                }
            } 
        }

        

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    //grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['watch']);

};