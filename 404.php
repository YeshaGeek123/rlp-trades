<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rlp-trades
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
		<div class="banner inner-banner inner-page-banner" style="background-image: url('<?php echo home_url();?>/wp-content/uploads/2022/07/footer-bg.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="banner-text">
							<h1 class="h1-title">404 Error</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner-page-text">
    <div class="inner-page-text-shape"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div class="inner-title ">
                    <h1 class="h2-title"><?php// the_title(); ?></h1>
                </div> -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <img src="<?php echo home_url();?>/wp-content/uploads/2022/07/404.png" alt="404"  width="800" height="1000">
                        <?php
                        while (have_posts()) :
                            the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <?php rlp_trades_post_thumbnail(); ?>
                                <div class="entry-content">
                                    <?php
                                    the_content(sprintf(
                                        wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'tree-landscaping'), array(
                                                'span' => array(
                                                    'class' => array(),
                                                ),
                                            )
                                        ), get_the_title()
                                    ));

                                    ?>
                                </div><!-- .entry-content -->
                            </article><!-- #post-the_ID(); -->
                            <?php

                        endwhile; // End of the loop.
                        ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
        </div>
    </div>
</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
