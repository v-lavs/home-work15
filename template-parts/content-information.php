<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panakeia
 */

?>

<li class="clearfix">
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
        <h3 class="title-product-item">
            <a class="link-product-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-item-danger">Sign up</a>
    </div>
</li>
