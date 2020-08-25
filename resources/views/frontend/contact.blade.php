@extends('frontendtemplate')
@section('sidebar')
<div class="container" style="margin-top: 100px">
	<h1 class="text-center mb-2"><strong>We're Here</strong></h1>
	<hr>
	<div class="row text-center mt-5">
		<div class="col-lg-4 ">
			<span class="fa-stack fa-2x mb-3" style="color:#fe7f9c;">
				<i class="fas fa-circle fa-stack-2x"></i>
				<i class="fas fa-map-marked-alt fa-stack-1x fa-inverse"></i>
			</span>
			<h3>Location</h3>
			<p class="text-center">Corner of 32nd,80th, Mandalay, Myanmar</p>
		</div>	
		<div class="col-lg-4">
			<span class="fa-stack fa-2x mb-3">
				<i class="fas fa-circle fa-stack-2x"></i>
				<i class="fas fa-mobile-alt fa-stack-1x fa-inverse"></i>
			</span>
			<h3>Phone Number</h3>
			<p class="text-center">+959782820812</p>
		</div>
		<div class="col-lg-4">
			<span class="fa-stack fa-2x mb-3">
				<i class="fas fa-circle fa-stack-2x"></i>
				<i class="fas fa-at fa-stack-1x fa-inverse"></i>
			</span>
			<h3>Email</h3>
			<p class="text-center">info@bright.com.mm</p>
		</div>				
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14801.246833757134!2d96.0976624!3d21.9609967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9b2a1e81fc171bb0!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2smm!4v1595114461140!5m2!1sen!2smm" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="my-5"></iframe>
</div>
@endsection