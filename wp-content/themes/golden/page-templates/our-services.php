<?php
/**
 * Template Name: Our Services
 *
 * @package WordPress
 * @subpackage Golden_Theme
 * @since 1.0
 */

	get_header(); ?>

			<header style="background: #660000">
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





			<section class="page-header">
				<div class="services-page__head section-content">
					<div class="container">
						<div class="row">
							<div class="col-md-8 services-page__tagline">
								<h1>
									We provide convenient, fast, expert computer support services to small businesses
								</h1>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="services-page">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">Our Services</h1>
						<p class="section-subtitle">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, dolorum dicta? Explicabo quos obcaecati sequi eius, quod rem nisi nesciunt doloribus. Totam quo qui dignissimos at nisi, quasi in officia.
						</p>
					</div>
					<div style="margin-top: 2rem">
						<div class="container">
							<ul class="flex">
								<li class="flex__item">
									<a href="">
										<div class="container">
											<span class="glyphicon glyphicon-qrcode" style="font-size: 2rem"></span>
											<h3>Network Services</h3><br>
											<p>
												Cras vel dolor magna. Nulla pellentesque, elit non gravida tempor.
											</p>
										</div>
									</a>
								</li>
								<li class="flex__item">
									<a href="">
										<div class="container">
											<span class="glyphicon glyphicon-hdd" style="font-size: 2rem"></span>
											<h3>Data Management</h3><br>
											<p>
												Cras vel dolor magna. Nulla pellentesque, elit non gravida tempor, lacus nisl rutrum ipsum.
											</p>
										</div>
									</a>
								</li>
								<li class="flex__item">
									<a href="">
										<div class="container">
											<span class="glyphicon glyphicon-user" style="font-size: 2rem"></span>
											<h3>IT Consulting</h3><br>
											<p>
												Cras vel dolor magna. Nulla pellentesque, elit non gravida tempor.
											</p>
										</div>
									</a>
								</li>
								<li class="flex__item">
									<a href="">
										<div class="container">
											<span class="glyphicon glyphicon-briefcase" style="font-size: 2rem"></span>
											<h3>Help Desk / Support</h3><br>
											<p>
												Cras vel dolor magna. Nulla pellentesque, elit non gravida tempor, lacus nisl rutrum ipsum.
											</p>
										</div>
									</a>
								</li>
								<li class="flex__item">
									<a href="">
										<div class="container">
											<span class="glyphicon glyphicon-wrench" style="font-size: 2rem"></span>
											<h3>Maintenance</h3><br>
											<p>
												Cras vel dolor magna. Nulla pellentesque, elit non gravida tempor.
											</p>
										</div>
									</a>
								</li>
								<li class="flex__item">
									<a href="">
										<div class="container">
											<span class="glyphicon glyphicon-certificate" style="font-size: 2rem"></span>
											<h3>Training</h3><br>
											<p>
												Cras vel dolor magna. Nulla pellentesque, elit non gravida tempor.
											</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section> <!-- end of services-page -->

			<section class="request-service">
				<div class="container-fluid request-bg">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 request-bg__text-container">
								<h1>Request a Service</h1>
								<br>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem recusandae iure saepe vitae est porro, dolorum id eum consequuntur incidunt ipsum explicabo totam sit, officiis cumque deleniti iste. Omnis, odio.
								</p>
								<br>
								<input type="button" class="btn btn-lg btn-success" value="Get Started">
							</div>
						</div>
					</div>
				</div>
			</section>

	<?php get_footer(); ?>