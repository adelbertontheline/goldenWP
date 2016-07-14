<?php
/**
 * Template Name: Our About
 *
 * @package WordPress
 * @subpackage Golden_Theme
 * @since 1.0
 */

	get_header(); ?>

			<header style="background: #004d4d">
				<div class="stage-content">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<a href=""><img class="site-logo center-block" src="<?php bloginfo('template_directory'); ?>/img/myLogo.png" alt=""></a>
							</div>
							<div class="col-md-10">
								<nav class="site-nav">
									<?php wp_nav_menu(array('theme_location' => 'primaryMenu')); ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>





			<section style="background: #f2f2f2">
				<img class="about-page__head center-block" src="<?php bloginfo('template_directory'); ?>/img/about-bg.jpg" alt="">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">About Us</h1><br>
						<hr style="width: 10%; background-color: #004d4d"><br>
						<h1 class="section-subtitle section-subtitle--about-page">
							&ldquo;It’s not wise to violate rules until <br>you know how to observe them.&rdquo;
						</h1>
					</div>
				</div>
			</section>

			<section style="background: #fff">
				<div class="section-content">
					<div class="container">
						<p class="content-title">
							Our DNA
						</p>
						<p class="content-paragraph">
							There are a lot of agencies that do what we do. They share the same what and how, but our partners work with us for our why and our who. We’re minds and makers with business sense and creative chops, set out to connect people with what matters most — the experience. And we spend each day doing so by sharpening the tools of the digital trade.
						</p>
					</div>

					<div class="container" style="margin-top: 4rem">
						<p class="content-title">
							More About Us
						</p>
						<div class="row">
							<div class="col-md-6">
								<p class="content-paragraph">
									Jam3 is one of the world’s top digital production and design agencies. We specialize in creating highly advanced, experiential works in both the advertising and entertainment industries.
								</p>
								<p class="content-paragraph">
									We’re a culture of dreamers and doers who prove that the two aren’t mutually exclusive. We’re happiest when we’re innovating, and fanatically dedicated to our craft.
								</p>
							</div>
							<div class="col-md-6">
								<p class="content-paragraph">
									We’re known for challenging the way digital stories are told. Our work often incorporates everything from live action, animation and sound design to coded particle systems and complex 3D engines. If it is possible, Jam3 can do it.
								</p>
								<p class="content-paragraph">
									At Jam3, everything is informed by our three core principles: story, craft and technology.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section style="background: #f2f2f2">
				<div class="section-content">
					<div class="container">
						<p class="content-title">
							Core Values
						</p>
						<p class="content-paragraph">
							This is the fabric of our culture and the framework for all decisions made within these walls. Heads up, they tend to be contagious.
						</p>
					</div>

					<div class="core-values">
						<br>
						<hr style="width: 10%; background-color: #f26f70">
						<br>
							<h1 class="core-values__item">
								Authenticity.
							</h1>
							<p class="content-paragraph content-paragraph--core">
								To be genuine, be vulnerable.
							</p>
						<br>
						<hr style="width: 10%; background-color: #f26f70">
						<br>
							<h1 class="core-values__item">
								Simplicity.
							</h1>
							<p class="content-paragraph content-paragraph--core">
								Distill to the meaningful and balanced.
							</p>
						<br>
						<hr style="width: 10%; background-color: #f26f70">
						<br>
							<h1 class="core-values__item">
								Drive.
							</h1>
							<p class="content-paragraph content-paragraph--core">
								Do what you love.
							</p>
						<br>
						<hr style="width: 10%; background-color: #f26f70">
						<br>
							<h1 class="core-values__item">
								Adventure.
							</h1>
							<p class="content-paragraph content-paragraph--core">
								Take risks and embrace where they take you.
							</p>
						<br>
						<hr style="width: 10%; background-color: #f26f70">
						<br>
							<h1 class="core-values__item">
								Mindfulness.
							</h1>
							<p class="content-paragraph content-paragraph--core">
								Exercise a nuanced, articulate understanding.
							</p>
						<br>
						<hr style="width: 10%; background-color: #f26f70">
						<br>
							<h1 class="core-values__item">
								Appreciation.
							</h1>
							<p class="content-paragraph content-paragraph--core">
								Dwell on the good.
							</p>
					</div>
				</div>
			</section>

			<section style="background: #f26f70; text-align: center">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title" style="color: white">
							The Team
						</h1>
						<p class="section-subtitle" style="color: #e6e6e6">
							The lifeblood of PRPL is our people. As a tight-knit team of strategists, creatives, and technologists, we’re devoted to a culture that cultivates, and work that works.
						</p>
					</div>

					<div style="margin-top: 3rem">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about1.png">
									<h5>Kimberly Thompson</h5>
									<p>Marketer</p>
									<div class="social">
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
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about2.png">
									<h5>Rico Massimo</h5>
									<p>Coder</p>
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
									</ul>
								</div>
								<div class="col-md-4">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about3.png">
									<h5>Uko Mason</h5>
									<p>Graphic Designer</p>
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
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="container-fluid booking-bg">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 booking-bg__text-container">
								<div class="col-md-6 col-md-offset-3">
									<h1>Inside Office</h1>
									<br>
									<p>
										Our headquarters are perfect for hosting public meetups, professional photo shoots, and other private events. Thumb through our facility license agreement and contact us for more information!
									</p>
									<br>
									<input type="button" class="btn btn-lg btn-danger" value="Get Booking Info">
									</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	<?php get_footer(); ?>