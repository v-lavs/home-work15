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
        <main id="main" class="site-main team">
            <div class="container">
            <?php
            while (have_posts()) : the_post(); ?>
            <article>
                <div class="img-member-wrap">
                    <?php
                    $image = get_field('thumbnail_post');
                    if (!empty($image)): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endif; ?>
                </div>
                <div class="content-member">
                <h3 class="title-member"><?php the_field('name'); ?></h3>
                <p><?php the_field('age'); ?></p>
                <p><?php the_field('kind_of_activity'); ?></p>
                <p><?php the_field('text_a_member'); ?></p>
                    </div>
            </article>

                <?php
                the_post_navigation();

            endwhile; // End of the loop.
            ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();