<?php
   /*
   Template Name: Home Page
   */
?>

<?php get_header(); ?>

<!-- Header -->
<div class="container-fluid bg-header">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-lg-7"></div>
			<div class="col-md-7 col-lg-5 space-top-high">
				<div class="text-left">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo-gettimee.png" class="img-responsive">
				</div>
				<h1 class="head-extra-bold space-top-middle">Smart Way</h1> 
				<h1 class="head-italic">To Track</h1>
				<h1 class="head-italic">Your Team</h1>
				<p class="head-description">
					GetTimee is system that provide team monitoring that includes time and location with insight of where and what employees are working on.
				</p>
				<a href="#" class="btn-outer"><div class="btn">Free Trial</div></a>
			</div> 
		</div>
		<div class="row image-scroll">
			<div class="col-md-12 text-center">
				<a href="#can-do" id="nav-down"><img src="<?php echo get_template_directory_uri()?>/assets/images/scroll.png" class="img-responsive"></a>
			</div>
		</div>
	</div>
</div> <!-- End of Header -->

<!-- Slider -->
<div class="container space-top-upper">
	<div class="row">
		<div class="col-md-1 col-lg-3"></div>
		<div class="col-md-10 col-lg-6">
			<!-- Smooth scrolling target -->
			<div id="can-do"></div>
			<h4 class="bold yellow-clr">You can do with us.</h4>
			<h1 class="uppercase">GetTimee is perfect for...</h1>
		</div>
		<div class="col-md-1 col-lg-3"></div>
	</div>
	<div class="row space-top-high">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="slider-homepage owl-carousel owl-theme">
			    <div class="item">
			    	<div class="row">
			    		<div class="col-md-6 padding-right-0">
			    			<div class="border-outer">
				    			<div class="border">
				    				<h3 class="lead-slider">Ideal for Mobile Workforce</h3>
					    			<h4 class="title-slider">High mobility is required from sales force/field force</h4>
					    			<p class="description-slider">GetTimee facilitates the time recording management and remote use. Thanks to the mobile application, you can use GetTimee from Android & iOS mobile devices. </p>
				    			</div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 padding-left-0">
			    			<img class="img-responsive img-slider" src="<?php echo get_template_directory_uri()?>/assets/images/slider-1.png">
			    		</div>
			    	</div>
			    </div>
			    <div class="item">
			    	<div class="row">
			    		<div class="col-md-6 padding-right-0">
			    			<div class="border-outer">
			    				<div class="border"> 
					    			<h3 class="lead-slider">Curabitur Aliquet Auam Loam</h3>
					    			<h4 class="title-slider">Vivamus magna justo lacinia eget consectetur sed</h4>
					    			<p class="description-slider">Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
					    		</div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 padding-left-0">
			    			<img class="img-responsive img-slider" src="<?php echo get_template_directory_uri()?>/assets/images/slider-2.png">
			    		</div>
			    	</div>
			    </div>
			    <div class="item">
			    	<div class="row">
			    		<div class="col-md-6 padding-right-0">
			    			<div class="border-outer">
			    				<div class="border">
			    					<h3 class="lead-slider">Lorem ipsum dolor sit amet</h3>
					    			<h4 class="title-slider">Vivamus suscipit tortor eget felis porttitor volutpat</h4>
					    			<p class="description-slider">Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 padding-left-0">
			    			<img class="img-responsive img-slider" src="<?php echo get_template_directory_uri()?>/assets/images/slider-3.png">
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div> <!--End of Slider-->

