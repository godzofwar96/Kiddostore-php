@extends('client.layouts.master')

@section('title')
	Trang chủ
@endsection

@section('slide')
	@include('client.layouts.slide')
@endsection

@section('content')
	<!-- tittle heading -->
	<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
		<span>S</span>ản
		<span>P</span>hẩm
		<span>M</span>ới</h3>
	<!-- //tittle heading -->
	<div class="row">
		<!-- product left -->
		<div class="agileinfo-ads-display col-lg-9">
			<div class="wrapper">
				<!-- first section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic">{{ $prodochoi[0]->categories->name }}</h3>
					<div class="row">
						@foreach($prodochoi as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img src="img/upload/product/{{ $pro->image }}" class="img-fluid"  alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem ngay</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="{{ $pro->slug }}.html">{{ $pro->name }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->promotional) }}đ</span>
												<del>{{ number_format($pro->price) }}đ</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price) }}đ</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="#" method="post">
												<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
											</form>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				<!-- //first section -->
				<!-- second section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic">{{ $proquanao[0]->categories->name }}</h3>
					<div class="row">
						@foreach($proquanao as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img src="img/upload/product/{{ $pro->image }}" class="img-fluid"  alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="#" class="link-product-add-cart">Xem ngay</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="#">{{ $pro->name }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->promotional) }}đ</span>
												<del>{{ number_format($pro->price) }}đ</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price) }}đ</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="#" method="post">
												<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
											</form>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				<!-- //second section -->
				<!-- third section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic">{{ $progiaydep[0]->categories->name }}</h3>
					<div class="row">
						@foreach($progiaydep as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img src="img/upload/product/{{ $pro->image }}" class="img-fluid"  alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="#" class="link-product-add-cart">Xem ngay</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="#">{{ $pro->name }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->promotional) }}đ</span>
												<del>{{ number_format($pro->price) }}đ</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price) }}đ</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="#" method="post">
												<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
											</form>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				<!-- //third section -->
			</div>
		</div>
		<!-- //product left -->

		<!-- product right -->
		@include('client.layouts.slidebar')
	</div>
@endsection