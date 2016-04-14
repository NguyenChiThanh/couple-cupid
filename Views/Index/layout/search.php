	<section id="search" class="collapse">
		<div class="row">
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
			<div class="search-content col-md-8 col-sm-10 col-xs-10">	
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2>Tìm kiếm</h2>
						<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
							<div class="btn-group" role="group">
								<button type="button" id="stars" class="btn btn-danger" href="#tabProfile" data-toggle="tab">
									<span class="fa fa-user" aria-hidden="true"></span>
									<div class="hidden-xs">Cơ bản</div>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" id="favorites" class="btn btn-default" href="#tabAppearance" data-toggle="tab">
									<span class="fa fa-child" aria-hidden="true"></span>
									<div class="hidden-xs">Diện mạo</div>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" id="following" class="btn btn-default" href="#tabLifestyle" data-toggle="tab">
									<span class="fa fa-heart" aria-hidden="true"></span>
									<div class="hidden-xs">Lối sống</div>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" id="following" class="btn btn-default" href="#tabCulture" data-toggle="tab">
									<span class="fa fa-graduation-cap" aria-hidden="true"></span>
									<div class="hidden-xs">Văn hóa</div>
								</button>
							</div>
							<div class="btn-group" role="group">
								<button type="button" id="following" class="btn btn-default" href="#tabWorks" data-toggle="tab">
									<span class="fa fa-briefcase" aria-hidden="true"></span>
									<div class="hidden-xs">Nghề nghiệp</div>
								</button>
							</div>
						</div>
						<div class="well">
							<div class="tab-content">
								<!-- Begin tab Profile -->
								<div class="tab-pane fade in active row" id="tabProfile">
									<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
										<p class="margin-bottom-20">
											<i class="fa fa-circle-o"></i> 
											<b>Giới tính: &emsp;</b> 
	  										<input list="genders" id="gender" autocomplete="off" required>
												<datalist id="genders">
													<option value="Nam">
													<option value="Nữ">
													<option value="Đồng tính nam">
													<option value="Đồng tính nữ">
													<option value="Lưỡng tính">
													<option value="Chuyển giới">
												</datalist>
										</p>
										<p class="margin-bottom-20">
											<i class="fa fa-circle-o"></i> 
											<b>Độ tuổi: &emsp;</b> 
											<label for="aged"></label>
											<input type="text" id="aged" class="slider">
											<div id="slider-aged"></div>
										</p>
										<p class="margin-bottom-20">
											<i class="fa fa-circle-o"></i> 
											<b>Quốc tịch: &emsp; &emsp; </b> 
											<input list="countries" id="country" autocomplete="off" required>
												<datalist id="countries">
													<option value="Việt Nam">
													<option value="Campuchia">
													<option value="Thái Lan">
												</datalist>
										</p>
										<p class="margin-bottom-20">
											<i class="fa fa-circle-o"></i> 
											<b>Tỉnh/ Thành phố: &emsp;</b> 
											<input list="cities" id="city" autocomplete="off" required>
												<datalist id="cities">
													<option value="TP. Hồ Chí Minh">
													<option value="Biên Hòa">
												</datalist>
										</p>
										<p class="margin-bottom-20">
											<i class="fa fa-circle-o"></i> 
											<b>Quận/ Huyện: &emsp; &emsp; </b> 
											<input list="wards" id="ward" autocomplete="off" required>
												<datalist id="wards">
													<option value="Quận 1">
													<option value="Quận Tân Phú">
												</datalist>
										</p>
									</div>									
								</div>
								<!-- End tab Profile -->
								<!-- Begin tab Appearance -->
								<div class="tab-pane fade in row" id="tabAppearance">
									<div class="col-md-4 col-sm-4 vertical_line">
										<h4 class="margin-bottom-20">Chiều cao</h4>
										<input type="text" id="height" class="slider">
										<div class="col-md-12">
									      	<label for="height"></label>											
											<div id="slider-height"></div>
									    </div>
										<hr/>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<h4>Thân Hình</h4>
												<div class="checkbox">
													<label><input type="checkbox" value="">Gầy</label>
												</div>	
												<div class="checkbox">
													<label><input type="checkbox" value="">Trung Bình</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Đầy đặn</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Nặng ký</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Mập, đáng yêu</label>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<h4>Thu hút</h4>
												<div class="checkbox">
													<label><input type="checkbox" value="">Hấp dẫn</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Ưa nhìn</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Bình thường</label>
												</div>
											</div>
										</div>
										<hr/>
										<h4>Bề ngoài</h4>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Khuyên tai</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Hình xăm</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Khuyên</label>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value=""> Khác</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Không</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 vertical_line">
										<h4>Màu tóc</h4>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Nâu sáng</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Đen</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Hói / Cạo</label>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Nâu</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Thường xuyên đổi</label>
												</div>
											</div>
										</div>

										<h4>Chiều dài tóc</h4>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Cao</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Dài</label>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Hói</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Trung Bình</label>
												</div>
											</div>
										</div>

										<h4>Kiểu tóc</h4>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Thẳng</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Xù</label>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Quăn</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Khác</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<h4>Màu mắt</h4>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Đen</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Nâu</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Nâu Lục nhạt</label>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Xanh lam</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value=""> Xanh lục</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Xám</label>
												</div>
											</div>
										</div>

										<h4>Mắt kính</h4>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Kính</label>												
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Áp tròng</label>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Không</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End tab Appearance -->
								<!-- Begin tab Lifestyle -->
								<div class="tab-pane fade in" id="tabLifestyle">
									<div class="row">
										<div class="col-md-3 col-sm-3 col-xs-6">
											<h4>Uống Bia / rượu</h4>
											<div class="checkbox">
												<label><input type="checkbox" value="">Không uống</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" value="">Thỉnh thoảng</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" value="">Thường xuyên</label>
											</div>
											<hr />
											<h4>Hút thuốc</h4>
											<div class="checkbox">
												<label><input type="checkbox" value="">Không hút</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" value="">Thỉnh thoảng</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" value="">Thường xuyên</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<h4>Tình trạng hôn nhân</h4>
											<div class="row">
												<div class="col-md-6 col-xs-6 col-xs-12">
													<div class="checkbox">
														<label><input type="checkbox" value="">Độc thân</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Ly thân</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Góa</label>
													</div>
												</div>
												<div class="col-md-6 col-xs-6 col-xs-12">
													<div class="checkbox">
														<label><input type="checkbox" value="">Ly hôn</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Kết hôn</label>
													</div>
												</div>
											</div>	
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">										
											<h4>Con cái</h4>
											<div class="row">
												<div class="col-md-12 col-xs-12">
													<div class="checkbox">
														<label><input type="checkbox" value="">Muốn có</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Có thể (không chắc)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Không muốn</label>
													</div>
												</div>											
												<div class="col-md-12 col-xs-12">
													<h5>-- NGƯỜI ĐÓ --</h5>
													<div class="checkbox">
														<label><input type="checkbox" value="">Đã có con</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Chưa có con</label>
													</div>
												</div>
											</div>											
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">										
											<h4>Có con</h4>
											<div class="row">
												<h5>Số lượng</h5>
												<div class="col-md-6 col-xs-6">
													<div class="checkbox">
														<label><input type="checkbox" value="">1</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">2</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">3</label>
													</div>
												</div>
												<div class="col-md-6 col-xs-6">
													<div class="checkbox">
														<label><input type="checkbox" value="">4</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">5</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Bất kỳ</label>
													</div>
												</div>													
											</div>
											<div class="row">
												<h5>Độ tuổi</h5>
												<label for="aged-child"></label>
												<input type="text" id="aged-child" class="slider margin-bottom-20">
												<div id="slider-aged-child"></div>
											</div>											
										</div>
									</div>								
								</div>
								<!-- End tab Lifestyle -->
								<!-- Begin tab Culture -->
								<div class="tab-pane fade in" id="tabCulture">
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-4 vertical_line">
											<h4>Ngôn ngữ</h4>
											<div class="checkbox">
												<label><input type="checkbox" value="">Tiếng Việt</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" value="">Tiếng Anh</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" value="">Tiếng Nhật</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" value="">Tiếng Trung Quốc</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" value="">Và nói (những) ngôn ngữ của tôi</label>
											</div>
											<hr />
											<h4>Sắc tộc</h4>
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-6">
													<div class="checkbox">
														<label><input type="checkbox" value="">Á</label>
													</div>	
													<div class="checkbox">
														<label><input type="checkbox" value="">Âu</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Ả rập</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Ấn độ</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Thái Bình Dương</label>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6">
													<div class="checkbox">
														<label><input type="checkbox" value="">Latinh</label>
													</div>												
													<div class="checkbox">
														<label><input type="checkbox" value="">Phi</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Lai</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Khác</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-4 vertical_line">
											<h4>Tôn giáo</h4>
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="checkbox">
														<label><input type="checkbox" value="">Phật giáo</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Do thái</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Hồi giáo</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Hindu</label>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">	
													<div class="checkbox">
														<label><input type="checkbox" value="">Thiên chúa giáo</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Đạo giáo</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Không</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Khác</label>
													</div>
												</div>
											</div>
											<hr />
											<h4>Năm sinh âm lịch</h4>
											<div class="row">
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="checkbox">
														<label><input type="checkbox" value="">Tý</label>
													</div>	
													<div class="checkbox">
														<label><input type="checkbox" value="">Sửu</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Dần</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Mão</label>
													</div>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="checkbox">
														<label><input type="checkbox" value="">Thìn</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Tị</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Ngọ</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Mùi</label>
													</div>
												</div>
												<div class="col-md-4 col-sm-4 col-xs-6">
													<div class="checkbox">
														<label><input type="checkbox" value="">Thân</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Dậu</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Tuất</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Hợi</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-4">										
											<h4>Cung hoàng đạo</h4>
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="checkbox">
														<label><input type="checkbox" value="">Bạch Dương</label> <br/>
														<label>(21/3 - 19/4)</label>
													</div>	
													<div class="checkbox">
														<label><input type="checkbox" value="">Kim Ngưu</label> <br/>
														<label>(20/4 - 20/5)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Song Tử</label> <br/>
														<label>(21/5 - 21/6)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Cự Giải</label> <br/>
														<label>(22/6 - 22/7)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Sư Tử</label> <br/>
														<label>(23/7-22/8)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Xử Nữ</label> <br/>
														<label>(23/8-22/9)</label>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="checkbox">
														<label><input type="checkbox" value="">Thiên Bình</label> <br/>
														<label>(23/9-23/10)</label>
													</div>	
													<div class="checkbox">
														<label><input type="checkbox" value="">Hổ Cáp</label> <br/>
														<label>(24/10-21/11)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Nhân Mã</label> <br/>
														<label>(22/11-21/12)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Ma Kết</label> <br/>
														<label>(22/12-19/1)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Bảo Bình</label> <br/>
														<label>(20/1-18/2)</label>
													</div>
													<div class="checkbox">
														<label><input type="checkbox" value="">Song Ngư</label> <br/>
														<label>(19/2-20/3)</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End tab Culture -->
								<!-- Begin tab works -->
								<div class="tab-pane fade in row" id="tabWorks">
									<div class="col-md-3 col-sm-3">
										<h4 class="no-margin no-padding">Học vấn</h4>
										<div class="checkbox">
											<label><input type="checkbox" value="">Dưới Trung Học</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" value="">Trung Học</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" value="">Cử nhân</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" value="">Thạc sĩ</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" value="">Tiến sĩ</label>
										</div>
										<h4 class="no-margin no-padding">Thu nhập</h4>
										<input class="form-control" list="earnings" name="earning" autocomplete="off" required>
											<datalist id="earnings">
													<option value="Dưới 2 triệu đồng">
													<option value="Từ 2 - 5 triệu đồng">
													<option value="Từ 5 - 8 triệu đồng">
													<option value="Từ 8 - 10 triệu đồng">
													<option value="Trên 10 triệu đồng">
											</datalist>
									</div>
									<div class="col-md-9 col-sm-9">
										<h4>Công việc</h4>
										<!-- Begin select jobs -->
										<div class="row">
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Chính trị / Nhà nước / Dịch vụ dân sự</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Du lịch / khách sạn</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Kỹ thuật / Khoa học / Kỹ sư</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Nghỉ hưu</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Giải trí / Truyền thông</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Nông nghiệp</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Thợ cắt tóc</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Tự kinh doanh</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Điều hành / Quản lý / Nhân sự</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Giáo dục</label>
												</div>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Bán hàng / Tiếp thị</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Chữa cháy / hành pháp / bảo vệ</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Giao thông vận tải</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Hành chánh / Thư ký</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Làm về pháp luật</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Người giúp việc</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Phi lợi nhuận / giáo sĩ / công tác xã hội</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Sinh viên</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Trông trẻ</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Xây dựng / giao dịch</label>
												</div>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Bán lẻ / dịch vụ thực phẩm</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Công nghệ thông tin / Truyền thông</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Việc nhà / Nội trợ</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Nghệ thuật / Sáng tạo / Biểu diễn</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Người lao động / công nhân nhà máy</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Quân đội</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Thể thao / giải trí</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Tài chính / Ngân hàng / Bất động sản</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Y khoa / Nha khoa / thú y</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Khác</label>
												</div>
											</div>
										</div>
										<!-- End select jobs -->
										<h4>Tình trạng việc làm</h4>
										<!-- Begin select status jobs -->
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Toàn thời gian</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Bán thời gian</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Khác</label>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="checkbox">
													<label><input type="checkbox" value="">Sinh viên</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Nội trợ</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Nghỉ hưu</label>
												</div>
												<div class="checkbox">
													<label><input type="checkbox" value="">Không có việc làm</label>
												</div>
											</div>
										</div>
										<!-- End select status jobs -->
									</div>
								</div>
								<!-- End tab works -->
							</div>
						</div>		
					</div>	
				</div>
				<button type="submit" class="btn btn-success" name="btn-search" id="btn-search"><i class="fa fa-search"></i> Tìm kiếm</button>	
			</div>
		</div>			
	</section>