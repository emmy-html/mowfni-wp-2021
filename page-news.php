<?php /* Template Name: Newsletter Landing Page */ ?>
<?php get_header(); ?>
<main id="content">
    <div class="featured-news-page">
        <h1><?php the_title(); ?></h1>
        <div class="featured-news-container">
            <aside class="featured-news">
                <?php
                        $args = array(
                        'post_type' => 'newsletters', 'posts_per_page' => 5, 'orderby' => 'title',
                        'order'   => 'date'
                        );
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <article class="featured-news-article">
                                        <img src="<?php the_field('featured_img'); ?>">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <h4><?php the_date(); ?></h4>
                                        <p class="content-wrapper"><?php the_field('post_preview'); ?></p>
                                </article>
                            <?php wp_reset_postdata(); ?>
                        <?php endwhile;  ?>
                    <?php endif; ?>
            </aside>
            <div class="single-newsletter-aside">
                <aside class="single-newsletter-share">
                    <h3>Share This:</h3>
                    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>                </aside>
                <aside class="single-newsletter-signup">
                    <h3>Sign Up For MOWFNI Updates</h3>
                    <!-- Begin Constant Contact Inline Form Code -->
                    <div class="ctct-inline-form" data-form-id="1e6ecffd-7142-450c-9257-86254f972906"></div>
                    <!-- End Constant Contact Inline Form Code -->
                </aside>
            </div>
        </div>
    </div>
<article class="">
</article>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>