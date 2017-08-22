  <!-- Start Modal Contactus -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-padding">
          <div class="row">
            <div class="col-md-3 col-lg-4"></div>
            <div class="col-md-7 col-lg-4 col-8">
              <h5 class="bold yellow-clr">Request a demo.</h4>
              <h2 class="uppercase">Contact Us</h2>
            </div>
            <div class="col-md-2 col-lg-4 col-4">
              <img class="close" data-dismiss="modal" aria-label="Close" src="<?php echo get_template_directory_uri()?>/assets/images/bg-close.png" class="img-responsive">
            </div>
          </div>
        </div>
        <div class="modal-body">
          <p>Fill out the form below and we'll give you a solution. </p>
          <div class="row">
          <div class="col-md-6 ml-auto">
            <div class="form-group">
              <input  class="form-control" placeholder="Full Name" >
            </div>
            <div class="form-group">
              <input  class="form-control" placeholder="Company Name" >
            </div>
            <div class="form-group">
              <input  class="form-control" placeholder="Company Contact Number" >
            </div>
            <div class="form-group">
              <input  class="form-control" placeholder="Employee (Number Of)" >
            </div>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <textarea class="form-control textarea-contact" rows="6" placeholder="Message For Request"></textarea>
            </div>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn-outer"><div class="btn">Send</div></a>
        </div>
      </div>
    </div>
  </div>

  <footer>
  	<div class="container-fluid bg-footer">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-4 text-left footer-space">
  					<a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo-gettimee.png"></a>
  					<span>&copy; Copyright <?php echo date("Y"); ?></span>
  				</div>
  				<div class="col-md-4 text-center footer-space">
  					<a href="https://www.facebook.com/pages/PT-Drife-Solusi-Integrasi/1442772669336796" target="blank"><img class="logo-fb" src="<?php echo get_template_directory_uri()?>/assets/images/logo-fb.png"></a>
  				</div>
  				<div class="col-md-4 text-right footer-space">
  					<p>PT. DRIFE SOLUSI INTEGRASI<br/>
  					+62 21 2854 2877<br/>
  					info@gettimeeapp.com</p>
  				</div>
  			</div>
  		</div>
  	</div>
  </footer>
</body>
  	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery/jquery-3.2.1.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/tether/tether.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/css/bootstrap/js/bootstrap.min.js"></script>
    <!-- Owlcarousel -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/owl-carousel-v2/dist/owl.carousel.min.js"></script>
    <!-- Custom Script Js -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/scripts.js"></script>
    <!-- Bootstrap Tabcollapse -->
    <!-- <script src="<?php echo get_template_directory_uri()?>/assets/libs/bootstrap-tabcollapse/js/jquery-1.10.1.min.js"></script> -->
    <!-- <script src="<?php echo get_template_directory_uri()?>/assets/libs/bootstrap-tabcollapse/js/bootstrap/bootstrap.js"></script> -->
    <script src="<?php echo get_template_directory_uri()?>/assets/libs/bootstrap-tabcollapse/bootstrap-tabcollapse.js"></script>
</html>