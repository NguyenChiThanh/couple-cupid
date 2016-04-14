<!DOCTYPE html>
<html>
<head>
	<?php include '../Layout/core_css.php';?>

	<link href="../../Content/global/css/profile.css" rel="stylesheet" type="text/css"/>
	<link href="../../Content/global/css/blog.css" rel="stylesheet" type="text/css"/>
	<link href="../../Content/global/css/portfolio.css" rel="stylesheet" type="text/css"/>
	<link href="../../Content/global/css/Search/custom.css" rel="stylesheet" type="text/css"/>

</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-boxed page-sidebar-closed-hide-logo">
	<!-- IMPORT HEADER -->
	<?php include '../Layout/header.php' ?>

	<div class="container">
		<!-- BEGIN PAGE CONTAINER -->
		<div class="page-container">
			<!-- IMPORT SIDEBAR -->
			<?php include '../Layout/sidebar.php' ?>

			<!-- IMPORT CONTENT -->
			<div class="page-content-wrapper">
				<div class="page-content"> 
					<?php include 'search_content.php' ?> 
				</div>
			</div>
		</div>
		<div class="scroll-to-top" style="display: block;">
			<i class="icon-arrow-up"></i>
		</div>
		<!-- END PAGE CONTAINER -->
	</div>

	<!-- IMPORT SCRIPTS -->
	<?php include '../Layout/core_scripts.php' ?>
	<!-- <script type="text/javascript" src="../../Content/global/scripts/portfolio.js"></script> -->
	<script type="text/javascript">
		jQuery(document).ready(function() {
		   // Portfolio.init();
		   ComponentsjQueryUISliders.init();
		   ComponentsDropdowns.init();
		});
	</script>
</body>
</html>