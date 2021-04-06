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
                <a href="#volunteer-page-corporate">
                    <h2>Corporate &amp; Organzations</h2>
                    <h3>Volunteering</h3>
                </a>
            </article>
        </aside>
        <div class="content-wrapper">
            <?php the_field('general_description'); ?>
            <div class="button-container">
                <a href="https://app.betterimpact.com/Application?OrganizationGuid=a20f0471-5f95-4f19-b351-bbadb4e6680d&amp;ApplicationFormNumber=1"
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
                <?php echo do_shortcode('[google_map_easy id="1"]')?>
            </article>
        </div>
    </section>
    <section id="volunteer-page-corporate">
        <h1>Corporate &amp; Organizations Volunteer Oppportunities</h1>
        <div class="volunteer-page-corporate-container">
            <aside>
                <div class="content-wrapper">
                    <ul>
                        <li>Meal Delivery Drivers -- Monday thru Friday mornings.</li>
                        <li>Check-In Callers (Remote Opportunity) -- Monday thru Friday between 10am and 6pm</li>
                        <li>Greeting Card Artists (Remote Opportunity) – Any day or time, it’s your choice!</li>
                        <li>Design your project – Our Meals on Wheels Volunteer Team will work with your corporate or
                            organizational team to create an impactful volunteer opportunity that will brighten a
                            senior’s day. Making blankets, creating senior care bags, helping with yard clean-up, or
                            making greeting cards a re just some of the ways you can bring a smile to our isolated
                            seniors. Please contact us to learn how you can make a difference in your community. Email
                            the Volunteer Department at <a href="mailto:volunteer@cnnssa.org">volunteer@cnnssa.org</a>
                            or call <a href="tel:1-312-207-5290">312-207-5290</a>. Thank you!</li>
                    </ul>
                </div>
            </aside>
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