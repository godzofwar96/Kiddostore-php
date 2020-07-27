<div class="agile-main-top">
	<div class="container-fluid">
		<div class="row main-top-w3l py-2">
			<div class="col-lg-4 header-most-top">
				<p class="text-white text-lg-left text-center">Thế giới đồ chơi, quần áo cho bé giá rẻ và ưu đãi 
					<i class="fas fa-shopping-cart ml-1"></i>
				</p>
			</div>
			<div class="col-lg-8 header-right mt-lg-0 mt-2">
				<!-- header lists -->
				<ul>
					<li class="text-center border-right text-white">
						<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
							<i class="fas fa-map-marker mr-2"></i>Chi nhánh</a>
					</li>
					<li class="text-center border-right text-white">
						<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
							<i class="fas fa-truck mr-2"></i>Vận chuyển</a>
					</li>
					<li class="text-center border-right text-white">
						<i class="fas fa-phone mr-2"></i>033.386.9613
					</li>
					@if(Auth::check())					
						<li class="text-center border-right text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> {{ Auth::user()->name }} 
						</li>
						<li class="text-center text-white">
							<a href="logout" title="Đăng xuất" class="text-white">
							<i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất</a>
						</li>
						@if(Auth::user()->password == '')
						<div class="modal fade updatePass" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title text-center">Cập nhật mật khẩu</h5>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
										<div class="modal-body">
											<form action="updatepass" method="post">
												@csrf
												<div class="form-group">
													<label class="col-form-label">Mật khẩu</label>
													<input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu mới">
													@if($errors->has('password'))
													<div class="alert alert-danger">{{ $errors->first('password')}}</div>
													@endif
												</div>
												<div class="form-group">
													<label class="col-form-label">Nhập lại Mật khẩu</label>
													<input type="password" name="re_password" class="form-control" placeholder="Nhập lại mật khẩu">
													@if($errors->has('re_password'))
													<div class="alert alert-danger">{{ $errors->first('re_password')}}</div>
													@endif
												</div>
												<div class="right-w3l">
													<input type="submit" class="form-control" value="Cập nhật">
												</div>
											</form>
										</div>
								</div>
							</div>
						</div>
						@endif
					@else					
						<li class="text-center border-right text-white">
						<a href="#" data-toggle="modal" data-target="#login" class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#register" class="text-white">
							<i class="fas fa-sign-out-alt mr-2"></i>Đăng kí </a>
						</li>
					@endif
				</ul>
				<!-- //header lists -->
			</div>
		</div>
	</div>
</div>