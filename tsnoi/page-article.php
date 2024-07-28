<?php
/*
Template Name: article page
*/
?>
<?php
get_header();
?>


<main>
      <section class="small-margin-section">
        <div class="first-block-blue-bg first-block-blue-bg-lvl-up">
          <img
            src="<?php echo bloginfo('template_url'); ?>/assets/content/article-absolut-1.png"
            class="fly-element preschool-img-1 article-absolute-1"
          />

          <div class="first-block-blue-bg-overflow ways-overflow">
            <img
              src="<?php echo bloginfo('template_url'); ?>/assets/content/article-absolut-2.png"
              class="fly-element article-absolute-2"
            />
            <img
              src="<?php echo bloginfo('template_url'); ?>/assets/content/women-article-page.png"
              class="ways-img-bg article-absolut"
            />
            <div class="blue-bg-courses-text-ways">
              <h1 class="h1-text h1-m-w-900">
              <?php the_field('title-article-page') ?>
              </h1>
              <p class="h1-subtext ways-first-discription"></p>
            </div>
          </div>
        </div>
      </section>
      <section class="second-section-article">
        <div class="article-page-article-container">
          <div class="article-container__image article-image-1" style="background-image: url(<?php the_field('article-page-main-photo') ?>);"></div>
          <div class="article-container__main-text">
            <h2 class="article-container__title">
            <?php the_field('title-of-article-article-page') ?>
            </h2>
            <p class="article-container__paragpaph">
            <?php the_field('main-text-article-page') ?>
            </p>
          </div>
          <div class="article-container__white-box">
          <?php the_field('white-bg-text-article-page') ?>
          </div>
          <div class="article-container__image article-image-2" style="background-image: url(<?php the_field('second-photo-article-page') ?>);"></div>
          <p class="article-container__paragpaph">
          <?php the_field('second-main-text-article-page') ?>
          </p>
        </div>
        <div class="article-avtar-container">
          <div class="article-avtar__box article-avtar__box_1">
            <div class="article-avtar__photo article-box-1" style="background-image: url(<?php the_field('article-image-1') ?>);"></div>
            <div class="article-avtar__link-box">
              <a class="article-avtar__link" href=""
                >Курс аттестации педагогов</a
              >
            </div>
          </div>
          <div class="article-avtar__box article-avtar__box_2" style="background-image: url(<?php the_field('article-image-2') ?>);">
            <div class="article-avtar__photo article-box-2"></div>
            <div class="article-avtar__link-box">
              <a class="article-avtar__link" href=""
                >План очных <br />мероприятий <br />на 2024 год</a
              >
            </div>
          </div>
        </div>
      </section>
    </main>


<?php
get_footer();
?>