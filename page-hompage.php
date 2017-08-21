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
<div class="container-fluid bg-features margin-top-upper">
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-lg-3"></div>
			<div class="col-md-10 col-lg-6">
				<h4 class="bold yellow-clr">Everything you need for your team.</h4>
				<h1 class="uppercase">GetTimee Features</h1>
			</div>
			<div class="col-md-1 col-lg-3"></div>
		</div>
		<div class="row space-top-high">
			<!-- Tabs -->
			<div class="container">
			    <ul id="myTab" class="nav nav-tabs" role="tablist">
			      <li class="nav-item">
			         <a href="#precise" class="nav-link active" data-toggle="tab" role="tab">
			         	<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-bluetooth.png">
			         	Precise & Accurate
			         </a>
			      </li>
			      <li class="nav-item">
			         <a href="#clock" class="nav-link" data-toggle="tab" role="tab">
			         	<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-click.png">
			         	Clock in a click
			         </a>
			      </li>
			      <li class="nav-item">
			         <a href="#monitor" class="nav-link" data-toggle="tab" role="tab">
			         	<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-monitor-hover.png">
			         	Monitor Team
			         </a>
			      </li>
			      <li class="nav-item">
			         <a href="#team" class="nav-link" data-toggle="tab" role="tab">
			         	<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-loc.png">
			         	View Team
			         </a>
			      </li>
			      <li class="nav-item">
			         <a href="#time" class="nav-link" data-toggle="tab" role="tab">
			         	<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-monitor-hover.png">
			         	Flexible working time setting
			         </a>
			      </li>
			      <li class="nav-item">
			         <a href="#news" class="nav-link" data-toggle="tab" role="tab">
			         	<img src="<?php echo get_template_directory_uri()?>/assets/images/tab-icon/icon-news.png">
			         	News Broadcast
			         </a>
			      </li>
			    </ul>
			    <div id="myTabContent" class="tab-content" >
			        <div class="tab-pane active"  id="precise">
			            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
			        </div>
			        <div class="tab-pane fade" id="clock">
			            <p>Light Blue - is a next generation admin template based on the latest Metro design. There are few reasons we want to tell you, why we have created it: We didn't like the darkness of most of admin templates, so we created this light one. We didn't like the high contrast of most of admin templates, so we created this unobtrusive one. We searched for a solution of how to make widgets look like real widgets, so we decided that deep background - is what makes widgets look real.</p>
			        </div>
			        <div class="tab-pane fade" id="monitor">
			            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh.</p>
			        </div>
			        <div class="tab-pane fade" id="team">
			            <p>Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada.</p>
			        </div>
			        <div class="tab-pane fade" id="time">
			            <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit.</p>
			        </div>
			        <div class="tab-pane fade" id="news">
			            <p>Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus.</p>
			        </div>
			    </div>
			</div> <!--End of Tabs-->
		</div>
	</div>
</div>

<!-- Choose GetTimee -->
<div class="container margin-top-upper">
	<div class="row">
		<div class="col-md-1 col-lg-3"></div>
		<div class="col-md-10 col-lg-6">
			<!-- Smooth scrolling target -->
			<div id="can-do"></div>
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