<!-- GetTimee Features -->
<div class="container-fluid bg-features margin-top-upper space-bottom-upper">
	<div class="col-md-12 text-center">
		<a href="#getTimee" id="nav-down-choose"><img class="image-scroll-minus" src="<?php echo get_template_directory_uri()?>/assets/images/scroll.png" class="img-responsive"></a>
	</div>
	<div class="container margin-top-upper">
		<div class="row">
			<div class="col-md-1 col-lg-3"></div>
			<div class="col-md-10 col-lg-6">
				<h4 class="bold yellow-clr">Everything you need for your team.</h4>
				<h1 class="uppercase">GetTimee Features</h1>
			</div>
			<!-- Smooth scrolling target -->
			<div id="getTimee"></div>
			<div class="col-md-1 col-lg-3"></div>
		</div>
		<div class="row space-top-high">
			<!-- Tabs -->
			<div class="container">
			    <div class="row">
			    	<ul id="myTab" class="nav nav-tabs" role="tablist">
				      <li class="nav-item col-md-2">
				         <a href="#precise" class="nav-link active" data-toggle="tab" role="tab">
				         	<div class="text-center">
				         		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-bluetooth.png">
				         	</div>
				         	<div class="text-center bg-tab uppercase">
				         		<p class="font-14">Precise & Accurate</p>
				         	</div>
				         </a>
				      </li>
				      <li class="nav-item col-md-2">
				         <a href="#clock" class="nav-link" data-toggle="tab" role="tab">
				         	<div class="text-center">
				         		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-click.png">
				         	</div>
				         	<div class="text-center bg-tab uppercase">
				         		<p class="font-14">Clock in a click</p>
				         	</div>
				         </a>
				      </li>
				      <li class="nav-item col-md-2">
				         <a href="#monitor" class="nav-link" data-toggle="tab" role="tab">
				         	<div class="text-center">
				         		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-monitor-hover.png">
				         	</div>
				         	<div class="text-center bg-tab uppercase">
				         		<p class="font-14">Monitor Team</p>
				         	</div>
				         </a>
				      </li>
				      <li class="nav-item col-md-2">
				         <a href="#team" class="nav-link" data-toggle="tab" role="tab">
				         	<div class="text-center">
				         		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-loc.png">
				         	</div>
				         	<div class="text-center bg-tab uppercase">
				         		<p class="font-14">View Team</p>
				         	</div>
				         </a>
				      </li>
				      <li class="nav-item col-md-2">
				         <a href="#time" class="nav-link" data-toggle="tab" role="tab">
				         	<div class="text-center">
				         		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-time.png">
				         	</div>
				         	<div class="text-center bg-tab uppercase">
				         		<p class="font-14">Flexible working time setting</p>
				         	</div>
				         </a>
				      </li>
				      <li class="nav-item col-md-2">
				         <a href="#news" class="nav-link" data-toggle="tab" role="tab">
				         	<div class="text-center">
				         		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-news.png">
				         	</div>
				         	<div class="text-center bg-tab uppercase">
				         		<p class="font-14">News Broadcast</p>
				         	</div>
				         </a>
				      </li>
				    </ul>
			    </div>
			    <div class="row">
			    	<div id="myTabContent" class="tab-content" >
				        <div class="tab-pane active"  id="precise">
				            <div class="row bg-tab-item">
				            	<div class="col-md-8 padding-item-tab">
				            		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-bluetooth-item.png">
				            		<h3 class="uppercase space-top-middle">Precise & Accurate (COMING SOON)</h3>
				            		<p>GetTimee understands mobile workstyle trend. GetTimee supports this by providing working time setting. Employee can select available working time that suits one’s preference. </p>
				            	</div>
				            	<div class="col-md-4 text-center">
				            		<img src="<?php echo get_template_directory_uri()?>/assets/images/mockup-1.png">
				            	</div>
				            </div>
				        </div>
				        <div class="tab-pane fade" id="clock">
				            <div class="row bg-tab-item">
					            <div class="col-md-8 padding-item-tab">
					            	<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-click-item.png">
				            		<h3 class="uppercase space-top-middle">Precise & Accurate (COMING SOON)</h3>
					            	Light Blue - is a next generation admin template based on the latest Metro design. There are few reasons we want to tell you, why we have created it: We didn't like the darkness of most of admin templates, so we created this light one. We didn't like the high contrast of most of admin templates, so we created this unobtrusive one. We searched for a solution of how to make widgets look like real widgets, so we decided that deep background - is what makes widgets look real.
					            </div>
				            <div class="col-md-4 text-center">
			            		<img src="<?php echo get_template_directory_uri()?>/assets/images/mockup-1.png">
			            	</div>
				            </div>
				        </div>
				        <div class="tab-pane fade" id="monitor">
				            <div class="row bg-tab-item">
					            <div class="col-md-8 padding-item-tab">
					            	<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-monitor-hover-item.png">
				            		<h3 class="uppercase space-top-middle">Precise & Accurate (COMING SOON)</h3>
					            	Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh.
					            </div>
					            <div class="col-md-4 text-center">
				            		<img src="<?php echo get_template_directory_uri()?>/assets/images/mockup-1.png">
				            	</div>
				            </div>
				        </div>
				        <div class="tab-pane fade" id="team">
				            <div class="row bg-tab-item">
				            	<div class="col-md-8 padding-item-tab">
				            		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-loc-item.png">
				            		<h3 class="uppercase space-top-middle">Precise & Accurate (COMING SOON)</h3>
				            		Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada.
				            	</div>
				            	<div class="col-md-4 text-center">
			            		<img src="<?php echo get_template_directory_uri()?>/assets/images/mockup-1.png">
			            	</div>
				            </div>
				        </div>
				        <div class="tab-pane fade" id="time">
				            <div class="row bg-tab-item">
				            	<div class="col-md-8 padding-item-tab">
				            		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-time-item.png">
				            		<h3 class="uppercase space-top-middle">Precise & Accurate (COMING SOON)</h3>
				            		Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit.
				            	</div>
				            	<div class="col-md-4 text-center">
				            		<img src="<?php echo get_template_directory_uri()?>/assets/images/mockup-1.png">
				            	</div>
				            </div>
				        </div>
				        <div class="tab-pane fade" id="news">
				            <div class="row bg-tab-item">
				            	<div class="col-md-8 padding-item-tab">
				            		<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-news-item.png">
				            		<h3 class="uppercase space-top-middle">News Broadcast</h3>
				            		Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus.
				            	</div>
				            	<div class="col-md-4 text-center">
				            		<img src="<?php echo get_template_directory_uri()?>/assets/images/mockup-1.png">
				            	</div>
				            </div>
				        </div>
				    </div>
			    </div>
			</div> <!--End of Tabs-->
		</div>
	</div>
