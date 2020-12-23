<?php

	require("connect.php");
	
	$result=$con->query("select * from about");
	$row=$result->fetch_assoc();

?>
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
	<!-- about inner -->
<div class="about-bottom inner-padding">
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">About <span>Us</span></h3>
			</div>
				<div class="about-bott-right">
					 <h5>Who We Are</h5>
					 <p><?php echo $row['content']?></p>
				</div>
				<div class="clearfix"> </div>
			</div>
</div>
<div class="about-agile inner-padding">
	<div class="container">
		<h3 class="heading-agileinfo white-w3ls">Content.</p>
			<div class="more-button">
				<a href="contact.php">Mail Us</a>
			</div>
	</div>
</div>
<!-- //about inner -->
<!-- Team -->
<div class="team">
		<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Trainers</span></h3>
			</div>
			
					
			<div class="agile_team_grids">
			<?php
			$result=$con->query("select * from trainers");
						$i=1;
						while($row=$result->fetch_assoc()){
					?>
				<div class="col-md-3 agile_team_grid">
				
					<div class="view view-sixth">
						<img src="images/<?php echo $row['images']?>" alt=" " class="img-responsive">
						<div class="mask">
							<h5><?php echo $row['heading']?></h5>
							<p><?php echo $row['content']?></p>
							
						</div>
					</div>
					<h4><?php echo $row['name']?></h4>
					<p><?php echo $row['position']?></p>
				</div>
			<?php } ?>
			
				<div class="clearfix"> </div>
			</div>	
		</div>
	</div>
	<!-- //Team -->
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