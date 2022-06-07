@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")


<section class="breadcrumb-banner">
	<img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid">
	<div class="banner-content">
		<h1>Burger</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{url('new-listing')}}">Product</a></li>
				<li class="breadcrumb-item active" aria-current="page">Burger</li>
			</ol>
		</nav>
	</div>
</section>


<section class="product-section-list pt-5">
	<div class="container">
		<button class="btn sticky-filter-btn" onclick="openFiler()">
			<img src="{{ asset('site-assets/images/menu/filter-menu.svg') }}">
		</button>
		<div class="row">
			<div class="col-lg-3 col-md-12 col-md-4">
				<div id="mb-view">
					<div class="mb-content">
						<div class="mb-header d-lg-none">
                            <h5>Refine match search</h5>
                            <a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeFiler()">&times;</a>
                        </div>
						<div id="content-sidebar">
							<aside id="content-sidebar-search" class="product-search">
								<form>
									<input class="form-control" type="text" placeholder="Search Product"></input>
									<button class="btn icon-btn"><i class="las la-search"></i></button>
								</form>
							</aside>
							<aside id="product-category" class="product-category mt-4">
								<div class="product-category-header">
									<h3>
										<span><i class="las la-rocket"></i></span>
										PRODUCT CATEGORIES
									</h3>
								</div>
								<ul class="product-category-list mt-2">
									<li class="category-list">
										<a href="#">Breakfast</a>
									</li>
									<li class="category-list">
										<a href="#">Lunch</a>
									</li>
									<li class="category-list">
										<a href="#">Dinner</a>
									</li>
									<li class="category-list">
										<a href="#">Continental</a>
									</li>
									<li class="category-list">
										<a href="#">Day Snack</a>
									</li>
									<li class="category-list">
										<a href="#">Athletes</a>
									</li>
									<li class="category-list">
										<a href="#">Surprize Food</a>
									</li>
								</ul>						
							</aside>
							<aside id="product-category" class="product-category mt-4">
								<div class="product-category-header">
									<h3>
										<span><i class="las la-rocket"></i></span>
										Select By cuisines
									</h3>
								</div>
								<ul class="product-category-list mt-2">
									<li class="category-list">
										<a href="#">Asian</a>
										<ul class="category-list-child">
											<li class="category-list">
												<a href="#">Apple dumpling</a>
											</li>
											<li class="category-list">
												<a href="#">Aloo paratha</a>
											</li>
											<li class="category-list">
												<a href="#">Breadfruit</a>
											</li>
											<li class="category-list">
												<a href="#">Egg bhurji</a>
											</li>
											<li class="category-list">
												<a href="#">Muesli</a>
											</li>
										</ul>
									</li>
									<li class="category-list">
										<a href="#">Burger</a>
										<ul class="category-list-child">
											<li class="category-list">
												<a href="#">Cheesy</a>
											</li>
											<li class="category-list">
												<a href="#">Extra Component</a>
											</li>
											<li class="category-list">
												<a href="#">Veg</a>
											</li>
										</ul>
									</li>
									<li class="category-list">
										<a href="#">Pizza</a>
										<ul class="category-list-child">
											<li class="category-list">
												<a href="#">Cheesy</a>
											</li>
											<li class="category-list">
												<a href="#">Extra Component</a>
											</li>
										</ul>
									</li>
									<li class="category-list">
										<a href="#">Momo</a>
									</li>
									<li class="category-list">
										<a href="#">Chowmine</a>
									</li>
									<div class="filter-wrapper" style="display: none;">
										<li class="category-list">
											<a href="#">Chinese</a>
										</li>
										<li class="category-list">
											<a href="#">Indian</a>
										</li>
										<li class="category-list">
											<a href="#">Continental</a>
										</li>
										<li class="category-list">
											<a href="#">Thai</a>
										</li>
									</div>
									<li class="category-list">
										<a href="#">Other</a>
									</li>
									<li class="category-list filter-active">
										<a href="#">View More</a>
									</li>
								</ul>						
							</aside>
							<aside id="price-range" class="product-category my-4 range-slider">
								<div class="product-category-header">
									<h3>
										<span><i class="las la-rocket"></i></span>
										FILTER BY PRICE
									</h3>
								</div>
								<div class="row m-3">
									<div class="col-sm-12">
										<div id="slider-range" class="my-3"> </div>
										<div class="price-label d-flex justify-content-center">
											<span class="me-2">Price: </span>
											<span id="slider-range-value1"></span>
											<span class="mx-2"> - </span>
											<span id="slider-range-value2"></span>
										</div>
										<button class="btn btn-live d-block mx-auto px-5 mt-3">Filter</button>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-12 col-md-8">
				<div class="sorting-order clearfix">
					<p class="result-count">
						Showing 1–6 of 55 results
					</p>
					<form class="form-ordering">
						<div class="select-wrap">
							<select name="orderby" class="orderby" aria-label="Shop order">
								<option value="menu_order" selected="selected">Default sorting</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by latest</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option> 
							</select>
						</div> 
					</form>
				</div>
				<div class="row mt-4">
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="#" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="#" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/6.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="{{url('checkout-order')}}" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/7.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="{{url('checkout-order')}}" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/8.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="{{url('checkout-order')}}" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/9.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="{{url('checkout-order')}}" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/7.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="{{url('checkout-order')}}" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/8.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="{{url('checkout-order')}}" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="item-card">
							<div class="item-card-img">
								<a href="{{ url('item-detail') }}" class="d-block">
									<img src="{{ asset('site-assets/images/9.jpg') }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="item-card-desc">
								<a href="{{ url('item-detail') }}">
									<h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
								</a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
								<span class="item-card-price">Rs. 1010</span>
								<a href="{{url('checkout-order')}}" class="btn btn-wrap mt-3">
									<span>add to cart</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<nav class="product-list-pagination mb-5" aria-label="...">
					<ul class="pagination pagination-sm justify-content-center">
						<li class="page-item active" aria-current="page">
							<span class="page-link">1</span>
						</li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
					</ul>
				</nav>
			</div> 
		</div>
	</div>
</section>


<script>
function openFiler() {
    document.getElementById("mb-view").style.width = "100%";
}

function closeFiler() {
    document.getElementById("mb-view").style.width = "0";
}

$(window).resize(function() {
    if ($(window).width() > 1024) {
        document.getElementById("mb-view").style.width = "100%";
    }
});
$(window).resize(function() {
    if ($(window).width() < 1023) {
        document.getElementById("mb-view").style.width = "0";
    }
});
</script>



@endsection