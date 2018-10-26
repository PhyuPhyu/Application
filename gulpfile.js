var elixir = require('laravel-elixir');



elixir(function (mix) {
    var sass = mix.sass('app.scss');
        //.webpack('app.js');

        
        .styles([
            'libs/blog-post.css',
            'libs/bootstrap.css/bootstrap.min.css',
            'libs/font-awesome.css',
            'libs/metisMenu.css',
            'libs//style.css',
            'libs/sb-admin-2.css',
            'libs/timeline.css'

        ], './public/css/libs.css')




        .scripts([
            'libs/bootstrap.js',
            'libs/jquery.js',
            'libs/metisMenu.js',
            'libs/sb-admin-2.js',
            'libs/scripts.js'

        ], './public/js/libs.js')


});


