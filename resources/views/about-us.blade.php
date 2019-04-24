@extends('layouts.homelayouts') 
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <!-- page__body -->
    <div class="page__body">
        <div class="block__title">
            <h2 class="decor-header decor-header--align--center" style="margin: 40px;">About Us</h2>
        </div>
        <!-- block-gallery -->
        <div class="block block-gallery">
            <div class="container">
                <div class="block-gallery__body">
                    <ul class="block-gallery__images">
                        <li class="block-gallery__item"><img srcset="images/collections/collection1-lg.jpg, images/collections/collection1-lg@2x.jpg 2x" src="images/collections/collection1-lg.jpg" alt=""></li>
                        <li class="block-gallery__item"><img srcset="images/collections/collection2-lg.jpg, images/collections/collection2-lg@2x.jpg 2x" src="images/collections/collection2-lg.jpg" alt=""></li>
                        <li class="block-gallery__item"><img srcset="images/article/article1.jpg, images/article/article1@2x.jpg 2x" src="images/article/article1.jpg" alt=""></li>
                        <li class="block-gallery__item"><img srcset="images/article/article2.jpg, images/article/article2@2x.jpg 2x" src="images/article/article2.jpg" alt=""></li>
                    </ul>
                    <div class="block-gallery__aboutus">
                        <h3 class="block-gallery__aboutus-header decor-header">EIGENTUM CORP</h3>
                        <div>Wujudkan kediaman yang Anda mimpikan selama ini dengan Kami!</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- block-gallery -->
        <!-- block-teammates -->
        <div class="block block-teammates">
            <div class="container">
                <div class="block__title">
                    <h2 class="decor-header decor-header--align--center">Our Team</h2>
                </div>
                <div class="block-teammates__list">
                    <div class="block-teammates__item card">
                        <a href="#"><img class="block-teammates__image" srcset="images/teammates/teammate1.jpg, images/teammates/teammate1@2x.jpg 2x" src="images/teammates/teammate1.jpg" alt=""></a>
                        <div class="block-teammates__info">
                            <div class="block-teammates__name">Haniffarhan</div>
                            <div class="block-teammates__position">Manager</div>
                            <ul class="block-teammates__social">
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-teammates__item card">
                        <a href="#"><img class="block-teammates__image" srcset="images/teammates/teammate2.jpg, images/teammates/teammate2@2x.jpg 2x" src="images/teammates/teammate2.jpg" alt=""></a>
                        <div class="block-teammates__info">
                            <div class="block-teammates__name">Reezky Ilma</div>
                            <div class="block-teammates__position">System Analyst</div>
                            <ul class="block-teammates__social">
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-teammates__item card">
                        <a href="#"><img class="block-teammates__image" srcset="images/teammates/teammate3.jpg, images/teammates/teammate3@2x.jpg 2x" src="images/teammates/teammate3.jpg" alt=""></a>
                        <div class="block-teammates__info">
                            <div class="block-teammates__name">Raihan Hafiizh Q.</div>
                            <div class="block-teammates__position">Programmer</div>
                            <ul class="block-teammates__social">
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="block-teammates__item card">
                        <a href="#"><img class="block-teammates__image" srcset="images/teammates/teammate5.jpg, images/teammates/teammate5@2x.jpg 2x" src="images/teammates/teammate5.jpg" alt=""></a>
                        <div class="block-teammates__info">
                            <div class="block-teammates__name">Wisnu</div>
                            <div class="block-teammates__position">Programmer</div>
                            <ul class="block-teammates__social">
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://themeforest.net/user/kos9/portfolio" class="block-teammates__social-link" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="typography text-center mt-5">
                    <h4 class="mb-3">Interested in Working Together?</h4>
                    <p>Silahkan hubungi kami segera!</p>
                    <p><a href="/contact-us" class="btn btn-primary">Contact Us</a></p>
                </div>
            </div>
        </div>
        <!-- block-teammates / end -->
        <!-- block-testimonials -->
        <div class="block block-testimonials block--dark block-testimonials--dark">
            <div class="block__container container">
                <div class="block__title">
                    <h2 class="decor-header decor-header--align--center">Testimonials</h2></div>
                <div class="slider slider--dark slider--with-dots">
                    <div class="owl-carousel">
                        <div class="d-flex justify-content-center">
                            <div class="block-testimonials__item">
                                <div class="block-testimonials__icon"><i class="fas fa-quote-left"></i></div>
                                <div class="block-testimonials__author">Adam Taylor</div>
                                <div>Marketingnya sangat ramah.</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="block-testimonials__item">
                                <div class="block-testimonials__icon"><i class="fas fa-quote-left"></i></div>
                                <div class="block-testimonials__author">Helena Garcia</div>
                                <div>Marketingan sangat cepat menanggapi respon dari kostumer.</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="block-testimonials__item">
                                <div class="block-testimonials__icon"><i class="fas fa-quote-left"></i></div>
                                <div class="block-testimonials__author">Ryan Ford</div>
                                <div>Dengan harga yang minim, mendapat apa yang diinginkan.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- block-testimonials / end -->
    </div>
    <!-- page__body / end -->
    </div>
    <!-- page / end -->
    </div>
    <!-- site__body / end -->
</body>

</html>
@endsection