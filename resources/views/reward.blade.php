@extends('layouts.app')

@section('content')
	<!-- header start -->
    <header>
        <div class="back-links">
            <a href="{{ route('home') }}">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
                    <h2>Profile</h2>
                </div>
            </a>
        </div>
    </header>
    <!-- header end -->


    <!-- profile section start -->
    <section class="top-space pt-0">
        <div class="profile-detail">
            <div class="media">
                <img src="{{ asset('assets/images/user/1.png') }}" class="img-fluid" alt="">
                <div class="media-body">
                    <h2>Paige Turner</h2>
                    <h6>paigeturner@gmail.com</h6>
                    <a href="#" class="edit-btn">Edit</a>
                </div>
            </div>
        </div>
    </section>
    <!-- profile section end -->


    <!-- link section start -->
    <div class="sidebar-content">
        <ul class="link-section">
            <li>
                <a href="#">
                    <i class="iconly-Document icli"></i>
                    <div class="content">
                        <h4>Orders</h4>
                        <h6>Ongoing Orders, Recent Orders..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="iconly-Heart icli"></i>
                    <div class="content">
                        <h4>Your Wishlist</h4>
                        <h6>Your Save Products</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="iconly-Wallet icli"></i>
                    <div class="content">
                        <h4>Payment</h4>
                        <h6>Saved Cards, Wallets</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="iconly-Location icli"></i>
                    <div class="content">
                        <h4>Saved Address</h4>
                        <h6>Home, office.. </h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/images/flag.png') }}" class="img-fluid" alt="">
                    <div class="content">
                        <h4>Langauge</h4>
                        <h6>Select your Language here..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="iconly-Notification icli"></i>
                    <div class="content">
                        <h4>Notification</h4>
                        <h6>Offers, Order tracking messages..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="iconly-Setting icli"></i>
                    <div class="content">
                        <h4>Settings</h4>
                        <h6>Dark mode, RTL, Notification</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="iconly-Password icli"></i>
                    <div class="content">
                        <h4>Profile setting</h4>
                        <h6>Full Name, Password..</h6>
                    </div>
                </a>
            </li>
        </ul>
        <div class="divider"></div>
        <ul class="link-section">
            <li>
                <a href="#">
                    <i class="iconly-Info-Square icli"></i>
                    <div class="content">
                        <h4>Terms & Conditions</h4>
                        <h6>T&C for use of Platform</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="iconly-Call icli"></i>
                    <div class="content">
                        <h4>Help/Customer Care</h4>
                        <h6>Customer Support, FAQs</h6>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="pb-5 mb-5">
        <a href="{{ route('home') }}" class="btn btn-outline w-100 content-color">LOG OUT</a>
    </div>
    <!-- link section end -->
@endsection
