require.config({
	baseUrl: "wp-content/themes/stives/js",
	paths: {
		jquery: "vendor/jquery/jquery",
		bootstrap: "vendor/bootstrap-sass/assets/javascripts/bootstrap"
	}
});

require(['jquery', 'bootstrap'], function($) {
	console.log('Working!!');
});


