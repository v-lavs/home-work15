<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panakeia
 */

?>

    <li class="post-item single-item">

        <div class="img-wrap">
            <?php the_post_thumbnail('full') ?>
        </div>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-section-news">Read more</a>

    </li>


