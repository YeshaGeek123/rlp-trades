<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rlp-trades
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="footer-branding">
				<a href="<?php echo home_url(); ?>" title="logo"><img src="<?php the_field('footer_logo','options'); ?>" alt="logo" width="270" height="270"></a>
			</div>
		<div class="footer-top" style="background-image: url('<?php the_field('footer_background_image','options'); ?>');">
			<div class="container">

				<div class="footer-info">
					<div class="row">
						<div class="col-lg-6">
							<div class="footer-text white-text">
								<?php the_field('footer_content','options'); ?>
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="footer-contact">
								<li class="social-box">
									<span class="icon"><img src="http://192.168.29.3/rlp-trades/wp-content/uploads/2022/07/mail.svg"></span>
									<a href="mailto:<?php the_field('email','options'); ?>" title="<?php the_field('email','options'); ?>"><?php the_field('email','options'); ?></a>
								</li>
								<?php
									$phone = get_field('phone_number','option');
									$val = array(" ", "-");
									$replace = array("", "");
									$phone_link = str_replace($val, $replace, $phone);
								?>
								<li class="social-box">
									<span class="icon"><img src="http://192.168.29.3/rlp-trades/wp-content/uploads/2022/07/phone.svg"></span>
									<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>"><span class="callus"><?php echo $phone; ?></span></a>
								</li>
								<?php
								$address = get_field('address','options');
								$address_title = strip_tags($address); 
								?>
								<li class="social-box">
									<span class="icon"><img src="http://192.168.29.3/rlp-trades/wp-content/uploads/2022/07/map-pin.svg"></span>
									<a href="<?php the_field('address_link','options'); ?>" title="<?php echo $address_title; ?>" target="_blank"><?php echo $address; ?></a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-box">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12">
						<div class="footer-bottom-text">
							<div class="copy-right">
								<p>© <?php echo date('Y'); ?> RLP Consulting</p>
							</div>
							<div class="footer-bottom-link">
								<ul>
									<li><a href="<?php echo home_url();?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
									<li><a href="<?php echo home_url();?>/terms-of-use" title="Terms of Service">Terms of Use</a></li>
									<li><a href="<?php echo home_url();?>/cookie-policy" title="Cookies Policy">Cookie Policy</a></li>
								</ul>
							</div>

						</div>
					</div>
					<div class="col-12">
					<div class="footer-other-link">
								<p>Web Design , SEO &amp; Online Marketing by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
