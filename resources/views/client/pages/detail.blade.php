@extends('client.layouts.master')

@section('title')
	Kiddo Store - Chi tiết {{ $product->name }}
@endsection

@section('content')
	<div class="page-head_agile_info_w3l">
	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="trangchu">Trang chủ</a>
						<i>|</i>
					</li>
					<li>{{ $product->name }}</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>hi tiết
				<span>S</span>ản phẩm</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="img/upload/product/{{ $product->image }}">
									<div class="thumb-image">
										<img src="img/upload/product/{{ $product->image }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{ $product->name }}</h3>
					<p class="mb-3">
						@if($product->promotional > 0)
							<span class="item_price"> {{ number_format($product->promotional) }} đ</span>
							<del class="mx-2 font-weight-light"> {{ number_format($product->price) }} đ </del>

						@else
							<span class="item_price"> {{ number_format($product->price) }} đ</span>
						@endif
						@if($product->promotional >= 300000 && $product->price >= 300000 )
							<label>Giao hàng miễn phí</label>
						@endif
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								Thanh toán sau khi nhận hàng.
							</li>
							<li class="mb-3">
								Chuyển hàng nhanh chóng.
							</li>
							<li class="mb-3">
								Giảm giá từ 10% khi thanh toán bằng chuyển khoản.
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>Mô tả sản phẩm:</label></p>
								{!! $product->desciption !!}
						</ul>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i> Ship COD toàn quốc | ATM Banking | Paypal
						</p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<a href="{{ route('addCart',['id' => $product->id]) }}">Thêm vào giỏ hàng</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection