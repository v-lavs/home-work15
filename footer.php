<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package panakeia
 */

?>

</div><!-- #content -->

<footer>
    <div class="bg-footer-warm">
        <div class="container container-default">

            <ul class="link-item-list">

                <?php $args = array('post_type' => 'post', 'nopaging' => true);
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

            </ul>
            <ul class="link-item-list">

                <?php $args = array('post_type' => 'our_news', 'nopaging' => true);
                $news = new WP_Query($args);
                while ($news->have_posts()) : $news->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

            </ul>
            <ul class="link-item-list">

                <?php $args = array('post_type' => 'inform_post', 'nopaging' => true);
                $inform = new WP_Query($args);
                while ($inform->have_posts()) : $inform->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

            </ul>
        </div>
    </div>
    <div class="bg-footer-second" style="background: url('<?php bloginfo('template_url')?>/assets/img/kitchen.jpg') no-repeat center/cover">
        <div class="container container-default">
            <?php
            if (is_active_sidebar('footer-sidebar')) { ?>
                <?php dynamic_sidebar('footer-sidebar'); ?>
            <?php } ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>

<!--Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Try awsome tool for desgners <strong>symu.co</strong>-->