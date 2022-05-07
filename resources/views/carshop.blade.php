<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('sass/style.scss') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Auto Parts</title>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

       {{-- Nav BAr --}}

    <div class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Auto<span>PARTS</span></a>
            </div>
            <ul class="menu">
                <li><a href="#Home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>

    {{-- Text typing and images sliding --}}

    <div class="typing-sliding">
        {{-- sliding --}}
        <section class="slider" id="slider">
            <div class="slider-container">
                <div class="slider-content">
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @if(count($featureds) > 0)
                            @foreach ($featureds as $featured)
                                <div class="carousel-item {{$featured['id']==1? 'active':''}}" data-interval="10000">
                                <img src="{{ asset('images/' . $featured->picture) }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption">
                                        <h3 style="background-color: black">{{ $featured->model }}</h3>
                                        <p style="background-color: black">€ {{ $featured->price }}</p>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </section>
        {{-- typing --}}
        <section class="home" id="home">
            <div class="typing-container">
                <div class="typing-content">
                    <div class="text-1">
                        5 Reasons you should use 
                    </div>
                    <div class="text-2">
                        AutoPARTS
                    </div>
                    <div class="text-3">
                        Here you can 
                    </div>
                    <span class="typing"></span>
                    <br>
                    <br>
                    <br>
                    <a href="#">Get Started</a>
                </div>
            </div>
        </section>

    </div>


    <div class="uplad-form">
        <h2>Search for parts</h2>

        <form action="{{ url('carshop')}}" method="post">
            @csrf
            <input type="text" name="brand" placeholder="Brand">
            <input type="text" name="model" placeholder="Model">
            <input type="text" name="year" placeholder="Year">
            <input type="submit" value="search">
        </form>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
    $(window).scroll(function () {
        // sticky navbar on scroll script
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }

        // scroll-up button show/hide script
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function () {
        $('html').animate({ scrollTop: 0 });
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function () {
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function () {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

     // typing text animation script
     let typed1 = new Typed(".typing", {
         strings: ["O que o Rodrigo vai dizer numero1", "O que o Rodrigo vai dizer numero2", "O que o Rodrigo vai dizer numero3", "O que o Rodrigo vai dizer numero4", "O que o Rodrigo vai dizer numero5"],
         typeSpeed: 100,
         backSpeed: 60,
         loop: true
     });

     let typed = new Typed(".typing-2", {
         strings: ["O que o Rodrigo vai dizer numero1", "O que o Rodrigo vai dizer numero2", "O que o Rodrigo vai dizer numero3", "O que o Rodrigo vai dizer numero4", "O que o Rodrigo vai dizer numero5"],
         typeSpeed: 100,
         backSpeed: 60,
         loop: true
     });

    // owl carousel script
    // $('.carousel').owlCarousel({
    //     margin: 20,
    //     loop: true,
    //     autoplayTimeOut: 2000,
    //     autoplayHoverPause: true,
    //     responsive: {
    //         0: {
    //             items: 1,
    //             nav: false
    //         },
    //         600: {
    //             items: 2,
    //             nav: false
    //         },
    //         1000: {
    //             items: 3,
    //             nav: false
    //         }
    //     }
    // });
});

    </script>
</body>
</html>