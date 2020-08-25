@extends('frontendtemplate')
<<<<<<< HEAD
@section('sidebar')
<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        {{-- <div><img class="img-fluid" src="frontend/images/img1.jpg"></div> --}}
        <h1 class="masthead-heading mb-0">Education Loan</h1>
        <h2 class="masthead-subheading mb-0">Brighter Future</h2>
        <a href="{{route('index.index')}}" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      
    </div>
    </div>
    {{-- <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div> --}}
    {{-- <div class="bg-circle-4 bg-circle"></div> --}}
    {{-- <div><img class="img-fluid" src="frontend/images/img1.jpg"></div> --}}
  </header>

  {{-- <section>
=======
@section('content')
<header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
    <img class="img-fluid d-block mx-auto" src="{{asset('frontend/frontendimg/bg1.jpg')}}" alt="" style=" width: 1400px; height: 300px">
  </header>

  <!-- Content section -->
  <section class="py-5">
>>>>>>> 9286ad19f89839ffa759c13973dc95d2373a6670
    <div class="container">
      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>
  </section>

  <!-- Image element - set the background image for the header in the line below -->
  <div class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </div>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
<<<<<<< HEAD
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="{{asset('frontend/img/01.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Let there be rock!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
=======
      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
>>>>>>> 9286ad19f89839ffa759c13973dc95d2373a6670
    </div>
  </section> --}}
  @endsection