<?php /* Template Name: March For Meals 2021 Template */ ?>
<?php get_header(); ?>

<main id="content">
    <section id="m4m-landing-page">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <img src="<?php the_field('hero_image'); ?>" />
        <div class="desktop-wrapper">
            <article class="m4m-cta" id="social-share">
                <aside class="content-wrapper">
                    <h2>
                        Action Steps
                        <span>For Advocates of</span>
                        <span>March For Meals</span>
                    </h2>
                    <p>
                        This month, we encourage you to advocate by sharing The March
                        For Meals Mission with others. You can share any of the following images on your social media to spread the word with a message!
                    </p>
                </aside>
                <aside class="social-image-share">
                    <img src="<?php the_field('image_one'); ?>" />
                    <img src="<?php the_field('image_two'); ?>" />
                    <img src="<?php the_field('image_three'); ?>" />
                    <img src="<?php the_field('image_four'); ?>" />
                    <img src="<?php the_field('image_five'); ?>" />
                    <img src="<?php the_field('image_six'); ?>" />
                    <img src="<?php the_field('image_seven'); ?>" />
                    <img src="<?php the_field('image_eight'); ?>" />
                </aside>
            </article>
            <article class="m4m-more-info">
                <aside>
                    <div class="content-wrapper">
                        <p>
                            We’re celebrating the 19th annual March for Meals – a
                            month-long, nationwide celebration of meals on Wheels and our
                            senior neighbors who rely on this essential service to remain
                            healthy and independent at home, now even more so among the
                            COVID-19 pandemic. Meals on Wheels Foundation of Northern
                            Illinois’ celebration will include various activities
                            throughout the month of March, including awareness, advocacy
                            during Community Champions week March 22-29th, and encouraging
                            individuals to volunteer!
                        </p>
                        <p>
                            “In the last year, we have experienced a significant increase
                            in the demand for our services in Cook, Kendall, Grundy and
                            Will counties,” said Lauren Doherty, CEO of Meals on Wheels
                            Foundation of Northern Illinois. “We have been in awe of the
                            outpouring of support, and there’s still much we can do to
                            ensure everyone in need of our vital lifeline can benefit from
                            being well-nourished and more connected to our community
                            through this challenging time and beyond.”
                        </p>
                        <p>
                            The annual March for Meals celebration commemorates the
                            historic day in March of 1972 when President Nixon signed into
                            law a measure that amended the Older Americans Act of 1965 to
                            include a national nutrition program for seniors 60 years and
                            older. Since 2002, community-based Meals on Wheels programs
                            from across the country have joined forces for the annual
                            awareness campaign to celebrate this successful public-private
                            partnership and garner the support needed to fill the gap
                            between the seniors served and those still in need.
                        </p>
                        <p>
                            “The pandemic has introduced many of us to the newfound and
                            harsh realities of food insecurity and social isolation –
                            something that far too many seniors experience as their daily
                            norm. More than ever, we must rally around our essential
                            community-based programs that serve as lifelines to a growing
                            number of people in need, to enable their own long-term
                            vitality,” said Ellie Hollander, President and CEO of Meals on
                            Wheels America. “Even when we make it through this
                            unprecedented time in our nation's history, there will still
                            be millions of vulnerable older adults who will rely on that
                            familiar knock on the door that provides peace of mind and
                            hope beyond the meal itself. Please join us in celebrating the
                            power and importance of Meals on Wheels this March and
                            always.”
                        </p>
                    </div>
                </aside>
                <aside>
                    <h4>
                        For more information on how you can volunteer, contribute or
                        speak out for the seniors in northern Illinois this March, see
                        opportunities below.
                    </h4>
                    <div class="content-wrapper">
                        <div class="button-container">
                            <a href="/donate">Donate</a>
                            <a href="/volunteer">Volunteer</a>
                            <a href="#social-share">Share to Social Media</a>
                        </div>
                    </div>
                </aside>
            </article>
        </div>
    </section>

    <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>