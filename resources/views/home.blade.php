@extends('layouts.app')

@section('content')
	<!-- home slider start -->
	<section class="pt-5 home-section ratio_55 ms-3">
		<div class="home-slider slick-default theme-dots">
			<div>
				<div class="slider-box">
					<img src="{{ asset('assets/images/home-slider/1.jpg') }}" class="img-fluid bg-img" alt="">
					<div class="slider-content">
						<div class="p-3">
							<h2>Welcome To Summarecon Mall</h2>
							<h1>Flat 50% OFF</h1>
							<h6>Free Shipping Till Mid Night</h6>
							<a href="#" class="btn btn-solid">SHOP NOW</a>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="slider-box">
					<img src="{{ asset('assets/images/home-slider/2.jpg') }}" class="img-fluid bg-img" alt="">
					<div class="slider-content">
						<div class="p-3">
							<h2>Welcome To Summarecon Mall</h2>
							<h1>Flat 50% OFF</h1>
							<h6>Free Shipping Till Mid Night</h6>
							<a href="#" class="btn btn-solid">SHOP NOW</a>
						</div>
					</div>
				</div>
			</div>
            <div>
				<div class="slider-box">
					<img src="{{ asset('assets/images/home-slider/1.jpg') }}" class="img-fluid bg-img" alt="">
					<div class="slider-content">
						<div class="p-3">
							<h2>Welcome To Summarecon Mall</h2>
							<h1>Flat 50% OFF</h1>
							<h6>Free Shipping Till Mid Night</h6>
							<a href="#" class="btn btn-solid">SHOP NOW</a>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="slider-box">
					<img src="{{ asset('assets/images/home-slider/2.jpg') }}" class="img-fluid bg-img" alt="">
					<div class="slider-content">
						<div class="p-3">
							<h2>Welcome To Summarecon Mall</h2>
							<h1>Flat 50% OFF</h1>
							<h6>Free Shipping Till Mid Night</h6>
							<a href="#" class="btn btn-solid">SHOP NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- home slider end -->

    <!-- loadspeaker section start -->
	<section class="loads-section ms-3">
		<div class="title-part d-flex">
            <img src="{{ asset('assets/images/loadspeaker.png') }}" class="img-fluid loads-img" alt="">
            <div class="ms-4">
                <p class="m-0 small">New Operational Hours</p>
                <p class="m-0 small">Monday - Sunday : 10:00 - 21:00 WIB</p>
            </div>
		</div>
    </section>

    <!-- checked section start -->
	<section class="checked-section ms-3">
        <a href="{{ route('register') }}">
            <div class="title-part d-flex">
                <div class="icon">
                    <i class="iconly-Login icli text-light"></i>
                </div>
                <div class="ms-3">
                    <p class="m-0 small fw-bolder">Login atau Register Yuk!</p>
                    <p class="m-0 small">Kumpulkan stamp untuk dapatkan hadiah</p>
                </div>
            </div>
        </a>
    </section>

	<!-- event section start -->
	<section class="deals-section px-15 pt-0 mb-4">
		<div class="title-part ps-2">
			<h2>Event</h2>
			<a href="#">LIHAT SEMUA</a>
		</div>
		<div class="event-slider slick-default ps-2">
            <div>
                <div class="product-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/home-slider/1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="product-content">
                        <a href="#">
                            <h4>Event 1</h4>
                        </a>
                        <div class="date">
                            {{Carbon\Carbon::now()->format('d-m-Y')}}
                        </div>
                    </div>
                </div>
            </div>{{-- endslider --}}
            <div>
                <div class="product-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/home-slider/1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="product-content">
                        <a href="#">
                            <h4>Event 2</h4>
                        </a>
                        <div class="date">
                            {{Carbon\Carbon::now()->format('d-m-Y')}}
                        </div>
                    </div>
                </div>
            </div>{{-- endslider --}}
            <div>
                <div class="product-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/home-slider/1.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="product-content">
                        <a href="#">
                            <h4>Event 3</h4>
                        </a>
                        <div class="date">
                            {{Carbon\Carbon::now()->format('d-m-Y')}}
                        </div>
                    </div>
                </div>
            </div>{{-- endslider --}}
        </div>
	</section>
	<!-- event section end -->

    <!-- promo section start -->
	<section class="deals-section px-15 pt-0 mb-4">
		<div class="title-part ps-2">
			<h2>Promo</h2>
			<a href="#">LIHAT SEMUA</a>
		</div>
		<div class="promo-slider slick-default ps-2">
            <div>
                <div class="promo-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/products/1.jpg" alt="" class="img-fluid bg-img"></a>
                    </div>
                    <div class="promo-content">
                        <div class="until">
                            <span>Hingga 1 April</span>
                        </div>
                        <a href="#">
                            <h4>Promo Maret - April 2022</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="promo-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/products/2.jpg" alt="" class="img-fluid bg-img"></a>
                    </div>
                    <div class="promo-content">
                        <div class="until">
                            <span>Hingga 2 April</span>
                        </div>
                        <a href="#">
                            <h4>Promo Maret - April 2022</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="promo-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/products/3.jpg" alt="" class="img-fluid bg-img"></a>
                    </div>
                    <div class="promo-content">
                        <div class="until">
                            <span>Hingga 3 April</span>
                        </div>
                        <a href="#">
                            <h4>Promo Maret - April 2022</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<!-- Promo section end -->

    <!-- Tenant section start -->
	<section class="deals-section px-15 pt-0">
		<div class="title-part ps-2">
			<h2>Tenant Pilihan</h2>
			<a href="#">LIHAT SEMUA</a>
		</div>
		<div class="promo-slider slick-default ps-2">
            <div>
                <div class="promo-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/products/1.jpg" alt="" class="img-fluid bg-img"></a>
                    </div>
                    <div class="promo-content">
                        <div class="floor">
                            <span>Lantai 1</span>
                        </div>
                        <a href="#">
                            <h4>Produk 1</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="promo-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/products/2.jpg" alt="" class="img-fluid bg-img"></a>
                    </div>
                    <div class="promo-content">
                        <div class="floor">
                            <span>Lantai 1</span>
                        </div>
                        <a href="#">
                            <h4>Produk 1</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="promo-box ratio_square">
                    <div class="img-part">
                        <a href="#"><img src="assets/images/products/3.jpg" alt="" class="img-fluid bg-img"></a>
                    </div>
                    <div class="promo-content">
                        <div class="floor">
                            <span>Lantai 1</span>
                        </div>
                        <a href="#">
                            <h4>Produk 1</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<!-- Tenant section end -->

	<!-- panel space start -->
	<section class="panel-space"></section>
	<!-- panel space end -->
@endsection
