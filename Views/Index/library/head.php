<?php require_once ("../../Config/define_path.php"); ?>
<!-- Title -->
<title>Couple Cupid | Make Friends</title>

<!-- Meta -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon -->
<link href="favicon.html" rel="shortcut icon">

<!-- Bootstrap Core CSS -->
<link href=<?php echo __CONTENT_PATH_INDEX."css/bootstrap.min.css"; ?> rel="stylesheet">

<!-- CSS & Javascript -->
<link href=<?php echo __CONTENT_PATH_INDEX."css/font-awesome.min.css"; ?> rel="stylesheet">
<link href=<?php echo __CONTENT_PATH_INDEX."css/main.css"; ?> rel="stylesheet">
<link href=<?php echo __CONTENT_PATH_INDEX."css/responsive.css"; ?> rel="stylesheet">
<link href=<?php echo __CONTENT_PATH_INDEX."css/flags.css"; ?> rel="stylesheet">
<link href=<?php echo __CONTENT_PATH_INDEX."css/jquery-ui.css"; ?> rel="stylesheet">
<script src=<?php echo __CONTENT_PATH_INDEX."js/jquery-1.11.3.js"; ?> ></script>
<script src=<?php echo __CONTENT_PATH_INDEX."js/jquery-ui.js"; ?> ></script>

<script>
	$(function() {
		$( "#slider-aged" ).slider({
			range:true,
			min: 18,
			max: 99,
			values: [ 18, 35 ],
			slide: function( event, ui ) {
				$( "#aged" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] + " tuổi");
			}
		});

		$( "#slider-height" ).slider({
			range:true,
			min: 140,
			max: 202,
			values: [ 150, 180 ],
			slide: function( event, ui ) {
				$( "#height" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] + " m");
			}
		});

		$( "#slider-aged-child" ).slider({
			range:true,
			min: 1,
			max: 99,
			values: [ 1, 18 ],
			slide: function( event, ui ) {
				$( "#aged-child" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] + " tuổi");
			}
		});

		$( "#aged" ).val($( "#slider-aged" ).slider( "values", 0 ) + " - " + $( "#slider-aged" ).slider( "values", 1 ) + " tuổi");
		$( "#height" ).val($( "#slider-height" ).slider( "values", 0 ) + " - " + $( "#slider-height" ).slider( "values", 1 ) + " m");
		$( "#aged-child" ).val($( "#slider-aged-child" ).slider( "values", 0 ) + " - " + $( "#slider-aged-child" ).slider( "values", 1 ) + " tuổi");
	});
</script>

