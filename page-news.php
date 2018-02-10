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
        <main id="main" class="site-main section-news">
            <h1 class="main-title">News</h1>
            <div class="container clearfix">
                <div class="post-list">
                    <ul class="news-list">
                        <?php
                        $args = [
                            'post_type' => 'our_news',
                            'post_per_page' => 3,
                        ];
                        query_posts($args);

                        while (have_posts()) :the_post();
                            get_template_part('template-parts/content-news', 'our_news');
                        endwhile; // End of the loop.
                        ?>

                        <?php
                        global $wp_query;

                        $big = 999999999; // need an unlikely integer

                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?page=%#%',
                            'current' => max( 1, get_query_var('page') ),
                            'total' => $wp_query->max_num_pages
                        ) );
                        ?>

                        <?php wp_reset_query(); ?>


                    </ul>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();