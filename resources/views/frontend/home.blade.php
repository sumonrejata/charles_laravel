
@include('frontend.header')

			
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner" class="banner-one">
				@foreach ($slider as $row)
				<div data-src="{{ asset($row->image) }}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">{{ $row->desc }}</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">{{ $row->title_1 }}<br>{{ $row->title_2 }}</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				@endforeach

				{{-- <div data-src="{{ asset('frontend') }}/images/home/slide-2.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="{{ asset('frontend') }}/images/home/slide-3.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div> --}}


			</div> <!-- /#theme-main-banner -->
			
			
			<!-- 
			=============================================
				Top Feature
			============================================== 
			-->
			<div class="top-feature section-spacing">
				<div class="top-features-slide">
					@foreach ($featurs as $row)
					<div class="item">
						<div class="main-content" style="background:#fafafa;">
							<img src="{{ asset($row->image) }}" alt="">
							<h4><a href="#">{{ $row->title }}</a></h4>
							<p>{{ $row->description }}</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					@endforeach
				</div> <!-- /.top-features-slide -->
			</div> <!-- /.top-feature -->


			<!-- 
			=============================================
				About Company
			============================================== 
			-->
			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
						@foreach ($about as $row)
						<div class="col-lg-6 col-12"><img src="{{ asset($row->image)}}" alt=""></div>
						@endforeach
						<div class="col-lg-6 col-12">
							<div class="text">
								@foreach ($about as $row)
									<div class="theme-title-one">
										<h2>{{ $row->title }}</h2>
										<p>{{ $row->description }}</p>
									</div> <!-- /.theme-title-one -->
								@endforeach
								<ul class="mission-goal clearfix">
									@foreach ($about_sub as $row)	
										<li>
											<i class="icon {{ $row->icon }}"></i>
											<h4>{{ $row->title }}</h4>
										</li>
									@endforeach
								</ul> <!-- /.mission-goal -->
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay -->


			<!-- 
			=============================================
				Feature Banner
			============================================== 
			-->
			<div class="feature-banner section-spacing">
				<div class="opacity">
					<div class="container">
						<h2>We provide high quality services &amp; innovative solutions for the realiable growth</h2>
						<a href="#" class="theme-button-one">GET A QUOTES</a>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->


			<!-- 
			=============================================
				Service Style One
			============================================== 
			-->
			<div class="service-style-one section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our SERVICES</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
                            @foreach ($services as $service)
								<div class="col-xl-4 col-md-6 col-12">
									<div class="single-service">
										<div class="img-box"><img src="{{ asset($service->image) }}" alt=""></div>
										<div class="text">
											<h5><a href="service-details.html">{{ $service->title }}</a></h5>
											<p>{{ $service->desc }}</p>
											<a href="service-details.html" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.single-service -->
								</div> <!-- /.col- -->
                            @endforeach
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->



					<div class="contact-text">
						<h4>You can also send us an email and we’ll get in touch shortly, or Call us</h4>
						<h5><a href="#">info@support.com</a>  (or)  <a href="#">+1 234 6780 900</a></h5>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->


			<!--
			=====================================================
				Testimonial Slider
			=====================================================
			-->
			<div class="testimonial-section section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="wrapper">
							<div class="bg">
								<div class="testimonial-slider">
									@foreach ($testimonial as $row)	
										<div class="item">
											<p>“{{ $row->desc }}”</p>
											<div class="name">
												<h6>{{ $row->name }}</h6>
												<span>{{ $row->desig }}</span>
											</div> <!-- /.name -->
										</div> <!-- /.item -->
									@endforeach
								</div> <!-- /.testimonial-slider -->
							</div> <!-- /.bg -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.testimonial-section -->


			<!--
			=====================================================
				Our Team
			=====================================================
			-->
			<div class="our-team section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our TEAM</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							@foreach ($our_team as $row)
							<div class="col-lg-3 col-sm-6 col-12">								
								<div class="team-member">
									<div class="image-box">
										<img src="{{ asset($row->image) }}" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													@foreach ($our_team as $social)
														<li>
															<a href="{{ $social->social_link }}">
																<i class="fa fa-{{ $social->social_icon }}" aria-hidden="true">
																</i>
															</a>
														</li>
													@endforeach
			
												</ul>
												<p>{{ $row->desc }}</p>
											</div> <!-- /.hover-content -->
										</div> <!-- /.overlay -->
									</div> <!-- /.image-box -->

									<div class="text">
										<h6>{{ $row->name }}</h6>
										<span>{{ $row->desig }}</span>
									</div> <!-- /.text -->
								</div> <!-- /.team-member -->
							</div> <!-- /.col- -->
							@endforeach

						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-team -->


			<!--
			=====================================================
				Theme Counter
			=====================================================
			-->
			<div class="theme-counter section-spacing">
				<div class="container">
					<div class="bg">
						<h6>Company Success</h6>
						<h2>Some fun facts about our consulting</h2>

						<div class="cunter-wrapper">
							<div class="row">
								@foreach ($counter as $row)	
									<div class="col-md-3 col-6">
										<div class="single-counter-box">
											<div class="number"><span class="timer" data-from="0" data-to="{{ $row->number }}" data-speed="1200" data-refresh-interval="5">0</span>+</div>
											<p>{{ $row->title }}</p>
										</div> <!-- /.single-counter-box -->
									</div>  <!-- /.col- -->
								@endforeach
							</div> <!-- /.row -->
						</div> <!-- /.cunter-wrapper -->
						<a href="#" class="theme-button-one">VIEW CASE STUDIES</a>
					</div> <!-- /.bg -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-counter -->


			<!--
			=====================================================
				Free Consultation
			=====================================================
			-->
			<div class="consultation-form section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>FREE CONSULTATION</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
						<div class="col-xl-6 col-lg-7 col-12">
							<div class="form-wrapper">
								<form action="#" class="theme-form-one">
									<div class="row">
										<div class="col-md-6"><input type="text" placeholder="Name *"></div>
										<div class="col-md-6"><input type="text" placeholder="Phone *"></div>
										<div class="col-md-6"><input type="email" placeholder="Email *"></div>
										<div class="col-md-6">
											<select class="form-control" id="exampleSelect1">
										      <option>Service you’re looking for?</option>
										      <option>Business Services</option>
										      <option>Consumer Product</option>
										      <option>Financial Services</option>
										      <option>Software Research</option>
										    </select>
										</div>
										<div class="col-12"><textarea placeholder="Message"></textarea></div>
									</div> <!-- /.row -->
									<button class="theme-button-one">GET A QUOTES</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->
			</div> <!-- /.consultation-form -->



			<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
			<div class="partner-section bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>OUR <br>PARTNERS</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
								@foreach ($OurPartners as $row)									
								<div class="item"><img src="{{ asset($row->image) }}" alt=""></div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.partner-section -->


@include('frontend.footer')