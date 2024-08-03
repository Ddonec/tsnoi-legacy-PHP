<?php
/*
Template Name: oferta page
*/
?>
<?php
get_header();
?>


<main>
    <section class="text-page-first-section">
        <div class="text-page-blue-block">
            <h1 class="text-page__title"><?php the_field('title-main'); ?></h1>
        </div>
    </section>
    <section class="text-page-text-section">
        <div class="text-page-text-block">
            <h2 class="text-page__offtitle"><?php the_field('second_title'); ?></h2>
            <p class="text-page__main-text">
                <?php the_field('second_text'); ?>
            </p>
        </div>
        <div class="text-page-text-block">
            <h2 class="text-page__offtitle"><?php the_field('third_title'); ?></h2>
            <div class="text-page__main-text">
                <h4 class="text-page__small-title"><?php the_field('third_subtitle'); ?></h4>
                <?php the_field('third_text'); ?>
                <h4 class="text-page__small-title"><?php the_field('four_subtitle'); ?></h4>
                <?php the_field('four_text'); ?>
                <h4 class="text-page__small-title"><?php the_field('five_subtitle'); ?></h4>
                <?php the_field('five_text'); ?>
            </div>
        </div>
    </section>
</main>


<?php
get_footer();
?>