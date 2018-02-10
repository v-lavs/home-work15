<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package panakeia
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main section-news">
            <div class="container">
                <?php
                while (have_posts()) : the_post(); ?>
                    <article>
                        <div class="img-wrap">
                            <?php the_post_thumbnail('full') ?>
                        </div>
                        <h3 class="post-title"><?php the_title(); ?></a></h3>
                        <p><?php the_content(); ?></p>
                    </article>

                    <?php the_post_navigation();

                endwhile; // End of the loop.
                ?>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
