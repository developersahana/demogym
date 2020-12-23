<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<?php include "header.php" ?>

<body>
	<!-- banner -->
	<div class="main_section_agile" id="home">
		<div class="agileits_w3layouts_banner_nav">
			<div class="container">
<?php include"nav.php"?>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="banner_top">
		<div class="slider">
			<div class="wrapper">
				
				<!-- Slideshow 3 -->
				<ul class="rslides" id="slider">
					<li>
						<div class="agile_banner_text_info">
							
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							
						</div>
					</li>
				</ul>
				<!-- Slideshow 3 Pager -->
				<ul id="slider3-pager">
					<li><a href="#"><img src="images/banner11.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/banner22.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/banner33.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/banner44.jpg" data-selector="img" alt=""></a></li>

				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- About us -->
<div class="about-bottom inner-padding">
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">About <span>Us</span></h3>
			</div>
				<div class="about-bott-right">
					 <h5>Who We Are</h5>
					 <?php

	require("connect.php");
	
	$result=$con->query("select * from about");
	$row=$result->fetch_assoc();

?>
					 <p><?php echo $row['content']?></p>
				</div>
				<div class="clearfix"> </div>
			</div>
</div>
	<!-- //About us -->
		<div class="ser-agile">
			<div class="container">
				<div class="wthree_head_section">
					<h3 class="w3l_header w3_agileits_header two">Our <span>Classes</span></h3>
				</div>
				
					
							
							<div class="w3l-info">
							<?php
						$result=$con->query("select * from classes");
						$i=1;
						while($row=$result->fetch_assoc()){
					?>
					<div class="col-md-4 ser-lef-agile" >
								<div class="grid1">
									<h5><?php echo $row['heading']?></h5>
									<h4><?php echo $row['subheading']?></h4>
									<h6><?php echo $row['content']?></h6>
								</div>
							</div>
						
							<?php } ?>
								<div class="clearfix"></div>
						</div>
				</div>
		</div>
	<!-- testimonials -->

<!-- testimonals section -->
<div class="testimonals">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Testimonials</span></h3>
			</div>
				<div class="agileits-feedback-grids">
			
				<div id="owl-demo" class="owl-carousel owl-theme">
				<?php
						$result=$con->query("select * from testimonals");
						$i=1;
						while($row=$result->fetch_assoc()){
					?>
					<div class="item">

						<div class="testimonal grid-1">
							<div class="first-grid">
								<img src="images/<?php echo $row['testimonal_images']?>" alt="" style="height:50px;width:50px" />
								<h3><?php echo $row['testimonal_heading']?></h3>
								<h5><?php echo $row['testimonal_content']?></h5>
							</div>
						</div>
					</div><?php } ?>

				</div>
						</div>
		</div>
	</div>
<!-- /testimonals section -->
	<!-- stats -->
	<div class="stats">
		<div class="container">
		<div class="wthree_head_section">
					<h3 class="w3l_header w3_agileits_header two">Our <span>Stats</span></h3>
				</div>
				<?php
				$result=$con->query("select * from stats");
						$i=1;
						while($row=$result->fetch_assoc()){
					?>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
				<span class="fa fa-user" aria-hidden="true"></span>
				<p class="counter"><?php echo $row['stats']?></p>
				<h3><?php echo $row['stats_heading']?></h3>
			</div>
			<?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //stats -->

<!-- our blog -->
	<div class="wthree-blog">
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our Latest <span>News</span></h3>
			</div>
					<?php
			
						$result=$con->query("select * from news");
						$i=1;
						while($row=$result->fetch_assoc()){
					?>
		<div class="blog1">
			<div class="blog-box">
				<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/<?php echo $row['news_images']?>" alt="blog image" class="img-responsive" /></a>
				<div class="blog-txt">
					<h3><a href="#" data-toggle="modal" data-target="#myModal1"><?php echo $row['news_heading']?> </a></h3>
					<h4><?php echo $row['news_subheading']?></h4>
					<p><?php echo $row['news_content']?></p>
					<!-- Trigger the modal with a button -->
					<!--<a href="#" data-toggle="modal" data-target="#myModal1">Read More &raquo; </a>
					 Modal -->
					
					

				</div>
			</div>
			
						</div>
			<div class="blog2">
			<div class="blog-box">
				
				<div class="blog-txt">
					<h3><a href="#" data-toggle="modal" data-target="#myModal1"><?php echo $row['news_heading1']?> </a></h3>
					<h4><?php echo $row['news_subheading1']?></h4>
					<p><?php echo $row['news_content1']?></p>
					<!-- Trigger the modal with a button -->
					<!--<a href="#" data-toggle="modal" data-target="#myModal1">Read More &raquo; </a>
					 Modal -->
				</div>
				<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/<?php echo $row['news_images1']?>" alt="blog image" class="img-responsive" /></a>
			</div>
			
						</div>			
						
						<?php }?>
	
		</div>	
	</div>
	<!-- our blog -->
<?php include "footer.php"?>
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
	<!-- Slider script -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				manualControls: '#slider3-pager',
			});
		});
	</script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<!-- for testimonials slider-js-file-->
			<script src="js/owl.carousel.js"></script>
	<!-- //for testimonials slider-js-file-->
		<script>
		$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
 
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay:true,
			items : 3,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4]
		});
		}); 
</script>
<!-- for testimonials slider-js-script-->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

</body>

</html>