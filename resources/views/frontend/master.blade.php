<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Lucky Charm </title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
   
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    

	<!-- Favicon  -->
    <link rel="icon" href="images/Artboard 1 1.png">
</head>
<body>
 
 
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/"><img src="images/Artboard 1 1.png" alt="alternative">Lucky Charm</a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
      

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('customer')}}">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('news')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                            @endif
                        @endforeach
                        </div>
                     </li>
                </ul>
                <div>
                <ion-icon name="moon-outline" id="switch" class="switch"></ion-icon>
                </div>
                <!-- <button  class="btn rounded-filled"><i id="dl-icon" class="fa-solid fa-moon"></i></button> -->
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{route('inquiry')}}">{{__('messages.inquiry')}}</a>
                </span>

                
                
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    

      
        <!-- Header -->
        <header id="header" class="header" style="padding-bottom: 90px;">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <div class="section-title">{{__('messages.section-title')}}</div>
                        <h1 class="h1-large">{{__('messages.Monetization')}}</h1>
                        <p>{{__('messages.Documentation')}}</p>
                        {{-- <a class="btn-solid-lg" href="#services">Read More</a> --}}
                        <a class="quote" href="{{route('inquiry')}}"><i class="fas fa-paper-plane"></i>{{__('messages.inquiry')}}</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" style=" width: 100%;" src="images/img/image002.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->


            
        </div> <!-- end of container -->
    </header> <!-- end of header -->


  




    <!-- Services -->
    <div id="services" class="cards-1" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Monetization</h1>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon blue">
                            <!-- <span class="far fa-file-alt"></span> -->

                            <img src="images/img/image004.jpg" alt="">
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">Monetization</h5>
                            <p>{{__('messages.cards1')}}</p>
                        
                           
                        
                           <a href="#Monetization-1" class="btn-details">{{__('messages.read-more')}}</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon yellow">
                            <img src="images/image006.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Social Media Monetization </h5>
                            <p>{{__('messages.cards2')}}</p>
                          

                            <a href="#Monetization-2" class="btn-details">{{__('messages.read-more')}}</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon red">
                            <img src="images/img/image008.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Commercial Monetization</h5>
                            <p>{{__('messages.cards3')}}</p>
                            <a href="#Monetization-3" class="btn-details">{{__('messages.read-more')}}</a>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <div class="detail4">
        <div   id="Monetization-1" class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="image-container">
                        <img class="img-fluid" src="images/img/image004.jpg" alt="alternative">
                    </div> 
              
                </div> <!-- end of col -->
                
                <div class="col-lg-6 col-xl-7">
                    <div  class="text-container" id="detail4">
                        <h2 style="line-height: 45px"><span>{{__('messages.detail4')}}</span> <p style="font-weight: 600; padding-top: 15px;"> {{__('messages.detail4P')}}</p> </h2> 
                        <p>{{__('messages.detail4P2')}}
                            </p>
                      
                        {{-- <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Read More</a> --}}
                    </div> 
                </div>
               
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

   


    <!-- Details 2 -->
    <div  id="Monetization-2" class="counter">
        <div  class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2 style="padding-bottom: 20px;"><span style="font-weight: 600;">Social Media Monetization</span></h2>
                        <p>{{__('messages.Monetization-2')}}</p>
                        


                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/image006.jpg"  style="height: auto; width: auto;"  alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->

        
    </div> <!-- end of counter -->
    <!-- end of details 2 -->

    <div class="detail4" style="padding-bottom: 0px;">
        <div   id="Monetization-3" class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="image-container">
                        <img class="img-fluid" src="images/img/image008.png" alt="alternative">
                    </div> 
              
                </div> <!-- end of col -->
                
                <div class="col-lg-6 col-xl-7">
                    <div class="text-container">
                        <h2 class="commerical-head">Commercial Monetization</h2> 
                        <p class="commerical-p" style="padding-top: 20px;">{{__('messages.Monetization-3')}} </p>
                      
                       
                    </div> <!-- end of text-container -->
                </div>
                {{-- <div class="col-md-12">
                <p class="commerical-p">{{__('messages.commerical-p')}}</p> 
                </div> --}}
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- ------------------------------ -->


    <div  class="counter" style="padding-bottom: 0px;">
        <div  class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2 style="padding-bottom: 20px;"><span style="font-weight: 600;">Content Writing</span></h2>
                        <p> {{__('messages.content-writing')}}
                        </p>
                    

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/image010.jpg"  style="height: auto; width: auto; padding-top: 50px;"   alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->

        
    </div>

<div class="client-title">
    <h4 style="font-size:25px">{{__('messages.our-partner')}}</h4>
    <p>{{__('messages.our-partner-p')}} </p>
</div>

    <!-- Testimonials -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                   
                                      
                                        <div class="card-body">
                                          
                                            <div class="details">
                                                <img class="testimonial-image" src="images/client/kbzpay.png" alt="alternative">
                                                <div class="text">
                                                 
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                            
                                        </div>
                                    
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                  
                                     
                                        <div class="card-body">
                                         
                                            <div class="details">
                                                <img class="testimonial-image" src="images/client/lota.png" alt="alternative">
                                                <div class="text">
                                                  
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    
                                        <div class="card-body">
                                           
                                            <div class="details">
                                                <img class="testimonial-image" src="images/client/mc.png" alt="alternative">
                                                <div class="text">
                                                 
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                   
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                   
                                       
                                        <div class="card-body">
                                           
                                            <div class="details">
                                                <img class="testimonial-image" src="images/client/mpt.png" alt="alternative">
                                                <div class="text">
                                                  
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                      
                                    </div> 
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->



    

    <!-- Invitation -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h4 style="font-size:25px">{{__('messages.our-services-header')}}</h4>
                        <p class="p-large">{{__('messages.our-services')}}</p>

                        <a href="{{route('services')}}" class="services_detail">{{__('messages.read-more')}}</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of invitation -->



   


@yield('footer')


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg p-small">
                      
                        <li><a href="{{route('terms')}}">Terms & Conditions</a></li>
                    
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="#">LuckyCharm</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Distributed By: <a href="https://themewagon.com/" target="_blank">LuckyCharm</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
    





</body>
</html>