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
        <main id="main" class="site-main">
<div class="container">
            <?php
            while (have_posts()) : the_post();?>

                <article class="post-single">
                    <div class="card">
                        <div class="box-img">
                            <?php the_post_thumbnail('full', 'class=round-img'); ?>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </article>

                <?php the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
</div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
