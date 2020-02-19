
<?php
include("includes/dbcon.php");
?>
<!--================ start footer Area  =================-->
<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<?php 
								$get_social = "select * from social_link";
								$run_social = mysqli_query($con, $get_social);
								$row_social= mysqli_fetch_array($run_social);
									$fb = $row_social['facebook'];
									$tweet = $row_social['twitter'];
									$insta = $row_social['instagram'];
									$whatsapp = $row_social['whatsapp'];
									$email = $row_social['email'];


						?>

						<div class="f_social">
							<a href="https://<?php echo $fb; ?>">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="https://<?php echo $tweet; ?>">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="https://<?php echo $insta; ?>">
								<i class="fa fa-instagram"></i>
							</a>
							<a href="https://<?php echo $whatsapp; ?>">
								<i class="fa fa-whatsapp"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is modified with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="mailto:josephlagbalu@gmail.com">Joseey</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->