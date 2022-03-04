@extends('layouts.app')

@section('content')
	<!-- section start -->
	<section class="alert-classic top-space section-b-space pt-3">
        <div class="title-part ps-3">
			<h2>Kategori</h2>
			{{-- <a href="#">LIHAT SEMUA</a> --}}
		</div>
		<div class="tab-section">
			<ul class="nav nav-tabs theme-tab pl-15">
				<li class="nav-item">
					<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all" type="button">
                        <i class="iconly-Category icli"></i>
                    </button>
				</li>
				<li class="nav-item">
					<button class="nav-link" data-bs-toggle="tab" data-bs-target="#top" type="button">
                        <i class="iconly-Lock icli"></i> Top Picks
                    </button>
				</li>
				<li class="nav-item">
					<button class="nav-link" data-bs-toggle="tab" data-bs-target="#featured" type="button">
                        <i class="iconly-Message icli"></i> Featured Products
                    </button>
				</li>
				<li class="nav-item">
					<button class="nav-link" data-bs-toggle="tab" data-bs-target="#rated" type="button">
                        <i class="iconly-Wallet icli"></i> Top Rated
                    </button>
				</li>
				<li class="nav-item">
					<button class="nav-link" data-bs-toggle="tab" data-bs-target="#ship" type="button">
                        <i class="iconly-Work icli"></i> Ready to ship</button>
				</li>
			</ul>
			<div class="tab-content px-15">
				<div class="tab-pane fade show active" id="all">
					<div class="row gy-3 gx-3">
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/4.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/5.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/6.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/7.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/6.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/7.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="top">
					<div class="row gy-3 gx-3">
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/6.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/7.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/4.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/5.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="featured">
					<div class="row gy-3 gx-3">
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/7.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/4.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/5.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/6.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="rated">
					<div class="row gy-3 gx-3">
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/5.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/4.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/7.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/6.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ship">
					<div class="row gy-3 gx-3">
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/4.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/6.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/7.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-box ratio_square">
								<div class="img-part">
									<a href="product.html"><img src="{{ asset('assets/images/products/5.jpg') }}" alt=""
											class="img-fluid bg-img"></a>
									<div class="wishlist-btn">
										<i class="iconly-Heart icli"></i>
										<i class="iconly-Heart icbo"></i>
										<div class="effect-group">
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
											<span class="effect"></span>
										</div>
									</div>
								</div>
								<div class="product-content">
									<ul class="ratings">
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo"></i></li>
										<li><i class="iconly-Star icbo empty"></i></li>
									</ul>
									<a href="product.html">
										<h4>Blue Denim Jacket</h4>
									</a>
									<div class="price">
										<h4>$32.00 <del>$35.00</del><span>20%</span></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section end -->

	<!-- panel space start -->
	<section class="panel-space"></section>
	<!-- panel space end -->
@endsection
