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
                                                <div class="block-collections__name">Sunny Wind</div>
                                                <div class="block-collections__description">Lorem ipsum dolor sit amet, consectetur adipiscing magna. Mauris sed coqut odio.</div>
                                                <div class="block-collections__button">
                                                    <a href="shop-grid.html" class="btn btn-primary">Shop Now</a>
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
                                                <div class="block-collections__name">Anero Monero</div>
                                                <div class="block-collections__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus. Ut a lectus magna. Mauris sed coqut odio.</div>
                                                <div class="block-collections__button">
                                                    <a href="shop-grid.html" class="btn btn-primary">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- block-collections / end -->
                                                <!-- block-posts-carousel -->
                                                <div class="block block-posts-carousel">
                            <div class="container">
                                <div class="block__title">
                                    <h2 class="decor-header decor-header--align--center">Latest Blog Posts</h2>
                                </div>
                                <div class="block-posts-carousel__slider slider slider--with-arrows">
                                    <div class="owl-carousel">
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post1">
                                                    <img srcset="images/posts/post1.jpg, images/posts/post1@2x.jpg 2x" src="images/posts/post1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">April 04, 2019</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post1">10 Tips Membeli Rumah Bagi Keluarga Muda</a>
                                                </div>
                                                <div class="post-card__description">Membeli rumah pasti terdapat dalam daftar prioritas para pasangan muda, yang baru menikah. Tapi tentu Anda tahu bila urusan membeli rumah, apalagi untuk pertama kali, bukanlah perkara mudah.</div>
                                                <a href="post1" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post2">
                                                    <img srcset="images/posts/post2.jpg, images/posts/post2@2x.jpg 2x" src="images/posts/post2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">April 01, 2019</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post2">6 Tips Cerdas Beli Apartemen yang Nyaman</a>
                                                </div>
                                                <div class="post-card__description">Bagi Anda yang tinggal di kawasan perkotaan atau bahkan pinggiran kota, memiliki hunian pribadi kerap menjadi hal yang sulit untuk diwujudkan. Selain harganya yang sangat tinggi, ketersediaan rumah tapak juga memang terbilang sangat minim, terutama di</div>
                                                <a href="post2" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post3">
                                                    <img srcset="images/posts/post3.jpg, images/posts/post3@2x.jpg 2x" src="images/posts/post3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">Maret 28, 2019</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post3">9 Tips Cara Membuat Taman Depan Rumah Sendiri</a>
                                                </div>
                                                <div class="post-card__description">Siap untuk menjajaki tips cara membuat taman depan rumah? Sudah yakin kalau kamu punya kemampuan dalam tata cara membuat taman depan rumah? Jangan cemas, ada Saya yang siap memberikan 9</div>
                                                <a href="post3" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post4">
                                                    <img srcset="images/posts/post4.jpg, images/posts/post4@2x.jpg 2x" src="images/posts/post4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">Maret 24, 2019</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post4">6 Tips Memilih Furniture Untuk Rumah Minimalis Paling Mudah dan Tepat</a>
                                                </div>
                                                <div class="post-card__description">Tips Memilih Furniture bisa menjadi panduan yang baik bagi anda apabila ingin membeli furniture. Perabot rumah atau biasanya disebut furniture memang tak bisa lepas dari yang namanya tempat tinggal atau rumah. Begitu juga tempat tinggal atau rumah tanpa perabot atau yang disebut furniture akan terasa kosong tiada berpenghuni.</div>
                                                <a href="post4" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- block-posts-carousel / end -->
                        <!-- block-posts-carousel / end -->
                    </div>
                    <!-- page__body / end -->
                </div>
                <!-- page / end -->
            </div>
@endsection