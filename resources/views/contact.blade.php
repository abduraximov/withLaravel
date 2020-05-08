@extends('layouts/app', ['title' => 'contact'])
@section('content')
<!-- contact -->

<section class="site-section bg-light" id="contact-section" data-aos="fade">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">Bog`lanish</h2>
            </div>
          </div>
          <div class="row mb-5">
            
  
  
            <div class="col-md-4 text-center">
              <p class="mb-4">
                <span class="icon-room d-block h4 text-primary"></span>
                <span>G`olib street , Hazorasp Dis , Xorezm Region</span>
              </p>
            </div>
            <div class="col-md-4 text-center">
              <p class="mb-4">
                <span class="icon-phone d-block h4 text-primary"></span>
                <a href="#">+998 99-500-43-31</a>
              </p>
            </div>
            <div class="col-md-4 text-center">
              <p class="mb-0">
                <span class="icon-mail_outline d-block h4 text-primary"></span>
                <a href="#">abdurakhimovy@gmail.com</a>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-5">
  
              
  
              <form action="#" class="p-5 bg-white">
                
                <h2 class="h4 text-black mb-5">Bog`lanish</h2> 
  
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Ism</label>
                    <input type="text" id="fname" class="form-control" placeholder="Ismingiz">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Familya</label>
                    <input type="text" id="lname" class="form-control" placeholder="Familyangiz">
                  </div>
                </div>
  
                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">E-mail</label> 
                    <input type="email" id="email" class="form-control" placeholder="E-mail pochtangiz">
                  </div>
                </div>
  
                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Mavzu:</label> 
                    <input type="subject" id="subject" class="form-control" placeholder="Xabar mavzusi">
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Xabar</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Xabaringiz matni yoki savolingizni yozing..."></textarea>
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Xabarni Yubormoq" class="btn btn-outline-success text-black">
                  </div>
                </div>
  
    
              </form>
            </div>
            
          </div>
        </div>
      </section>

<!-- end contact -->
@endsection