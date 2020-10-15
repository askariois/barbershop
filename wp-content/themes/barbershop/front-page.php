<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php echo carbon_get_post_meta('2', 'crb_land_logo'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="/"><?php echo carbon_get_post_meta('2', 'crb_land_logo'); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Меню
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<?php wp_nav_menu([
					'container' => false,
					'menu_class' => 'navbar-nav ml-auto',
					'theme_location'  => 'menu-1',
					'walker' => new Home_Walker()
				]); ?>
			</div>
		</div>
	</nav>
	<!-- конец nav -->

	<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo carbon_get_post_meta('2', 'crb_land_baner'); ?>');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">

				</a>
				<div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">

					<!-- <div class="" ss="mb-55" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Будьте стильными!</div> -->

				</div>
			</div>
		</div>
	</div>

	<section class="ftco-intro">
		<div class="container-wrap">
			<div class="wrap d-md-flex align-items-end">
				<div class="info">
					<div class="row no-gutters">
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-phone"></span></div>
							<div class="text">
								<h3><?php echo carbon_get_post_meta('2', 'crb_land_phone'); ?></h3>
								<!-- <p>A small river named Duden flows</p> -->
							</div>
							<div class="icon"><span class="icon-whatsapp"></span>
							</div>
							<div class="text">
								<h3><?php echo carbon_get_post_meta('2', 'crb_land_whatsapp'); ?></h3>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-my_location"></span></div>
							<div class="text">
								<?php echo carbon_get_post_meta('2', 'crb_land_adress'); ?>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-clock-o"></span></div>
							<div class="text">
								<?php echo carbon_get_post_meta('2', 'crb_land_rasp'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="social pl-md-5 p-4">
					<ul class="social-icon">

						<li class="ftco-animate"><a href="	<?php echo carbon_get_post_meta('2', 'crb_land_insta_link'); ?>"><span class="icon-instagram">&nbsp; <?php echo carbon_get_post_meta('2', 'crb_land_insta'); ?></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-bg-dark" id="service">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h2 class="mb-4"><?php echo carbon_get_post_meta('2', 'crb_land_s_heading'); ?></h2>
					<p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
					<p class="mt-5"><?php echo carbon_get_post_meta('2', 'crb_land_s_desc'); ?></p>
				</div>
			</div>
			<div class="row">
				<?php
				$slides = carbon_get_post_meta('2', 'crb_land_s_icon');
				foreach ($slides as $slide) :
				?>
					<div class="col-md-3 ftco-animate">
						<div class="media d-block text-center block-6 services">
							<div class="icon d-flex justify-content-center align-items-center mb-4">
								<span class="flaticon-male-head-hair-and-beard"></span>

							</div>
							<div class="media-body">
								<h3 class="heading"><?php echo $slide['crb_land_s_icon_text']; ?></h3>
								<!-- <p>Если что текст</p> -->
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="price">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4"><?php echo carbon_get_post_meta('2', 'crb_land_p_heading'); ?></h2>
					<p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
					<!-- <p class="mt-5">Если что текст</p> -->
				</div>
			</div>
			<div class="row">

				<?php
				$prices = carbon_get_post_meta('2', 'crb_land_p_block');
				foreach ($prices as $price) :
				?>
					<div class="col-md-6">
						<div class="pricing-entry ftco-animate">
							<div class="d-flex text align-items-center">
								<h3><span><?php echo $price['crb_land_p_text']; ?></span></h3>
								<span class="price"><?php echo $price['crb_land_p_price']; ?></span>
							</div>
							<div class="d-block">
								<!-- <p>A small river named Duden flows by their place and supplies</p> -->
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		</div>
	</section>

	<section class="ftco-appointment" id="zapis">
		<div class="overlay"></div>
		<div class="container-wrap">
			<div class="row no-gutters d-md-flex align-items-center">

			</div>

			<div class="col-md-6 appointment ftco-animate">
				<h3 class="mb-3">Онлайн запись</h3>
				<form action="#" class="appointment-form">
					<div class="d-md-flex">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Имя">
						</div>
						<div class="form-group ml-md-4">
							<input type="text" class="form-control" placeholder="Фамилия">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<div class="input-wrap">
								<div class="icon"><span class="ion-md-calendar"></span></div>
								<input type="text" id="appointment_date" class="form-control" placeholder="Дата">
							</div>
						</div>
						<div class="form-group ml-md-4">
							<div class="input-wrap">
								<div class="icon"><span class="ion-ios-clock"></span></div>
								<input type="text" id="appointment_time" class="form-control" placeholder="Время">
							</div>
						</div>
						<div class="form-group ml-md-4">
							<input type="text" class="form-control" placeholder="Телефон номер">
						</div>
					</div>
					<div class="form-group">
						<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Сообщение"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="Записаться" class="btn btn-primary py-3 px-4">
					</div>
				</form>
			</div>
		</div>
		</div>
	</section>


	<section class="ftco-section ftco-discount img" style="background-image: url(<?php echo carbon_get_post_meta('2', 'crb_land_sl_bg'); ?>);" data-stellar-background-ratio="0.2">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center" data-scrollax-parent="true">
				<div class="col-md-7 text-center discount ftco-animate" data-scrollax=" properties: { translateY: '-30%'}">
					<?php echo carbon_get_post_meta('2', 'crb_land_sl_desc'); ?>
				</div>
			</div>
		</div>
	</section>



	<section class="ftco-section" id="product">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4"><?php echo carbon_get_post_meta('2', 'crb_land_pr_heading'); ?></h2>
					<p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
					<!-- <p class="mt-5">Если что текст</p> -->
				</div>
			</div>
			<div class="row">
				<?php
				$products = carbon_get_post_meta('2', 'crb_land_pr_block');
				foreach ($products as $product) :
				?>

					<div class="col-md-6">
						<div class="pricing-entry ftco-animate">
							<div class="d-flex text align-items-center">
								<h3><span><?php echo $product['crb_land_pr_text']; ?></span></h3>
								<span class="price"><?php echo $product['crb_land_pr_price']; ?></span>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		</div>
	</section>


	<footer class="ftco-footer ftco-section img" id="contact">
		<div class="overlay"></div>
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">О нас</h2>
						<p><?php echo carbon_get_post_meta('2', 'crb_land_f_about'); ?></p>
					</div>
				</div>

				<div class="col-md-3">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Услуги</h2>
						<ul class="list-unstyled">
							<?php
							$slides = carbon_get_post_meta('2', 'crb_land_s_icon');
							foreach ($slides as $slide) :
							?>
								<li><a class="py-2 d-block"><?php echo $slide['crb_land_s_icon_text']; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Наши продукции</h2>
						<ul class="list-unstyled">
							<?php
							$products = carbon_get_post_meta('2', 'crb_land_pr_block');
							foreach ($products as $product) :
							?>
								<li><a class="py-2 d-block"><?php echo $product['crb_land_pr_text']; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Остались вопросы?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text"><?php echo carbon_get_post_meta('2', 'crb_land_f_adress'); ?></i></span></li>
								<li><span class="icon icon-phone"></span><span class="text"><?php echo carbon_get_post_meta('2', 'crb_land_phone'); ?></span></a></li>
								<li><span class="icon icon-whatsapp"></span><span class="text"><?php echo carbon_get_post_meta('2', 'crb_land_whatsapp'); ?></span></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 text-center">

						<p>
							&copy;<script>
								document.write(new Date().getFullYear());
							</script> Все права зашищены &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<!-- < i class="icon-heart" aria-hidden="true"> -->
							<!-- </i> --> Сайт сделано by <a href="https://www.instagram.com/desard.kg/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/copy2.png"> </a> Desard.kg INC
						</p>


					</div>
				</div>

			</div>

		</div>

		</div>
		</div>
	</footer>




	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

	<?php wp_footer(); ?>
</body>

</html>