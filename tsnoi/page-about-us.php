<?php
/*
Template Name: about us page
*/
?>
<?php
get_header();
?>

<main>
      <section class="small-margin-section">
        <div class="first-block-blue-bg first-block-blue-bg-lvl-up">
          <img
            src="<?php echo bloginfo('template_url'); ?>/assets/content/about-su-absolute-1.png"
            class="fly-element about-img-1"
          />

          <div class="first-block-blue-bg-overflow ways-overflow">
            <img
              src="<?php echo bloginfo('template_url'); ?>/assets/content/about-su-absolute-2.png"
              class="fly-element about-img-2"
            />
            <img
              src="<?php echo bloginfo('template_url'); ?>/assets/content/about-us-peoples.png"
              class="ways-img-bg about-bg-img"
            />
            <div class="blue-bg-courses-text-ways">
              <div class="blue-bg-courses__button">
              <?php the_field('about-us-grey-tab-title') ?>
              </div>
              <h1 class="h1-text"><?php the_field('about-page-title') ?></h1>
            </div>
          </div>
        </div>
      </section>

      <section class="about-second-section">
        <h2 class="second-section-about-title">
        <?php the_field('about-us-middle-text') ?>
        </h2>
        <div class="ovner-card">
          <img
            class="ovner-avatar"
            src="<?php the_field('about-us-owner-avatar') ?>"
            alt=""
          />
          <div class="ovner-name-box">
            <p class="ovner__name"><?php the_field('about-us-name-surname-owner') ?></p>
            <p class="ovner__priority"><?php the_field('about-us-name-surname-status') ?></p>
          </div>
        </div>
      </section>

      <!-- claim  -->
      <section class="second section-ways">
    <h2 class="standart_title">
    <?php the_field('about-us-second-title') ?>
    </h2>
    <div class="ways-second-overflow-container about-container-second-overflow">
        <div class="ways-second-container ways-second-container-about">
            <?php if( have_rows('ways_card_repeater') ): ?>
                <?php while( have_rows('ways_card_repeater') ): the_row(); 
                    $card_image = get_sub_field('card_image');
                    $card_title = get_sub_field('card_title');
                    $card_subtitle = get_sub_field('card_subtitle');
                ?>
                <div class="ways-second-card about-card">
                    <div class="ways-card__img about__img">
                        <img src="<?php echo esc_url($card_image['url']); ?>" alt="<?php echo esc_attr($card_image['alt']); ?>" />
                    </div>
                    <div class="ways-card__title about-copied-title">
                        <?php echo esc_html($card_title); ?>
                    </div>
                    <div class="ways-card__subtitle about-copied-subtitle">
                        <?php echo esc_html($card_subtitle); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="arrows-for-ways-second-container arrows-lvl-up-mobile">
        <div class="arrows-for-ways__left">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.4648 19.6033L8.46484 12.6033L15.4648 5.60327" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="arrows-for-ways__right">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.46484 5.60327L16.4648 12.6033L9.46484 19.6033" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </div>
    <script>
        const overflowContainerLVL = document.querySelector(".ways-second-overflow-container");
        const leftScrollButton = document.querySelector(".arrows-for-ways__left");
        const rightScrollButton = document.querySelector(".arrows-for-ways__right");

        let defaultCardWidth = 458; // ширина карточки
        let smallScreenOffset = window.innerWidth - 70; // смещение для экранов шириной менее 500 пикселей

        window.addEventListener("resize", updateOffset);

        leftScrollButton.addEventListener("click", function () {
            scrollLeft();
        });

        rightScrollButton.addEventListener("click", function () {
            scrollRight();
        });

        function updateOffset() {
            smallScreenOffset = window.innerWidth - 10;
        }

        function calculateOffset() {
            return window.innerWidth < 500 ? smallScreenOffset : defaultCardWidth;
        }

        function scrollLeft() {
            overflowContainerLVL.scrollBy({
                left: -calculateOffset(),
                behavior: "smooth",
            });
        }

        function scrollRight() {
            overflowContainerLVL.scrollBy({
                left: calculateOffset(),
                behavior: "smooth",
            });
        }
    </script>
