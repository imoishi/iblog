<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="Reprise Responsive web template, Bootstrap Web Templates" />
    <title>@yield('title')</title>
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style-starter.css')}}">
</head>
<body>
<!-- header -->
@include('frontend.includes.header')
<!-- //header -->


@yield('content')


<!-- Footers-14 -->
@include('frontend.includes.footer')
<!-- Footers-14 -->
<!-- Template JavaScript -->
<script src="{{asset('/')}}assets/frontend/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/')}}assets/frontend/js/theme-change.js"></script>
<!--/carousel-->
<script src="{{asset('/')}}assets/frontend/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo1").owlCarousel({
            loop: true,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for tesimonials carousel slider -->
<!-- gallery popup js -->
<script src="{{asset('/')}}assets/frontend/js/smartphoto.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sm = new SmartPhoto(".js-img-viwer", {
            showAnimation: false
        });
        // sm.destroy();
    });
</script>
<!-- //gallery popup js -->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->


<!--/MENU-JS-->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!--//MENU-JS-->
<script src="{{asset('/')}}assets/frontend/js/bootstrap.min.js"></script>

@stack('script')

</body>

</html>
