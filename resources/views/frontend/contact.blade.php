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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">
   

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Favicon  -->
    <link rel="icon" href="images/Artboard 1 1.png">
</head>



<body data-bs-spy="scroll" data-bs-target="#navbarExample">
    
    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/"><img src="images/Artboard 1 1.png" alt="alternative">Lucky Charm</a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

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
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{route('inquiry')}}">{{__('messages.inquiry')}}</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Contact Us</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header>

   


    {{-- <div class="ex-basic-1 pt-5 pb-5">
        <div class="container2">
          
                <div class="col-lg-12">
                    
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.726322550019!2d96.19594247389227!3d16.839927718348033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1937e7ef672c3%3A0x4c1a400b25f6cb70!2sHTUT%20Co.%2CLtd.%40%20HTUT%20Company!5e0!3m2!1sen!2smm!4v1705423362774!5m2!1sen!2smm" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    --}}


    <!-- ----contact----- -->

    <div id="contact" class="form-1" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h2 class="h2-heading"><span>Contact Us</span></h2> --}}
                    
                    <div class="row">
                        <div class="col-md-6">
                           <h5 style="text-align: left;"> Myanmar Representative</h5>
                            <ul class="list-unstyled mb-5">
                                <li  i class="d-flex mb-2" style="text-align: left;">
                                  <span class="mr-3" style="font-size: 15px; font-weight:700;"><i class="fas fa-map-marker-alt"></i> 
                                    &nbsp;No. (8), Moe Ma Kha (1) Street, Ma Li Kha Garden Housing, Thingangyun Township, Yangon, Myanmar.
                                  </span>
                                
                                </li>
                                <li class="d-flex mb-2">
                                    <span class="mr-3" style=" font-size: 15px; font-weight:700;"><i class="fas fa-phone"></i> 
                                        &nbsp;<a href="tel:00817202212">Myanmar : +95 9778899880</a>
                                      </span>
                                </li>

                                <li class="d-flex mb-2">
                                    <span class="mr-3" style=" font-size: 15px; font-weight:700;">
                                        <i class="fas fa-envelope"></i> &nbsp;<a href="mailto:lorem@ipsum.com">hello@luckycharm.money</a>
                                      </span>
                                </li>
                              
                              </ul>
                        </div>

                        <div class="col-md-6">
                            <h5 style="text-align: left;"> Bangkok Office</h5>
                             <ul class="list-unstyled mb-5">
                                 <li class="d-flex mb-2" style="text-align: left;">
                                   <span class="mr-3" style="font-size: 15px; font-weight:700;"><i class="fas fa-map-marker-alt"></i> 
                                     &nbsp; 9/1, The Preston Townhome, Krungthep Kritha Soi 7, Huamark, Bangkapi, Bangkok 10240
                                   </span>
                                 
                                 </li>
                                 <li class="d-flex mb-2" style="text-align: left;">
                                     <span class="mr-3" style=" font-size: 15px; font-weight:700;"><i class="fas fa-phone"></i> 
                                         &nbsp;<a href="tel:00817202212">Bangkok : +66813727513 , +0813727513</a>
                                       </span>
                                 </li>

                                 <li class="d-flex mb-2">
                                    <span class="mr-3" style=" font-size: 15px; font-weight:700;">
                                        <i class="fas fa-envelope"></i> &nbsp;<a href="mailto:lorem@ipsum.com">hello@luckycharm.money</a>
                                      </span>
                                </li>
                               </ul>
                         </div>

                     
                        
                    </div>

                    


                    {{-- <p class="p-heading"><span style="font-weight: bold;">Myanmar :</span> No. (8), Moe Ma Kha (1) Street, Ma Li Kha Garden Housing, Thingangyun Township, Yangon, Myanmar. </p> --}}


                    {{-- <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;Myanmar & Bangkok</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">Myanmar: +95 9778899880</a></li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">Bangkok: +66813727513 / +0813727513</a></li>
                        
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:lorem@ipsum.com">info@lucychainmyanmar.com</a></li>
                    </ul> --}}
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    
               
                    <form action="https://api.web3forms.com/submit" method="POST" onsubmit="return validateRecaptcha();">

                        <input type="hidden" name="access_key" value="27d3cfad-9fcb-4639-b39b-8baf4648d863">
                        
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="name" placeholder="Name" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="email" placeholder="Email" required>
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" placeholder="Message" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Le9wGApAAAAAAZyvnKRorbqTjXcZoBxplKcunn6"></div>
                            <div id="error-message" style="display: none; position: static;">Please complete the reCAPTCHA validation.</div>

                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    
                    <script>
                        function validateRecaptcha() {
                            var response = grecaptcha.getResponse();
                    
                            if (response.length === 0) {
                                    document.getElementById('error-message').style.display = 'block';
                                    return false;
                                }

                    
                            // Create FormData object to store form data
                            var formData = new FormData();
                            formData.append('access_key', '27d3cfad-9fcb-4639-b39b-8baf4648d863');
                            formData.append('name', document.getElementsByName('name')[0].value);
                            formData.append('email', document.getElementsByName('email')[0].value);
                            formData.append('message', document.getElementsByName('message')[0].value);
                            // Add other form fields as needed
                            formData.append('g_recaptcha_response', response);
                    
                            // Perform the form submission using fetch
                            fetch('https://api.web3forms.com/submit', {
                                method: 'POST',
                                body: formData,
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                // Redirect to the desired web page
                                window.location.href = 'https://web3forms.com/success'; // Change the URL accordingly

                                // return response.json();
                            })
                            .catch(error => {
                                // Handle error
                                console.error('There was a problem with the fetch operation:', error);
                            });
                    
                            // Prevent the default form submission
                            return false;
                        }
                    </script>
                    
 

                </div> 
            </div> 
        </div> 
    </div> 




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
                            <a href="https://www.tiktok.com/@luckycharm.money">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fa-brands fa-tiktok fa-stack-1x"></i>
                            </a>
                        </span>
                       
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/luckycharm.money/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.youtube.com/channel/UCSohy6gIKCrGNhI2fESTI1g">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>  <!-- end of footer -->  
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
    	


    <script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
   
</body>
</html>