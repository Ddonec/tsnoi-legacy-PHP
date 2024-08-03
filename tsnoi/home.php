<?php
/*
Template Name: home-page
*/
?>
<?php
get_header();
?>

<main>
  <section class="standart-margin-section first-section-home">
    <div class="first-block-blue-bg">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/content/fly-elem-2.png " class="fly-element second-fly-element" />
      <img src="<?php echo bloginfo('template_url'); ?>/assets/content/fly-elem-3.png" class="fly-element third-fly-element" />
      <div class="first-block-blue-bg-overflow">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/content/fly-elem-1.png" class="fly-element first-fly-element" />
        <div class="blue-bg-main-text">
          <h1 class="h1-text">
            <?php the_field('title-home') ?>
          </h1>
          <p class="h1-subtext"><?php the_field('subtitle-home') ?></p>
        </div>
      </div>
    </div>
  </section>
  <section class="standart-margin-section second-section-home">
    <div class="why-choise-box">
      <?php
      // Получаем данные из ACF поля группы
      $section_2_group = get_field('section_2_group');

      // Проверяем, что данные успешно получены и содержат необходимое поле
      if ($section_2_group && isset($section_2_group['section-2-title'])) {
        $section_2_title = $section_2_group['section-2-title'];
      } else {
        $section_2_title = ''; // Значение по умолчанию, если поле не найдено или пусто
      }
      ?>

      <h2 class="second-section-home_title why-choise__element">
        <?php echo esc_html($section_2_title); ?>
      </h2>

      <div class="advantages-block why-choise__element">
        <div class="advantage">
          <h3 class="advantage__title"><?php echo esc_html($section_2_group['section-2-card-title-1']); ?></h3>
          <p class="advantage__subtitle"><?php echo esc_html($section_2_group['section-2-card-disc-1']); ?></p>
        </div>
        <div class="advantage">
          <h3 class="advantage__title"><?php echo esc_html($section_2_group['section-2-card-title-2']); ?></h3>
          <p class="advantage__subtitle"><?php echo esc_html($section_2_group['section-2-card-disc-2']); ?></p>
        </div>
        <div class="advantage">
          <h3 class="advantage__title"><?php echo esc_html($section_2_group['section-2-card-title-3']); ?></h3>
          <p class="advantage__subtitle"><?php echo esc_html($section_2_group['section-2-card-disc-3']); ?></p>
        </div>
        <div class="advantage">
          <div class="advantage__customers">
            <div class="advantage__customers_customer">
              <img src="<?php echo esc_url($section_2_group['section-2-card-4-photo-1']); ?>" alt="" />
            </div>
            <div class="advantage__customers_customer customer-get-left-2">
              <img src="<?php echo esc_url($section_2_group['section-2-card-4-photo-2']); ?>" alt="" />
            </div>
            <div class="advantage__customers_customer customer-get-left-3">
              <img src="<?php echo esc_url($section_2_group['section-2-card-4-photo-3']); ?>" alt="" />
            </div>
            <div class="advantage__customers_more customer-get-left-4">
              100+
            </div>
          </div>
          <p class="advantage__subtitle"><?php echo esc_html($section_2_group['section-2-card-title-4']); ?></p>
        </div>
      </div>
    </div>

    <div class="advantages-cards-container">
      <?php if (have_rows('advantages_cards')) : ?>
        <?php while (have_rows('advantages_cards')) : the_row();
          $card_title = get_sub_field('card_title');
          $card_button_text = get_sub_field('card_button_text');
          $card_image = get_sub_field('card_image');
          $card_class = get_sub_field('card_class');
        ?>
          <div class="advantages__<?php echo esc_attr($card_class); ?>">
            <h4 class="<?php echo esc_attr($card_class); ?>__title">
              <?php echo wp_kses_post($card_title); ?>
            </h4>
            <div class="<?php echo esc_attr($card_class); ?>__button">
              <?php echo esc_html($card_button_text); ?>
            </div>
            <?php if ($card_image) : ?>
              <img class="<?php echo esc_attr($card_class); ?>__image" src="<?php echo esc_url($card_image['url']); ?>" alt="<?php echo esc_attr($card_image['alt']); ?>" />
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <button class="show-more-btn-home">
        Посмотреть ещё
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M13 6L19 12L13 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>


  </section>
  <section class="standart-margin-section third-section-home">
    <div class="third-s-title-box">
      <h2 class="standart_title"><?php the_field('section-3-title') ?></h2>
      <div class="third-s-title-box__mounth"><?php the_field('section-3-mounth') ?></div>
    </div>

    <div class="white-zone-calendar-home">
      <div class="white-calendar__left">
        <?php if (have_rows('left_calendar_events')) : ?>
          <?php while (have_rows('left_calendar_events')) : the_row();
            $event_date = get_sub_field('event_date');
            $event_text = get_sub_field('event_text');
          ?>
            <li class="white-calendar__list">
              <div class="white-calendar__date"><?php echo esc_html($event_date); ?></div>
              <p class="white-calendar__text">
                <?php echo wp_kses_post($event_text); ?>
              </p>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="white-calendar__mid"></div>
      <div class="white-calendar__right">
        <?php if (have_rows('right_calendar_events')) : ?>
          <?php while (have_rows('right_calendar_events')) : the_row();
            $event_date = get_sub_field('event_date');
            $event_text = get_sub_field('event_text');
          ?>
            <li class="white-calendar__list">
              <div class="white-calendar__date"><?php echo esc_html($event_date); ?></div>
              <p class="white-calendar__text">
                <?php echo wp_kses_post($event_text); ?>
              </p>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

  </section>
  <section class="standart-margin-section four-section-home">
    <div class="four-s-title-box">
      <h2 class="standart_title"><?php the_field('section-4-title') ?></h2>
      <div class="four-s-title-box__mounth">
        <a class="four-s-title-box__mounth_link" href="">Все статьи
          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5.18335L16 12.1833L9 19.1833" stroke="#003ACB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </div>
    <div class="articles-prewiew-box">
      <div class="articles-prewiew-box__article-1 articles-prewiew-box__article">
        <div class="article-preview__text"><?php the_field('article-bg-text-1') ?></div>
      </div>
      <div class="articles-prewiew-box__article-2 articles-prewiew-box__article">
        <div class="article-preview__text"><?php the_field('article-bg-text-2') ?></div>
      </div>
      <div class="articles-prewiew-box__article-3 articles-prewiew-box__article">
        <div class="article-preview__text"><?php the_field('article-bg-text-3') ?></div>
      </div>
    </div>
  </section>
</main>






<?php
get_footer();
?>