</section>


<section class="standart-margin-section grove-section">
    <h2 class="standart_title">
    <?php the_field('about-us-third-title') ?>
    </h2>
    <div class="grow-overflow-container">
        <div class="grow-container">
            <?php if( have_rows('growth_years') ): ?>
                <?php while( have_rows('growth_years') ): the_row(); 
                    $year = get_sub_field('year');
                    $bubble_class_1 = get_sub_field('bubble_class_1');
                    $bubble_class_2 = get_sub_field('bubble_class_2');
                    $bubble_class_3 = get_sub_field('bubble_class_3');
                    $count = get_sub_field('count');
                    $description = get_sub_field('description');
                ?>
                <div class="grow-box">
                    <p class="grow-box__year"><?php echo esc_html($year); ?></p>
                    <div class="grow-box__bubble-hidden">
                        <div class="<?php echo esc_attr($bubble_class_1); ?>">
                            <div class="<?php echo esc_attr($bubble_class_2); ?>">
                                <div class="<?php echo esc_attr($bubble_class_3); ?>"></div>
                            </div>
                        </div>
                    </div>
                    <div class="grow-box__count"><?php echo esc_html($count); ?></div>
                    <div class="grow-box__discription">
                        <?php echo esc_html($description); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="blue-line"></div>
        </div>
    </div>
