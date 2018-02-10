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
        <main id="main" class="site-main">
            <h1 class="main-title">Blog</h1>
            <div class="container">
                <div class="cards-container">
                    <ul>
                        <?php
                        $args = [
                            'post_type' => 'post',
                            'nopaging' => true,
                        ];
                        query_posts($args);
                        while (have_posts()) : the_post(); ?>
<!--                      --><?php //    get_template_part('template-parts/content', 'page'); ?>

                            <li class="card">
                                <article>
                                    <div class="box-img">
                                        <?php the_post_thumbnail('full', 'class=round-img'); ?>
                                    </div>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </article>
                            </li>

                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </div>
            </div>

            <!--            --><?php
            //            while (have_posts()) : the_post();
            //
            //                get_template_part('template-parts/content', 'page');
            //
            //            endwhile; // End of the loop.
            //            ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
