@extends('dashboard.app')
@section('content')
    <section class="nftmax-adashboard nftmax-show">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-12 nftmax-main__column">
                    <div class="nftmax-body">
                        <!-- Dashboard Inner -->
                        <div class="nftmax-dsinner">
                            <!-- Dashboard Slider -->
                            <div class="dashboard-banner nftmax-bg-cover mg-top-40"
                                style="background-image:url('img/banner-bg.png')">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="dashboard-banner__main">
                                            <div class="dashboard-banner__column dashboard-banner__column--one">
                                                <!-- Dashboard Content -->
                                                <div class="dashboard-banner__content">
                                                    <h2 class="dashboard-banner__title nftmax-font-regular nftmax-lspacing">
                                                        Lock and Lob x Fiesta Spurs</h2>
                                                    <p class="dashboard-banner__text nftmax-lspacing">ID : 2320382
                                                    </p>
                                                </div>

                                                <div class="nftmax-header__author nftmax-header__author-two ">
                                                    <div class="nftmax-header__author-img"><img src="img/profile-pic-2.png"
                                                            alt="#"></div>
                                                    <div class="nftmax-header__author-content ">
                                                        <h4
                                                            class="nftmax-header__author-title nftmax-header__author-title--two nftmax-lspacing">
                                                            Brokln Simons</h4>
                                                        <p
                                                            class="nftmax-header__author-text nftmax-header__author-text--two">
                                                            <a href="#"
                                                                class="nftmax-font-regular nftmax-lspacing">@broklinslam_75</a>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="dashboard-banner__bids">
                                                    <div class="dashboard-banner__bid">
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group">
                                                            <p class="dashboard-banner__group-small">Current Bid
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title">75,320 ETH
                                                            </h3>
                                                            <p class="dashboard-banner__group-small">773.69
                                                                <span>USD</span>
                                                            </p>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                        <div class="dashboard-banner__middle-border"></div>
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group">
                                                            <p class="dashboard-banner__group-small">Remaing Time
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title"
                                                                data-countdown="2023/12/26"></h3>
                                                            <p class="dashboard-banner__group-small nftmax-timing">
                                                                <span>Hrs</span> <span>Min</span> <span>Sec</span>
                                                            </p>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                    </div>
                                                </div>

                                                <!-- Dashboard Banner Button -->
                                                <div class="dashboard-banner__button">
                                                    <div class="dashboard-banner__single-btn">
                                                        <a class="dashboard-banner__heart"><i
                                                                class="fa-solid fa-heart"></i></a>
                                                    </div>
                                                    <div class="dashboard-banner__single-btn dashboard-banner__main-btn">
                                                        <a href="active-bids.html"
                                                            class="nftmax-btn nftmax-btn__secondary radius">Place a
                                                            Bid</a>
                                                    </div>
                                                    <div class="dashboard-banner__single-btn">
                                                        <a href="marketplace.html" class="nftmax-btn trs-white">View Art
                                                            Work</a>
                                                    </div>
                                                </div>
                                                <!-- End Dashboard Banner Button -->
                                            </div>
                                            <div class="dashboard-banner__column dashboard-banner__column--two">
                                                <div class="dashboard-banner__slider">
                                                    <div class="dashboard-banner__single-slider">
                                                        <img src="img/dashboard-slider-1.png" alt="#">
                                                    </div>
                                                    <div class="dashboard-banner__single-slider">
                                                        <img src="img/slide_2.jpg" alt="#">
                                                    </div>
                                                    <div class="dashboard-banner__single-slider">
                                                        <img src="img/slide_3.jpg" alt="#">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Dashboard Slider -->

                            <!-- Welcome CTA -->
                            <div class="welcome-cta mg-top-40">
                                <div class="welcome-cta__heading">
                                    <h2 class="welcome-cta__title">Create your own NFT and extraordinary get lot of
                                        Sell..</h2>
                                    <p class="welcome-cta__text nftmax-lspacing">Buy and sell NFTs from the world’s
                                        top artists</p>
                                </div>
                                <div class="welcome-cta__button">
                                    <a href="product-upload.html" class="nftmax-btn nftmax-btn__bordered bg radius">Upload
                                        Products</a>
                                    <a href="marketplace.html" class="nftmax-btn trs-white bl-color">View Art
                                        Work</a>
                                </div>
                            </div>
                            <!-- End Welcome CTA -->

                            <!-- Trending Action -->
                            <div class="trending-action mg-top-40">
                                <h2 class="trending-action__heading">Trending Action</h2>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="trending-action__slider">
                                            <!-- Treadning Single -->
                                            <div class="trending-action__single">
                                                <!-- Trending Head -->
                                                <div class="trending-action__head">
                                                    <div class="trending-action__button">
                                                        <a class="trending-action__btn heart-icon"><i
                                                                class="fa-solid fa-heart"></i></a>
                                                        <a class="trending-action__btn"><i
                                                                class="fa-solid fa-ellipsis-vertical"></i></a>
                                                    </div>
                                                    <img src="img/trending-img-1.png" alt="#">
                                                </div>
                                                <!-- Trending Body -->
                                                <div class="trending-action__body">
                                                    <div class="trending-action__author-meta">
                                                        <div class="trending-action__author-img"><img
                                                                src="img/author-pic.png" alt="#"></div>
                                                        <p class="trending-action__author-name">Owned by <a
                                                                href="profile.html">Bilout</a></p>
                                                    </div>
                                                    <h2 class="trending-action__title"><a
                                                            href="active-bids.html">Interconnected Planes</a></h2>
                                                    <div class="dashboard-banner__bid dashboard-banner__bid-v2">
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Current Bid
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title">75,320 ETH
                                                            </h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                        <div class="dashboard-banner__middle-border"></div>
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Remaing Time
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title"
                                                                data-countdown="2023/09/01"></h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                    </div>
                                                </div>
                                                <div class="dashboard-banner__button trending-action__bottom">
                                                    <a href="active-bids.html"
                                                        class="nftmax-btn nftmax-btn__secondary radius">Place a
                                                        Bid</a>
                                                    <a href="marketplace.html" class="nftmax-btn trs-white">View
                                                        Art Work</a>
                                                </div>
                                            </div>
                                            <!-- End Treadning Single -->
                                            <!-- Treadning Single -->
                                            <div class="trending-action__single">
                                                <!-- Trending Head -->
                                                <div class="trending-action__head">
                                                    <div class="trending-action__button">
                                                        <a class="trending-action__btn heart-icon"><i
                                                                class="fa-solid fa-heart"></i></a>
                                                        <a class="trending-action__btn"><i
                                                                class="fa-solid fa-ellipsis-vertical"></i></a>
                                                    </div>
                                                    <img src="img/trending-img-2.png" alt="#">
                                                </div>
                                                <!-- Trending Body -->
                                                <div class="trending-action__body">
                                                    <div class="trending-action__author-meta">
                                                        <div class="trending-action__author-img"><img
                                                                src="img/author-pic.png" alt="#"></div>
                                                        <p class="trending-action__author-name">Owned by <a
                                                                href="profile.html">Bilout</a></p>
                                                    </div>
                                                    <h2 class="trending-action__title"><a
                                                            href="active-bids.html">Interconnected Planes</a></h2>
                                                    <div class="dashboard-banner__bid dashboard-banner__bid-v2">
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Current Bid
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title">75,320 ETH
                                                            </h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                        <div class="dashboard-banner__middle-border"></div>
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Remaing Time
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title"
                                                                data-countdown="2023/09/01"></h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                    </div>
                                                </div>
                                                <div class="dashboard-banner__button trending-action__bottom">
                                                    <a href="active-bids.html"
                                                        class="nftmax-btn nftmax-btn__secondary radius">Place a
                                                        Bid</a>
                                                    <a href="marketplace.html" class="nftmax-btn trs-white">View
                                                        Art Work</a>
                                                </div>
                                            </div>
                                            <!-- End Treadning Single -->
                                            <!-- Treadning Single -->
                                            <div class="trending-action__single">
                                                <!-- Trending Head -->
                                                <div class="trending-action__head">
                                                    <div class="trending-action__button">
                                                        <a class="trending-action__btn heart-icon"><i
                                                                class="fa-solid fa-heart"></i></a>
                                                        <a class="trending-action__btn"><i
                                                                class="fa-solid fa-ellipsis-vertical"></i></a>
                                                    </div>
                                                    <img src="img/trending-img-3.png" alt="#">
                                                </div>
                                                <!-- Trending Body -->
                                                <div class="trending-action__body">
                                                    <div class="trending-action__author-meta">
                                                        <div class="trending-action__author-img"><img
                                                                src="img/author-pic.png" alt="#"></div>
                                                        <p class="trending-action__author-name">Owned by <a
                                                                href="profile.html">Bilout</a></p>
                                                    </div>
                                                    <h2 class="trending-action__title"><a
                                                            href="active-bids.html">Interconnected Planes</a></h2>
                                                    <div class="dashboard-banner__bid dashboard-banner__bid-v2">
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Current Bid
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title">75,320 ETH
                                                            </h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                        <div class="dashboard-banner__middle-border"></div>
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Remaing Time
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title"
                                                                data-countdown="2023/09/01"></h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                    </div>
                                                </div>
                                                <div class="dashboard-banner__button trending-action__bottom">
                                                    <a href="active-bids.html"
                                                        class="nftmax-btn nftmax-btn__secondary radius">Place a
                                                        Bid</a>
                                                    <a href="marketplace.html" class="nftmax-btn trs-white">View
                                                        Art Work</a>
                                                </div>
                                            </div>
                                            <!-- End Treadning Single -->
                                            <!-- Treadning Single -->
                                            <div class="trending-action__single">
                                                <!-- Trending Head -->
                                                <div class="trending-action__head">
                                                    <div class="trending-action__button">
                                                        <a class="trending-action__btn heart-icon"><i
                                                                class="fa-solid fa-heart"></i></a>
                                                        <a class="trending-action__btn"><i
                                                                class="fa-solid fa-ellipsis-vertical"></i></a>
                                                    </div>
                                                    <img src="img/trending-img-4.png" alt="#">
                                                </div>
                                                <!-- Trending Body -->
                                                <div class="trending-action__body">
                                                    <div class="trending-action__author-meta">
                                                        <div class="trending-action__author-img"><img
                                                                src="img/author-pic.png" alt="#"></div>
                                                        <p class="trending-action__author-name">Owned by <a
                                                                href="profile.html">Bilout</a></p>
                                                    </div>
                                                    <h2 class="trending-action__title"><a
                                                            href="active-bids.html">Interconnected Planes</a></h2>
                                                    <div class="dashboard-banner__bid dashboard-banner__bid-v2">
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Current Bid
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title">75,320 ETH
                                                            </h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                        <div class="dashboard-banner__middle-border"></div>
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Remaing Time
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title"
                                                                data-countdown="2023/09/01"></h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                    </div>
                                                </div>
                                                <div class="dashboard-banner__button trending-action__bottom">
                                                    <a href="active-bids.html"
                                                        class="nftmax-btn nftmax-btn__secondary radius">Place a
                                                        Bid</a>
                                                    <a href="marketplace.html" class="nftmax-btn trs-white">View
                                                        Art Work</a>
                                                </div>
                                            </div>
                                            <!-- End Treadning Single -->
                                            <!-- Treadning Single -->
                                            <div class="trending-action__single">
                                                <!-- Trending Head -->
                                                <div class="trending-action__head">
                                                    <div class="trending-action__button">
                                                        <a class="trending-action__btn heart-icon"><i
                                                                class="fa-solid fa-heart"></i></a>
                                                        <a class="trending-action__btn"><i
                                                                class="fa-solid fa-ellipsis-vertical"></i></a>
                                                    </div>
                                                    <img src="img/trending-img-1.png" alt="#">
                                                </div>
                                                <!-- Trending Body -->
                                                <div class="trending-action__body">
                                                    <div class="trending-action__author-meta">
                                                        <div class="trending-action__author-img"><img
                                                                src="img/author-pic.png" alt="#"></div>
                                                        <p class="trending-action__author-name">Owned by <a
                                                                href="profile.html">Bilout</a></p>
                                                    </div>
                                                    <h2 class="trending-action__title"><a
                                                            href="active-bids.html">Interconnected Planes</a></h2>
                                                    <div class="dashboard-banner__bid dashboard-banner__bid-v2">
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Current Bid
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title">75,320 ETH
                                                            </h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                        <div class="dashboard-banner__middle-border"></div>
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Remaing Time
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title"
                                                                data-countdown="2023/09/01"></h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                    </div>
                                                </div>
                                                <div class="dashboard-banner__button trending-action__bottom">
                                                    <a href="active-bids.html"
                                                        class="nftmax-btn nftmax-btn__secondary radius">Place a
                                                        Bid</a>
                                                    <a href="marketplace.html" class="nftmax-btn trs-white">View
                                                        Art Work</a>
                                                </div>
                                            </div>
                                            <!-- End Treadning Single -->
                                            <!-- Treadning Single -->
                                            <div class="trending-action__single">
                                                <!-- Trending Head -->
                                                <div class="trending-action__head">
                                                    <div class="trending-action__button">
                                                        <a class="trending-action__btn heart-icon"><i
                                                                class="fa-solid fa-heart"></i></a>
                                                        <a class="trending-action__btn"><i
                                                                class="fa-solid fa-ellipsis-vertical"></i></a>
                                                    </div>
                                                    <img src="img/trending-img-2.png" alt="#">
                                                </div>
                                                <!-- Trending Body -->
                                                <div class="trending-action__body">
                                                    <div class="trending-action__author-meta">
                                                        <div class="trending-action__author-img"><img
                                                                src="img/author-pic.png" alt="#"></div>
                                                        <p class="trending-action__author-name">Owned by <a
                                                                href="profile.html">Bilout</a></p>
                                                    </div>
                                                    <h2 class="trending-action__title"><a
                                                            href="active-bids.html">Interconnected Planes</a></h2>
                                                    <div class="dashboard-banner__bid dashboard-banner__bid-v2">
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Current Bid
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title">75,320 ETH
                                                            </h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                        <div class="dashboard-banner__middle-border"></div>
                                                        <!-- Single Bid -->
                                                        <div class="dashboard-banner__group dashboard-banner__group-v2">
                                                            <p class="dashboard-banner__group-small">Remaing Time
                                                            </p>
                                                            <h3 class="dashboard-banner__group-title"
                                                                data-countdown="2023/09/01"></h3>
                                                        </div>
                                                        <!-- End Single Bid -->
                                                    </div>
                                                </div>
                                                <div class="dashboard-banner__button trending-action__bottom">
                                                    <a href="active-bids.html"
                                                        class="nftmax-btn nftmax-btn__secondary radius">Place a
                                                        Bid</a>
                                                    <a href="marketplace.html" class="nftmax-btn trs-white">View
                                                        Art Work</a>
                                                </div>
                                            </div>
                                            <!-- End Treadning Single -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Trending Action -->

                            <div class="row nftmax-gap-30">
                                <div class="col-lg-6 col-md-6 col-12 nftmax-sixth-one">
                                    <!-- Charts One -->
                                    <div class="charts-main charts-home-one mg-top-40">
                                        <div class="charts-main__heading">
                                            <h4 class="charts-main__title">Sell History</h4>
                                            <div class="charts-main__middle">
                                                <div class="charts-main__middle-single">
                                                    <p class="charts-main__middle-text">Avg: Sell Price</p>
                                                </div>
                                                <div class="charts-main__middle-single">
                                                    <p class="charts-main__middle-text nftmax-total__sales">Total
                                                        Sell</p>
                                                </div>
                                            </div>

                                            <div class="nftmax-chart__dropdown">
                                                <span class="nftmax-current">Current Week</span>
                                            </div>
                                        </div>
                                        <div class="charts-main__one">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="chart__sell" role="tabpanel"
                                                    aria-labelledby="chart__sell">
                                                    <canvas id="myChart_one"></canvas>
                                                </div>
                                                <div class="tab-pane fade" id="chart__sell" role="tabpanel"
                                                    aria-labelledby="chart__sell">
                                                    <canvas id="myChart_one"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Charts One -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nftmax-sixth-two">
                                    <!-- Charts Two -->
                                    <div class="charts-main charts-home-one mg-top-40">
                                        <div class="charts-main__heading">
                                            <h4 class="charts-main__title">Market Visitor</h4>
                                            <div class="nftmax-chart__dropdown">
                                                <ul class="nav nav-tabs nftmax-dropdown__list" id="nav-tab"
                                                    role="tablist">
                                                    <li class="nav-item dropdown">
                                                        <a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle"
                                                            data-bs-toggle="dropdown" href="#" role="button"
                                                            aria-expanded="false">Last 30 days <svg width="13"
                                                                height="6" viewBox="0 0 13 6" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.7"
                                                                    d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z"
                                                                    fill="#374557" fill-opacity="0.6"></path>
                                                            </svg></a>
                                                        <ul class="dropdown-menu nftmax-sidebar_dropdown">
                                                            <a class="list-group-item" data-bs-toggle="list"
                                                                data-bs-target="#chart__visitor" role="tab">Last 15
                                                                Days</a>
                                                            <a class="list-group-item" data-bs-toggle="list"
                                                                data-bs-target="#chart__visitor" role="tab">Last 7
                                                                Days</a>
                                                            <a class="list-group-item" data-bs-toggle="list"
                                                                data-bs-target="#chart__visitor" role="tab">Last
                                                                Month</a>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="charts-main__one">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="chart__visitor"
                                                    role="tabpanel" aria-labelledby="chart__visitor">
                                                    <canvas id="myChart_two"></canvas>
                                                </div>
                                                <div class="tab-pane fade" id="chart__visitor" role="tabpanel"
                                                    aria-labelledby="chart__visitor">
                                                    <canvas id="myChart_two"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Charts Two -->
                                </div>
                            </div>

                            <div class="row nftmax-gap-30">
                                <div class="col-lg-6 col-12 nftmax-sixth-one">
                                    <div class="seller-list mg-top-40">
                                        <h3 class="seller-list__heading">Top Seller</h3>
                                        <div class="seller-list__slider">
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-1.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item nftmax-scolor"><img
                                                                src="img/diamond-icon.png" alt="#">3435
                                                            Items</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-2.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item nftmax-scolor"><img
                                                                src="img/diamond-icon.png" alt="#">3435
                                                            Items</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-3.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item nftmax-scolor"><img
                                                                src="img/diamond-icon.png" alt="#">3435
                                                            Items</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-4.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item nftmax-scolor"><img
                                                                src="img/diamond-icon.png" alt="#">3435
                                                            Items</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-1.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item nftmax-scolor"><img
                                                                src="img/diamond-icon.png" alt="#">3435
                                                            Items</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 nftmax-sixth-two">
                                    <div class="seller-list mg-top-40">
                                        <h3 class="seller-list__heading">Top Buyer</h3>
                                        <div class="seller-list__slider">
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-1.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item sell-list__v2 nftmax-pcolor">
                                                            <img src="img/order-icon.png" alt="#">$78 M
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-2.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item sell-list__v2 nftmax-pcolor">
                                                            <img src="img/order-icon.png" alt="#">$78 M
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-3.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item sell-list__v2 nftmax-pcolor">
                                                            <img src="img/order-icon.png" alt="#">$78 M
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-4.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item sell-list__v2 nftmax-pcolor">
                                                            <img src="img/order-icon.png" alt="#">$78 M
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                            <!-- Seller Single List -->
                                            <div class="seller-list__single-slider">
                                                <div class="seller-list__single">
                                                    <!-- Seller Head -->
                                                    <div class="seller-list__head">
                                                        <div class="verfify-sign"><img src="img/verfify-sign.png"
                                                                alt="#"></div>
                                                        <img src="img/seller-1.png" alt="#">
                                                    </div>
                                                    <!-- Seller Body -->
                                                    <div class="seller-list__body">
                                                        <h4 class="sell-list__title"><a href="#">Brokln
                                                                Simons</a></h4>
                                                        <p class="sell-list__author"><a href="#">@broklinslam_75</a>
                                                        </p>
                                                        <div class="sell-list__item sell-list__v2 nftmax-pcolor">
                                                            <img src="img/order-icon.png" alt="#">$78 M
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Seller Single List -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nftmax-table mg-top-40">
                                <div class="nftmax-table__heading">
                                    <h3 class="nftmax-table__title mb-0">All NFTS Update <span
                                            class="nftmax-table__badge">435</span></h3>
                                    <ul class="nav nav-tabs  nftmax-dropdown__list" id="nav-tab" role="tablist">
                                        <li class="nav-item dropdown ">
                                            <a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle"
                                                data-bs-toggle="dropdown" href="#" role="button"
                                                aria-expanded="false">All Categories <span
                                                    class="nftmax-table__arrow--icon"><svg width="13" height="6"
                                                        viewBox="0 0 13 6" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.7"
                                                            d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z"
                                                            fill="#374557" fill-opacity="0.6"></path>
                                                    </svg></span></a>
                                            <ul class="dropdown-menu nftmax-sidebar_dropdown">
                                                <a class="dropdown-item list-group-item" data-bs-toggle="tab"
                                                    data-bs-target="#table_1" role="tab">Categories V1</a>
                                                <a class="dropdown-item list-group-item" data-bs-toggle="tab"
                                                    data-bs-target="#table_2" role="tab">Categories V2</a>
                                                <a class="dropdown-item list-group-item" data-bs-toggle="tab"
                                                    data-bs-target="#table_1" role="tab">Categories V3</a>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="table_1" role="tabpanel"
                                        aria-labelledby="table_1">
                                        <!-- NFTMax Table -->
                                        <table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main-v1">
                                            <!-- NFTMax Table Head -->
                                            <thead class="nftmax-table__head">
                                                <tr>
                                                    <th class="nftmax-table__column-1 nftmax-table__h1">All
                                                        Products</th>
                                                    <th class="nftmax-table__column-2 nftmax-table__h2">Value</th>
                                                    <th class="nftmax-table__column-3 nftmax-table__h3">USD</th>
                                                    <th class="nftmax-table__column-4 nftmax-table__h4">24H%</th>
                                                    <th class="nftmax-table__column-5 nftmax-table__h5">Bids</th>
                                                    <th class="nftmax-table__column-6 nftmax-table__h6">Time</th>
                                                    <th class="nftmax-table__column-7 nftmax-table__h7">Status</th>
                                                </tr>
                                            </thead>
                                            <!-- NFTMax Table Body -->
                                            <tbody class="nftmax-table__body">
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img1.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Mullican
                                                                    Computer Joy</h4>
                                                                <p class="nftmax-table__product-desc">Owned by <a
                                                                        href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__amount nftmax-table__text-one">
                                                            <img src="img/eth-icon.png" alt="#"><span
                                                                class="nftmax-table__text">7473 ETH</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span
                                                                class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">
                                                            -24.75 (11.5%)</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343
                                                        </p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">2 Hours 1
                                                            min 30s</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <div class="nftmax-table__status nftmax-sbcolor">Active
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img2.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">View Card
                                                                    by Jeff Davis</h4>
                                                                <p class="nftmax-table__product-desc">Owned by <a
                                                                        href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__amount nftmax-table__text-one">
                                                            <img src="img/eth-icon.png" alt="#"><span
                                                                class="nftmax-table__text">7473 ETH</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span
                                                                class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">
                                                            -24.75 (11.5%)</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343
                                                        </p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">2 Hours 1
                                                            min 30s</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <div class="nftmax-table__status nftmax-gbcolor">Completed
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img3.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">View Card
                                                                    by Jeff Davis</h4>
                                                                <p class="nftmax-table__product-desc">Owned by <a
                                                                        href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__amount nftmax-table__text-one">
                                                            <img src="img/eth-icon.png" alt="#"><span
                                                                class="nftmax-table__text">7473 ETH</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span
                                                                class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">
                                                            -24.75 (11.5%)</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343
                                                        </p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">2 Hours 1
                                                            min 30s</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <div class="nftmax-table__status nftmax-sbcolor">Active
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img4.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">View Card
                                                                    by Jeff Davis</h4>
                                                                <p class="nftmax-table__product-desc">Owned by <a
                                                                        href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__amount nftmax-table__text-one">
                                                            <img src="img/eth-icon.png" alt="#"><span
                                                                class="nftmax-table__text">7473 ETH</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span
                                                                class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">
                                                            -24.75 (11.5%)</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343
                                                        </p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">2 Hours 1
                                                            min 30s</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <div class="nftmax-table__status nftmax-gbcolor">Completed
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!-- End NFTMax Table Body -->
                                        </table>
                                        <!-- End NFTMax Table -->
                                    </div>
                                    <div class="tab-pane fade" id="table_2" role="tabpanel" aria-labelledby="table_1">
                                        <!-- NFTMax Table -->
                                        <table id="nftmax-table__main" class="nftmax-table__main nftmax-table__main-v1">
                                            <!-- NFTMax Table Head -->
                                            <thead class="nftmax-table__head">
                                                <tr>
                                                    <th class="nftmax-table__column-1 nftmax-table__h1">All
                                                        Products</th>
                                                    <th class="nftmax-table__column-2 nftmax-table__h2">Value</th>
                                                    <th class="nftmax-table__column-3 nftmax-table__h3">USD</th>
                                                    <th class="nftmax-table__column-4 nftmax-table__h4">24H%</th>
                                                    <th class="nftmax-table__column-5 nftmax-table__h5">Bids</th>
                                                    <th class="nftmax-table__column-6 nftmax-table__h6">Time</th>
                                                    <th class="nftmax-table__column-7 nftmax-table__h7">Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!-- NFTMax Table Body -->
                                            <tbody class="nftmax-table__body">
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img1.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">Mullican
                                                                    Computer Joy</h4>
                                                                <p class="nftmax-table__product-desc">Owned by <a
                                                                        href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__amount nftmax-table__text-one">
                                                            <img src="img/eth-icon.png" alt="#"><span
                                                                class="nftmax-table__text">7473 ETH</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span
                                                                class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">
                                                            -24.75 (11.5%)</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343
                                                        </p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">2 Hours 1
                                                            min 30s</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <div class="nftmax-table__status nftmax-sbcolor">Active
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="nftmax-table__column-1 nftmax-table__data-1">
                                                        <div class="nftmax-table__product">
                                                            <div class="nftmax-table__product-img">
                                                                <img src="img/nft-table-img2.png" alt="#">
                                                            </div>
                                                            <div class="nftmax-table__product-content">
                                                                <h4 class="nftmax-table__product-title">View Card
                                                                    by Jeff Davis</h4>
                                                                <p class="nftmax-table__product-desc">Owned by <a
                                                                        href="#">Xoeyam</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-2 nftmax-table__data-2">
                                                        <div class="nftmax-table__amount nftmax-table__text-one">
                                                            <img src="img/eth-icon.png" alt="#"><span
                                                                class="nftmax-table__text">7473 ETH</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-3 nftmax-table__data-3">
                                                        <div class="nftmax-table__amount nftmax-table__text-two">
                                                            <img src="img/usd-icon.png" alt="#"><span
                                                                class="nftmax-table__text">6392.99$</span>
                                                        </div>
                                                    </td>
                                                    <td class="nftmax-table__column-4 nftmax-table__data-4">
                                                        <p class="nftmax-table__text nftmax-table__up-down nftmax-rcolor">
                                                            -24.75 (11.5%)</p>
                                                    </td>
                                                    <td class="nftmax-table__column-5 nftmax-table__data-5">
                                                        <p class="nftmax-table__text nftmax-table__bid-text">343
                                                        </p>
                                                    </td>
                                                    <td class="nftmax-table__column-6 nftmax-table__data-6">
                                                        <p class="nftmax-table__text nftmax-table__time">2 Hours 1
                                                            min 30s</p>
                                                    </td>
                                                    <td class="nftmax-table__column-7 nftmax-table__data-7">
                                                        <div class="nftmax-table__status nftmax-gbcolor">Completed
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!-- End NFTMax Table Body -->
                                        </table>
                                        <!-- End NFTMax Table -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Dashboard Inner -->
                    </div>
                </div>

                <div class="col-xxl-3 col-12 nftmax-main__sidebar">
                    <div class="nftmax-sidebar mg-top-40">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-6 col-12 nftmax-sidebar__widget">
                                <!-- NFTMax Single Sidebar -->
                                <div class="nftmax-sidebar__single">
                                    <!-- Sidebar Heading -->
                                    <div class="nftmax-sidebar__heading">
                                        <h4 class="nftmax-sidebar__title">Statistics</h4>
                                        <ul class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
                                            <li class="nav-item dropdown">
                                                <a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-expanded="false">Last 7 days <span
                                                        class="nftmax-sidebar__arrow--icon"><svg width="13"
                                                            height="6" viewBox="0 0 13 6" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.7"
                                                                d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z"
                                                                fill="#374557" fill-opacity="0.6"></path>
                                                        </svg></span></a>
                                                <ul class="dropdown-menu nftmax-sidebar_dropdown">
                                                    <a class="list-group-item" data-bs-toggle="list"
                                                        data-bs-target="#side__one" role="tab">Daily</a>
                                                    <a class="list-group-item" data-bs-toggle="list"
                                                        data-bs-target="#side__one" role="tab">Weekly</a>
                                                    <a class="list-group-item"
                                                        data-bs-toggle="list"data-bs-target="#side__one"
                                                        role="tab">Monthly</a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Single Tab -->
                                        <div class="tab-pane fade show active" id="side__one" role="tabpanel"
                                            aria-labelledby="side__one">
                                            <!-- Platform List -->
                                            <div class="nftmax-sidebar__charts nftmax-sidebar__charts--v1">
                                                <div class="nftmax-sidebar__cside-one">
                                                    <canvas id="myChart_Side_One"></canvas>
                                                    <div class="nftmax-sidebar__cicon"><img src="img/charts-middle.png"
                                                            alt="#"></div>
                                                </div>
                                                <div class="nftmax-sidebar__cstatics">
                                                    <h4 class="nftmax-sidebar__cstatics-title">Your All Artwork
                                                        Statistics</h4>
                                                    <ul class="nftmax-sidebar__clist">
                                                        <li><span
                                                                class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-one"></span>Total
                                                            Sold</li>
                                                        <li><span
                                                                class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-two"></span>Total
                                                            Cancel</li>
                                                        <li><span
                                                                class="nftmax-sidebar__ccolor nftmax-sidebar__ccolor-three"></span>Total
                                                            Panding</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Tab -->
                                    </div>
                                </div>
                                <!-- End NFTMax Single Sidebar -->
                            </div>

                            <div class="col-xxl-12 col-xl-6 col-12 nftmax-sidebar__widget">
                                <!-- NFTMax Single Sidebar -->
                                <div class="nftmax-sidebar__single">
                                    <ul class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
                                        <li class="nav-item dropdown nftmax-multiple__adropdownn">
                                            <a class="nftmax-heading__amount-dropdown nav-link  dropdown-toggle"
                                                data-bs-toggle="dropdown" href="#" role="button"
                                                aria-expanded="false">
                                                <div class="nftmax__amount-dropdown"><img src="img/eth-icon.png"
                                                        alt="#">ETH rate<span
                                                        class="nftmax-sidebar__arrow--icon"><svg width="14"
                                                            height="7" viewBox="0 0 14 7" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.7092 0.288658C13.6163 0.197192 13.5057 0.124593 13.3839 0.0750502C13.262 0.025507 13.1313 0 12.9993 0C12.8673 0 12.7366 0.025507 12.6148 0.0750502C12.4929 0.124593 12.3824 0.197192 12.2894 0.288658L7.70992 4.7581C7.61697 4.84956 7.50638 4.92216 7.38453 4.9717C7.26269 5.02125 7.132 5.04676 7 5.04676C6.868 5.04676 6.73731 5.02125 6.61547 4.9717C6.49362 4.92216 6.38303 4.84956 6.29008 4.7581L1.7106 0.288658C1.61765 0.197192 1.50706 0.124593 1.38521 0.0750502C1.26337 0.025507 1.13268 0 1.00068 0C0.868682 0 0.737991 0.025507 0.616146 0.0750502C0.4943 0.124593 0.383712 0.197192 0.29076 0.288658C0.10453 0.471497 0 0.718831 0 0.976639C0 1.23445 0.10453 1.48178 0.29076 1.66462L4.88024 6.14382C5.44268 6.69206 6.20509 7 7 7C7.79491 7 8.55732 6.69206 9.11976 6.14382L13.7092 1.66462C13.8955 1.48178 14 1.23445 14 0.976639C14 0.718831 13.8955 0.471497 13.7092 0.288658Z"
                                                                fill="#374557"></path>
                                                        </svg></span></div>
                                            </a>
                                            <ul class="dropdown-menu nftmax-sidebar_dropdown">
                                                <a class="list-group-item" data-bs-toggle="tab"
                                                    data-bs-target="#side__two" role="tab">
                                                    <div class="nftmax__amount-dropdown"><img src="img/eth-icon.png"
                                                            alt="#">ETH rate</div>
                                                </a>
                                                <a class="list-group-item" data-bs-toggle="tab"
                                                    data-bs-target="#side__two" role="tab">
                                                    <div class="nftmax__amount-dropdown"><img src="img/btc-icon.png"
                                                            alt="#">BTC rate</div>
                                                </a>
                                            </ul>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Single Tab -->
                                        <div class="tab-pane fade show active" id="side__two" role="tabpanel"
                                            aria-labelledby="side__two">
                                            <div class="nftmax-amount__statics">
                                                <h4 class="nftmax-amount__statics__title">$7473.67 USD</h4>
                                                <p class="nftmax-amount__statics__text">+324.75 (11.5%)</p>
                                            </div>

                                            <div class="nftmax-sidebar__cside-one">
                                                <canvas id="myChart_Side_Two"></canvas>
                                            </div>
                                        </div>
                                        <!-- End Single Tab -->
                                    </div>
                                </div>
                                <!-- End NFTMax Single Sidebar -->
                            </div>

                            <div class="col-xxl-12 col-xl-6 col-12 nftmax-sidebar__widget">
                                <!-- NFTMax Single Sidebar -->
                                <div class="nftmax-sidebar__single">
                                    <!-- Sidebar Heading -->
                                    <div class="nftmax-sidebar__heading">
                                        <h4 class="nftmax-sidebar__title">Top Creators</h4>
                                        <ul class="nav nav-tabs nftmax-dropdown__list" id="nav-tab" role="tablist">
                                            <li class="nav-item dropdown">
                                                <a class="nftmax-sidebar_btn nftmax-heading__tabs nav-link dropdown-toggle"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-expanded="false">View All <svg width="13" height="6"
                                                        viewBox="0 0 13 6" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.7"
                                                            d="M12.4124 0.247421C12.3327 0.169022 12.2379 0.106794 12.1335 0.0643287C12.0291 0.0218632 11.917 0 11.8039 0C11.6908 0 11.5787 0.0218632 11.4743 0.0643287C11.3699 0.106794 11.2751 0.169022 11.1954 0.247421L7.27012 4.07837C7.19045 4.15677 7.09566 4.219 6.99122 4.26146C6.88678 4.30393 6.77476 4.32579 6.66162 4.32579C6.54848 4.32579 6.43646 4.30393 6.33202 4.26146C6.22758 4.219 6.13279 4.15677 6.05312 4.07837L2.12785 0.247421C2.04818 0.169022 1.95338 0.106794 1.84895 0.0643287C1.74451 0.0218632 1.63249 0 1.51935 0C1.40621 0 1.29419 0.0218632 1.18975 0.0643287C1.08531 0.106794 0.990517 0.169022 0.910844 0.247421C0.751218 0.404141 0.661621 0.616141 0.661621 0.837119C0.661621 1.0581 0.751218 1.2701 0.910844 1.42682L4.84468 5.26613C5.32677 5.73605 5.98027 6 6.66162 6C7.34297 6 7.99647 5.73605 8.47856 5.26613L12.4124 1.42682C12.572 1.2701 12.6616 1.0581 12.6616 0.837119C12.6616 0.616141 12.572 0.404141 12.4124 0.247421Z"
                                                            fill="#374557" fill-opacity="0.6"></path>
                                                    </svg></a>
                                                <ul class="dropdown-menu nftmax-sidebar_dropdown">
                                                    <a class="list-group-item" data-bs-toggle="tab"
                                                        data-bs-target="#daily" role="tab">Daily</a>
                                                    <a class="list-group-item" data-bs-toggle="tab"
                                                        data-bs-target="#weekly" role="tab">Weekly</a>
                                                    <a class="list-group-item" data-bs-toggle="tab"
                                                        data-bs-target="#daily" role="tab">Monthly</a>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Sidebar Creator Lists -->
                                    <div class="nftmax-sidebar__creators">
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Single Tab -->
                                            <div class="tab-pane fade" id="daily" role="tabpanel"
                                                aria-labelledby="nav-home-tab">
                                                <ul class="nftmax-sidebar__creatorlist">
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-1.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Albert
                                                                    Flores<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-2.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Jenny
                                                                    Wilson<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-3.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Robert
                                                                    Fox<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-4.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Jacob
                                                                    Jones<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-5.png" alt="#">
                                                            <a href="#"><b class="nftmax-sidebar__creator-name">Cody
                                                                    Fisher<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Tab -->
                                            <div class="tab-pane fade show active" id="weekly" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">
                                                <ul class="nftmax-sidebar__creatorlist">
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-1.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Albert
                                                                    Flores<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-2.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Jenny
                                                                    Wilson<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-3.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Robert
                                                                    Fox<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-4.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Jacob
                                                                    Jones<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="nftmax-sidebar__creator">
                                                            <img src="img/creator-5.png" alt="#">
                                                            <a href="#"><b
                                                                    class="nftmax-sidebar__creator-name">Cody
                                                                    Fisher<span
                                                                        class="nftmax-sidebar__creator-link">@broklinslam_75</span></b></a>
                                                        </div>
                                                        <div class="nftmax-sidebar__button">
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_request"><svg
                                                                    width="13" height="12" viewBox="0 0 13 12"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1351 5.4852H11.1378V4.4879C11.1378 4.2125 10.9145 3.98926 10.6391 3.98926C10.3637 3.98926 10.1405 4.2125 10.1405 4.4879V5.4852H9.14317C8.86778 5.4852 8.64453 5.70845 8.64453 5.98384C8.64453 6.25924 8.86778 6.48248 9.14317 6.48248H10.1405V7.47979C10.1405 7.75518 10.3637 7.97843 10.6391 7.97843C10.9145 7.97843 11.1378 7.75518 11.1378 7.47979V6.48248H12.1351C12.4105 6.48248 12.6337 6.25924 12.6337 5.98384C12.6337 5.70845 12.4105 5.4852 12.1351 5.4852Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.15595 5.98378C6.80833 5.98378 8.14784 4.64426 8.14784 2.99189C8.14784 1.33951 6.80833 0 5.15595 0C3.50358 0 2.16406 1.33951 2.16406 2.99189C2.16406 4.64426 3.50358 5.98378 5.15595 5.98378Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M5.1558 6.98096C2.67838 6.98372 0.670727 8.99137 0.667969 11.4688C0.667969 11.7442 0.891215 11.9674 1.16661 11.9674H9.14497C9.42037 11.9674 9.64361 11.7442 9.64361 11.4688C9.64088 8.99137 7.63323 6.98369 5.1558 6.98096Z"
                                                                        fill="white"></path>
                                                                </svg></a>
                                                            <a href="#"
                                                                class="nftmax-sidebar__button-btn nftmax-request_close"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Sidebar Creator Lists -->
                                </div>
                                <!-- End NFTMax Single Sidebar -->
                            </div>

                            <div class="col-xxl-12 col-xl-6 col-12 nftmax-sidebar__widget">
                                <!-- NFTMax Single Sidebar -->
                                <div class="nftmax-sidebar__single">
                                    <!-- Sidebar Heading -->
                                    <div class="nftmax-sidebar__heading">
                                        <h4 class="nftmax-sidebar__title">Top Flatform</h4>
                                        <a href="#" class="nftmax-sidebar_btn">View All</a>
                                    </div>
                                    <!-- Platform List -->
                                    <div class="nftmax-sidebar__platform">
                                        <ul class="nftmax-sidebar__list">
                                            <li><a href="#"><img src="img/platform-1.png"
                                                        alt="#">OpenSea</a></li>
                                            <li><a href="#"><img src="img/platform-2.png"
                                                        alt="#">Rarible</a></li>
                                            <li><a href="#"><img src="img/platform-3.png" alt="#">Myth
                                                    Market</a></li>
                                            <li><a href="#"><img src="img/platform-4.png"
                                                        alt="#">KnownOrigin</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End NFTMax Single Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        jQuery(document).ready(function($) {
            $('[data-countdown]').each(function() {
                var $this = $(this),
                    finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime(' %H : %M : %S'));
                });
            });
        });
    </script>
    <script>
        const ctx = document.getElementById('myChart_one').getContext('2d');
        const myChart_one = new Chart(ctx, {
            type: 'bar',

            data: {
                labels: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
                datasets: [{
                    label: 'AVG Sale',
                    data: [90, 55, 80, 25, 65, 40, 95],
                    backgroundColor: [
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                        '#5356FB',
                    ],

                    fill: true,
                    tension: 0.4,
                    borderWidth: 0,
                    borderSkipped: false,
                    borderRadius: 3,
                    barPercentage: 0.4,
                    categoryPercentage: 0.4,
                }, {
                    label: 'Total Sell',
                    data: [55, 80, 50, 75, 45, 55, 80],
                    backgroundColor: [
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                        '#F239F5',
                    ],
                    borderWidth: 0,
                    borderSkipped: false,
                    borderRadius: 3,
                    categoryPercentage: 0.4,
                    barPercentage: 0.4
                }]
            },

            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            drawBorder: false,
                        },
                    },
                },
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }
        });

        const ctx_two = document.getElementById('myChart_two').getContext('2d');
        const myChart_two = new Chart(ctx_two, {
            type: 'line',

            data: {
                labels: ['Jan 1', 'Jan 2', 'Jan 3', 'Jan 4', 'Jan 5', 'Jan 6', 'Jan 7', 'Jan 8', 'Jan 9', 'Jan 10',
                    'Jan 11', 'Jan 12', 'Jan 13', 'Jan 14', 'Jan 15'
                ],
                datasets: [{
                    label: 'Visitor',
                    data: [50, 20, 45, 15, 55, 20, 60, 20, 70, 45, 64, 20, 72, 22, 66],
                    backgroundColor: '#FAECFF',
                    borderColor: '#DE3DF8',
                    pointRadius: 5,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#AE8FF7',
                    tension: 0.6,
                    borderWidth: 4,
                    fill: true,
                    fillColor: '#fff',
                }]
            },

            options: {
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });

        const ctx_side_two = document.getElementById('myChart_Side_One').getContext('2d');
        const myChart_Side_One = new Chart(ctx_side_two, {
            type: 'doughnut',

            data: {
                labels: [
                    'Total Sold',
                    'Total Cancel',
                    'Total Cancel',
                    'Total Planding'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [16, 16, 16, 30],
                    backgroundColor: [
                        '#5356FB',
                        '#F539F8',
                        '#FFC210',
                        '#E3E4FE'
                    ],
                    hoverOffset: 2,
                    borderWidth: 0,
                }]
            },

            options: {

                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Sell History'
                    }
                }
            }

        });

        const ctx_side_three = document.getElementById('myChart_Side_Two').getContext('2d');
        const myChart_Side_Two = new Chart(ctx_side_three, {
            type: 'line',

            data: {
                labels: ['12:00 AM', '04:00 AM', '08:00 AM'],
                datasets: [{
                    label: 'Visitor',
                    data: [40, 90, 10],
                    backgroundColor: '#D8D8FE',
                    borderColor: '#5356FB',
                    pointRadius: 3,
                    pointBackgroundColor: '#5356FB',
                    pointBorderColor: '#5356FB',
                    borderWidth: 4,
                    tension: 0.9,
                    fill: true,
                    fillColor: '#fff',

                }]
            },

            options: {
                responsive: true,
                scales: {
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },

                    },
                    y: {
                        grid: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                },

                plugins: {
                    legend: {
                        position: 'top',
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Visitor: 2k'
                    }
                }
            }
        });
    </script>
@endpush
