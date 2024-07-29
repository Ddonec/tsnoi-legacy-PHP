<?php
/*
Template Name: privacy page
*/
?>
<?php
get_header();
?>



<main>
  <section class="text-page-first-section">
    <div class="text-page-blue-block">
      <h1 class="text-page__title">
        <?php the_field('main_title'); ?>
      </h1>
    </div>
  </section>
  <section class="text-page-text-section">
    <div class="text-page-text-block">
      <h2 class="text-page__offtitle"><?php the_field('first_title'); ?></h2>
      <p class="text-page__main-text">
        <?php the_field('first_text'); ?>
      </p>
    </div>
    <div class="text-page-text-block">
      <h2 class="text-page__offtitle">
        <?php the_field('second_title'); ?> </h2>
      <p class="text-page__main-text">
        <?php the_field('second_text'); ?>
      </p>
    </div>
    <div class="text-page-text-block">
      <h2 class="text-page__offtitle">
        <?php the_field('third_title'); ?> </h2>
      <p class="text-page__main-text">
        <?php the_field('third_text'); ?>
      </p>
    </div>
  </section>
</main>



<?php
get_footer();
?>