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
                                                <a href="post.html">
                                                    <img srcset="images/posts/post1.jpg, images/posts/post1@2x.jpg 2x" src="images/posts/post1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">November 30, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">New Collection Of Office Furniture Anero Manero Will Go On Sale May 27</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post2.jpg, images/posts/post2@2x.jpg 2x" src="images/posts/post2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">October 19, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">Donec viverra, nulla a accumsan finibus commodo ligula</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post3.jpg, images/posts/post3@2x.jpg 2x" src="images/posts/post3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">August 8, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">Aliquam facilisis dapibus eros sit amet fermentum vestibulum congue</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post4.jpg, images/posts/post4@2x.jpg 2x" src="images/posts/post4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">Jule 11, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">Nullam at varius sapien sed sit amet condimentum elit</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post5.jpg, images/posts/post5@2x.jpg 2x" src="images/posts/post5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">June 8, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">Vestibulum leo sapien sollicitudin at magna eu interdum congue feugiat</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post6.jpg, images/posts/post6@2x.jpg 2x" src="images/posts/post6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">May 27, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">Maecenas consequat elementum orci sit amet dictum</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post7.jpg, images/posts/post7@2x.jpg 2x" src="images/posts/post7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">April 23, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">Nullam vehicula lorem nec augue semper ac vehicula enim tempus</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post8.jpg, images/posts/post8@2x.jpg 2x" src="images/posts/post8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">March 12, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">In hac habitasse platea dictumst praesent vehicula vitae pulvinar maximus</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post9.jpg, images/posts/post9@2x.jpg 2x" src="images/posts/post9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">February 28, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">Curabitur quam augue vestibulum in mauris fermentum pellentesque libero</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
                                            </div>
                                        </div>
                                        <div class="post-card post-card--layout--default">
                                            <div class="post-card__image">
                                                <a href="post.html">
                                                    <img srcset="images/posts/post10.jpg, images/posts/post10@2x.jpg 2x" src="images/posts/post10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__date">January 7, 2018</div>
                                                <div class="post-card__name">
                                                    <a class="post-card__name-link" href="post.html">Suspendisse dignissim luctus metus vitae aliquam vestibulum sem odio</a>
                                                </div>
                                                <div class="post-card__description">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                <a href="post.html" class="btn btn-primary btn-xs post-card__read-more">Read More</a>
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