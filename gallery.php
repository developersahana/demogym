<?php
require("connect.php");

$result=$con->query("select * from gallery");
$count=$result->num_rows;
if($count>0){
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
	<!--gallery-->
	<div class="gallery">	
		<div class="container">	
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Gallery</span></h3>
			</div>
			
			<div class="agile_team_grids">
			<?php
						$i=1;
						while($row=$result->fetch_assoc()){
					?>
				<div class="col-md-4 agile_team_grid">
				
					<a href="images/<?php echo $row['images']?>" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/<?php echo $row['images']?>" alt="" class="img-responsive zoom-img"style="height:300px;width:400px;padding-bottom:50px">
					</a>
				</div>
			<?php } }?>	

				<div class="clearfix"> </div>	
			</div>

			<script src="js/lightbox-plus-jquery.min.js"></script>
		</div>
</div>
<!--//gallery-->
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