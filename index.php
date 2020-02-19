<?php
        $active ='Home';
        include("includes/header.php");
?>  

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
				<?php  
					$get_logo = "select * from logo";
					$run_logo = mysqli_query($con, $get_logo);

					$row_logo = mysqli_fetch_array($run_logo);
								$b_name = $row_logo['b_name'];

					?>
					<div class="offset-lg-2 col-lg-8">
						<h3 class="text-uppercase"><?php echo $b_name;?></h3>
					
						<a class="white_bg_btn" href="showroom.php">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Hot Deals Area =================-->
	<section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="img/product/hot_deals/deal1.jpg" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="showroom.php"></a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="img/product/hot_deals/deal1.jpg" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="showroom.php"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Hot Deals Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Featured Products</h2>
					</div>
				</div>
				<div class="row">
					<?php
					$get_products = "select * from products  order by 1 ASC LIMIT 0,20";

					$run_products = mysqli_query($db, $get_products);

					while($row_products=mysqli_fetch_array($run_products)){

						$pro_id = $row_products['product_id'];

						$pro_title = $row_products['product_title'];

						$pro_price = $row_products['product_price'];

						$pro_img1 = $row_products['product_img1'];

						$pro_label = $row_products['product_label'];

						?>
              
					<div class="col col1">
						 
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="">
								<div class="p_icon">
									<a href="details.php?pro_id=<?php echo $pro_id; ?>">
										<i class="lnr lnr-cart"></i>
									</a>
								</div>
							</div>
							<a href="details.php?pro_id=<?php echo $pro_id; ?>">
								<h4><?php echo $pro_title; ?></h4>
							</a>
							<h5>&#8358;<?php echo $pro_price; ?></h5>
						</div>
					</div>

					<?php  } ?>
				</div>
			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->

	<!--================ Subscription Area ================-->
	<section class="subscription-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>Subscribe for Our Newsletter</h2>
						<span>We won’t send any kind of spam</span>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div id="mc_embed_signup">
						<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01"
						 method="get" class="subscription relative">
							<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
							 required="">
							<!-- <div style="position: absolute; left: -5000px;">
								<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
							</div> -->
							<button type="submit" class="newsl-btn">Get Started</button>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Subscription Area ================-->

	<?php

include("includes/footer.php");

?>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/flipclock/timer.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>