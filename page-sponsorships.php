<?php /* Template Name: Corporate Sponsorships Page */ ?>

<?php get_header(); ?>

<main id="content">
    <section id="corporate-sponsorships-page">
    <h1><?php the_title(); ?></h1>
        <article class="corporate-sponsorships-page-header">
            <img src="<?php the_field('header_image'); ?>" />
            <div class="content-wrapper">
                <p><?php the_field('description'); ?></p>
            </div>
        </article>
        <div class="corporate-sponsorship-container">
        <aside class="corporate-sponsorship-copy">
            <?php the_field('sponsorship_copy'); ?>
        </aside>
        <aside class="single-sponsor-container">
            <h2>Current Partners:</h2>
            <!-- Slideshow container -->
            <div id="slides">
                <div class="slide showing">
                  <div class="content-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logos/aetna.png" class="sponsor-logo">  
                    <h2>Aetna</h2>
                    <p>Aetna is an American managed health care company committed to providing innovative benefits, products and services.</p>
                    <div class="button-container">
                      <a href="https://www.aetna.com/" class="body-green-button">Learn More at Aetna.com</a>
                    </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="content-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logos/caterpillar-inc.png" class="sponsor-logo">  
                      <h2>Caterpillar Inc.</h2>
                      <p>Caterpillar, Inc. is an American corporation that designs, develops, engineers, manufactures, markets and sells machinery, engines, financial products and insurance to customers via a worldwide dealer network.</p>
                      <div class="button-container">
                        <a href="https://www.caterpillar.com/" class="body-green-button">Learn More at caterpillar.com</a>
                      </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="content-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logos/comed.png" class="sponsor-logo">  
                      <h2>ComEd</h2>
                      <div class="button-container">
                        <a href="https://www.comed.com/" class="body-green-button">Learn More at comed.com</a>
                      </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="content-wrapper">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logos/design-pac.jpeg" class="sponsor-logo">  
                        <h2>DesignPac</h2>
                        <p>Design Pac Gifts LLC works with retailers to design, assemble and distribute beautifully packaged gourmet food gifts.</p>
                        <div class="button-container">
                          <a href="https://www.1800baskets.com/designpac" class="body-green-button">Learn More at 1800baskets.com/designpac</a>
                        </div>
                    </div>
                </div>
                <div class="slide">
                  <div class="content-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logos/exelon.jpeg" class="sponsor-logo">  
                          <h2>Exelon</h2>
                          <div class="button-container">
                            <a href="https://www.exeloncorp.com/" class="body-green-button">Learn More at exeloncorp.com</a>
                          </div>
                    </div>
                </div>
                <div class="slide">
                  <div class="content-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sponsor-logos/sherrifs.jpeg" class="sponsor-logo">  
                          <h2>Sheriff's Department</h2>
                          <div class="button-container">
                            <a href="https://www.cookcountysheriff.org/" class="body-green-button">Learn More at cookcountysheriff.org</a>
                          </div>
                    </div>
                </div>
                <button class="controls" id="previous"><i class="fas fa-chevron-left"></i></button>
            <button class="controls" id="pause"><i class="fas fa-pause"></i></button>
            <button class="controls" id="next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </aside>
        </div>
    </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>