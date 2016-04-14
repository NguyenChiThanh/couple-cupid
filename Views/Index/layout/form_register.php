	<?php require_once ("../../Config/define_path.php"); ?>

	<script type="text/javascript">
		<?php include (__GRANT_PARENT_PATH.__CONTROLLER_PATH."check_form_signup.js"); ?>
	</script>

	<!-- Modal Register Form -->
	<div class="modal fade" id="signupModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<form class="signup-page" method="post" action=<?php echo __GRANT_PARENT_PATH.__CONTROLLER_PATH."register.php"; ?> >
						<div class="row">							
							<div class="col-md-10 col-sm-10 col-xs-10">
								<h2>Đăng ký tài khoản mới</h2>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<label>Email <span class="color-red">*</span></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input class="form-control" type="email" name="email" id="email" onkeyup="checkEmail()" required>
						</div>						
						<span id="email_status" class="error"></span>

						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<label>Mật khẩu <span class="color-red">*</span></label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input class="form-control" type="password" name="password" id="password" onkeyup="checkPass()" required>
								</div>								
							</div>
							<div class="col-sm-6 col-xs-6">
								<label>Xác nhận mật khẩu <span class="color-red">*</span></label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input class="form-control" type="password" name="repassword" id="repassword" onkeyup="checkPass()" required>
								</div>									
							</div>
						</div>
						<span id="pass_status" class="error"></span>

						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<label>Họ <span class="color-red">*</span></label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input class="form-control" type="text" name="lastname" id="lastname" onkeyup="checkLname()" required>
								</div>	
								<span id="lastname_status" class="error"></span>								
							</div>
							<div class="col-sm-6 col-xs-6">
								<label>Tên <span class="color-red">*</span></label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input class="form-control" type="text" name="firstname" id="firstname" onkeyup="checkFname()" required>
								</div>	
								<span id="firstname_status" class="error"></span>									
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<label>Giới tính <span class="color-red">*</span></label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
									<input class="form-control" list="genders" name="gender" id="gender" required>
										<datalist id="genders">
											<option value="Nam">
											<option value="Nữ">
											<option value="Đồng tính nam">
											<option value="Đồng tính nữ">
											<option value="Lưỡng tính">
											<option value="Chuyển giới">
										</datalist>
								</div>	
							</div>
						</div>
						<label class="checkbox">
							<input type="checkbox" id="agreement" onclick="checkAgree()">Tôi đồng ý với <a href="https://www.google.com" target="_blank"><u>Điều khoản</u></a>
						</label>
						<hr class="hidden-xs">
						<div class="row">
							<div class="col-lg-8"></div>
							<div class="col-lg-4 text-right">
								<button class="btn btn-primary" name="signup" id="signup" type="submit" disabled="true"><i class="fa fa-pencil-square-o"></i> Đăng ký</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>