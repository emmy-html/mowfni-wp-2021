<?php get_header(); ?>
<main id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="single-newsletter-post">
            <div class="content-wrapper">
                <h1 class="single-newsletter-title"><?php the_title(); ?></h1>
                <aside>
                    <img src="<?php the_field('featured_img'); ?>" class="single-newsletter-post-featured-img" />
                    <div>
                        <h3 class="single-newsletter-date"><?php the_date(); ?></h3>
                        <?php the_content(); ?>
                    </div> 
                    <?php endwhile; endif; ?>
                </aside>
            </div>
            <div class="single-newsletter-aside">
                <aside class="single-newsletter-share">
                    <h3>Share This:</h3>
                    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>                </aside>
                </aside>
                <aside class="single-newsletter-view-all">
                    <h3>MOWFNI Newsletters</h3>
                    <div class="newsletter-view-all-container">
                        <a href="/about/news">Check out our newsletters!</a>
                    </div>
                </aside>
                <aside class="single-newsletter-signup">
                    <h3>Sign Up For MOWFNI Updates</h3>
                    <!-- Begin Constant Contact Inline Form Code -->
                    <div class="ctct-inline-form" data-form-id="1e6ecffd-7142-450c-9257-86254f972906"></div>
                    <!-- End Constant Contact Inline Form Code -->
                </aside>
            </div>
        </article>
</main>
<?php get_footer(); ?>