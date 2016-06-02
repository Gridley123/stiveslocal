require.config({
	baseUrl: "wp-content/themes/stives/js",
	paths: {
		jquery: "vendor/jquery/jquery",
                bootstrap: "vendor/bootstrap-sass/assets/javascripts/bootstrap",
                main: "main"
	}
});

require(['jquery', 'bootstrap', 'main'], function($) {
	console.log('Working!!');
});


