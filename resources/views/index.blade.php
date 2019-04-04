@extends('layouts.homelayouts')
@section('content')
<!-- site__body -->
<div class="site__body">
                <!-- page -->
                <div class="page">
                    <!-- page__body -->
                    <div class="page__body">
                        <!-- block-slider -->
                        <div class="block block-slider block-slider--featured">
                            <div class="container">
                                <div class="slider slider--with-dots">
                                    <div class="owl-carousel">
                                        <a href="shop-grid.html">
                                            <picture>
                                                <source media="(min-width: 768px)" srcset="images/slides/slide1.jpg, images/slides/slide1@2x.jpg 2x">
                                                <img src="images/slides/slide1.jpg" alt="">
                                            </picture>
                                        </a>
                                        <a href="shop-grid.html">
                                            <picture>
                                                <source media="(min-width: 768px)" srcset="images/slides/slide2.jpg, images/slides/slide2@2x.jpg 2x">
                                                <img src="images/slides/slide2.jpg" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- block-slider / end -->
                         <!-- block-collections -->
                         <br><br><br><br><br><br>
                         <div class="block block-collections">
                            <div class="container">
                                <div class="block__title">
                                    <h2 class="decor-header decor-header--align--center">Latest Collections</h2>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <div class="block-collections__item block-collections__item--left">
                                            <div class="block-collections__info block-collections__info--top-left">
                                                <div class="block-collections__name">Sunny Wind Home</div>
                                                <div class="block-collections__description">Rumah minimalis dengan tempat yang strategis dan pengamanan 24 jam.</div>
                                                <div class="block-collections__button">
                                                    <a href="shop-grid.html" class="btn btn-primary">View</a>
                                                </div>
                                            </div>
                                            <div class="block-collections__image">
                                                <a href="shop-grid.html">
                                                    <picture>
                                                        <source media="(min-width: 992px)" srcset="images/collections/collection1-lg.jpg, images/collections/collection1-lg@2x.jpg 2x">
                                                        <source media="(max-width: 991px)" srcset="images/collections/collection1.jpg, images/collections/collection1@2x.jpg 2x">
                                                        <img src="images/collections/collection1-lg.jpg" alt="">
                                                    </picture>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-7 pt-5 pt-md-0">
                                        <div class="block-collections__item block-collections__item--right">
                                            <div class="block-collections__image">
                                                <a href="shop-grid.html">
                                                    <picture>
                                                        <source media="(min-width: 992px)" srcset="images/collections/collection2-lg.jpg, images/collections/collection2-lg@2x.jpg 2x">
                                                        <source media="(max-width: 991px)" srcset="images/collections/collection2.jpg, images/collections/collection2@2x.jpg 2x">
                                                        <img src="images/collections/collection2-lg.jpg" alt="">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="block-collections__info block-collections__info--bottom-right">
                                                <div class="block-collections__name">Anero Monero Apartemen</div>
                                                <div class="block-collections__description">Apartemen mewah yang berada di tengah kota Jakarta. Tempat yang strategis dengan pusat perbelanjaan.</div>
                                                <div class="block-collections__button">
                                                    <a href="shop-grid.html" class="btn btn-primary">View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- block-collections / end -->
                        <!-- block-posts-carousel / end -->
                    </div>
                    <!-- page__body / end -->
                </div>
                <!-- page / end -->
            </div>
@endsection