<?php
/*
Template Name: news page
*/
?>
<?php
get_header();
?>


<main>
      <section class="small-margin-section">
        <div class="first-block-blue-bg first-block-blue-bg-lvl-up">
          <img
            src="<?php echo bloginfo('template_url'); ?>/assets/content/preschool-fly-1.png"
            class="fly-element preschool-img-1 knowlege-fly-no-hide"
          />

          <div class="first-block-blue-bg-overflow ways-overflow">
            <img
              src="<?php echo bloginfo('template_url'); ?>/assets/content/fly-elem-2.png"
              class="fly-element preschool-img-2"
            />
            <img
              src="<?php echo bloginfo('template_url'); ?>/assets/content/man-news-page.png"
              class="ways-img-bg news-absolut"
            />
            <div class="blue-bg-courses-text-ways">
              <h1 class="h1-text">Новости и статьи</h1>
              <p class="h1-subtext ways-first-discription"></p>
            </div>
          </div>
        </div>
      </section>

      <section class="standart-margin-section third-section-home">
        <div class="third-s-title-box">
          <h2 class="standart_title">Календарь событий</h2>
          <div class="third-s-title-box__mounth">Март</div>
        </div>

        <div class="white-zone-calendar-home">
          <div class="white-calendar__left">
            <ul>
              <li class="white-calendar__list">
                <div class="white-calendar__date">03.03</div>
                <p class="white-calendar__text">
                  Вебинар «Тренды дошкольного образования»
                </p>
              </li>
            </ul>
            <ul>
              <li class="white-calendar__list">
                <div class="white-calendar__date">05.03</div>
                <p class="white-calendar__text">
                  Вебинар «Гос. закупки в 2024 году»
                </p>
              </li>
            </ul>
            <ul>
              <li class="white-calendar__list">
                <div class="white-calendar__date">07.03</div>
                <p class="white-calendar__text">
                  Открытый мастер-класс по найму сотрудников
                </p>
              </li>
            </ul>
            <ul>
              <li class="white-calendar__list">
                <div class="white-calendar__date">23.03</div>
                <p class="white-calendar__text">
                  Вебинар «Менеджмент в сфере IT»
                </p>
              </li>
            </ul>
          </div>
          <div class="white-calendar__mid"></div>
          <div class="white-calendar__right">
            <ul>
              <li class="white-calendar__list">
                <div class="white-calendar__date">03.03</div>
                <p class="white-calendar__text">
                  Вебинар «Тренды дошкольного образования»
                </p>
              </li>
            </ul>
            <ul>
              <li class="white-calendar__list">
                <div class="white-calendar__date">05.03</div>
                <p class="white-calendar__text">
                  Вебинар «Гос. закупки в 2024 году»
                </p>
              </li>
            </ul>
            <ul>
              <li class="white-calendar__list">
                <div class="white-calendar__date">07.03</div>
                <p class="white-calendar__text">
                  Открытый мастер-класс по найму сотрудников
                </p>
              </li>
            </ul>
            <ul>
              <li class="white-calendar__list">
                <div class="white-calendar__date">23.03</div>
                <p class="white-calendar__text">
                  Вебинар «Менеджмент в сфере IT»
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="last-vebinars-section">
        <h2 class="standart_title">Новости и статьи</h2>
        <div class="tabs-last-vebinars-overflow">
          <div class="tabs-last-vebinars">
            <div class="tab-last-vebinar active">Все</div>
            <div class="tab-last-vebinar">Дошкольное образование</div>
            <div class="tab-last-vebinar">Общее образование</div>
            <div class="tab-last-vebinar">
              Среднее профессиональное образование
            </div>
          </div>
        </div>

        <script>
          const tabs = document.querySelectorAll(".tab-last-vebinar");

          tabs.forEach((tab) => {
            tab.addEventListener("click", function () {
              tabs.forEach((t) => t.classList.remove("active"));
              this.classList.add("active");
            });
          });
        </script>

        <div class="news-page-news-container">
          <div
            class="news-container__1 news-container__big-block news-container__block"
          >
            <div class="news-container__white-text">Новость</div>
          </div>
          <div
            class="news-container__2 news-container__small-block news-container__block"
          >
            <div class="news-container__white-text">Вебинар</div>
          </div>
          <div
            class="news-container__3 news-container__small-block news-container__block"
          >
            <div class="news-container__white-text">Событие</div>
          </div>
          <div
            class="news-container__4 news-container__small-block news-container__block"
          >
            <div class="news-container__white-text">Вебинар</div>
          </div>
          <div
            class="news-container__5 news-container__big-block news-container__block"
          >
            <div class="news-container__white-text">Новость</div>
          </div>
          <div
            class="news-container__6 news-container__small-block news-container__block"
          >
            <div class="news-container__white-text">Событие</div>
          </div>
          <div
            class="news-container__7 news-container__small-block news-container__block"
          >
            <div class="news-container__white-text">Вебинар</div>
          </div>
          <div
            class="news-container__8 news-container__small-block news-container__block"
          >
            <div class="news-container__white-text">Событие</div>
          </div>
          <div
            class="news-container__9 news-container__big-block news-container__block"
          >
            <div class="news-container__white-text">Новость</div>
          </div>
          <div
            class="news-container__10 news-container__small-block news-container__block"
          >
            <div class="news-container__white-text">Вебинар</div>
          </div>
          <div
            class="news-container__11 news-container__big-block news-container__block"
          >
            <div class="news-container__white-text">Новость</div>
          </div>
          <div
            class="news-container__12 news-container__small-block news-container__block"
          >
            <div class="news-container__white-text">Событие</div>
          </div>
        </div>
        <div class="show-more-mobile-btn">Показать еще</div>
      </section>
    </main>



<?php
get_footer();
?>