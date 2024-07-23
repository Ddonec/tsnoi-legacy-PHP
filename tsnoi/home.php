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
          <img
            src="<?php echo bloginfo('template_url'); ?>/assets/content/fly-elem-2.png "
            class="fly-element second-fly-element"
          />
          <img
            src="<?php echo bloginfo('template_url'); ?>/assets/content/fly-elem-3.png"
            class="fly-element third-fly-element"
          />
          <div class="first-block-blue-bg-overflow">
            <img
              src="<?php echo bloginfo('template_url'); ?>/assets/content/fly-elem-1.png"
              class="fly-element first-fly-element"
            />
            <div class="blue-bg-main-text">
              <h1 class="h1-text">
                Центр непрерывного <br />
                образования и инноваций
              </h1>
              <p class="h1-subtext">Образовательный холдинг</p>
            </div>
          </div>
        </div>
      </section>
      <section class="standart-margin-section second-section-home">
        <div class="why-choise-box">
          <h2 class="second-section-home_title why-choise__element">
            Почему нас выбирают
          </h2>
          <div class="advantages-block why-choise__element">
            <div class="advantage">
              <h3 class="advantage__title">20 000+</h3>
              <p class="advantage__subtitle">пользователей прошли обучение</p>
            </div>
            <div class="advantage">
              <h3 class="advantage__title">№1</h3>
              <p class="advantage__subtitle">
                по качеству обучения среди конкурентов
              </p>
            </div>
            <div class="advantage">
              <h3 class="advantage__title">90%</h3>
              <p class="advantage__subtitle">
                окончили курс и выполнили свои цели
              </p>
            </div>
            <div class="advantage">
              <div class="advantage__customers">
                <div class="advantage__customers_customer">
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/content/advantage-customer-1.png" alt="" />
                </div>
                <div class="advantage__customers_customer customer-get-left-2">
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/content/advantage-customer-2.png" alt="" />
                </div>
                <div class="advantage__customers_customer customer-get-left-3">
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/content/advantage-customer-3.png" alt="" />
                </div>
                <div class="advantage__customers_more customer-get-left-4">
                  100+
                </div>
              </div>
              <p class="advantage__subtitle">окончили успешно обучение</p>
            </div>
          </div>
        </div>
        <div class="advantages-cards-container">
          <div class="advantages__big-blue-card">
            <h4 class="big-blue-card__title">
              Повышение квалификации и переподготовка
            </h4>
            <div class="big-blue-card__button">Образование</div>
            <img
              class="big-blue-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-2.png"
              alt=""
            />
          </div>
          <div class="advantages__big-white-card">
            <h4 class="big-white-card__title">Инновационные площадки</h4>
            <div class="big-white-card__button">Технологии</div>
            <img
              class="big-white-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-3.png"
              alt=""
            />
          </div>
          <div class="advantages__big-blue-card">
            <h4 class="big-blue-card__title">Онлайн-колледж</h4>
            <div class="big-blue-card__button">Технологии</div>
            <img
              class="big-blue-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-4.png"
              alt=""
            />
          </div>
          <div class="advantages__big-white-card">
            <h4 class="big-white-card__title">Онлайн-магазин</h4>
            <div class="big-white-card__button">Образование</div>
            <img
              class="big-white-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-5.png"
              alt=""
            />
          </div>
          <div class="advantages__big-white-card">
            <h4 class="big-white-card__title">
              Наши мероприятия <br />в Санкт-Петербурге
            </h4>
            <div class="big-white-card__button">События</div>
            <img
              class="big-white-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-6.png"
              alt=""
            />
          </div>
          <div class="advantages__big-blue-card">
            <h4 class="big-blue-card__title">Вебинары</h4>
            <div class="big-blue-card__button">Образование</div>
            <img
              class="big-blue-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-7.png"
              alt=""
            />
          </div>
          <div class="advantages__big-white-card">
            <h4 class="big-white-card__title">
              Профессиональное объединение Невская Ассамблея
            </h4>
            <div class="big-white-card__button">События</div>
            <img
              class="big-white-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-8.png"
              alt=""
            />
          </div>
          <div class="advantages__big-blue-card">
            <h4 class="big-blue-card__title">Курсы. PRO</h4>
            <div class="big-blue-card__button">Образование</div>
            <img
              class="big-blue-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-2.png"
              alt=""
            />
          </div>
          <div class="advantages__big-blue-card">
            <h4 class="big-blue-card__title">Студия создания видео-контента</h4>
            <div class="big-blue-card__button">Технологии</div>
            <img
              class="big-blue-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-9.png"
              alt=""
            />
          </div>
          <div class="advantages__big-white-card">
            <h4 class="big-white-card__title">Выездные школы</h4>
            <div class="big-white-card__button">События</div>
            <img
              class="big-white-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-10.png"
              alt=""
            />
          </div>
          <div class="advantages__big-blue-card">
            <h4 class="big-blue-card__title">Стажировка</h4>
            <div class="big-blue-card__button">События</div>
            <img
              class="big-blue-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-11.png"
              alt=""
            />
          </div>
          <div class="advantages__big-white-card">
            <h4 class="big-white-card__title">
              Портал методических материалов
            </h4>
            <div class="big-white-card__button">Образование</div>
            <img
              class="big-white-card__image"
              src="<?php echo bloginfo('template_url'); ?>/assets/content/starter-choise-image-5.png"
              alt=""
            />
          </div>
          <button class="show-more-btn-home">
            Посмотреть ещё
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M5 12H19"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M13 6L19 12L13 18"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
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
      <section class="standart-margin-section four-section-home">
        <div class="four-s-title-box">
          <h2 class="standart_title">Новости и статьи</h2>
          <div class="four-s-title-box__mounth">
            <a class="four-s-title-box__mounth_link" href=""
              >Все статьи
              <svg
                width="24"
                height="25"
                viewBox="0 0 24 25"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9 5.18335L16 12.1833L9 19.1833"
                  stroke="#003ACB"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
        </div>
        <div class="articles-prewiew-box">
          <div
            class="articles-prewiew-box__article-1 articles-prewiew-box__article"
          >
            <div class="article-preview__text">Новость</div>
          </div>
          <div
            class="articles-prewiew-box__article-2 articles-prewiew-box__article"
          >
            <div class="article-preview__text">Вебинар</div>
          </div>
          <div
            class="articles-prewiew-box__article-3 articles-prewiew-box__article"
          >
            <div class="article-preview__text">Событие</div>
          </div>
        </div>
      </section>
    </main>





    
    <?php
get_footer();
?>