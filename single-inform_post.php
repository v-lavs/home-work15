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
                while (have_posts()) : the_post(); ?>
                    <article>
                        <div class="thumb">
                            <?php
                            $video = get_field('video');
                            if ($video) { ?>
                                <video controls src="<?php echo $video['url']; ?>"></video>
                            <?php } elseif (get_the_post_thumbnail()) {
                                the_post_thumbnail('full');
                            } ?>

                        </div>
                        <div class="product-item">
                            <h3 class="title-product-item"><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>

                        </div>
                    </article>
                    <?php the_post_navigation();

                endwhile; // End of the loop.
                ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
