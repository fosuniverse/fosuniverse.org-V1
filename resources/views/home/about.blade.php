@extends('layouts.home')

@section('content')

  <br> <br> <br> <br>
  



<!-- Section one -->
<section class="bg-success" style="margin-bottom: 70px;">
			<div>
				<div>
					<div style="padding: 60px 0px 60px 0px;">
						<div>
					
						</div>
						<span></span>
						<h2 style="margin-left: 15%; margin-top: 50px;;">
							<span class="fa fa-globe"></span>
						</h2>
						<h5 class="text-white" style="margin-left: 15%; margin-right:15%; line-height: 2em;">
						<strong style="font-size: 2em; text-align: center;">A little more about <span class="text-dark">FOS</span>UNIVERSE</strong><br><br>
						<span class="text-dark">FOS</span>Universe is a non-profit organization developing Open Source software applications 
						and Open Hardware together with a global community from its base in Africa which focus 
						on Creating Projects and Making Projects Sustainable, Mentorships Programs, Events meetup. 
						It is our goal to provide access to open technologies, science applications and knowledge 
						that improve people's lives. We aim to let people adapt and change technology according to 
						their ideas through an Open Access approach. 
						<p>
							<span class="text-dark">FOS</span>Universe was established in 2019 . We organize 
						and participate in conferences, meetups and code camps. We currently have chapers in 4 cities 
						within Africa.
						</p>
						<p>
							<span class="text-dark">FOS</span>Universe runs a number of Meetup Event, coding programs and mentoring student 
						from high school to University level. Please join us and start contributing to our <a href="https://github.com/fosuniverse">projects </a>, 
						participate as a coder, designer, organizer, hardware developer. <span><a class="btn btn-outline-light text-white" href="https://github.com/fosuniverse"><b>CONTRIBUTE NOW</b></a></span></h5>
						</p>	
					</div>
					
				</div>
			</div>
		</section>




<!--secttion 2-->
	<section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="commonTab">
						<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link btn-success our-mission" id="home-tab" data-toggle="tab" href="#philosophy" role="tab"
									aria-controls="philosophy" aria-selected="true">Our Mission</a>
							</li>
							<li class="nav-item">
								<a class="nav-link what-we-do" id="profile-tab" data-toggle="tab" href="#mission" role="tab"
									aria-controls="mission" aria-selected="false">What we do</a>
							</li>
							<li class="nav-item">
								<a class="nav-link why-we-do-it" id="contact-tab" data-toggle="tab" href="#community" role="tab"
									aria-controls="community" aria-selected="false">Why we do it</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="philosophy" role="tabpanel" aria-labelledby="home-tab">
								<div class="row mt-3">
									<div class="col-md-6 ">
										<h2>Our Mission</h2>
										<p>The mission of <span class="text-dark"><b>FOS</b></span><span class="text-success"><b>UNIVERSE</b></span> 
											is to improve people's lives by sharing open technologies
										 knowledge and resources to help build a sustainable Free Open Source software ecosystem.
										 </p>
									
									</div>
									<div class="col-md-6">
										<img class="img-fluid rounded shadow " src="{{ asset('img/pic.jpg') }}" alt="">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="profile-tab">
								<div class="row mt-3">
									<div class="col-md-6">
										<h2>What We Do</h2>
										<p>
											Our vision is to bring amazing people from different part of Africa together to create, 
											develop, design and make things with Open Source technologies, software and hardware and sahre our work
											 for the benefit of all.	
											</p>
	
											<p>
												We hope to organize Open Source Summits, science hack labs, meetups and coding programs with 
												developers, designers and contributers.We will incubate projects into companies to support 
												the development of a sustainable FOSS ecosystem, we hope to do this with our monthly 
												<span class="text-dark"><b>FOS</b></span><span class="text-success"><b>UNIVERSE</b></span> meetups across different chapters.
											</p>
									</div>
									<div class="col-md-6">
										<img class="img-fluid rounded shadow mt-20"
											src="https://d33wubrfki0l68.cloudfront.net/ecd6bdb12d01aa5dc0a90742153ac46e29eea2a8/76e68/images/36766183_1562469023863682_7511625847669784576_o.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="community" role="tabpanel" aria-labelledby="contact-tab">
								<div class="row mt-3">
									<div class="col-md-6">
										<h2>Why We Do It</h2>
										<p>
											Our main goal is to improve people's lives by sharing Open Tech solutions. We want to see that 
											information technology and science has a positive impact in Africa society. We believe this can 
											be achieved if people have access to digital tools and knowledge. Open Source software offer free 
											and open access. 
										</p>
										<p>
											At <span class="text-dark"><b>FOS</b></span><span class="text-success"><b>UNIVERSE</b></span> we are 
											excited how sharing is possible on all layers from software, hardware and 
											design to data and knowledge and we work hard to enable people to participate in the sharing society, 
											expand knowledge, tools and opportunities, freedom of communication and expression for everyone.
										</p>
									</div>
									<div class="col-md-6">
										<img class="img-fluid rounded shadow mt-20"
											src="images/36838648_1562468937197024_7852850227559006208_o.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Section Three -->
<section style="background:#ccc; margin-bottom: 70px; margin-top: 100px;">
	<div>
		<div>
			<div style="padding: 60px 0px 60px 0px;">
				<div>
					<h1 style="margin-top: 50px; margin-left: 5%; text-decoration: underline;">Join Us</h1>
				</div>
				<span></span>
				<h5 style="margin-left: 5%; margin-right:5%; line-height: 2em;">
					A community of passionate technology enthusiasts who dedicate work towards building, 
					enhancing and adding value to open source tools in Africa.</h5>
					<a href="https://fosuniverse.zulipchat.com/login/#narrow/is/private" class="btn btn-outline-success btn-lg btn-circle text-dark" style="margin-left: 5%;">
						<b>Join Our Community </b>
						<span class="fa fa-long-arrow-right"></span>
					</a>
			</div>
		</div>
	</div>

</section>


@endsection


@section('scripts')

<script>

$(function(){

$('.our-mission').click(function(){
	$('.what-we-do, .why-we-do-it').removeClass('btn-success');
	$(this).addClass('btn-success');
});



$('.what-we-do').click(function(){
	$('.our-mission, .why-we-do-it').removeClass('btn-success');
	$(this).addClass('btn-success');
});



$('.why-we-do-it').click(function(){
	$('.our-mission, .what-we-do').removeClass('btn-success');
	$(this).addClass('btn-success');
});


});

</script>

@endsection