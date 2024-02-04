@extends('frontend.master')

@section('footer')
{{-- <div class="container">
    <div class="row justify-content-center">
        <h3>{{__('messages.welcome')}}</h3>
    </div>
</div> --}}

  



   <!-- Footer -->
   <div class="footer bg-gray">
    <img class="decoration-city" src="images/decoration-city.svg" alt="alternative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <h4>Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci ut pellentes troc</h4> -->
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="#your-link">
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
                        <a href="#your-link">
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

@endsection