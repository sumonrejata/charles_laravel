@include('frontend.header')			

					<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Blog SINGLE</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Our Blog
			============================================== 
			-->
			<div class="our-blog section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-12">
							<div class="post-wrapper blog-details">
								<div class="single-blog">
									<div class="image-box">
										<img src="{{ asset('frontend') }}/images/blog/9.jpg" alt="">
										<div class="overlay"><a href="#" class="date">Feb 06, 2018</a></div>
									</div> <!-- /.image-box -->
									<div class="post-meta">
										<h5 class="title">Its like a kind of torture to have to watch the show</h5>
										<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for being a friend.</p>
										<p>That this group would somehow form a family that's the way we all became the Brady Bunch apartment in the sky moving on up to the east side a family to explore strange new worlds.</p>
										<p>This tropic port aboard this tiny ship today still wanted by the government apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card.</p>
										<div class="mark-text">
											<div class="row">
												<div class="col-md-5"><img src="images/blog/13.jpg" alt=""></div>
												<div class="col-md-7">
													<div class="inner-text">
														<p>Somehow form a family that's the way we all became the Brady Bunch apartment in the sky moving on up to the family tools explore strange new worlds us here each week my friends you're sure to get a smile.</p>
														<h6>- San Johnson -</h6>
													</div>
												</div> <!-- /.col- -->
											</div> <!-- /.row -->
										</div> <!-- /.mark-text -->
										<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for being a friend.</p>
										<p>To seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for new civilizations</p>
									</div> <!-- /.post-meta -->
									<div class="share-option clearfix">
										<ul class="tag-meta float-left">
											<li><i class="fa fa-tags" aria-hidden="true"></i> Tags :</li>
											<li><a href="#">Business,</a></li>
											<li><a href="#">Consulting,</a></li>
											<li><a href="#">Financial</a></li>
										</ul>
										<ul class="social-icon float-right">
											<li><i class="fa fa-share-alt" aria-hidden="true"></i> Share :</li>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										</ul>
									</div> <!-- /.share-option -->
								</div> <!-- /.single-blog -->
							</div> <!-- /.post-wrapper -->
							<!-- ==================== Related Post ================= -->
							<div class="inner-box">
								<div class="theme-title-one">
									<h2>RELATED POSTS</h2>
								</div> <!-- /.theme-title-one -->
								<div class="row">
									<div class="related-post-slider">
                                        @foreach ($related_posts as $row)
                                            
										<div class="item">
											<div class="single-blog">
												<div class="image-box">
													<img src="{{ asset('frontend') }}/images/blog/14.jpg" alt="">
													<div class="overlay"><a href="#" class="date">Feb 06, 2018</a></div>
												</div> <!-- /.image-box -->
												<div class="post-meta">
													<h5 class="title"><a href="#">{{ $row->title }}</a></h5>
													<a href="#" class="read-more">READ MORE</a>
												</div> <!-- /.post-meta -->
											</div> <!-- /.single-blog -->
										</div> <!-- /.col- -->
                                        @endforeach

										{{-- <div class="item">
											<div class="single-blog">
												<div class="image-box">
													<img src="{{ asset('frontend') }}/images/blog/15.jpg" alt="">
													<div class="overlay"><a href="#" class="date">Mar 30, 2018</a></div>
												</div> <!-- /.image-box -->
												<div class="post-meta">
													<h5 class="title"><a href="#">Kind of torture to have to watch the show the one day</a></h5>
													<a href="#" class="read-more">READ MORE</a>
												</div> <!-- /.post-meta -->
											</div> <!-- /.single-blog -->
										</div> <!-- /.col- -->

										<div class="item">
											<div class="single-blog">
												<div class="image-box">
													<img src="{{ asset('frontend') }}/images/blog/16.jpg" alt="">
													<div class="overlay"><a href="#" class="date">Apr 14, 2018</a></div>
												</div> <!-- /.image-box -->
												<div class="post-meta">
													<h5 class="title"><a href="#">Make the best of things its an uphill climb long time</a></h5>
													<a href="#" class="read-more">READ MORE</a>
												</div> <!-- /.post-meta -->
											</div> <!-- /.single-blog -->
										</div> <!-- /.col- --> --}}

									</div> <!-- /.related-product-slider -->
								</div> <!-- /.row -->
							</div> <!-- /.inner-box -->
							<!-- ==================== Comment Area ================= -->
							<div class="inner-box comment-area">
								<div class="theme-title-one">
									<h2>COMMENTS(02)</h2>
								</div> <!-- /.theme-title-one -->
								<div class="single-comment clearfix">
									<img src="images/blog/17.jpg" alt="" class="float-left">
									<div class="comment float-left">
										<h6>Alex Martin</h6>
										<p>Its a civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you.</p>
										<a href="#">REPLY</a>
									</div> <!-- /.comment -->
								</div> <!-- /.single-comment -->
								<div class="single-comment clearfix">
									<img src="images/blog/17.jpg" alt="" class="float-left">
									<div class="comment float-left">
										<h6>James Frank</h6>
										<p>Its a civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you.</p>
										<a href="#">REPLY</a>
									</div> <!-- /.comment -->
								</div> <!-- /.single-comment -->
							</div> <!-- /.inner-box -->
							<!-- ==================== Comment Form ================= -->
							<div class="inner-box comment-form">
								<div class="theme-title-one">
									<h2>POST A COMMENTS</h2>
								</div> <!-- /.theme-title-one -->
								<form action="#" class="theme-form-one">
									<div class="row">
										<div class="col-md-6 col-12"><input type="text" placeholder="Name"></div>
										<div class="col-md-6 col-12"><input type="text" placeholder="Phone"></div>
										<div class="col-12"><input type="email" placeholder="Email"></div>
										<div class="col-12"><textarea placeholder="Comments"></textarea></div>
									</div>
									<button class="theme-button-one">POST COMMENT</button>
								</form>
							</div> <!-- /.inner-box -->
						</div>
						<!-- ===================== Blog Sidebar ==================== -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
							<div class="sidebar-container sidebar-search">
								<form action="#">
									<input type="text" placeholder="Search...">
									<button><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
							</div> <!-- /.sidebar-search -->
							<div class="sidebar-container sidebar-categories">
								<h5 class="title">Categories</h5>
								<ul>
									<li><a href="#">Travel and Aviation</a></li>
									<li><a href="#">Business Services</a></li>
									<li><a href="#">Consumer Products</a></li>
									<li><a href="#">Financial Services</a></li>
									<li><a href="#">Software Research</a></li>
								</ul>
							</div> <!-- /.sidebar-categories -->
							<div class="sidebar-container sidebar-recent-post">
								<h5 class="title">Recent Posts</h5>
								<ul>
									<li class="clearfix">
										<img src="images/blog/6.jpg" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html">World don't move to beat of just one drum.</a>
											<div class="date">5 minutes ago</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="images/blog/7.jpg" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html">Be right for you may not be right for some.</a>
											<div class="date">2 days ago</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="images/blog/8.jpg" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html">World don't move to beat of just one drum.</a>
											<div class="date">1 month ago</div>
										</div>
									</li>
								</ul>
							</div> <!-- /.sidebar-recent-post -->
							<div class="sidebar-container sidebar-archives">
								<h5 class="title">Archives</h5>
								<ul>
									<li><a href="#">January 2018</a></li>
									<li><a href="#">February 2018</a></li>
									<li><a href="#">March 2018</a></li>
								</ul>
							</div> <!-- /.sidebar-archives -->
							<div class="sidebar-tags">
								<h5 class="title">tags</h5>
								<ul class="clearfix">
									<li><a href="#">Business</a></li>
									<li><a href="#">Consulting</a></li>
									<li><a href="#">Sales</a></li>
									<li><a href="#">Startup</a></li>
									<li class="active"><a href="#">Marketing</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Financial</a></li>
									<li><a href="#">Research</a></li>
								</ul>
							</div> <!-- /.sidebar-tags -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.blog-details -->	

@include('frontend.footer')

