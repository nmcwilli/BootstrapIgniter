<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BootstrapIgniter</title>
	
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- IE10 in Windows 8 and Windows Phone 8 Fixes for viewport -->
	<style>
	@-webkit-viewport   { width: device-width; }
	@-moz-viewport      { width: device-width; }
	@-ms-viewport       { width: device-width; }
	@-o-viewport        { width: device-width; }
	@viewport           { width: device-width; }
	</style>
	
	<!-- Bootstrap 3.2.0 CSS Minified/Compiled -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
	<!-- FontAwesome 4.1.0 CSS Minified/Compiled -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	
	<!-- Custom Styling -->
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/custom.css">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="<?php echo asset_url(); ?>js/html5shiv.js"></script>
	  <script src="<?php echo asset_url(); ?>js/respond.min.js"></script>
	<![endif]-->
	
	<!-- JQuery -->
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	
	<!-- Bootstrap 3.2.0 JS Minified/Compiled -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!-- IE 404 browserconfig.xml prevent -->
	<meta name="msapplication-config" content="none"/>
	
	<!-- JQuery Placeholder -->
	<script src="<?php echo asset_url(); ?>js/jquery.placeholder.js"></script>
	<script>
	$(function() {
		// Invoke the plugin
		$('input, textarea').placeholder();
	});
	</script>
	
	<!-- IE10 Viewport Fix -->
	<script src="<?php echo asset_url(); ?>js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Bootstrap icon - can be removed! -->
	<style>
	.bs-docs-booticon-outline {
	    background-color: transparent;
	}
	.bs-docs-booticon-lg {
	    width: 144px;
	    height: 144px;
	    font-size: 108px;
	    line-height: 140px;
	}
	.bs-docs-booticon {
	    display: block;
	    margin-left: auto;
	    margin-right: auto;
	    font-weight: 500;
	    color: #FFF;
	    text-align: center;
	    cursor: default;
	    background-color: #101820;
	    border-radius: 15%;
	}
	</style>
	
</head>
<body>
