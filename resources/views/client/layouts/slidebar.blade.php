<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
	<div class="side-bar p-sm-4 p-3">
		<div class="search-hotel border-bottom py-2">
			<h3 class="agileits-sear-head mb-3">Search Here..</h3>
			<form action="#" method="post">
				<input type="search" placeholder="Tên sản phẩm..." name="search" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<!-- price -->
		<div class="range border-bottom py-2">
			<h3 class="agileits-sear-head mb-3">Giá sản phẩm</h3>
			<div class="w3l-range">
				<ul>
					<li class="mt-1">
						<a href="#">Dưới 100.000đ</a>
					</li>
					<li class="mt-1">
						<a href="#">100.000đ - 500.000đ</a>
					</li>
					<li class="mt-1">
						<a href="#">500.000đ - 1.000.000đ</a>
					</li>
					<li class="mt-1">
						<a href="#">1.000.000đ - 3.000.000đ</a>
					</li>
					<li class="mt-1">
						<a href="#">3.000.000đ - 5.000.000đ</a>
					</li>
					<li class="mt-1">
						<a href="#">Trên 5.000.000đ</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- //price -->
		<!-- discounts -->
		<div class="left-side border-bottom py-2">
			<h3 class="agileits-sear-head mb-3">Giảm giá</h3>
			<ul>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">5% trở lên</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">10% trở lên</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">20% trở lên</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">30% trở lên</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">50% trở lên</span>
				</li>
			</ul>
		</div>
		<!-- //discounts -->
		<!-- reviews -->
		<div class="customer-rev border-bottom left-side py-2">
			<h3 class="agileits-sear-head mb-3">Phản hồi của Khách hàng</h3>
			<ul>
				<li>
					<a href="#">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<span>5.0</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<span>4.0</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half"></i>
						<span>3.5</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<span>3.0</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half"></i>
						<span>2.5</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- //reviews -->
		<!-- danh mục loại đồ chơi -->
		<div class="left-side border-bottom py-2">
			<h3 class="agileits-sear-head mb-3">Danh mục Loại đồ chơi</h3>
			<ul>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Accessories</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Cameras & Photography</span>
				</li>						
			</ul>
		</div>
		<!-- //danh mục loại đồ chơi -->
		<!-- Danh mục quần áo-->
		<div class="left-side border-bottom py-2">
			<h3 class="agileits-sear-head mb-3">Danh mục quần áo</h3>
			<ul>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Quần áo cho bé trai</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Quần áo cho bé gái</span>
				</li>						
			</ul>
		</div>
		<!--//Danh mục quần áo -->
		<!-- delivery -->
		<div class="left-side border-bottom py-2">
			<h3 class="agileits-sear-head mb-3">Phương thức thanh toán</h3>
			<ul>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Tiền mặt</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Chuyển khoản</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">PayPal</span>
				</li>
			</ul>
		</div>
		<!-- //delivery -->
		<!-- arrivals -->
		<div class="left-side border-bottom py-2">
			<h3 class="agileits-sear-head mb-3">Sản phẩm mới nhập</h3>
			<ul>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Last 30 days</span>
				</li>
				<li>
					<input type="checkbox" class="checked">
					<span class="span">Last 90 days</span>
				</li>
			</ul>
		</div>
		<!-- //arrivals -->
		<!-- best seller -->
		<div class="f-grid py-2">
			<h3 class="agileits-sear-head mb-3">Bán chạy nhất</h3>
			<div class="box-scroll">
				<div class="scroll">
					<div class="row">
						@foreach($product as $prod)
						<div class="col-lg-3 col-sm-2 col-3 left-mar">
							<img src="img/upload/product/{{ $prod->image }}" alt="{{ $prod->name }}" class="img-fluid">
						</div>
						<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
							<a href="#">{{ $prod->name }}</a>
							<a href="#" class="price-mar mt-2 info-product-price">
								@if($prod->promotional>0)
									<span class="item_price">
										{{ number_format($prod->promotional) }} đ</span>
									<del>{{ number_format($prod->price) }} đ</del>
								@else
									<span class="item_price">
										{{ number_format($prod->price) }} đ</span>
								@endif
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- //best seller -->
	</div>
	<!-- //product right -->
</div>