</div>

<!-- Choose GetTimee -->
<div class="container">
	<div class="col-md-12 text-center">
		<a href="#choose" id="nav-down-choose"><img class="image-scroll-minus" src="<?php echo get_template_directory_uri()?>/assets/images/scroll.png" class="img-responsive"></a>
	</div>
	<div class="row margin-top-upper">
		<div class="col-md-1 col-lg-3"></div>
		<div class="col-md-10 col-lg-6">
			<!-- Smooth scrolling target -->
			<div id="choose"></div>
			<h4 class="bold yellow-clr">Giving you whats the best.</h4>
			<h1 class="uppercase">Why Choose GetTimee</h1>
		</div>
		<div class="col-md-1 col-lg-3"></div>
	</div>
	<div class="row space-top-high">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/icon/icon-transparency.png">
					<div class="margin-top-up">
						<h5 class="yellow-clr bold">Transparency</h5>
						<p>The control of employee’s working time is managed fairly and transparently</p>
					</div>
				</div>
				<div class="col-md-3">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/icon/icon-simple.png">
					<div class="margin-top-up">
						<h5 class="yellow-clr bold">Simple</h5>
						<p>The entire system is very easy to set up. GetTimee simplicity will benefit all users</p>
					</div>
				</div>
				<div class="col-md-3">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/icon/icon-reliability-hover.png">
					<div class="margin-top-up">
						<h5 class="yellow-clr bold">Reliability</h5>
						<p>It works anywhere with majority devices</p>
					</div>
				</div>
				<div class="col-md-3">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/icon/icon-satisfaction.png">
					<div class="margin-top-up">
						<h5 class="yellow-clr bold">Satisfaction</h5>
						<p>Transparent and uncomplicated system will increase satisfaction from all employees</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- End of Choose GetTimee -->

<!-- Contact Us -->
<div class="container-fluid bg-contactus margin-top-upper">
	 <div class="col-md-12 text-center">
		<a href="#contact" id="nav-down-contact"><img class="image-scroll-minus" src="<?php echo get_template_directory_uri()?>/assets/images/scroll.png" class="img-responsive"></a>
	</div>
	<div class="container margin-top-upper" id="contact">
		<div class="row">
			<div class="col-md-1 col-lg-3"></div>
			<div class="col-md-10 col-lg-6">
				<h4 class="bold yellow-clr">Get started for free.</h4>
				<h1 class="uppercase">Try GetTimee And Track Your Team Now</h1>
			</div>
			<div class="col-md-1 col-lg-3"></div>
		</div>
		<div class="text-center space-top-high space-bottom-upper">
			<a href="#" class="btn-outer"><div class="btn">Contact Us</div></a>
		</div>
	</div>
</div> <!-- End of Contact Us -->
<?php get_footer(); ?>



