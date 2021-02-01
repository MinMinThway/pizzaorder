@extends('frontendmaster');
@section('content')

  
   
 <section class="ftco-intro">
      <div class="container-wrap">
        <div class="wrap d-md-flex">
          <div class="info">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>0978956632</h3>
                  <p>A small river named Duden flows</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-my_location"></span></div>
                <div class="text">
                  <h3>34 West 21th Street</h3>
                  <p>Hladen 721 Yangon 10016</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-clock-o"></span></div>
                <div class="text">
                  <h3>Open Monday-Friday</h3>
                  <p>8:00am - 9:00pm</p>
                </div>
              </div>
            </div>
          </div>
          <div class="social d-md-flex pl-md-5 p-4 align-items-center">
            <ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-about d-md-flex">
      <div class="one-half img" style="background-image: url({{asset('frontend_assets/images/about.jpg')}});"></div>
      <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> A Restaurant</h2>
        </div>
        <div>
          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
        </div>
      </div>
    </section>
  
    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
          <div class="col-md-4 contact-info ftco-animate">
            <div class="row">
              <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Website:</span> <a href="#">yoursite.com</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="#" class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                  </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div id="map"></div>
    <section class="ftco-section ftco-services">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Healthy Foods</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Original Recipes</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-menu">
      <div class="container-fluid">
        <div class="row d-md-flex">
          <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url({{asset('frontend_assets/images/about.jpg')}});">
          </div>
        
        </div>
      </div>
    </section>


@endsection