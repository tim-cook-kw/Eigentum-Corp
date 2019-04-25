@extends('layouts.homelayouts')
@section('content')
<div class="site__body">
                <!-- page -->
                <div class="page">
                    <!-- page__header -->
                    <div class="page__header">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <ol class="page__header-breadcrumbs breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                                    </ol>
                                    <h1 class="page__header-title decor-header decor-header--align--center">Latest News</h1></div>
                            </div>
                        </div>
                    </div>
                    <!-- page__header / end -->
                    <!-- page__body -->
                    <div class="page__body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="block">
                                        <div class="posts-view">
                                            <div class="posts-view__list posts-list posts-list--layout--grid-2">
                                                <div class="posts-list__item">
                                                    <div class="post-card post-card--layout--default">
                                                        <div class="post-card__image">
                                                            <a href="post1"><img srcset="images/posts/post1.jpg, images/posts/post1@2x.jpg 2x" src="images/posts/post1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post-card__info">
                                                            <div class="post-card__date">April 4, 2019</div>
                                                            <div class="post-card__name"><a class="post-card__name-link" href="post1">10 Tips Membeli Rumah Bagi Keluarga Muda</a></div>
                                                            <div class="post-card__description">Membeli rumah pasti terdapat dalam daftar prioritas para pasangan muda, yang baru menikah. Tapi tentu Anda tahu bila urusan membeli rumah, apalagi untuk pertama kali, bukanlah perkara mudah.</div><a href="post1" class="btn btn-primary btn-xs post-card__read-more">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="posts-list__item">
                                                    <div class="post-card post-card--layout--default">
                                                        <div class="post-card__image">
                                                            <a href="post2"><img srcset="images/posts/post2.jpg, images/posts/post2@2x.jpg 2x" src="images/posts/post2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post-card__info">
                                                            <div class="post-card__date">April 1, 2018</div>
                                                            <div class="post-card__name"><a class="post-card__name-link" href="post2">6 Tips Cerdas Beli Apartemen yang Nyaman</a></div>
                                                            <div class="post-card__description">Bagi Anda yang tinggal di kawasan perkotaan atau bahkan pinggiran kota, memiliki hunian pribadi kerap menjadi hal yang sulit untuk diwujudkan. Selain harganya yang sangat tinggi.</div><a href="post2" class="btn btn-primary btn-xs post-card__read-more">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="posts-list__item">
                                                    <div class="post-card post-card--layout--default">
                                                        <div class="post-card__image">
                                                            <a href="post3"><img srcset="images/posts/post3.jpg, images/posts/post3@2x.jpg 2x" src="images/posts/post3.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post-card__info">
                                                            <div class="post-card__date">Maret 28, 2019</div>
                                                            <div class="post-card__name"><a class="post-card__name-link" href="post3">9 Tips Cara Membuat Taman Depan Rumah Sendiri</a></div>
                                                            <div class="post-card__description">Siap untuk menjajaki tips cara membuat taman depan rumah? Sudah yakin kalau kamu punya kemampuan dalam tata cara membuat taman depan rumah? Jangan cemas</div><a href="post3" class="btn btn-primary btn-xs post-card__read-more">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="posts-list__item">
                                                    <div class="post-card post-card--layout--default">
                                                        <div class="post-card__image">
                                                            <a href="post4"><img srcset="images/posts/post4.jpg, images/posts/post4@2x.jpg 2x" src="images/posts/post4.jpg" alt=""></a>
                                                        </div>
                                                        <div class="post-card__info">
                                                            <div class="post-card__date">Maret 24, 2019</div>
                                                            <div class="post-card__name"><a class="post-card__name-link" href="post4">6 Tips Memilih Furniture Untuk Rumah Minimalis Paling Mudah dan Tepat</a></div>
                                                            <div class="post-card__description">Tips Memilih Furniture bisa menjadi panduan yang baik bagi anda apabila ingin membeli furniture. Perabot rumah atau biasanya disebut furniture</div><a href="post4" class="btn btn-primary btn-xs post-card__read-more">Read More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="block">
                                        <aside class="sidebar">
                                            <!-- widget-about-blog -->
                                            <div class="widget widget--card">
                                                <div class="widget__title">
                                                    <h4 class="decor-header">About Blog</h4></div>
                                                <div class="widget__body">
                                                    <div class="widget-about-blog">Blog ini berisi tentang tips tips dalam properti semoga bermanfaat.</div>
                                                </div>
                                            </div>
                                            <!-- widget-about-blog / end -->
                                            <!-- widget-posts -->
                                            <div class="widget widget-posts widget--card">
                                                <div class="widget__title">
                                                    <h4 class="decor-header">Popular News</h4></div>
                                                <div class="widget__body">
                                                    <ul class="widget-posts__list">
                                                        <li class="widget-posts__item">
                                                            <a class="widget-posts__image" href="post1"><img srcset="images/posts/post1-thumbnail.jpg, images/posts/post1-thumbnail@2x.jpg 2x" src="images/posts/post1-thumbnail.jpg" alt=""></a>
                                                            <div class="widget-posts__info">
                                                                <div class="widget-posts__title"><a href="post1">10 Tips Membeli Rumah Bagi Keluarga Muda</a></div>
                                                                <div class="widget-posts__date">April 4, 2019</div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-posts__item">
                                                            <a class="widget-posts__image" href="post2"><img srcset="images/posts/post2-thumbnail.jpg, images/posts/post2-thumbnail@2x.jpg 2x" src="images/posts/post2-thumbnail.jpg" alt=""></a>
                                                            <div class="widget-posts__info">
                                                                <div class="widget-posts__title"><a href="post2">6 Tips Cerdas Beli Apartemen yang Nyaman</a></div>
                                                                <div class="widget-posts__date">April 1, 2019</div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-posts__item">
                                                            <a class="widget-posts__image" href="post3"><img srcset="images/posts/post3-thumbnail.jpg, images/posts/post3-thumbnail@2x.jpg 2x" src="images/posts/post3-thumbnail.jpg" alt=""></a>
                                                            <div class="widget-posts__info">
                                                                <div class="widget-posts__title"><a href="post3">9 Tips Cara Membuat Taman Depan Rumah Sendiri</a></div>
                                                                <div class="widget-posts__date">Maret 28, 2019</div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-posts__item">
                                                            <a class="widget-posts__image" href="post4"><img srcset="images/posts/post4-thumbnail.jpg, images/posts/post4-thumbnail@2x.jpg 2x" src="images/posts/post4-thumbnail.jpg" alt=""></a>
                                                            <div class="widget-posts__info">
                                                                <div class="widget-posts__title"><a href="post4">6 Tips Memilih Furniture Untuk Rumah Minimalis Paling Mudah dan Tepat</a></div>
                                                                <div class="widget-posts__date">Maret 24, 2019</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- widget-posts / end -->
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page__body / end -->
                </div>
                <!-- page / end -->
            </div>
            <!-- site__body / end -->
        </div>
    </div>
    <!-- site / end -->
@endsection