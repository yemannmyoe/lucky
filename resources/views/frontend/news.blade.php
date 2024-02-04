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

	<!-- Favicon  -->
    <link rel="icon" href="images/Artboard 1 1.png">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
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
    </nav> 
  <!-- end of navbar -->

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>News</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">

                    <h5 class="mt-5 mb-3">{{__('messages.news-header7')}}</h5>
                    <img class="news_img" src="images/img/News_01.jpg" alt="">
                  <p style="padding-top: 10px">{{__('messages.news-header7-p1')}}</p>
                  <p style="padding-top: 10px">{{__('messages.news-header7-p2')}}</p>
                  <p style="padding-top: 10px">{{__('messages.news-header7-p3')}}  <br>  <small>1, Feb, 2024</small></p>


                    <h5 class="mt-5 mb-3">{{__('messages.news-header6')}}</h5>
                        <img class="news_img" src="images/img/youtube-monetization.jpg" alt="">
                      <p style="padding-top: 10px">{{__('messages.news-header6-p')}}</p>

                      <h5>{{__('messages.news-header6-h1')}}</h5> 
                      <p>{{__('messages.news-header6-h1-p1')}}</p>

                      <h5>{{__('messages.news-header6-h2')}}</h5> 
                      <p>{{__('messages.news-header6-h2-p2')}}</p>
                      
                      <h5>{{__('messages.news-header6-h3')}}</h5> 
                        <p>{{__('messages.news-header6-h3-p3')}}</p>


                        <h5>{{__('messages.news-header6-h4')}}</h5>
                        <p>{{__('messages.news-header6-h4-p4')}}</p>
                    
                        <h5>{{__('messages.news-header6-h5')}}</h5>
                        <p>{{__('messages.news-header6-h5-p5')}} <br> <small>6, Dec, 2023</small>  </p>
                    
                    <h5 class="mt-5 mb-3">{{__('messages.news-header1')}}</h5>
                    <img class="news_img" src="images/image015.jpg" alt="">
                    <p class="mb-5" style="padding-top: 10px;">{{__('messages.news-header1-p')}}<a href="">{{__('messages.read-more')}}  </a>  <br>  <small>22, Nov, 2023</small>  </p>
                  
                    
                       
                  
                  
                    <h5 class="mt-5 mb-3">{{__('messages.news-header2')}}</h5>
                    <img class="news_img" src="images/image013.jpg" alt="">
                    <p class="mb-5" style="padding-top: 10px;">{{__('messages.news-header2-p')}}<a href="">{{__('messages.read-more')}}   </a>  <br>  <small>20, Oct, 2023</small>  </p>
                    
                    <h5 class="mt-5 mb-3">{{__('messages.news-header3')}}</h5>
                    <img class="news_img" src="images/image017.jpg" alt="">
                    <p class="mb-5" style="padding-top: 10px;">{{__('messages.news-header3-p')}}
                        <a href="">{{__('messages.read-more')}}  </a>  <br>  <small>3, Sep, 2023</small>   </p>


                        <h5 class="mt-5 mb-3">{{__('messages.news-header4')}}</h5>
                        <img class="news_img" src="images/image019.jpg" alt="">
                        <p class="mb-5" style="padding-top: 10px;"> {{__('messages.news-header4-p')}} <a href="">{{__('messages.read-more')}}  </a>   <br>  <small>5, Aug, 2023</small>  </p>
                   

                        <h5 class="mt-5 mb-3">{{__('messages.news-header5')}}</h5>
                        <img class="news_img" src="images/img/Amberflo_AI (1).jpg" alt="">
                      <p>{{__('messages.news-header5-p1')}}</p>
                       <p>{{__('messages.news-header5-p2')}}</p>
                      <p class="" style="padding-top: 10px;">
                        {{__('messages.news-header5-p3')}}
                        <a href="https://www.businesswire.com/news/home/20240116721915/en/Amberflo.io-Launches-a-Generative-AI-Monetization-Platform-Helping-Every-Company-Profit-From-the-Goldrush">{{__('messages.read-more')}}  </a>  <br>  <small>18, Jul, 2023</small>   </p>

     
                    
                        
                        
                     <div class="text-box mb-5">
                        <h3>Our Services</h3>
                        <p> {{__('messages.news-our-services')}}   <a href="{{route('services')}}">{{__('messages.read-more')}}</a></p>
                        
                    </div> <!-- end of text-box -->
                  
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
</div> <!-- end of footer -->  
<!-- end of footer -->


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