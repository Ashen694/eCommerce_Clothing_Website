<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/logo2.png" type="">
    <title>Dress Code</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />

    <style>
        @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

        .container1{
            display: flex;
            justify-content: end;
        }
        .audun_success {
            color: #ffffff;
            background-color: #01ff00;
            font-family: 'Source Sans Pro', sans-serif;
            border-radius:.5em;
            margin: 10px 0px;
            padding:12px;
            width: 400px;
        }
    </style>

</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    <div class="container1 text-center">
        @if(session('success'))
            <div id="alertDiv" class="audun_success">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                Order Placed Successfully
            </div>
        @endif
    </div>
    @include('home.slider')
    <!-- end slider section -->
</div>
<!-- why section -->
    @include('home.why')
<!-- end why section -->

<!-- arrival section -->
    @include('home.new_arival');
<!-- end arrival section -->

<!-- product section -->
    @include('home.product')
<!-- end product section -->

<!-- subscribe section -->
    @include('home.subscribe')
<!-- end subscribe section -->
<!-- client section -->
    @include('home.client')
<!-- end client section -->
<!-- footer start -->
    @include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Group 04</a><br>

        Distributed By <a href="" target="_blank">G4</a>

    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<script>
    setTimeout(function () {
        var alertDiv = document.getElementById('alertDiv');
        if (alertDiv) {
            alertDiv.style.opacity = '0';
            setTimeout(function () {
                alertDiv.style.display = 'none';
            }, 2000); // 1 second for the fade-out animation
        }
    }, 4000); // 5000 milliseconds = 5 seconds
</script>

<script>
    $(document).ready( function () {
        $('#example').DataTable({
            "autoWidth": false,
        });
    } );
</script>
</body>
</html>
