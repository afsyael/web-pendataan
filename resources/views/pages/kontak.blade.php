@extends('pages-layout.app')
@section('kontak', 'active')
@section('content')
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Kontak</li>
          </ol>
          <h2>Kontak</h2>
  
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          @if(session('status'))
            <div class="alert alert-success alert-dismissible" role="alert">
              <div class="alert-message">
                <span><strong>{{ session('status') }}</strong></span>
              </div>
            </div>
          @endif
        <div class="section-title">
          <h2>Kontak</h2>
          <p>Hubungi kami</p>
        </div>
        <div class="row">
        @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <div class="alert-message">
            @foreach ($errors->all() as $error)
               <span><strong>{{ $error }} <br/></strong></span>
            @endforeach
          </div>
        </div>
        @endif
          <div class="col-lg-7 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jalan Merdekaa No. 21 Kota Palembang, Sumatera Selatan 30136, indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@bppd.palembang.go.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telpon:</h4>
                <p>(0711) 352-282</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15937.553157899389!2d104.7580349!3d-2.989589!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13ef05d0d188d21b!2sRegional%20Tax%20Management%20Agency!5e0!3m2!1sen!2sid!4v1629992081440!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div>

          <div class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{url('/insertkritik')}}" method="post">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <br>
              <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection