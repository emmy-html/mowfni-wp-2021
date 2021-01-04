<?php /* Template Name: Press Release Donation Page Template */ ?>
<?php get_header(); ?>

<main id="content">
<section id="press-release-donation-page-template">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if( get_field('campaign_title') ): ?>
                    <h1><span><?php the_field('campaign_title'); ?></h1></span>
                <?php endif; ?>
                <?php if( get_field('campaign_banner') ): ?>
                    <img src="<?php the_field('campaign_banner'); ?>" />
                <?php endif; ?>
            <div class="press-release-donation-page-content-container">
                <article>
                    <div class="content-wrapper">
                        <?php if( get_field('press_release') ): ?>
                            <p>
                                <?php the_field('press_release'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="content-wrapper">
                            <div class="button-container">
                                <h3>You can join MacKenzie Scott in contributing to our growth by donating today.</h3>
                                <?php if( get_field('donate_button') ): ?>
                                    <a href="<?php the_field('donate_button'); ?>" class="rounded-green-button">Donate &#8250;</a>
                                <?php endif; ?>
                            </div>
                </div>
                </article>

<?php the_content(); ?>

<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>