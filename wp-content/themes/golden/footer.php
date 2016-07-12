<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Golden_Theme
 */
?>

	
	
		</main> <!-- end of main-content -->

		<footer cclass="site-footer">
			<section class="footer-logos">
				<div class="section-content">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<a href=""><img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/envato.png" alt=""></a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<a href=""><img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/wordpress.png" alt=""></a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<a href=""><img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/tutsplus.png" alt=""></a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<a href=""><img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/microlancer.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- end of footer-logos -->

			<section class="contact-us">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title" style="color: white">Contact Us</h1>
						<p class="section-subtitle">Hello, world. I am Contact Us. Call me now!</p>
					</div>
					<div class="container" style="margin-top: 3rem">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="sr-only">Name</label>
										<input type="text" class="form-control form-control-lg" id="username" placeholder="Your Name"></input>
									</div>
									<div class="form-group">
										<label class="sr-only">Email</label>
										<input type="email" class="form-control form-control-lg" placeholder="Your Email"></input>
									</div>
									<div class="form-group">
										<label class="sr-only">Subject</label>
										<input type="text" class="form-control form-control-lg" placeholder="Subject"></input>
									</div>
								</div>
								<div class="col-md-6">
										<fieldset class="form-group">
											<label class="sr-only">Message</label>
										    <textarea class="form-control form-control-lg"  placeholder="Your Message" style="height: 189px"></textarea>
										</fieldset>
								</div>
								<div class="col-md-12">
									<input type="button" class="btn center-block btn-primary btn-lg" id="send-msg-btn" value="SEND MESSAGE"></input>
								</div>
							</div>
						</form>

						<!-- <div class="row">
							<div class="col-md-5 col-md-offset-1">
								<form>
									<div class="form-group">
										<label class="sr-only">Name</label>
										<input type="text" class="form-control form-control-lg center-block" id="username" placeholder="Your Name"></input>
									</div>
									<div class="form-group">
										<label class="sr-only">Email</label>
										<input type="email" class="form-control form-control-lg center-block" id="username" placeholder="Your Email"></input>
									</div>
									<div class="form-group">
										<label class="sr-only">Subject</label>
										<input type="text" class="form-control form-control-lg center-block" id="username" placeholder="Subject"></input>
									</div>
								</form>
							</div>
							<div class="col-md-5>
								<form action="">
									<fieldset class="form-group">
										<label class="sr-only">Message</label>
									    <textarea class="form-control form-control-lg center-block" id="exampleTextarea" rows="6" placeholder="Your Message"></textarea>
									</fieldset>
								</form>
							</div>	
						</div> -->
					</div>
				</div>
			</section> <!-- end of contact-us -->

			<section class="copyright">
				<div style="margin-top: 1rem; margin-bottom: 1rem">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<p class="section-subtitle" style="padding-top: 12px">&copy; Copyright 2014 FreebiesXpress.com</p>
							</div>
							<div class="col-md-4">
								<ul class="menu menu--social">
									<li class="menu__item menu__item--social">
										<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a>
									</li>
									<li class="menu__item menu__item--social">
										<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a>
									</li>
									<li class="menu__item menu__item--social">
										<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/pinterest.png"></a>
									</li>
									<li class="menu__item menu__item--social">
										<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/googleplus.png"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- end of copyright -->
		</footer> <!-- end of site-footer -->

	</div> <!-- end of all-site -->

	<?php wp_footer(); ?>

	</body>
	</html>
