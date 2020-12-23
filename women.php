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
	<div class="about-3">
		<div class="wthree_head_section">
				<h3 class="w3l_header">What We <span>Do?</span></h3>
			</div>
		<div class="container">
			<div class="d-flex">
				
				<div class="about1"> 
					<h4>Heading </h4>
					<p class="details">Content</p>
					<ul class="about-list">
						<li><?php
						$result=$con->query("select * from women");
						$i=1;
						while($row=$result->fetch_assoc()){
					?>
							<div class="col-md-4 we-w3l">
								<img src="images/<?php echo $row['images']?>" alt="img" class="img-responsive" />
							</div>
							<div class="col-md-8 in-block">
								<h5><?php echo $row['heading']?></h5>
								<p><?php echo $row['content']?></p>
							</div>
							<div class="clearfix"> </div>
						</li>
					
					<?php } ?>
					</ul>
				</div>
				<div class="about2">
					
				</div>
			</div>
			
		</div>
	</div>

<!-- //about inner -->

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