<?php /* Template Name: General Form Page */ ?>

<?php get_header(); ?>

<main id="content">
    <section id="volunteer-interest-form-page">
        <h1><?php the_title(); ?></h1>
        <div class="volunteer-interest-form-content">
            <article class="form-container">
                <?php the_field('form_shortcode'); ?>
            </article>
            <aside class="filler-image">
                &nbsp;
            </aside>
        </div>
    </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>