<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eigentum Corp</title>    
    <link rel="icon" type="image/png" href="images/Logo-Eigentum-Corp.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <script src="vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="../../vendor/fontawesome-5.6.1/css/all.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-5');
    </script>
    
</head>
<body>
    <!-- Navigasi Menu -->
    @include('navbar')
    <!-- content body -->
    @yield('content')
    
</body>
</html>