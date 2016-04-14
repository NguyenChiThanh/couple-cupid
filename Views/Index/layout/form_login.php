<?php require_once ("../../Config/define_path.php"); ?>

<!-- Modal Login Form -->
<div class="modal fade" id="loginModal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<form class="login-page" method="post" action=<?php echo __GRANT_PARENT_PATH.__CONTROLLER_PATH."login.php"; ?> >
					<div class="margin-bottom-30 row">
						<div class="col-md-10 col-sm-10 col-xs-10">
							<h2>Đăng nhập tài khoản</h2>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input placeholder="Email" class="form-control" type="text" name="email" />
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input placeholder="Mật khẩu" class="form-control" type="password" name="password" />
					</div>
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<label class="checkbox"><input type="checkbox"> Giữ đăng nhập</label>
						</div>
						<div class="col-md-6 col-xs-6">
							<label class="checkbox pull-right"><a href="#">Quên mật khẩu?</a></label>
						</div>
					</div>
					<hr class="hidden-xs">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<button class="btn btn-danger pull-right" name="login" type="submit"><i class="fa fa-sign-in"></i> Đăng nhập</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>