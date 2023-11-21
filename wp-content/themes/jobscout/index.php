<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
        <?php 
        /**
         * Before Posts hook
        */
        do_action( 'jobscout_before_posts_content' );
        ?>
        <main id="main" class="site-main">
            <?php
            if ( have_posts() ) :
                ?>
                <div class="mt-4" style="position: relative; display: inline-block; margin-top:31px !important ; width: 100%">
                    <img style="width: 100%; height: 60vh " src="http://localhost/wordpress/wp-content/uploads/2023/11/khung-canh-tokyo-ngoan-muc.jpg" alt="">
                    <span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 30px; color: white; font-weight: bold;">PDS NEWS</span>
                </div>
                <div class="container">
                    <div class="row">
                        <?php
                            get_template_part( 'template-parts/content', get_post_format() );
                        // Reset post data
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            <?php

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

		</main><!-- #main -->
        
<!--        --><?php
//        /**
//         * After Posts hook
//         * @hooked jobscout_navigation - 15
//        */
//        do_action( 'jobscout_after_posts_content' );
//        ?>
        
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
