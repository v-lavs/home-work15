<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panakeia
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main product-details">
            <h1 class="main-title">Information</h1>

            <div class="container">

            <ul class="list-product-item">
                <?php
                $args = [
                    'post_type' => 'inform_post',
                    'nopaging' => true,
                ];
                query_posts($args);


                while (have_posts()) : the_post();

                    get_template_part('template-parts/content-information', 'inform_post');

                endwhile; // End of the loop.
                ?>
                <?php wp_reset_query(); ?>
    </ul>
    </div>

    </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();