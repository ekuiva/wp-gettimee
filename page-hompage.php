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
				<a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/scroll.png" class="img-responsive"></a>
			</div>
		</div>
	</div>
</div> <!-- End of Header -->

<!-- Slider -->
<div class="container space-top-upper">
	<div class="row">
		<div class="col-md-1 col-lg-3"></div>
		<div class="col-md-10 col-lg-6">
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

<?php get_footer(); ?>



