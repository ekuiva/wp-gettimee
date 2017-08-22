<?php
   /*
   Template Name: Home Page
   */
?>

<?php get_header(); ?>
<?php
if (have_posts()) : while (have_posts()) : the_post(); 
   $page_id = $post->ID;

   // Home Component Page
   $home_components_page = get_post_meta($page_id, 'component-homepage', TRUE);
?>

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
				<!-- start item slider -->
				<?php
	            foreach ($home_components_page as $key => $value) {
	               $top_title = $value['top-title'];
	               $main_title = $value['main-title'];
	               $description_slider = $value['description-slider'];
	               $image_lider = wp_get_attachment_url($value['image-slider']);
	            ?>
			    <div class="item">
			    	<div class="row">
			    		<div class="col-md-6 padding-right-0">
			    			<div class="border-outer">
				    			<div class="border">
				    				<h3 class="lead-slider"><?php echo $top_title; ?></h3>
					    			<h4 class="title-slider"><?php echo $main_title?></h4>
					    			<p class="description-slider"><?php echo $description_slider?></p>
				    			</div>
			    			</div>
			    		</div>
			    		<div class="col-md-6 padding-left-0">
			    			<img class="img-responsive img-slider" src="<?php echo $image_lider ?>">
			    		</div>
			    	</div>
			    </div>
			    <?php }?> <!-- end item slider -->
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div> <!--End of Slider-->

