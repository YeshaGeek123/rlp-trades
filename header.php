<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rlp-trades
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/rlp-trades/assets/fonts/SquadaOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/rlp-trades/assets/fonts/FuturaBT-Light.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/rlp-trades/assets/fonts/Futura-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary" title="Skip to content"><?php esc_html_e( 'Skip to content', 'rlp-trades' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="site-branding for-des">
						<?php the_custom_logo();?>
					</div><!-- .site-branding -->
					<div class="site-branding for-mob">
						<a href="<?php echo home_url(); ?>" title="RLP Consulting"><img src="<?php the_field('responsive_logo','options'); ?>" alt="logo" width="103" height="32"></a>
					</div>
				</div>
				<?php
				$phone = get_field('phone_number','option');
				$val = array(" ", "-");
				$replace = array("", "");
				$phone_link = str_replace($val, $replace, $phone);
				?>
				<div class="col-lg-8">
					<div class="header-menu">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<div class="header-mobile-menu">
							<div class="site-id for-mob">
							<a href="<?php echo home_url(); ?>" title="logo"><img src="<?php the_field('footer_logo','options'); ?>"  alt="Logo" width="150" height="150">
								</a>
							</div>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
								<div class="header-contact for-mob">
									<a href="tel:<?php echo $phone_link; ?>" class="sec-btn" title="Call now"><span>Call now</span></a>
								</div>
							</div>
						</nav>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="header-call for-des">
						<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>"><img src="<?php echo home_url();?>/wp-content/uploads/2022/07/phone.svg" alt="phone"> <span class="callus"><?php echo $phone; ?></span></a>
					</div>
					<div class="header-call-mob for-mob">
						<a href="tel:<?php echo $phone_link; ?>" title="call"><img src="<?php echo home_url();?>/wp-content/uploads/2022/07/phone-mob.svg" alt="phone-mob"></a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
