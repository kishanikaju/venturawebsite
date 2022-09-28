
  <?php $page= "about-us"?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
   <link rel="stylesheet" href="http://localhost:8080/assets/css/bootstrap.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
     <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
   
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: linear-gradient(180deg, #1E88E5, #fff);
            background-repeat: no-repeat;
        }

        .card {
            box-shadow: 0px 4px 8px 0px #BDBDBD;
        }

        .profile-pic {
            width: 100px !important;
            height: 100px;
            box-shadow: 0px 4px 8px 0px #BDBDBD;
        }

        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev {
            background: 0 0;
            color: #1E88E5 !important;
            border: none;
            padding: 5px 20px !important;
            font: inherit;
            font-size: 50px !important;
        }

        .owl-carousel .owl-nav button.owl-next:hover,
        .owl-carousel .owl-nav button.owl-prev:hover {
            color: #0D47A1 !important;
            background-color: transparent !important;
        }

        .owl-dots {
            display: none;
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }

        .item {
            display: none;
        }

        .next {
            display: block !important;
            position: relative;
            transform: scale(0.8);
            transition-duration: 0.3s;
            opacity: 0.6;
        }

        .prev {
            display: block !important;
            position: relative;
            transform: scale(0.8);
            transition-duration: 0.3s;
            opacity: 0.6;
        }

        .item.show {
            display: block;
            transition-duration: 0.4s;
        }

        @media screen and (max-width: 999px) {

            .next,
            .prev {
                transform: scale(1);
                opacity: 1;
            }

            .item {
                display: block !important;
            }
        }
    </style>
</head>

<body >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        rel="stylesheet" />
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <div class="container-fluid px-3 px-sm-5 my-5 text-center">
        <h4 class="mb-5 font-weight-bold">What Our Client Say</h4>
        <div class="owl-carousel owl-theme">
            <div class="item first prev">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="https://i.imgur.com/gazoShk.jpg" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">Marielle Haag</h6>
                    <p class="content mb-5 mx-2">It was a total pleasure working with Ventura Technologies based in Pune. We found the project team who worked with us excellent, they worked with us as they are in our office, we did not feel the distance. The team is truly professional<br>
          The astounded aspect was at the quality of the work, the level of contact, the value for money, the genuineness of Aparna and her team in understanding the instructional methodology and bringing an efficient Content with great engagement capabilities.</p>
                                   </p>
                </div>
            </div>
            <div class="item show">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="https://i.imgur.com/oW8Wpwi.jpg" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">Ximena Vegara</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item next">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="https://i.imgur.com/ndQx2Rg.jpg" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">John Paul</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
            <div class="item last">
                <div class="card border-0 py-3 px-4">
                    <div class="row justify-content-center">
                        <img src="https://i.imgur.com/T5aOhwh.jpg" class="img-fluid profile-pic mb-4 mt-3">
                    </div>
                    <h6 class="mb-3 mt-2">William Doe</h6>
                    <p class="content mb-5 mx-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim.</p>
                </div>
            </div>
        </div>
    </div>
   
    <script type='text/javascript'>$(document).ready(function () {

            $('.owl-carousel').owlCarousel({
                mouseDrag: false,
                loop: true,
                margin: 2,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            $('.owl-prev').click(function () {
                $active = $('.owl-item .item.show');
                $('.owl-item .item.show').removeClass('show');
                $('.owl-item .item').removeClass('next');
                $('.owl-item .item').removeClass('prev');
                $active.addClass('next');
                if ($active.is('.first')) {
                    $('.owl-item .last').addClass('show');
                    $('.first').addClass('next');
                    $('.owl-item .last').parent().prev().children('.item').addClass('prev');
                }
                else {
                    $active.parent().prev().children('.item').addClass('show');
                    if ($active.parent().prev().children('.item').is('.first')) {
                        $('.owl-item .last').addClass('prev');
                    }
                    else {
                        $('.owl-item .show').parent().prev().children('.item').addClass('prev');
                    }
                }
            });

            $('.owl-next').click(function () {
                $active = $('.owl-item .item.show');
                $('.owl-item .item.show').removeClass('show');
                $('.owl-item .item').removeClass('next');
                $('.owl-item .item').removeClass('prev');
                $active.addClass('prev');
                if ($active.is('.last')) {
                    $('.owl-item .first').addClass('show');
                    $('.owl-item .first').parent().next().children('.item').addClass('prev');
                }
                else {
                    $active.parent().next().children('.item').addClass('show');
                    if ($active.parent().next().children('.item').is('.last')) {
                        $('.owl-item .first').addClass('next');
                    }
                    else {
                        $('.owl-item .show').parent().next().children('.item').addClass('next');
                    }
                }
            });

        });</script>
   

</body>

</html>