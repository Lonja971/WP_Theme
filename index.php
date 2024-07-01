<?php get_header();  //If we need header.php ?>
<?php //get_header('page');  If we need header-page.php ?>

         <main class="page">
				<div class="page__main-block main-block">
					<div class="main-block__container __container">
						<div class="main-block__body">
							<h1 class="main-block__title">
								Finance and Consultancy Solution
							</h1>
							<div class="main-block__text">
								We know how large objects will act, but things on a small scale.
							</div>
							<div class="main-block__buttons">
								<a href="#" class="main-block__button main-block__button_orange">Get Quote Now</a>
								<a href="#" class="main-block__button main-block__button_border">Learn More</a>
							</div>
						</div>
					</div>
					<div class="main-block__image _ibg">
						<img src="<?php echo(get_template_directory_uri()); ?>/img/Header/header__background.jpg" alt="">
					</div>
				</div>
			</main>

<?php get_footer(); ?>