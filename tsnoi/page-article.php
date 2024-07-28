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
              VI Всероссийский педагогический съезд «Моя страна»
            </h2>
            <p class="article-container__paragpaph">
              С 18 по 21 апреля 204 года в Санкт-Петербурге состоится одно из
              ключевых педагогических событий – VI Всероссийский педагогический
              съезд «Моя страна». Программа съезда «Моя страна» предусматривает
              обсуждение актуальных вопросов развития образования в формате
              конференции, дискуссионных площадок, круглых столов,
              мастер-классов, консультаций при участии членов рабочих групп
              Министерства просвещения Российской Федерации, членов Экспертного
              Совета по образованию Государственной Думы Федерального Собрания
              Российской Федерации, научных деятелей Российской Академии
              Образования, Национального исследовательского университета «Высшая
              школа экономики», Ассоциации профессиональных образовательных
              организаций Санкт-Петербурга и других экспертов.
            </p>
          </div>
          <div class="article-container__white-box">
            Всероссийский педагогический Съезд «Моя страна» – профессиональная
            площадка лидеров современного образования для обмена опытом и
            мнениями, где обсуждаются концептуальные вопросы развития
            образования как в регионах, так и страны в целом.
          </div>
          <div class="article-container__image article-image-2"></div>
          <p class="article-container__paragpaph">
            С 18 по 21 апреля 204 года в Санкт-Петербурге состоится одно из
            ключевых педагогических событий – VI Всероссийский педагогический
            съезд «Моя страна». Программа съезда «Моя страна» предусматривает
            обсуждение актуальных вопросов развития образования в формате
            конференции, дискуссионных площадок, круглых столов, мастер-классов,
            консультаций при участии членов рабочих групп Министерства
            просвещения Российской Федерации, членов Экспертного Совета по
            образованию Государственной Думы Федерального Собрания Российской
            Федерации, научных деятелей Российской Академии Образования,
            Национального исследовательского университета «Высшая школа
            экономики», Ассоциации профессиональных образовательных организаций
            Санкт-Петербурга и других экспертов.
          </p>
        </div>
        <div class="article-avtar-container">
          <div class="article-avtar__box article-avtar__box_1">
            <div class="article-avtar__photo article-box-1"></div>
            <div class="article-avtar__link-box">
              <a class="article-avtar__link" href=""
                >Курс аттестации педагогов</a
              >
            </div>
          </div>
          <div class="article-avtar__box article-avtar__box_2">
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