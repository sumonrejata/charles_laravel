@include('frontend.header')			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Blog</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Our Blog
			============================================== 
			-->
			<div class="blog-inner-page section-spacing">
				<div class="container">
					<div class="row">

						<div class="col-xl-9 col-lg-8 col-12 our-blog">
							<div class="post-wrapper">
								@foreach ($post as $row)							
								<div class="single-blog">
									<div class="image-box">
										<img src="{{ asset($row->image) }}" alt="">
										<div class="overlay"><a href="#" class="date">Feb 06, 2018-- {{ $row->format('d/m/Y') }}</a></div>
									</div> <!-- /.image-box -->
									<div class="post-meta">
										<h5 class="title"><a href="blog-details.html">{{ $row->title }}</a></h5>
										<p>{{ $row->desc }}</p>
										<a href="{{ route('website.blogdetails', $row->id) }}" class="read-more">READ MORE</a>
									</div> <!-- /.post-meta -->
								</div> <!-- /.single-blog -->
								@endforeach
								
							</div> <!-- /.post-wrapper -->
							
							<div class="theme-pagination">
								
								<ul>
									{{ $post->links() }}
									{{-- <li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li> --}}
								</ul>
							</div>
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
									@foreach ($category as $cat)	
									<li><a href="#">{{ $cat->title }}</a></li>
									@endforeach
								</ul>
							</div> <!-- /.sidebar-categories -->
							<div class="sidebar-container sidebar-recent-post">
								<h5 class="title">Recent Posts</h5>
								<ul>
									@foreach ($recent_post as $latest)
									<li class="clearfix">
										<img src="{{ asset($latest->image) }}" alt="" class="float-left">
										<div class="post float-left">
											<a href="blog-details.html">{{ $latest->title }}</a>
											{{-- <div class="date">{{ $latest->created_at->format('l d M Y') }}</div>  --}}
										</div>
									</li>
									@endforeach
									{{-- <li class="clearfix">
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
									</li> --}}
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
									@foreach ($tags as $tag)	
									<li><a href="#">{{ $tag->name }}</a></li>
									@endforeach
									{{-- <li><a href="#">Consulting</a></li>
									<li><a href="#">Sales</a></li>
									<li><a href="#">Startup</a></li>
									<li class="active"><a href="#">Marketing</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Financial</a></li>
									<li><a href="#">Research</a></li> --}}
								</ul>
							</div> <!-- /.sidebar-tags -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.blog-inner-page -->
			

			@include('frontend.footer')

