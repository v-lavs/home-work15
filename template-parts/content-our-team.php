<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panakeia
 */

?>

<li class="post-item-team">

    <div class="img-member-wrap">
        <?php
        $image = get_field('thumbnail_post');
        if( !empty($image) ): ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
        <?php endif; ?>
    </div>
    <div class="content-member">
    <h3 class="title-member"><a href="<?php the_permalink(); ?>"><?php the_field('name'); ?></a></h3>
    <p><?php the_field('age'); ?></p>
    <p><?php the_field('kind_of_activity'); ?></p>
    </div>

</li>