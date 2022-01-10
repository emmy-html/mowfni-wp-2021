<?php /* Template Name: Volunteer Page */ ?>
<?php get_header(); ?>

<main id="content">
    <section id="volunteer-page-hero">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1>Volunteer With Us</h1>
        <div class="volunteer-page-hero-content">
            <article class="volunteer-page-slider-container">
                <?php
            echo do_shortcode('[smartslider3 slider="4"]');
            ?>
            </article>
        </div>
        <aside class="volunteer-page-options">
            <article>
                <a href="#volunteer-page-opportunities">
                    <h2>Individual &amp; Small Group</h2>
                    <h3>Volunteers</h3>
                </a>
            </article>
            <article>
                <a href="http://corporate.mowfni.org/" target="_blank">
                    <h2>Corporate &amp; Organzations</h2>
                    <h3>Volunteering</h3>
                </a>
            </article>
        </aside>
        <div class="content-wrapper">
            <?php the_field('general_description'); ?>
            <div class="button-container">
                <a href="https://mowfni.org/volunteer-interest-form/"
                    class="rounded-blue-button">Sign Up Today ›</a>
            </div>
        </div>

    </section>
    <section id="volunteer-page-opportunities">
        <h1>Individual &amp; Small Group Volunteers</h1>
        <div class="volunteer-page-opportunities-container">
            <aside>
                <div class="content-wrapper">
                    <?php the_field('option_one_icon'); ?>
                    <h3><?php the_field('option_one_title'); ?></h3>
                    <p><?php the_field('option_one_description') ?></p>
                </div>
            </aside>
            <aside>
                <div class="content-wrapper">
                    <?php the_field('option_two_icon'); ?>
                    <h3><?php the_field('option_two_title'); ?></h3>
                    <p><?php the_field('option_two_description') ?></p>
                </div>
            </aside>
            <aside>
                <div class="content-wrapper">
                    <?php the_field('option_three_icon'); ?>
                    <h3><?php the_field('option_three_title'); ?></h3>
                    <p><?php the_field('option_three_description') ?></p>
                </div>
            </aside>
            <aside>
                <div class="content-wrapper">
                    <?php the_field('option_four_icon'); ?>
                    <h3><?php the_field('option_four_title'); ?></h3>
                    <p><?php the_field('option_four_description') ?></p>
                </div>
            </aside>
        </div>
    </section>
    <section id="volunteer-page-locations">
        <h1>Our Service Area</h1>
        <div class="volunteer-page-service-area">
            <article class="volunteer-page-locations-container">
                <?php echo do_shortcode('[wpgmza id="37"]')?>
            </article>
        </div>
    </section>
    <section id="volunteer-page-cta">
        <h1>In 2020, Our
          <span>Volunteers</span>
        </h1>
        <div class="impact-content">
          <article>
              <h2>
                11,479
                <span>Emergency Shelf Stable Meals Delivered</span>
              </h2>
          </article>
          <article>
            <h2>
                45,806
              <span>Hours <span>Volunteered</span></span>
            </h2>
          </article>
          <article>
            <h2>
              623,000
              <span>Meals Provided to Older Adults</span>
            </h2>
          </article>
        </div>
      </section>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>