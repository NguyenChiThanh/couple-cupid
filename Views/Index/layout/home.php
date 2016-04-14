<!-- === HOME === -->
<section id="home">
	<div id="main-slider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#main-slider" data-slide-to="0" class="active"></li>
			<li data-target="#main-slider" data-slide-to="1"></li>
			<li data-target="#main-slider" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img class="img-responsive blur" src=<?php echo __CONTENT_PATH_INDEX."images/slider/bg1.jpg"; ?> alt="slider">
			</div>
			<div class="item">
				<img class="img-responsive blur" src=<?php echo __CONTENT_PATH_INDEX."images/slider/bg2.jpg"; ?> alt="slider">
			</div>
			<div class="item">
				<img class="img-responsive blur" src=<?php echo __CONTENT_PATH_INDEX."images/slider/bg3.jpg"; ?> alt="slider">
			</div>
		</div>
		<div class="carousel-caption">
			<a href="#search" id="jump_search" class="btn" data-toggle="collapse">Tìm kiếm đối tượng ngay !!! <i class="fa fa-angle-right"></i></a>
		</div>
		<!-- Login & Register form -->
		<div class="main-text">
			<div class="col-md-12 text-center">
				<h1 class="margin-bottom-20">Kết bạn, hẹn hò</h1>
				<p class="margin-bottom-30 hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="">
					<a class="btn btn-clear btn-sm btn-min-block" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i> Đăng nhập</a>
					<a class="btn btn-clear btn-sm btn-min-block" data-toggle="modal" data-target="#signupModal"><i class="fa fa-pencil-square-o"></i> Đăng ký</a>
				</div>
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#main-slider" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#main-slider" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
</section>