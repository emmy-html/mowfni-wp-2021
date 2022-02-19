<?php /* Template Name: Monthly Giving Club */ ?>
<?php get_header('monthly-giving'); ?>

<main id="content">
    <section id="monthly-giving-club-page">
        <article class="monthly-giving-club-container">
            <div class="content-wrapper">
                <h1><?php the_field('page_heading'); ?></h1>
                <h3><?php the_field('page_copy'); ?></h3>
                <p class="monthly-giving-indicator"><i class="fas fa-solid fa-heart"></i> Monthly</p>
                <h2>Join the <?php the_field('page_heading'); ?></h2>
                <aside id="monthly-giving-option-container">
                    <div class="monthly-giving-option-wrapper active" onclick="displayDonationForm()">
                        <div class="monthly-giving-option">$160<span>20 Meals</span>
                        </div>
                    </div>
                    <div class="monthly-giving-option-wrapper" onclick="displayDonationForm()">
                        <div class="monthly-giving-option">$120<span>15 Meals</span>
                        </div>
                    </div>
                    <div class="monthly-giving-option-wrapper" onclick="displayDonationForm()">
                        <div class="monthly-giving-option">$80<span>10 Meals</span>
                        </div>
                    </div>
                    <div class="monthly-giving-option-wrapper" onclick="displayDonationForm()">
                        <div class="monthly-giving-option">$40<span>5 Meals</span>
                        </div>
                    </div>
                    <div class="monthly-giving-option-wrapper" onclick="displayDonationForm()">
                        <div class="monthly-giving-option">$24<span>3 Meals</span>
                        </div>
                    </div>
                    <div class="monthly-giving-option-wrapper" onclick="displayDonationForm()">
                        <div class="monthly-giving-option">$_<span>Custom</span><span>Amount</span>
                        </div>
                    </div>
                </aside>
            </div>
        </article>
        <aside id="monthly-giving-donation-form" onclick="displayDonationForm()">
        <i class="fa-solid fa-circle-xmark"></i>
            <div class="monthly-giving-donation-form-wrapper">
                <?php the_field('donorbox_form'); ?>
            </div>
        </aside>
    </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>