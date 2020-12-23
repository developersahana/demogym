
<!DOCTYPE html>
<html lang="zxx">

<?php include "header.php"?>
<body>
	<!-- banner -->
	<div class="main_section_agile inner">
		<div class="agileits_w3layouts_banner_nav">
			<div class="container">
<?php include"nav.php"?>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- /mail -->
    <div class="banner-bottom inner">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header w3_agileits_header">Mail <span>Us</span></h3>
            </div>
          <div class="agile_wthree_inner_grids">
          
		<div class="contact-form agile_inner_grids">
			  
			<form action="enquiry.php" method="post">
				<div class="fields-grid">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="name" required="">
						<label>Full Name</label>
						<span></span>
					</div>
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="phone" required="">
						<label>Phone</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="email" required="">
						<label>Email</label>
						<span></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="styled-input textarea-grid">
					<textarea name="message" required=""></textarea>
					<label>Message</label>
					<span></span>
				</div>
				<input type="submit" value="SEND">
			</form>
		</div>
		<div class="clearfix"> </div>
          </div>
        </div>
    </div>
    <!-- //mail -->
    	<!-- /map
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172" style="border:0"></iframe>

			</div>
		<!-- //map -->
<?php include"footer.php"?>
<!-- bootstrap-pop-up -->
					<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									Heading
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								</div>
								<section>
									<div class="modal-body">
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<p>Content</p>
									</div>
								</section>
							</div>
						</div>
					</div>
					<!-- //bootstrap-pop-up -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- for testimonials slider-js-script-->

</body>

</html>