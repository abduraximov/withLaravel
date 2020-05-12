@extends('layouts/app', ['title' => 'welcome'])
@section('content')   
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase" data-aos="fade-up">Xush kelibsiz !!!</h1>
            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Zamon bilan hamnafas bo`lgan dizaynlar va eng zo`r bannerlar tayyorlash , photoshop xizmati , photoshop darslari faqat bizda !!!
            </p>
            <div data-aos="fade-up" data-aos-delay="100">
              <a href="{{ route('contact')}}" class="btn smoothscroll btn-primary mr-2 mb-2">Hoziroq bog`lanish</a>
            </div>
          </div>
            
        </div>
      </div>



    
    

    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Yangiliklar</h2>
          </div>
        </div>
        
        <div class="row" >
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_4.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                       
            <div class="owl-carousel slide-one-item-alt-text">
            @foreach($posts as $post)  
            <div>
                <h2 class="section-title mb-3">{{$post->title}}</h2>
                <h3>{{$post->shorttitle}}</h3>
                 <br>
                 <br>
                <p><a href="{{route('more', $post->id)}}" class="btn btn-primary mr-2 mb-2">Batafsil</a></p>
              </div>
              @endforeach
            
              
              
            </div>
            
            
          </div>
        </div>
      </div>
    </section>

<!-- blog section -->
  
    

    @endsection