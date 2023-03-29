<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>عطور العربية للعود | أفضل أنواع العطور الشرقية والغربية  في السعودية</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Plugin css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        *,
        html,
        body {
            font-family: 'Alexandria', sans-serif;
        }

        svg,
        img {
            display: initial;
        }

        .header__menu--link {
            font-size: 1.3rem;
        }
    </style>
</head>

<body>

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>

            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>

    <x-header.layout />
    <!-- End preloader -->
    <main class="main__content_wrapper">
        {{ $slot }}
    </main>

    <x-footer />



    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="assets/js/vendor/popper.js" defer="defer"></script>
    <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/glightbox.min.js"></script>

    <!-- Customscript js -->
    <script src="assets/js/script.js"></script>

    <script>
        var swiper = new Swiper(".swiper_sales", {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // when window width is <= 499px
                450: {
                    slidesPerView: 2,
                    spaceBetweenSlides: 0
                },
                700: {
                    slidesPerView: 3,
                    spaceBetweenSlides: 0
                },

                // when window width is <= 999px
                1600: {
                    slidesPerView: 4,
                    spaceBetweenSlides: 0
                }
            }
        });

        var swiper2 = new Swiper(".swiper_category", {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
             breakpoints: {
                // when window width is <= 499px
                450: {
                    slidesPerView: 2,
                    spaceBetweenSlides: 0
                },

                // when window width is <= 999px
                1600: {
                    slidesPerView: 3,
                    spaceBetweenSlides: 0
                }
            }
        });
    </script>

</body>

</html>
