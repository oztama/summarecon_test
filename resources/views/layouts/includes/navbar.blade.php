<!-- header start -->
<header>
    <a class="brand-logo">
        <img src="assets/images/logo.png" class="img-fluid" alt="">
    </a>
    <div class="ms-4">
        <p class="small text-secondary m-0">
            Summarecon Mall
        </p>
        <a class="bold m-0 f-18" data-bs-toggle="offcanvas" data-bs-target="#selectmall"
        href="javascript:void(0)">
            Serpong <i class="iconly-Arrow-Down-2 icli"></i>
        </a>
    </div>
</header>
<!-- selectmall item canvas start -->
<div class="offcanvas offcanvas-bottom h-auto selectmall-canvas" id="selectmall">
    <div class="offcanvas-header">
        <h1 id="offcanvasRightLabel" class="text-center">Pilih Summarecon Mall terdekat dari Anda</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body small">
        <div class="mall-slider slick-default theme-dots">
			<div>
				<div class="slider-box">
					<img src="{{ asset('assets/images/mall/1.jpg') }}" class="img-fluid" alt="">
					<div class="slider-content">
						<div class="p-3">
							<h2 class="text-light">Kelapa Gading</h2>
							<a href="javascript:void(0)" data-bs-dismiss="offcanvas" class="btn btn-solid">Pilih</a>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="slider-box">
					<img src="{{ asset('assets/images/mall/2.jpg') }}" class="img-fluid" alt="">
					<div class="slider-content">
						<div class="p-3">
							<h2 class="text-light">Bekasi</h2>
							<a href="javascript:void(0)" data-bs-dismiss="offcanvas" class="btn btn-solid">Pilih</a>
						</div>
					</div>
				</div>
			</div>
            <div>
				<div class="slider-box">
					<img src="{{ asset('assets/images/mall/3.jpg') }}" class="img-fluid" alt="">
					<div class="slider-content">
						<div class="p-3">
							<h2 class="text-light">Serpong</h2>
							<a href="javascript:void(0)" data-bs-dismiss="offcanvas" class="btn btn-solid">Pilih</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<!-- remove item canvas end -->
<a href="javascript:void(0)" class="overlay-sidebar"></a>
<div class="header-sidebar">
    <a href="profile-setting.html" class="user-panel">
        <img src="assets/images/user/1.png" class="img-fluid user-img" alt="">
        <span>Hello, Paige Turner</span>
        <i class="iconly-Arrow-Right-2 icli"></i>
    </a>
    <div class="sidebar-content">
        <ul class="link-section">
            <li>
                <div>
                    <i class="iconly-Setting icli"></i>
                    <div class="content toggle-sec w-100">
                        <div>
                            <h4 class="mb-0">Dark Mode</h4>
                        </div>
                        <div class="button toggle-btn ms-auto">
                            <input id="darkButton" type="checkbox" class="checkbox">
                            <div class="knobs">
                                <span></span>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div>
                    <i class="iconly-Setting icli"></i>
                    <div class="content toggle-sec w-100">
                        <div>
                            <h4 class="mb-0">RTL</h4>
                        </div>
                        <div class="button toggle-btn ms-auto">
                            <input id="rtlButton" type="checkbox" class="checkbox">
                            <div class="knobs">
                                <span></span>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="pages.html">
                    <i class="iconly-Paper icli"></i>
                    <div class="content">
                        <h4>Pages</h4>
                        <h6>Elements & Other Pages</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="index.html">
                    <i class="iconly-Home icli"></i>
                    <div class="content">
                        <h4>Home</h4>
                        <h6>Offers, Top Deals, Top Brands</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="category.html">
                    <i class="iconly-Category icli"></i>
                    <div class="content">
                        <h4>Shop by Category</h4>
                        <h6>Men, Women, Kids, Beauty.. </h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="order-history.html">
                    <i class="iconly-Document icli"></i>
                    <div class="content">
                        <h4>Orders</h4>
                        <h6>Ongoing Orders, Recent Orders..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="wishlist.html">
                    <i class="iconly-Heart icli"></i>
                    <div class="content">
                        <h4>Your Wishlist</h4>
                        <h6>Your Save Products</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="profile.html">
                    <i class="iconly-Profile icli"></i>
                    <div class="content">
                        <h4>Your Account</h4>
                        <h6>Profile, Settings, Saved Cards...</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/images/flag.png" class="img-fluid" alt="">
                    <div class="content">
                        <h4>Langauge</h4>
                        <h6>Select your Language here..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="notification.html">
                    <i class="iconly-Notification icli"></i>
                    <div class="content">
                        <h4>Notification</h4>
                        <h6>Offers, Order tracking messages..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="settings.html">
                    <i class="iconly-Setting icli"></i>
                    <div class="content">
                        <h4>Settings</h4>
                        <h6>Dark mode, RTL, Notification</h6>
                    </div>
                </a>
            </li>
        </ul>
        <div class="divider"></div>
        <ul class="link-section">
            <li>
                <a href="about-us.html">
                    <i class="iconly-Info-Square icli"></i>
                    <div class="content">
                        <h4>About us</h4>
                        <h6>About Multikart</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="help.html">
                    <i class="iconly-Call icli"></i>
                    <div class="content">
                        <h4>Help/Customer Care</h4>
                        <h6>Customer Support, FAQs</h6>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- header end -->
