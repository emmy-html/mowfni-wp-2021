<?php /* Template Name: Pick Up Meals Landing Page */ ?>

<?php get_header(); ?>

<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="pick-up-landing-pages">
  <h1><?php the_title(); ?></h1>
            <div class="landing-page-info">
              <aside>
                &nbsp;
              </aside>
              <aside>
                <h3>Eligibility Requirements</h3>
                  <ul>
                    <li>60+ years old</li>
                    <li>Requirement</li>
                    <li>Requirement</li>
                  </ul>
                  <p>
                    <b><?php the_field('location_name') ?></b><br>
                    <?php the_field('address'); ?><br>
                    <a href="tel:<?php the_field('phone_number_no_formatting'); ?>"><?php the_field('phone_number'); ?></a>
                  </p>
              </aside>
              <aside>
                <h3>Meal Pick-Up Protocol</h3>
                <div class="content-wrapper">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
              </aside>
            </div>
            <div class="pick-up-landing-pages-form">
                <article class="pick-up-form-container">
                <div class="content-wrapper" id="pick-up-form">
                <h3>Sign-up to receive a call from our staff at
                  <br><?php the_field('location_name') ?> with more information</h3>
                  <?php if( get_field('form_shortcode') ): ?>
                      <?php the_field('form_shortcode'); ?>
                  <?php endif; ?>
                </div>
                </article>
                </article>
                <article class="map-locations">
                    <div class="map-locations-container">
                      <div class="content-wrapper">
                        <h3>Find A Café In The Surrounding <?php the_field('county_name') ?> Area</h3>
                      </div>
                    <?php 
                    $tag_name = get_field('tag_name');
                    $args = array( 'post_type' => 'locations', 'tag' => $tag_name, 'posts_per_page' => 100, 'orderby' => 'title',
                    'order'   => 'ASC' );
                    $the_query = new WP_Query( $args ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php the_content(); ?> 
            <aside>
                <div class="content-wrapper">
                    <div>
                    <?php if( get_field('location_name') ): ?>
                        <h3><?php the_field('location_name'); ?></h3>
                    <?php endif; ?> 
                    <?php if( get_field('location_address') ): ?>
                        <p><?php the_field('location_address'); ?></p>
                    <?php endif; ?> 
                    <p class="location-more-info">
                    <?php if( get_field('location_details') ): ?>
                        <a href="<?php the_field('location_details'); ?>">Details &#8250;</a>
                    <?php endif; ?>
                    <?php if( get_field('location_route') ): ?>
                        <a href="<?php the_field('location_route'); ?>">Route &#8250;</a>
                    <?php endif; ?>
                    </p>
                    </div>
                    <div>
                    <?php if( get_field('location_type') ): ?>
                        <h3 class="pick-up-time"><?php the_field('location_type'); ?>
                    <?php endif; ?> 
                    <?php if( get_field('location_times') ): ?>
                        <span><?php the_field('location_times'); ?></span>
                    <?php endif; ?> 
                    <?php if( get_field('location_days') ): ?>
                        <span><?php the_field('location_days'); ?></span>
                    <?php endif; ?> 
                    </h3>
                    </div>
                    <div>
                        <h3>Manager:
                        <?php if( get_field('location_manager') ): ?>
                        <span><?php the_field('location_manager'); ?></span>
                        <?php endif; ?> 
                        <?php if( get_field('phone_number') ): ?>
                        <span><?php the_field('phone_number'); ?></span>
                        <?php endif; ?>
                        </h3>
                        </div>
                    </div>
            </aside> 
<?php wp_reset_postdata(); ?>
<?php endwhile;  ?>
<?php endif; ?>
            </div>
        </article>
            </div>
        </section>
                      <?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>