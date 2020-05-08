@extends('layouts/app', ['title' => 'more'])

@section('content')

<section class="site-section">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <div class="row mb-10">
              <div class="col-md-12 col-lg-12 mb-8 mb-lg-8">
                <div class="h-entry">
                  <img src="/images/slide_1.jpg" alt="Image" class="img-fluid">

                  
                    <h3 class="font-size-regular">{{$post->title}}</h3>
                  
                  <div class="meta mb-4">
                    <a href="#"><i class="fa fa-eye"></i></a>              
                    <span class="mx-2">&bullet;</span>
                   //
                    <span class="mx-2">&bullet;</span>
                    <a href="#">News</a>
                  </div>
                  
                  <h2 style="color:black">{{$post->content}}</h2>
                  
                </div> 
              </div>
            </div>
          </div> 
          
          

        </div>
      </div>
    </section>



@endsection