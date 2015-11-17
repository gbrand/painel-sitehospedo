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
                    "dev/assets/css/resets.css": "dev/assets/less/resets.less",
                    "dev/assets/css/helper.css": "dev/assets/less/helper.less",
                    "dev/assets/css/menu.css": "dev/assets/less/menu.less",
                    "dev/assets/css/conteudo.css": "dev/assets/less/conteudo.less",
                    "dev/assets/css/rodape.css": "dev/assets/less/rodape.less",
                    "dev/assets/css/media.css": "dev/assets/less/media.less"
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
                src: ['dev/assets/css/resets.css', 'dev/assets/css/helper.css', 'dev/assets/css/menu.css', 'dev/assets/css/conteudo.css', 'dev/assets/css/rodape.css','dev/assets/css/media.css'],
                dest: 'dev/assets/css/main.css'
            }
        }, // Concat
        watch: {
            scripts: {
                files: ['dev/assets/js/main.js', 'dev/assets/less/resets.less', 'dev/assets/less/helper.less', 'dev/assets/less/menu.less', 'dev/assets/less/conteudo.less', 'dev/assets/less/rodape.less', 'dev/assets/less/lib/mixins.less', 'dev/assets/less/media.less'],
                tasks: ['less', 'concat', 'cssmin', 'uglify'],
                options: {
                    spawn: false
                }
            }
        }, // Watch
        'ftp-deploy': {
            build: {
                auth: {
                    host: 'ftp.regenciadho.com.br',
                    port: 21,
                    authKey: 'regencia'
                },
                src: 'dev/',
                dest: 'www/'
            }
        }, //Dploy
        compress: {
            main: {
                options: {
                    archive: "download/sites-landing.zip"
                },
                files: [{
                    expand: true,
                    src: "**/*",
                    cwd: "dev/"
                }]
            }
        },
        "jsbeautifier": {
            files: ["dev/*.html", "dev/assets/js/*.js", "dev/assets/less/*.less"],
            options: {
                css: {
                    fileTypes: [".less"]
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