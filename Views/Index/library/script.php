<?php require_once ("../../Config/define_path.php"); ?>

<script type="text/javascript" src=<?php echo __CONTENT_PATH_INDEX."js/bootstrap.min.js"; ?> ></script>
<script type="text/javascript" src=<?php echo __CONTENT_PATH_INDEX."js/smoothscroll.js"; ?> ></script>
<script type="text/javascript" src=<?php echo __CONTENT_PATH_INDEX."js/coundown-timer.js"; ?> ></script>
<script type="text/javascript" src=<?php echo __CONTENT_PATH_INDEX."js/jquery.scrollTo.js"; ?> ></script>
<script type="text/javascript" src=<?php echo __CONTENT_PATH_INDEX."js/jquery.nav.js"; ?> ></script>
<script type="text/javascript" src=<?php echo __CONTENT_PATH_INDEX."js/main.js"; ?> ></script>
<script type="text/javascript" src=<?php echo __CONTENT_PATH_INDEX."js/register.js"; ?> ></script>

<!-- Script for tabs search -->
<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-pref .btn").click(function () {
			$(".btn-pref .btn").removeClass("btn-danger").addClass("btn-default");
			$(this).removeClass("btn-default").addClass("btn-danger");
		});
	});
		
</script>

<!-- Jump to search -->
<script type="text/javascript">
	$('#jump_search').click(function() {
		$.scrollTo($('#search'), 1000);
	});
</script>