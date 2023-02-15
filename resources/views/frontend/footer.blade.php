<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-one">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-sm-6 about-widget">
								<h6 class="title">About OUR Consulting</h6>
								<p>That started from this tropic port aboard this tiny ship today still want by theam government they survive on up to thetre east side to a deluxe as soldiers of artics fortune.</p>
								<div class="queries"><i class="flaticon-phone-call"></i> Any Queries : <a href="#">(+1) 234 567 900</a></div>
							</div> <!-- /.about-widget -->

							<div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post">
								<h6 class="title">RECENT POSTS</h6>
								<ul>
									@foreach ($recent_post as $latest)										
									<li class="clearfix">
										<img src="{{ asset($latest->image) }}" alt="" class="float-left">
										<div class="post float-left">
											<a href="{{ route('website.blogdetails', $row->id) }}">{{ $latest->title }}</a>
											<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>{{ $latest->created_at->format('d M Y') }}</div>
										</div>
									</li>
									@endforeach
								</ul>
							</div> <!-- /.footer-recent-post -->
							<div class="col-xl-2 col-lg-3 col-sm-6 footer-list">
								<h6 class="title">SOLUTIONS</h6>
								<ul>
										@foreach ($footer_menu as $row)
											
										<li><a href="#">{{ $row->menu_name }}</a></li>
										@endforeach									
						

									{{-- <li><a href="#">Business Services</a></li>
									<li><a href="#">Consumer Products</a></li>
									<li><a href="#">Financial Services</a></li>
									<li><a href="#">Software Research</a></li>
									<li><a href="#">Quality Resourcing</a></li> --}}
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter">
								<h6 class="title">NEWSLETTER</h6>
								<form action="#">
									<input type="text" placeholder="Name *">
									<input type="email" placeholder="Email *">
									<button class="theme-button-one">SUBSCRIBE</button>
								</form>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12"><p>&copy; Copyrights 2018. All Rights Reserved.</p></div>
							<div class="col-md-6 col-12">
								<ul>
									<li><a href="about.html">About</a></li>
									<li><a href="service.html">Solutions</a></li>
									<li><a href="#">FAQ’s</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ asset('frontend') }}/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="{{ asset('frontend') }}/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='{{ asset('frontend') }}/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='{{ asset('frontend') }}/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='{{ asset('frontend') }}/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="{{ asset('frontend') }}/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="{{ asset('frontend') }}/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('frontend') }}/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="{{ asset('frontend') }}/vendor/jquery.appear.js"></script>
		<script src="{{ asset('frontend') }}/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="{{ asset('frontend') }}/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="{{ asset('frontend') }}/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from html.creativegigs.net/charles/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 11:44:15 GMT -->
</html>