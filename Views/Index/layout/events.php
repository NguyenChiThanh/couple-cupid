<?php require_once ("../../Config/define_path.php"); ?>

<section id="comming-soon">
	<div class="container-fluid">
		<div class="row">
			<div class="watch col-md-5 hidden-xs hidden-sm">
				<img src=<?php echo __CONTENT_PATH_INDEX."images/watch.png"; ?> alt="watch">
			</div>
			<div id="content" class="col-md-7">
				<div class="col-md-12 col-sm-4">
					<h2>Sự kiện sắp diễn ra</h2>
				</div>
				<div class="col-md-12 col-sm-6">
					<ul id="countdown">
						<li>
							<span class="days time-font">00</span>
							<p>Ngày </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="">Giờ </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="">Phút</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="">Giây</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>