<!-- GetTimee Features -->
<div class="container-fluid bg-features margin-top-upper space-bottom-upper">
	<div class="col-md-12 text-center">
		<a href="#getTimee" id="nav-down-gettimee-fitur"><img class="image-scroll-minus" src="<?php echo get_template_directory_uri()?>/assets/images/scroll.png" class="img-responsive"></a>
	</div>
	<div class="margin-top-upper">
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
			<!-- Start Tabs Desktop-->
			<div class="container tabs-desktop">
			    <div class="row">
			    	<ul id="myTab" class="nav nav-tabs" role="tablist">
			    		<!-- Start GetTimee Features -->
			    	  	<?php
			    	  	// Active fist
						$count_post = 1;
	        	 		$gettimeefeatures = new WP_Query(array( 'post_type' => 'gettimeefeatures','posts_per_page'=> 6, 'order' => 'ASC'));
	        	 		while ( $gettimeefeatures->have_posts() ) { //start while
	        	 		$gettimeefeatures->the_post();
	        	 		$page_id_features = $post->ID;
	        	 		$post_slug = $post->post_name;

	        	 		// Looping Gettimee Features
						$gettimee_features = get_post_meta($page_id_features, 'gettimee-features', TRUE); 
						foreach ($gettimee_features as $key => $value) { //start foreach
						$icon_warna_putih = wp_get_attachment_url($value['icon-warna-putih']);
						// untuk aktif pertama kali
						if ($count_post == 1) { //start if
						?>
						<li class="nav-item col-md-2">
				         	<a href="#<?php echo $post_slug?>" class="nav-link active" data-toggle="tab" role="tab">
					         	<div class="text-center">
					         		<img src="<?php echo $icon_warna_putih; ?>">
					         	</div>
					         	<div class="text-center bg-tab uppercase">
					         		<p class="font-14"><?php echo get_the_title() ?></p>
					         	</div>
				        	</a>
				     	</li>
						<?php
						} else { //else
						?>
						<li class="nav-item col-md-2">
				         	<a href="#<?php echo $post_slug?>" class="nav-link" data-toggle="tab" role="tab">
					         	<div class="text-center">
					         		<img src="<?php echo $icon_warna_putih; ?>">
					         	</div>
					         	<div class="text-center bg-tab uppercase">
					         		<p class="font-14"><?php echo get_the_title() ?></p>
					         	</div>
				        	</a>
				     	</li>
						<?php
						} // end of if
						} // end of foreach
						$count_post++;
			        	} // end of while
			        	wp_reset_postdata();
			        	?> <!-- End GetTimee Features -->
				    </ul>
			    </div>
			    <div class="row">
			    	<div id="myTabContent" class="tab-content" >
			    		<!-- Start GetTimee Features -->
			    	  	<?php
		    	  		$count_post = 1;
	        	 		$gettimeefeatures = new WP_Query(array( 'post_type' => 'gettimeefeatures','posts_per_page'=> 6, 'order' => 'ASC'));
	        	 		while ( $gettimeefeatures->have_posts() ) {
	        	 		$gettimeefeatures->the_post();
	        	 		$page_id_features = $post->ID;
	        	 		$post_slug = $post->post_name;

	        	 		// Looping Gettimee Features
						$gettimee_features = get_post_meta($page_id_features, 'gettimee-features', TRUE); 
						foreach ($gettimee_features as $key => $value) { //start foreach
							$icon_warna_hitam_kuning = wp_get_attachment_url($value['icon-warna-hitam-kuning']);
							$image_fitur_gettimee_via_mobile = wp_get_attachment_url($value['image-fitur-gettimee-via-mobile']);
						// untuk aktif pertama kali
						if ($count_post == 1) { //start if
						?>
				        <div class="tab-pane active"  id="<?php echo $post_slug?>">
				            <div class="row bg-tab-item">
				            	<div class="col-md-8 padding-item-tab">
				            		<img src="<?php echo $icon_warna_hitam_kuning ?>" class="img-responsive">
				            		<h3 class="uppercase space-top-middle"><?php echo get_the_title(); ?></h3>
				            		<p><?php echo get_the_content(); ?></p>
				            	</div>
				            	<div class="col-md-4 text-center">
				            		<img src="<?php echo $image_fitur_gettimee_via_mobile; ?>" class="img-responsive">
				            	</div>
				            </div>
				        </div>
				        <?php
						} else { //else
						?>
						<div class="tab-pane"  id="<?php echo $post_slug?>">
				            <div class="row bg-tab-item">
				            	<div class="col-md-8 padding-item-tab">
				            		<img src="<?php echo $icon_warna_hitam_kuning ?>" class="img-responsive">
				            		<h3 class="uppercase space-top-middle"><?php echo get_the_title(); ?></h3>
				            		<p><?php echo get_the_content(); ?></p>
				            	</div>
				            	<div class="col-md-4 text-center">
				            		<img src="<?php echo $image_fitur_gettimee_via_mobile; ?>" class="img-responsive">
				            	</div>
				            </div>
				        </div>
				        <?php 
				    	} // end of if
				        } // end of foreach
				        $count_post++;
			        	} // end of while
			        	wp_reset_postdata();
			        	?> <!-- End GetTimee Features -->
				    </div>
			    </div>
			</div> <!--End of Tabs Desktop-->

			<!-- Start Tabs Mobile -->
			<div class="container tabs-mobile">
			    <div id="accordion" role="tablist" aria-multiselectable="true">
			      	<!-- Start GetTimee Features -->
				  	<?php
						$count_post = 1;
						$gettimeefeatures = new WP_Query(array( 'post_type' => 'gettimeefeatures','posts_per_page'=> 6, 'order' => 'ASC'));
						while ( $gettimeefeatures->have_posts() ) {
						$gettimeefeatures->the_post();
						$page_id_features = $post->ID;
						$post_slug = $post->post_name;

						// Looping Gettimee Features
						$gettimee_features = get_post_meta($page_id_features, 'gettimee-features', TRUE); 
						foreach ($gettimee_features as $key => $value) { //start foreach
							$icon_warna_putih = wp_get_attachment_url($value['icon-warna-putih']);
							$icon_warna_hitam_kuning = wp_get_attachment_url($value['icon-warna-hitam-kuning']);
							$image_fitur_gettimee_via_mobile = wp_get_attachment_url($value['image-fitur-gettimee-via-mobile']);
					// untuk aktif pertama kali
					if ($count_post == 1) { //start if
					?>
					<!-- tab active -->
			      	<div class="card">
				      	<!-- start header tabs -->
				      	<a data-toggle="collapse" class="uppercase" data-parent="#accordion" href="#collapse-<?php echo $count_post?>" aria-expanded="true" aria-controls="collapse-<?php echo $count_post?>">
					        <div class="card-header" role="tab" id="heading-<?php echo $count_post?>">
					            <p class="mb-0 font-14">
					            	<img src="<?php echo $icon_warna_putih; ?>">
					               	<?php echo get_the_title();?>
					            </p>
					        </div>
				        </a> <!-- end header tabs -->
				         <!-- content tabs -->
				        <div id="collapse-<?php echo $count_post?>" class="collapse show" role="tabpanel" aria-labelledby="heading-<?php echo $count_post?>">
				            <div class="card-block">
				               <div class="col-md-12">
				               		<h3 class="uppercase"><?php echo get_the_title(); ?></h3>
				                 	<p><?php echo get_the_content(); ?></p>
				               </div>
				               <div class="col-md-12 text-center">
					        	<img class="img-responsive" src="<?php echo $image_fitur_gettimee_via_mobile; ?>">
					           </div>
				            </div>
				        </div> <!-- end content tabs -->
			      	</div> <!-- end tab active -->
			      	<?php
				  	} else { //else
				  	?>
				  	<!-- tabs collapse -->
				    <div class="card">
					    <a data-toggle="collapse" class="uppercase" data-parent="#accordion" href="#collapse-<?php echo $count_post?>" aria-expanded="true" aria-controls="collapseTwo">
				         <div class="card-header" role="tab" id="heading-<?php echo $count_post?>">
				            <p class="mb-0 font-14">
				            	<img class="img-responsive" src="<?php echo $icon_warna_putih; ?>">
				               <?php echo get_the_title();?>
				            </p>
				         </div>
				        </a>
				        <div id="collapse-<?php echo $count_post?>" class="collapse" role="tabpanel" aria-labelledby="heading-<?php echo $count_post?>">
				            <div class="card-block">
				               <div class="col-md-12">
				               		<h3 class="uppercase"><?php echo get_the_title(); ?></h3>
				                  	<p><?php echo get_the_content(); ?></p>
				               </div>
				               <div class="col-md-12 text-center">
					        	<img src="<?php echo $image_fitur_gettimee_via_mobile; ?>">
					           </div>
				            </div>
				        </div>
			        </div> <!-- end tabs collapse -->
			        <?php 
				    } // end of if
				    } // end of foreach
				    $count_post++;
				    } // end of while
				    wp_reset_postdata();
				    ?> <!-- End GetTimee Features -->
			    </div>
			</div>
			<!-- End for Tabs Mobile -->
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
	<div class="container space-top-high">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/icon/icon-transparency.png" class="img-responsive">
				<div class="margin-top-up">
					<h5 class="yellow-clr bold">Transparency</h5>
					<p>The control of employee’s working time is managed fairly and transparently</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/icon/icon-simple.png" class="img-responsive">
				<div class="margin-top-up">
					<h5 class="yellow-clr bold">Simple</h5>
					<p>The entire system is very easy to set up. GetTimee simplicity will benefit all users</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/icon/icon-reliability-hover.png" class="img-responsive">
				<div class="margin-top-up">
					<h5 class="yellow-clr bold">Reliability</h5>
					<p>It works anywhere with majority devices</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/icon/icon-satisfaction.png" class="img-responsive">
				<div class="margin-top-up">
					<h5 class="yellow-clr bold">Satisfaction</h5>
					<p>Transparent and uncomplicated system will increase satisfaction from all employees</p>
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
	<div class="margin-top-upper" id="contact">
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
<?php endwhile; ?>
<?php else : ?>
<div>ERROR Page : Content Not Found</div>
<?php endif; ?>
<?php get_footer(); ?>



