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
    <title>Lucky Charm</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="/css/swiper.css" rel="stylesheet">
	<link href="/css/styles.css" rel="stylesheet">

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
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Our Services</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <!-- <div class="ex-basic-1 pt-5 pb-5">
        <div class="container" id="services">
            <div class="row">
                <div class="col-lg-12">
               
                    <img class="img-fluid mt-5 mb-3" style="height: 450px;"  src="images/img/image013.jpg" alt="alternative">
                </div> 
            </div> 
        </div>
    </div>  -->


    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    
                    <!-- Card -->
                    <div class="card">
                       
                    
                        <i class="fab fa-youtube" style='font-size:48px;color:red'></i>
                        <div class="card-body">
                            <h5 class="card-title">YouTube</h5>
                          
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                       
                    
                        <i class="fab fa-facebook-f" style="font-size:48px;color:blue"></i>
                        <div class="card-body">
                            <h5 class="card-title">Facebook</h5>
                          
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                       
                    
                        <i class="fab fa-tiktok" id="tiktok" style='font-size:48px;'></i>
                        <div class="card-body">
                            <h5 class="card-title">Tiktok</h5>
                          
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <div class="row" style="padding-top: 30px;">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                       
                    
                        <i class="fab fa-youtube" id="youtube" style='font-size:48px;'></i>
                        <div class="card-body">
                            <h5 class="card-title">YouTube Apply</h5>
                          
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                       
                    
                        <i class="fas fa-cogs" id="digital" style='font-size:48px;'></i>
                        <div class="card-body">
                            <h5 class="card-title">Digital Mark</h5>
                          
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                       
                    
                        <i class="fas fa-check" style='font-size:48px;color:blue'></i>
                        <div class="card-body">
                            <h5 class="card-title">Facebook BlueMark</h5>
                          
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> 
        </div> <!-- end of container -->
    </div>



    <div class="ex-basic-1 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                  
                   

                    <h2 class="mb-3" style="font-size:large;">{{__('messages.fb-ads')}}</h2>
                    <p> {{__('messages.fb-p')}}
                        </p>
                    <ol class="dark-services">
                        <li> 	{{__('messages.li-1')}} </li>
                        <li>   {{__('messages.li-2')}}</li>
                        <li> 	{{__('messages.li-3')}}</li>
                        <li> 	{{__('messages.li-4')}}</li>
                        <li> 	{{__('messages.li-5')}}</li>
                        <li> 	{{__('messages.li-6')}}</li>

                    </ol>
                    <p>{{__('messages.fb-ads-p')}}</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <div class="ex-basic-1 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
        
                   

                    <h2 class="mb-3" style="font-size:large;">{{(__('messages.instream-ads'))}}</h2>
                    <ul class="dark-services">
                       <li>{{__('messages.instream-li1')}}</li>
                       <li>{{__('messages.instream-li2')}}</li>
                       <li>{{__('messages.instream-li3')}}</li>
                       <li>{{__('messages.instream-li4')}}</li>
                       <li>{{__('messages.instream-li5')}}</li>
                       <li>{{__('messages.instream-li6')}}</li>
                       <li>{{__('messages.instream-li7')}}</li>
                       <li>{{__('messages.instream-li8')}}</li>
                       <li>{{__('messages.instream-li9')}}</li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <!-- Basic -->
    <div class="ex-basic-1 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <p>{{__('messages.services-monetization')}}</p>
                   

                    <h2 class="mb-3" style="font-size:large;">{{__('messages.fb-instream-ads')}}</h2>
                    <ul class="dark-services">
                        <li> 	{{__('messages.fb-instream-ads-li1')}}</li>
                        <li> 	{{__('messages.fb-instream-ads-li2')}}</li>
                        <li> 	{{__('messages.fb-instream-ads-li3')}}</li>
                        <li> 	{{__('messages.fb-instream-ads-li4')}}</li>

                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->



    <!-- Basic -->
    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                   
                    
                    
                 
                    <p class="fb-link" style="text-align: center;"> <a class="btn-link" href="{{route('inquiry')}}" style="padding-right: 10px;"><span style="font-size: 30px;">F</span>acebook In-Stream Ads Monetization</a>{{__('messages.Facebook In-Stream Ads Monetization')}}</p>
                    
              
                
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


 
     <!-- Footer -->
     <div class="footer bg-gray">
        <img class="decoration-city" src="images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h4>Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci ut pellentes troc</h4> -->
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/profile.php?id=61555830193025">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fa-brands fa-x-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                       
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/luckycharm.money/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>  <!-- end of footer -->  


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
    <script src="/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>