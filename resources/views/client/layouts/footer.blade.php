<footer>
	<div class="footer-top-first">
		<div class="container py-md-5 py-sm-4 py-3">
			<!-- footer first section -->
			<h2 class="footer-top-head-w3l font-weight-bold mb-2">KiddoStore :</h2>
			<p class="footer-main mb-4">Bạn đang xem xét thiết kế một khu vui chơi hoặc tìm những món đồ chơi an toàn và bổ ích cho bé. Hay là bạn đang muốn tìm mua cho bé những bộ trang phục đáng yêu, thoải mái. Hãy đến với chúng tôi, chúng tôi cung cấp những sản phẩm chất lượng và giá rẻ trên từng sản phẩm.</p>
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
				<div class="col-md-4 offer-footer">
					<div class="row">
						<div class="col-4 icon-fot">
							<i class="fas fa-dolly"></i>
						</div>
						<div class="col-8 text-form-footer">
							<h3>Miễn Phí Vận Chuyển</h3>
							<p>với đơn hàng trên 500.000 VND</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 offer-footer my-md-0 my-4">
					<div class="row">
						<div class="col-4 icon-fot">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="col-8 text-form-footer">
							<h3>Giao Hàng Nhanh Chóng</h3>
							<p>trên toàn quốc</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 offer-footer">
					<div class="row">
						<div class="col-4 icon-fot">
							<i class="far fa-thumbs-up"></i>
						</div>
						<div class="col-8 text-form-footer">
							<h3>Sự Lựa Chọn Hàng Đầu</h3>
							<p>cho các hãng Sản xuất</p>
						</div>
					</div>
				</div>
			</div>
			<!-- //footer second section -->
		</div>
	</div>
	<!-- footer third section -->
	<div class="w3l-middlefooter-sec">
		<div class="container py-md-5 py-sm-4 py-3">
			<div class="row footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-md-3 col-sm-6 footer-grids">
					<h3 class="text-white font-weight-bold mb-3">Danh mục sản phẩm:</h3>
					<ul>
						@foreach($category as $cate)
							@foreach($cate->productType as $produ)
								<li class="mb-3">
									<a href="{{ $produ->slug }}.html">{{ $produ->name }} </a>
								</li>
							@endforeach
						@endforeach
					</ul>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
					<h3 class="text-white font-weight-bold mb-3">Liên kết:</h3>
					<ul>
						<li class="mb-3">
							<a href="#">Giới thiệu</a>
						</li>
						<li class="mb-3">
							<a href="#">Liên hệ</a>
						</li>
						<li class="mb-3">
							<a href="#">Trợ giúp</a>
						</li>
						<li class="mb-3">
							<a href="#">Faqs</a>
						</li>
						<li class="mb-3">
							<a href="#">Điều khoản sử dụng</a>
						</li>
						<li>
							<a href="#">Chính sách bảo mật</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
					<h3 class="text-white font-weight-bold mb-3">Thông tin:</h3>
					<ul>
						<li class="mb-3">
							<i class="fas fa-map-marker"></i> Số 473 - Đường Đại Mỗ - Nam Từ Liêm - Hà Nội</li>
						<li class="mb-3">
							<i class="fas fa-mobile"></i> 033.386.9613 </li>
						<li class="mb-3">
							<i class="fas fa-envelope-open"></i>
							<a href="mailto:example@mail.com"> phinh.tim@gmail.com</a>
						</li>
						<li>
							<i class="fas fa-envelope-open"></i>
							<a href="mailto:example@mail.com"> nguyenthidung@gmail.com</a>
						</li>
						<li>
							<i class="fas fa-envelope-open"></i>
							<a href="mailto:example@mail.com"> nguyenthihien@gmail.com</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
					<!-- newsletter -->
					<h3 class="text-white font-weight-bold mb-3">Bản tin:</h3>
					<p class="mb-3">Rất nhiều sản phẩm mới chào hè!</p>
					<form action="#" method="post">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" name="email" required="">
							<input type="submit" value="Go">
						</div>
					</form>
					<!-- //newsletter -->
					<!-- social icons -->
					<div class="footer-grids  w3l-socialmk mt-3">
						<h3 class="text-white font-weight-bold mb-3">Theo dõi chúng tôi trên:</h3>
						<div class="social">
							<ul>
								<li>
									<a class="icon fb" href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a class="icon tw" href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a class="icon gp" href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- //social icons -->
				</div>
			</div>
			<!-- //quick links -->
		</div>
	</div>
	<!-- //footer third section -->
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="copy-right py-3">
	<div class="container text-center">
		<span>Copyright &copy; Kiddo Store Client Pages</span>
        <br>
        <span>PHP Project - Nhóm 10 </span>
        <br>
        <span>Nguyễn Hồng Phi - Nguyễn Thị Dung - Nguyễn Thị Hiền </span>
	</div>
</div>
<!-- //copyright -->

<!-- js-files -->
<!-- jquery -->
<script src="assets/client/js/jquery-2.2.3.min.js"></script>
<!-- //jquery -->

<!-- nav smooth scroll -->
<!-- //nav smooth scroll -->

<!-- popup modal (for location)-->
<script src="assets/client/js/jquery.magnific-popup.js"></script>
<!-- //popup modal (for location)-->

<!-- cart-js -->
<script src="assets/client/js/minicart.js"></script>
<!-- //cart-js -->

<!-- password-script -->
<!-- //password-script -->

<!-- scroll seller -->
<script src="assets/client/js/scroll.js"></script>
<!-- //scroll seller -->

<!-- smoothscroll -->
<script src="assets/client/js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="assets/client/js/move-top.js"></script>
<script src="assets/client/js/easing.js"></script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="assets/client/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->
<script type="text/javascript" src="assets/client/js/custom.js"></script>

<script type="text/javascript" src="assets/admin/js/toastr.min.js"></script>
<script type="text/javascript" src="assets/client/js/ajax.js"></script>
@if(session('thongbao'))
	<script type="text/javascript">
		messageSuccess('{{ session('thongbao') }}');
	</script>
@endif
@if(session('error'))
	<script type="text/javascript">
		messageError('{{ session('error') }}');
	</script>
@endif

@if(isset($user) && count($user->customer) == 0)
	 <script type="text/javascript">
	 	$('#address').modal('show');
	 </script>
 @endif

 <!-- imagezoom -->
 <script type="text/javascript" src="assets/client/js/imagezoom.js"></script>

 <!-- flexslider -->
 <link rel="stylesheet" type="text/css" href="assets/client/css/flexslider.css" media="screen">

 <script type="text/javascript" src="assets/client/js/jquery.flexslider.js"></script>
 <script>
 	$(window).load(function(){
 		$('.flexslider').flexslider({
 			animation: "slide",
 			controlNav: "thumbnails"
 		});
 	});
 </script>