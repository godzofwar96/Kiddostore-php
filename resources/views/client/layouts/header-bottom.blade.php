<div class="header-bot">
	<div class="container">
		<div class="row header-bot_inner_wthreeinfo_header_mid">
			<!-- logo -->
			<div class="col-md-3 logo_agile">
				<h1 class="text-center">
					<a href="/" class="font-weight-bold font-italic">
						<img src="Images/kiddostore.png" alt=" " width="80" height="87" >
						<span style="margin-left: 5px">Kiddo Store</span>
					</a>
				</h1>
			</div>
			<!-- //logo -->
			<!-- header-bot -->
			<div class="col-md-9 header mt-4 mb-md-0 mb-4">
				<div class="row">
					<!-- search -->
					<div class="col-10 agileits_search">
						<form class="form-inline" action="#" method="post">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
							<button class="btn my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
					<!-- //search -->
					<!-- cart details -->
					<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
						<div class="wthreecartaits wthreecartaits2 cart cart box_1">
							<a class="btn w3view-cart" @if(Auth::check()) href="{{ route('cart.index') }}" @else data-toggle="modal" data-target="#login" href="#" @endif title="Đang có {{ Cart::count() }} sản phẩm trong giỏ hàng">
								<i class="fas fa-cart-arrow-down"></i>
							</a>
						</div>
					</div>
					<!-- //cart details -->
				</div>
			</div>
		</div>
	</div>
</div>