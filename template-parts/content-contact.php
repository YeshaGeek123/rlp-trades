<div class="inner-page contact-page">
<section class="banner inner-banner" style="background-image: url('<?php the_field('contact_banner_backgound_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-text white-text">
                    <h2 class="h2-title" data-title="Contact">Contact</h2>
                        <?php the_field('contact_content'); ?>
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
                                    <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>"><?php echo $phone; ?></a>
                                </li>
                                <?php
								$address = get_field('address','options');
								$address_title = strip_tags($address); 
								?>
                                <li class="social-box">
                                    <span class="icon"><img src="http://192.168.29.3/rlp-trades/wp-content/uploads/2022/07/map-pin.svg"></span>
                                    <a href="<?php the_field('address_link','options'); ?>" title="<?php echo $address_title; ?>" target="_blank"><?php echo $address; ?></a>
                                </li>
                            </div>
                    </ul>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <div class="form">
                        <?php
                            echo do_shortcode('[contact-form-7 id="8" title="Contact Form"]');
                        ?>
                    </div>
                </div>
            </div>
         </div>
</section>
</div>