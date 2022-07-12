<!-- banner sec start -->
<section class="banner" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
<div class="banner-section">
    <div class="banner-mob-bg" style="background-image: url('<?php the_field('home_banner_image'); ?>');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">

                    <div class="banner-content">
                    <div class="site-id for-mob">
                        <img  src="<?php echo home_url();?>/wp-content/uploads/2022/07/logo-1.svg"  alt="Logo" width="150" height="150">
                        </div>
                            <h1 class="h1-title"><?php the_field('home_banner_slogan'); ?></h1>
                            <?php
                                $phone = get_field('phone_number','option');
                                $val = array(" ", "-");
                                $replace = array("", "");
                                $phone_link = str_replace($val, $replace, $phone);
                            ?>
                        <div class="banner-btn">
                            <a href="tel:<?php echo $phone_link; ?>" class="sec-btn" title="Call now"><span>Call now</span></a>
                            <a href="<?php the_field('home_contact_us_link'); ?>" class="sec-btn" title="Contact Us"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</div>
<div class="about-section">
    <div class="container">
        <div class="about-us">
            <div class="row no-gutters ">
                <div class="col-lg-12 for-des">
                    <div class="title ">
                        <h2 class="h2-title" data-title="About"><?php the_field('about_us_title'); ?></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <div class="back-img" style="background-image: url('<?php the_field('about_us_image'); ?>');">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 for-mob">
                    <div class="title ">
                        <h2 class="h2-title" data-title="About"><?php the_field('about_us_title'); ?></h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-text white-text">
                        <?php the_field('about_us_content'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
<!-- banner sec end -->
<!-- service sec start -->
<section class="service-sec" style="background-image: url('<?php the_field('service_background_image'); ?>');" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                <h2 class="h2-title" data-title="Services"><?php the_field('service_main_title'); ?></h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="service-menu custom-dot-slider">
                </div>
            </div>
        </div>
        <div class="services-tabbing-slider accordian">
            <?php
            if(have_rows('sub_services')):
                while(have_rows('sub_services')): the_row();
            ?>
                    <div class="service-box">
                        <div class="for-mob">
                            <h3 class="h3-title service-accordian-title"><?php the_sub_field('sub_service_title'); ?><span class="arrow"></span></h3>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-6 order-lg-1 order-2">
                                    <div class="service-info  white-text">
                                        <h3 class="h3-title dot-title" title="<?php the_sub_field('sub_service_title'); ?>"><?php the_sub_field('sub_service_title'); ?></h3>
                                        <?php the_sub_field('sub_service_content'); ?>
                                        <a href="<?php the_sub_field('page_link'); ?>" title="<?php the_sub_field('sub_service_title'); ?>, Learn more">Learn more <span><i class="fal fa fa-angle-right"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-6  order-lg-2 order-1">
                                    <div class="service-img">
                                        <div class="back-img" style="background-image: url('<?php the_sub_field('sub_service_image'); ?>');"></div>
                                        <div class="service-back" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/serviceback-img.jpg');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- service sec end -->
<!-- review section start -->
<section class="review">
    <div class="review-shape"></div>
    <div class="container">
        <div class="review-sec">
            <div class="row justify-content-center ">
                <div class="col-lg-12">
                    <div class="title">
                        <h2 class="h2-title" data-title="Reviews"><?php the_field('reviews_main_title'); ?></h2>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-10">
                    <div class="review-slider">
                        <?php
                        $review_list = get_posts(array(
                            'post_type' => 'reviews',
                            'post_status' => 'publish',
                            'order'          => 'ASC',
                            'posts_per_page' => -1,
                        ));


                        if ($review_list) :
                            foreach ($review_list as $review) :
                                $post_id = $review->ID;
                        ?>
                        <div class="review-info">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="review-text" data-simplebar="init">
                                <p><?php echo $review->post_content; ?></p>
                            </div>
                            <div class="author">
                                <h3 class="h3-title"><?php echo $review->post_title; ?></h3>
                                <h4 class="h4-title"><?php the_field('reviews_department',$post_id); ?></h4>
                            </div>
                        </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery section start -->
    <div class="gallery" style="background-image: url('<?php the_field('gallery_background_image'); ?>);">
        <div class="container">
            <div class="row gallery-slider">
                <?php
                    $gallery_image = get_field('gallery_images');
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
</section>
<!-- review section end -->

