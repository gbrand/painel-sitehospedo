module.exports = function(grunt) {
    // Configurações do projeto
    grunt.initConfig({

        // Configurações dos plugins
        less: {
            development: {
                options: {
                    paths: ["dev/assets/css"]
                },
                files: {
                    "dev/assets/css/main.css": "dev/assets/less/main.less", 
                    "dev/assets/css/resets.css": "dev/assets/less/resets.less"
                }
            }
        }, // Less
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'dev/assets/css',
                    src: ['main.css'],
                    dest: 'dev/assets/css/min',
                    ext: '.min.css'
                }]
            }
        }, // Css Minifier
        uglify: {
            my_target: {
                files: {
                    'dev/assets/js/min/main.min.js': ['dev/assets/js/main.js']
                }
            }
        }, // Uglify
        concat: {
            options: {
                separator: ''
            },
            dist: {
                src: ['node_modules/bootstrap/dist/js/bootstrap.js', 'node_modules/bootstrap-slider/js/bootstrap-slider.js', 'dev/assets/js/custom.js'],
                dest: 'dev/assets/js/main.js'
            }
        }, // Concat
        watch: {
            scripts: {
                files: ['dev/assets/js/custom.js', 'dev/assets/less/lib/mixins.less', 'dev/assets/less/main.less', 'dev/assets/less/resets.less'],
                tasks: ['less', 'cssmin', 'concat', 'uglify'],
                options: {
                    spawn: false
                }
            }
        }, // Watch
        'ftp-deploy': {
            build: {
                auth: {
                    host: 'ftp.gbrand.com.br',
                    port: 21,
                    authKey: 'lab'
                },
                src: 'dev/',
                dest: 'www/lab/painel-sitehospedo'
            }
        }, //Dploy
        compress: {
            main: {
                options: {
                    archive: "download/painel-sitehospedo.zip"
                },
                files: [{
                    expand: true,
                    src: "**/*",
                    cwd: "dev/"
                }]
            }
        },
        "jsbeautifier": {
            files: ["dev/*.php", "dev/assets/js/*.js", "dev/assets/less/*.less", "dev/modulos/*/*.php"],
            options: {
                css: {
                    fileTypes: [".less"]
                },
                php: {
                    fileTypes: [".html"]
                }
            }
        } // JsBeautfier
    });

    // Declarando plugins
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-ftp-deploy');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks("grunt-jsbeautifier");

    // Tarefas a serem executadas
    grunt.registerTask('default', ['less', 'concat', 'cssmin', 'uglify']);
    grunt.registerTask('w', ['watch']);
    grunt.registerTask('ftp', ['ftp-deploy']);
    grunt.registerTask('zip', ['compress']);
    grunt.registerTask('format', ['jsbeautifier']);

};