</section>




      <section class="section-standart-100 four-section-about">
        <div class="white-way-block">
          <img
            class="white-way-block__image"
            src="<?php echo bloginfo('template_url'); ?>/assets/content/about-big-img-1.png"
            alt=""
          />
          <div class="white-way-block__info">
            <h2 class="white-way-block__title">
              Получайте реальные знания с лучшими преподавателями
              Санкт-Петербурга
            </h2>
            <p class="white-way-block__subtitle">
              Значимость этих проблем настолько очевидна, что базовый вектор
              развития позволяет оценить значение экспериментов, поражающих по
              своей масштабности и грандиозности.
              <br /><br />
              Лишь представители современных социальных резервов объединены в
              целые кластеры себе подобных.
            </p>
          </div>
        </div>
        <div class="white-way-block about-grey-block">
          <div class="white-way-block__info">
            <h2 class="white-way-block__title">
              Проводим лекции, семинары, мастер-классы, тренинги с выдачей
              сертификатов
            </h2>
            <p class="white-way-block__subtitle">
              Значимость этих проблем настолько очевидна, что базовый вектор
              развития позволяет оценить значение экспериментов, поражающих по
              своей масштабности и грандиозности. <br /><br />Лишь представители
              современных социальных резервов объединены в целые кластеры себе
              подобных.
            </p>
          </div>
          <img
            class="white-way-block__image order-mob"
            src="<?php echo bloginfo('template_url'); ?>/assets/content/about-big-img-2.png"
            alt=""
          />
        </div>
        <div class="white-way-block">
          <img
            class="white-way-block__image"
            src="<?php echo bloginfo('template_url'); ?>/assets/content/about-big-img-3.png"
            alt=""
          />
          <div class="white-way-block__info">
            <h2 class="white-way-block__title">
              Имеем официальную лицензию на обучение
            </h2>
            <p class="white-way-block__subtitle">
              Значимость этих проблем настолько очевидна, что базовый вектор
              развития позволяет оценить значение экспериментов, поражающих по
              своей масштабности и грандиозности. <br /><br />
              Лишь представители современных социальных резервов объединены в
              целые кластеры себе подобных.
            </p>
          </div>
        </div>
      </section>

      <section class="sertificates-section standart-margin-section">
        <div class="white-bg-about">
          <h2 class="standart_title">Выдаем государственные сертификаты</h2>
          <p class="sertificates__subtitle">И вносим сведения в ФИС ФРДО</p>
          <div
            class="sertificates-overflow-container about-owerflow-sertificate"
          >
            <div class="sertificates-container sertificates-container-about">
              <div class="sertificates__card sertificates__card_about">
                <div class="sertificates__card_white about-sertificate-bg">
                  <img
                    class="sertificates__card__img sertificates__card__img_about"
                    src="<?php echo bloginfo('template_url'); ?>/assets/content/sertificate-about-1.png"
                    alt=""
                  />
                </div>
                <div
                  class="sertificates__card_discription sertificates__card_discription_about"
                >
                  Удостоверение о повышении квалификации 
                </div>
              </div>
              <div class="sertificates__card sertificates__card_about">
                <div class="sertificates__card_white about-sertificate-bg">
                  <img
                    class="sertificates__card__img sertificates__card__img_about"
                    src="<?php echo bloginfo('template_url'); ?>/assets/content/sertificate-about-2.png"
                    alt=""
                  />
                </div>
                <div
                  class="sertificates__card_discription sertificates__card_discription_about"
                >
                  Диплом о профессиональной переподготовке  (на право ведения
                  нового вида деятельности)
                </div>
              </div>
              <div class="sertificates__card sertificates__card_about">
                <div class="sertificates__card_white about-sertificate-bg">
                  <img
                    class="sertificates__card__img sertificates__card__img_about"
                    src="<?php echo bloginfo('template_url'); ?>/assets/content/sertificate-about-3.png"
                    alt=""
                  />
                </div>
                <div
                  class="sertificates__card_discription sertificates__card_discription_about"
                >
                  Диплом о профессиональной переподготовке  (с присвоением
                  квалификации)
                </div>
              </div>
              <div class="sertificates__card sertificates__card_about">
                <div class="sertificates__card_white about-sertificate-bg">
                  <img
                    class="sertificates__card__img sertificates__card__img_about"
                    src="<?php echo bloginfo('template_url'); ?>/assets/content/sertificate-about-4.png"
                    alt=""
                  />
                </div>
                <div
                  class="sertificates__card_discription sertificates__card_discription_about"
                >
                  Свидетельство рабочего служащего
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sertificates-arrows">
          <div class="sertificates-arrows__prew">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15 19L8 12L15 5"
                stroke="black"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div class="sertificates-arrows__next">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9 5L16 12L9 19"
                stroke="black"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
        </div>
        <script>
          const overflowContainer = document.querySelector(
            ".sertificates-overflow-container"
          );
          const container = document.querySelector(".sertificates-container");
          const leftArrow = document.querySelector(
            ".sertificates-arrows__prew"
          );
          const rightArrow = document.querySelector(
            ".sertificates-arrows__next"
          );

          let scrollAmount = window.innerWidth - 30;

          leftArrow.addEventListener("click", function () {
            overflowContainer.scrollBy({
              left: -scrollAmount,
              behavior: "smooth",
            });
          });

          rightArrow.addEventListener("click", function () {
            overflowContainer.scrollBy({
              left: scrollAmount,
              behavior: "smooth",
            });
          });

          window.addEventListener("resize", function () {
            scrollAmount = window.innerWidth - 30;
          });
        </script>
      </section>

      <section class="standart-margin-section team-secton">
        <h2 class="standart_title">Наша команда</h2>
        <div class="tabs-last-vebinars-overflow">
          <div class="tabs-last-vebinars">
            <div class="tab-last-vebinar active">Все сотрудники</div>
            <div class="tab-last-vebinar">Учебный отдел</div>
            <div class="tab-last-vebinar">Общее образование</div>
            <div class="tab-last-vebinar">Почтовый отдел</div>
            <div class="tab-last-vebinar">Архивная служба</div>
            <div class="tab-last-vebinar">Руководители</div>
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

        <div class="team-container-owerflow">
          <div class="team-container">
            <div class="team-card">
              <div class="teat__avatar">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/content/team-1.png" alt="" />
              </div>
              <div class="team__name">Толмачева Елена Г.</div>
              <ul class="team__ul">
                <li class="team__li">Педагог со стажем 20 лет</li>
                <li class="team__li">Автор курса «Бухгалтерия от А до Я».</li>
                <li class="team__li">
                  4 награды всероссийских конкурсов педагогов
                </li>
              </ul>
            </div>
            <div class="team-card">
              <div class="teat__avatar">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/content/team-2.png" alt="" />
              </div>
              <div class="team__name">Иванов Алексей С.</div>
              <ul class="team__ul">
                <li class="team__li">Педагог со стажем 20 лет</li>
                <li class="team__li">Автор курса «Бухгалтерия от А до Я».</li>
                <li class="team__li">
                  4 награды всероссийских конкурсов педагогов
                </li>
              </ul>
            </div>
            <div class="team-card">
              <div class="teat__avatar">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/content/team-3.png" alt="" />
              </div>
              <div class="team__name">Скворцова Александра О.</div>
              <ul class="team__ul">
                <li class="team__li">Педагог со стажем 20 лет</li>
                <li class="team__li">Автор курса «Бухгалтерия от А до Я».</li>
                <li class="team__li">
                  4 награды всероссийских конкурсов педагогов
                </li>
              </ul>
            </div>
            <div class="team-card">
              <div class="teat__avatar">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/content/team-4.png" alt="" />
              </div>
              <div class="team__name">Мишутин Владислав В.</div>
              <ul class="team__ul">
                <li class="team__li">Педагог со стажем 20 лет</li>
                <li class="team__li">Автор курса «Бухгалтерия от А до Я».</li>
                <li class="team__li">
                  4 награды всероссийских конкурсов педагогов
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="sertificates-arrows">
          <div class="sertificates-arrows__prew team_prew">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15 19L8 12L15 5"
                stroke="black"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div class="sertificates-arrows__next team_next">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9 5L16 12L9 19"
                stroke="black"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
        </div>
        <script>
          const overflowContaine = document.querySelector(
            ".team-container-owerflow"
          );
          const containe = document.querySelector(".team-container");
          const leftArro = document.querySelector(".team_prew");
          const rightArro = document.querySelector(".team_next");

          let scrollAmoun = window.innerWidth - 30;

          leftArro.addEventListener("click", function () {
            overflowContaine.scrollBy({
              left: -scrollAmount,
              behavior: "smooth",
            });
          });

          rightArro.addEventListener("click", function () {
            overflowContaine.scrollBy({
              left: scrollAmount,
              behavior: "smooth",
            });
          });

          window.addEventListener("resize", function () {
            scrollAmount = window.innerWidth - 30;
          });
        </script>
      </section>

      <section class="reviews-of-students-section">
        <h2 class="standart_title">Отзывы учеников</h2>
        <div class="reviews-container m-mob-24">
          <div class="review-card video review-video-1">
            <div class="review-card__play-btn">
              <svg
                width="26"
                height="28"
                viewBox="0 0 26 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M25.25 13.998L0.25 27.998L0.250001 -0.00195312L25.25 13.998Z"
                  fill="black"
                />
              </svg>
            </div>
            <div class="review-card__white-bottom">Алена Ситникова</div>
          </div>
          <div class="review-card video review-video-2">
            <div class="review-card__play-btn">
              <svg
                width="26"
                height="28"
                viewBox="0 0 26 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M25.25 13.998L0.25 27.998L0.250001 -0.00195312L25.25 13.998Z"
                  fill="black"
                />
              </svg>
            </div>
            <div class="review-card__white-bottom">Иван Козлов</div>
          </div>
          <div class="review-card text review-text-3">
            <div class="review-card__top-block">
              <div class="text-top-block__icon"></div>
              <div class="text-top-block__right-list">
                <div class="text-top-block__right-list_stars">
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                </div>
                <p class="text-top-block__right-list_name">Власова Е.И</p>
                <p class="text-top-block__right-list_job-title">
                  Директор школы МОУ СОШ Гимназия Салахова, г Сургут
                </p>
              </div>
            </div>
            <div class="review-card__middle-text">
              Обращались в компанию весной, нужно было здание под офис. Ответили
              первыми, от остальных компаний предложения ждали неделю! В общем
              съездили на завод и на них и остановились, в итоге не пожалели!
              Вполне рекомендуем, во всяком случае все было оперативно и по
              качеству тоже вопросов не возникало. Молодцы ребята, процветания
              Вам! Менеджерам отдельное спасибо за понимание)
            </div>
            <div class="review-card__bottom-link">Читать полностью</div>
          </div>
          <div class="review-card text review-text-3">
            <div class="review-card__top-block">
              <div class="text-top-block__icon"></div>
              <div class="text-top-block__right-list">
                <div class="text-top-block__right-list_stars">
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                </div>
                <p class="text-top-block__right-list_name">Власова Е.И</p>
                <p class="text-top-block__right-list_job-title">
                  Директор школы МОУ СОШ Гимназия Салахова, г Сургут
                </p>
              </div>
            </div>
            <div class="review-card__middle-text">
              Обращались в компанию весной, нужно было здание под офис. Ответили
              первыми, от остальных компаний предложения ждали неделю! В общем
              съездили на завод и на них и остановились, в итоге не пожалели!
              Вполне рекомендуем, во всяком случае все было оперативно и по
              качеству тоже вопросов не возникало. Молодцы ребята, процветания
              Вам! Менеджерам отдельное спасибо за понимание)
            </div>
            <div class="review-card__bottom-link">Читать полностью</div>
          </div>
          <div class="review-card text review-text-3">
            <div class="review-card__top-block">
              <div class="text-top-block__icon"></div>
              <div class="text-top-block__right-list">
                <div class="text-top-block__right-list_stars">
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                </div>
                <p class="text-top-block__right-list_name">Власова Е.И</p>
                <p class="text-top-block__right-list_job-title">
                  Директор школы МОУ СОШ Гимназия Салахова, г Сургут
                </p>
              </div>
            </div>
            <div class="review-card__middle-text">
              Обращались в компанию весной, нужно было здание под офис. Ответили
              первыми, от остальных компаний предложения ждали неделю! В общем
              съездили на завод и на них и остановились, в итоге не пожалели!
              Вполне рекомендуем, во всяком случае все было оперативно и по
              качеству тоже вопросов не возникало. Молодцы ребята, процветания
              Вам! Менеджерам отдельное спасибо за понимание)
            </div>
            <div class="review-card__bottom-link">
              <a href="">Читать полностью</a>
            </div>
          </div>
          <div class="review-card text review-text-3">
            <div class="review-card__top-block">
              <div class="text-top-block__icon"></div>
              <div class="text-top-block__right-list">
                <div class="text-top-block__right-list_stars">
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>//assets/content/review-star.svg" alt="" />
                </div>
                <p class="text-top-block__right-list_name">Власова Е.И</p>
                <p class="text-top-block__right-list_job-title">
                  Директор школы МОУ СОШ Гимназия Салахова, г Сургут
                </p>
              </div>
            </div>
            <div class="review-card__middle-text">
              Обращались в компанию весной, нужно было здание под офис. Ответили
              первыми, от остальных компаний предложения ждали неделю! В общем
              съездили на завод и на них и остановились, в итоге не пожалели!
              Вполне рекомендуем, во всяком случае все было оперативно и по
              качеству тоже вопросов не возникало. Молодцы ребята, процветания
              Вам! Менеджерам отдельное спасибо за понимание)
            </div>
            <div class="review-card__bottom-link">Читать полностью</div>
          </div>
          <div class="review-card video review-video-7">
            <div class="review-card__play-btn">
              <svg
                width="26"
                height="28"
                viewBox="0 0 26 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M25.25 13.998L0.25 27.998L0.250001 -0.00195312L25.25 13.998Z"
                  fill="black"
                />
              </svg>
            </div>
            <div class="review-card__white-bottom">Дарья Коломецкая</div>
          </div>
          <div class="review-card video review-video-8">
            <div class="review-card__play-btn">
              <svg
                width="26"
                height="28"
                viewBox="0 0 26 28"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M25.25 13.998L0.25 27.998L0.250001 -0.00195312L25.25 13.998Z"
                  fill="black"
                />
              </svg>
            </div>
            <div class="review-card__white-bottom">Сергей Транин</div>
          </div>
        </div>
        <div class="view-all-reviews-btn">Все отзывы</div>
      </section>
    </main>



<?php
get_footer();
?>