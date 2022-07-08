<div class="inner-page">
    <!-- banner sec start -->
    <section class="banner inner-banner" style="background-image: url('<?php the_field('service_details_Image'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="h2-title" data-title="Services">Services</h2>
                        <h3 class="h3-title " title="<?php the_title(); ?>"><?php the_title(); ?></h3>
                        <div class="banner-text white-text">
                            <?php the_field('service_details_content'); ?>
                        </div>
                        <?php
                            $phone = get_field('phone_number','option');
                            $val = array(" ", "-");
                            $replace = array("", "");
                            $phone_link = str_replace($val, $replace, $phone);
                        ?>
                        <a href="tel:<?php echo $phone_link; ?>" class="sec-btn" title="contact us" data-hover="call now"><span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner sec end -->

    <!-- gallery section start -->
    <div class="gallery">
        <div class="container">
            <div class="row gallery-slider">
                <?php
                    $gallery_image = get_field('service_gallery_images');
                    if(isset($gallery_image) && !empty($gallery_image)) :
                        $counter = 1;
                        foreach ($gallery_image as $key => $image) :
                ?>
                    <div class="gallery-img" >
                        <a href="<?php echo $image['url']; ?>" data-fancybox="gallery" title="Gallery Image <?php echo $counter++; ?>">
                            <div class="back-img" style="background-image: url('<?php echo $image['url']; ?>');"></div>
                        </a>
                    </div>
                <?php
                        endforeach;
                    endif;
                ?>
            </div>
        </div>
    </div>
    <!-- gallery section start -->
</div>