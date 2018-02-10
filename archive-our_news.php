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
                    <?php
                    $post_type_link = (get_post_type_archive_link(get_post_type()));
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array(
                        'post_type' => 'our_news',
                        'post_status' => 'publish',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                    );
                    $wp_query = new WP_Query($args); ?>

                    <ul class="news-list clearfix">
                        <?php
                        if ($wp_query->have_posts()): while ($wp_query->have_posts()) :
                            $wp_query->the_post();
                            get_template_part('template-parts/content-news', 'our_news');
                        endwhile;
                        endif; ?>
                    </ul>

                    <nav class="pagination">
                        <?php
                        echo(paginate_links($args = array(
                            'base' => $post_type_link . '%_%',
                            'format' => 'page/%#%/',
                            'total' => $wp_query->max_num_pages,
                            'current' => $paged,
                            'end_size' => 1,
                            'mid_size' => 2,
                            'prev_text' => __('« Previous'),
                            'next_text' => __('Next »'),
                            'type' => 'plain',
                            'add_args' => False,
                        ))); ?>
                    </nav>
                    <?php wp_reset_query(); ?>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();