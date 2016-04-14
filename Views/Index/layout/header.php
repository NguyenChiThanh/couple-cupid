<?php require_once ("../../Config/define_path.php"); ?>

<!-- === HEADER === -->
<header id="header" role="banner">
	<div class="main-nav">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						<img class="img-responsive" src=<?php echo __CONTENT_PATH_INDEX."images/logo.png"; ?> alt="logo">
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="scroll active"><a href="#home"><i class="fa fa-home"></i> Trang chủ</a></li>
						<li class="scroll"><a href="#comming-soon"><i class="fa fa-calendar"></i> Sự kiện</a></li>
						<li class="scroll"><a href="#highlight"><i class="fa fa-heart"></i> Nổi bật</a></li>
						<!-- <li class="scroll"><a href="#search"><i class="fa fa-search"></i> Tìm kiếm</a></li> -->
						<li class="scroll"><a href="#about"><i class="fa fa-info"></i> Giới thiệu</a></li>
						<li class="scroll"><a href="#contact"><i class="fa fa-phone"></i> Liên hệ</a></li>
						<li class="scroll"><a href="#"><p class="flag flag-us"></p></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>