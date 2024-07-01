<!DOCTYPE html>
<html lang="EN">
   <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,
		maximum-scale=1.0, user-scalable=0">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
		<meta name="format-detection" content="telephone=no">

      <?php wp_head(); ?>
   </head>
	<body>
		<div class="wrapper">
			<header ader class="header">
				<div class="header__container __container">

               <!--Додаємо-логотип-->
               <?php
                  if( has_custom_logo()) {
                     echo get_custom_logo();
                  }
                  ?>

					<nav class="header__menu menu">

                  <!--Додаємо-меню-->
                  <?php 
                     wp_nav_menu( [
                        'theme_location' => 'header',
                        //'menu' => '',
                        'container' => false, //чи div на приклад
                        //'container_class' => 'menu',
                        //'container_id' => '',
                        'menu_class' => 'menu__list',
                        'menu_id' => false,
                        'echo' => true,
                        //'fallback_cd' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                        'walker' => '',
                     ] );
                  ?>
					</nav>
				</div>
			</header>