<?php
/*
Template Name: article mini page
*/
?>
<?php
get_header();
?>


<main>
  <section class="small-margin-section">
    <div class="first-block-blue-bg first-block-blue-bg-lvl-up">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/content/p-one-img-asolute-1.png" class="fly-element preschool-img-1 article-absolute-1 article-mini-absolut-1" />

      <div class="first-block-blue-bg-overflow ways-overflow">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/content/article-mini-absolute2.png" class="fly-element article-mini-absolut-2" />
        <img src="<?php echo bloginfo('template_url'); ?>/assets/content/article-mini-women.png" class="ways-img-bg article-absolut" />
        <div class="blue-bg-courses-text-ways">
          <h1 class="h1-text h1-m-w-900">
            <?php the_field('article-mini-main-title') ?>
          </h1>
          <p class="h1-subtext ways-first-discription"></p>
        </div>
      </div>
    </div>
  </section>
  <section class="second-section-article">
    <div class="article-page-article-container">
      <div class="article-container__main-text">
        <h2 class="article-container__title">
          <?php the_field('second-title-article-mini-page') ?>
        </h2>
        <p class="article-container__paragpaph">
          <?php the_field('main-text-article-page') ?>
        </p>
      </div>
      <div class="article-container__white-box">
        <?php the_field('text-on-white-bg-article-mini-page') ?>
      </div>
      <a class="article-container__blue-btn link-default" href="<?php echo get_field('link'); ?>"><?php the_field('button-article-mini-page') ?></a>
    </div>
  </section>
</main>


<?php
get_footer();
?>