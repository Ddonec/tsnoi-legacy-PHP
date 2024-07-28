<?php
/*
Template Name: event spb page
*/
?>
<?php
get_header();
?>



<main>
      <section class="standart-margin-section first-section-home">
        <div class="first-block-blue-bg first-block-blue-bg-shop">
          <img
            src="<?php echo bloginfo('template_url'); ?>/assets/content/way-template-absolute-1.png"
            class="fly-element shop-img-2"
          />
          <img
            src="<?php echo bloginfo('template_url'); ?>/assets/content/way-template-absolute-2.png"
            class="fly-element shop-img-3"
          />
          <div class="first-block-blue-bg-overflow">
            <img
              src="<?php the_field('absolut-image') ?>"
              class="shop-img-bg"
            />
            <div class="blue-bg-main-text">
              <h1 class="h1-text"><?php the_field('main-title') ?></h1>
            </div>
          </div>
        </div>
      </section>
      <section class="shop-second-section">
      <div class="tabs-shop">
    <?php if( have_rows('tabs') ): ?>
      <?php $first = true; // Устанавливаем флаг для активной вкладки ?>
      <?php while( have_rows('tabs') ): the_row(); 
        $tab_title = get_sub_field('tab_title'); 
        // Если это первая вкладка, добавляем класс "active"
        $class = $first ? 'tab-shop active' : 'tab-shop';
        $first = false; // После первой вкладки, сбрасываем флаг
      ?>
      <div class="<?php echo esc_attr($class); ?>"><?php echo esc_html($tab_title); ?></div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
        <script>
          const tabs = document.querySelectorAll(".tab-shop");

          tabs.forEach((tab) => {
            tab.addEventListener("click", function () {
              tabs.forEach((t) => t.classList.remove("active"));
              tab.classList.add("active");
            });
          });
        </script>
        <div class="white-cards-shop">
          <div class="white-card-shop">
            <h4 class="white-card-shop__title">Рабочая программа</h4>
            <p class="white-card-shop__subtitle">
              Старший воспитатель дошкольной образовательной организации
            </p>
            <p class="white-card-shop__price">от 3 490 ₽</p>
            <div class="white-card-shop__buttons">
              <div class="white-card-shop__buttons_about">Подробнее</div>
              <div class="white-card-shop__buttons_buy">Заказать</div>
            </div>
          </div>
          <div class="white-card-shop">
            <div class="shop-new-absolute">Новинка</div>
            <h4 class="white-card-shop__title">Конспект занятия</h4>
            <p class="white-card-shop__subtitle">
              Старший воспитатель дошкольной образовательной организации
            </p>
            <p class="white-card-shop__price">от 3 490 ₽</p>
            <div class="white-card-shop__buttons">
              <div class="white-card-shop__buttons_about">Подробнее</div>
              <div class="white-card-shop__buttons_buy">Заказать</div>
            </div>
          </div>
          <div class="white-card-shop">
            <h4 class="white-card-shop__title">Сценарий мероприятия</h4>
            <p class="white-card-shop__subtitle">
              Старший воспитатель дошкольной образовательной организации
            </p>
            <p class="white-card-shop__price">от 3 490 ₽</p>
            <div class="white-card-shop__buttons">
              <div class="white-card-shop__buttons_about">Подробнее</div>
              <div class="white-card-shop__buttons_buy">Заказать</div>
            </div>
          </div>
        </div>
      </section>
    </main>



<?php
get_footer();
?>