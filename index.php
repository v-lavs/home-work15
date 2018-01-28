<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panakeia
 */

get_header(); ?>

<section class="banner-section d-table" style="background: url('<?php bloginfo('template_url')?>/assets/img/cafe.jpg') no-repeat center/cover">
    <div class="d-cell" >
        <div class="container container-default">
            <div class="heading-banner">
                <h1>Integer at tortor ut magna</h1>
                <p>finibus lobortis sed quis tellus.</p>
            </div>
            <div class="cards-container">
                <ul>
                    <?php if (have_posts()) : ?>
                    <?php  while (have_posts()) : the_post(); ?>
                    <li class="card">
                        <div class="box-img">
                            <?php the_post_thumbnail('full', 'class=round-img'); ?>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <a href="#" class="main-btn banner-section-btn">Read more</a>
        </div>
    </div>
</section>

<section class="section-news">
    <div class="container container-default clearfix">
        <h2>Our news</h2>
        <div class="post-list">
            <ul>
                <?php $args = array('post_type' => 'our_news', 'posts_per_page' => 3);
                $news = new WP_Query($args);
                while ($news->have_posts()) : $news->the_post(); ?>
                <li class="post-item">
                    <div class="img-wrap">
                        <?php the_post_thumbnail('full') ?>
                    </div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="main-btn btn-section-news">Read more</a>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>
