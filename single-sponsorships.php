<article class="single-sponsor">
    <div class="content-wrapper">
        <div class="sponsor-logo-container">
            <img src="<?php the_field('logo'); ?>" class="sponsor-logo" />
        </div>
        <div class="sponsor-info-container">
            <h2><?php the_field('corporation_name'); ?></h2>
            <p><?php the_field('corporation_description'); ?></p>
            <div class="button-container">
                <a href="<?php the_field('website'); ?>" class="body-green-button" target="_blank">Learn More at <?php the_field('website_name'); ?></a>
            </div>
        </div>
    </div>
</article>