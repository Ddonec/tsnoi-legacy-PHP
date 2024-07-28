<?php
/*
Template Name: courses lvl up page
*/
?>
<?php
get_header();
?>


<main>
      <section class="small-margin-section">
        <div class="first-block-blue-bg first-block-blue-bg-lvl-up">
          <img
            src="./assets/content/fos-fly-art-2.png"
            class="fly-element lvl-up-img-1"
          />
          <img
            src="./assets/content/way-template-absolute-2.png"
            class="fly-element lvl-up-img-2"
          />

          <div class="first-block-blue-bg-overflow ways-overflow">
            <img
              src="./assets/content/courses-blue-absolut-2.png"
              class="ways-img-bg"
            />
            <div class="blue-bg-courses-text-ways">
              <div class="blue-bg-courses__button"><?php the_field('courses-lvl-grey-tab-text') ?></div>
              <h1 class="h1-text">
              <?php the_field('courses-lvl-main-title') ?>
              </h1>
              <p class="h1-subtext ways-first-discription">
              <?php the_field('courses-lvl-main-subtitle') ?>
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="second section-ways">
  <div class="ways-second-overflow-container">
    <div class="ways-second-container">
      <?php if( have_rows('ways_cards') ): ?>
        <?php while ( have_rows('ways_cards') ) : the_row(); 
          $image = get_sub_field('ways_card_image');
          $title = get_sub_field('ways_card_title');
          $subtitle = get_sub_field('ways_card_subtitle');
        ?>
        <div class="ways-second-card mt-0">
          <div class="ways-card__img">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($title); ?>" />
          </div>
          <div class="ways-card__title">
            <?php echo esc_html($title); ?>
          </div>
          <div class="ways-card__subtitle">
            <?php echo esc_html($subtitle); ?>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="arrows-for-ways-second-container arrows-lvl-up-mobile">
    <div class="arrows-for-ways__left">
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.4648 19.6033L8.46484 12.6033L15.4648 5.60327" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <div class="arrows-for-ways__right">
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.46484 5.60327L16.4648 12.6033L9.46484 19.6033" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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

      <section class="section-standart-100 gap30-section">
        <h2 class="standart_title">Наши направления</h2>
        <div class="course-ways-box course-lvl-up-box">
          <div class="course-ways__card lvl-up-card big course-lvl-up-card-1">
            <div class="course-ways__top-black">Дошкольное образование</div>
            <div
              class="course-ways__bot-white-container course-lvl-white-comtainer"
            >
              <div class="course-ways-bot-white">Воспитатель</div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Помощник воспитателя. Младший воспитатель
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Музыкальное воспитание
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Развитие профессиональных компетенций
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Старший воспитатель. Методист
              </div>
              <div class="course-ways-bot-white">Социальный педагог</div>
              <div class="course-ways-bot-white">
                Еще 9<svg
                  width="9"
                  height="15"
                  viewBox="0 0 9 15"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.29688 1.875L7.29688 7.875L1.29688 13.875"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
            </div>
          </div>
          <div class="course-ways__card lvl-up-card big course-lvl-up-card-2">
            <div class="course-ways__top-black">Общее образование</div>
            <div
              class="course-ways__bot-white-container course-lvl-white-comtainer"
            >
              <div class="course-ways-bot-white">Воспитатель</div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Помощник воспитателя. Младший воспитатель
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Музыкальное воспитание
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Развитие профессиональных компетенций
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Старший воспитатель. Методист
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Социальный педагог
              </div>
              <div class="course-ways-bot-white">
                Еще 9<svg
                  width="9"
                  height="15"
                  viewBox="0 0 9 15"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.29688 1.875L7.29688 7.875L1.29688 13.875"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
            </div>
          </div>
          <div class="course-ways__card lvl-up-card big course-lvl-up-card-3">
            <div class="course-ways__top-black">
              Доп. образование детей и взрослых
            </div>
            <div
              class="course-ways__bot-white-container course-lvl-white-comtainer"
            >
              <div class="course-ways-bot-white">Воспитатель</div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Помощник воспитателя. Младший воспитатель
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Музыкальное воспитание
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Развитие профессиональных компетенций
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Старший воспитатель. Методист
              </div>
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Социальный педагог
              </div>
              <div class="course-ways-bot-white">
                Еще 9<svg
                  width="9"
                  height="15"
                  viewBox="0 0 9 15"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.29688 1.875L7.29688 7.875L1.29688 13.875"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
            </div>
          </div>
          <div class="course-ways__card lvl-up-card big course-lvl-up-card-4">
            <div class="course-ways__top-black">
              Психология. Дефектология. Логопедия
            </div>
            <div class="course-ways__bot-white-container">
              <div class="course-ways-bot-white lvl-up-tab-mobile-hide">
                Педагог-психолог
              </div>
              <div class="course-ways-bot-white">Педагог-психолог</div>
              <div class="course-ways-bot-white">Учитель-логопед</div>
            </div>
          </div>
          <div class="course-ways__card lvl-up-card small course-lvl-up-card-5">
            <div class="course-ways__top-black">
              Профессиональное образование
            </div>
            <div class="course-ways__bot-white-container"></div>
          </div>
          <div class="course-ways__card lvl-up-card small course-lvl-up-card-6">
            <div class="course-ways__top-black">
              Курсы повышения квалификации по менеджменту в образовании
            </div>
            <div class="course-ways__bot-white-container"></div>
          </div>
          <div class="course-ways__card lvl-up-card small course-lvl-up-card-7">
            <div class="course-ways__top-black">Государственные закупки</div>
            <div class="course-ways__bot-white-container"></div>
          </div>
          <div class="course-ways__card lvl-up-card small course-lvl-up-card-8">
            <div class="course-ways__top-black">
              HR-технологии. Архивное дело Кадровое делопроизводство.
              Документоведение.
            </div>
            <div class="course-ways__bot-white-container"></div>
          </div>
          <div class="course-ways__card lvl-up-card small course-lvl-up-card-9">
            <div class="course-ways__top-black">Социальная работа</div>
            <div class="course-ways__bot-white-container"></div>
          </div>

          <div
            class="course-ways__card lvl-up-card small course-lvl-up-card-10"
          >
            <div class="course-ways__top-black">
              Бухгалтерский учет налогообложение. Торговое дело
            </div>
            <div class="course-ways__bot-white-container"></div>
          </div>
          <div
            class="course-ways__card lvl-up-card small course-lvl-up-card-11"
          >
            <div class="course-ways__top-black">
              Культура. Музеи. Экскурсионное дело
            </div>
            <div class="course-ways__bot-white-container"></div>
          </div>

          <div
            class="course-ways__card lvl-up-card small course-lvl-up-card-12"
          >
            еще курсы →
          </div>
        </div>
      </section>

      <section class="fly-bottom-section-ways-page">
        <div class="blue-bg-container-for-fos">
          <div class="blue-bg-container-left">
            <h3 class="blue-bg-container__header">
              Оставьте заявку, чтобы начать обучение
            </h3>
          </div>
          <div class="blue-bg-container-right">
            <form class="blue-bg-container__fos-box">
              <h4 class="fos-box_title">Заполните форму ниже</h4>
              <p class="fos-box_subtitle">
                Оставьте свои данные и менеджер свяжется с вами в ближайшее
                время
              </p>
              <input
                class="fos-box_name-input"
                placeholder="Ваше имя"
                type="text"
              />
              <input
                placeholder="Номер телефона"
                class="fos-box_number-input"
                type="number"
              />
              <div class="checkbox-agree-container">
                <input
                  class="checkbox-agree-container__input"
                  type="checkbox"
                  id="agree"
                  
                />
                <label class="checkbox-agree-container__label" for="agree">
                  <div class="checkbox"></div>
                  <p class="checkbox-agree-container__text">
                    Я соглашаюсь с политикой конфиденциальности
                  </p>
                </label>
              </div>
              <button class="fos-box_btn-agree">Записаться</button>
            </form>
            <div class="messenger-feedback-box">
              <div class="messenger-feedback-box__icon-box">
                <svg
                  width="31"
                  height="31"
                  viewBox="0 0 31 31"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_237_24788)">
                    <path
                      d="M22.6604 17.4033C22.6019 17.3753 20.4148 16.2983 20.0262 16.1584C19.8675 16.1015 19.6976 16.0458 19.5168 16.0458C19.2215 16.0458 18.9734 16.193 18.7801 16.4821C18.5617 16.8068 17.9003 17.5799 17.6959 17.8109C17.6693 17.8414 17.6328 17.8778 17.611 17.8778C17.5914 17.8778 17.253 17.7384 17.1505 17.6939C14.8044 16.6748 13.0235 14.224 12.7794 13.8107C12.7445 13.7513 12.743 13.7243 12.7427 13.7243C12.7513 13.6929 12.8302 13.6138 12.8709 13.573C12.99 13.4551 13.1191 13.2998 13.244 13.1495C13.3031 13.0783 13.3623 13.007 13.4205 12.9398C13.6016 12.729 13.6823 12.5654 13.7758 12.3758L13.8248 12.2773C14.0531 11.8237 13.8581 11.4409 13.7951 11.3173C13.7434 11.2139 12.8199 8.98512 12.7217 8.75097C12.4856 8.18594 12.1736 7.92285 11.7401 7.92285C11.6998 7.92285 11.7401 7.92285 11.5714 7.92996C11.3659 7.93863 10.2473 8.0859 9.75267 8.39769C9.22816 8.72837 8.34082 9.78246 8.34082 11.6362C8.34082 13.3046 9.39959 14.8799 9.85416 15.4791C9.86546 15.4942 9.88621 15.5248 9.91631 15.5689C11.6572 18.1113 13.8274 19.9954 16.0274 20.8743C18.1455 21.7203 19.1484 21.8181 19.7186 21.8181H19.7187C19.9583 21.8181 20.1501 21.7993 20.3193 21.7827L20.4266 21.7724C21.1583 21.7076 22.7662 20.8744 23.132 19.858C23.4201 19.0574 23.4961 18.1828 23.3044 17.8653C23.1731 17.6495 22.9468 17.5409 22.6604 17.4033Z"
                      fill="#073F9A"
                    />
                    <path
                      d="M15.7282 0.165039C7.60325 0.165039 0.993125 6.72549 0.993125 14.7894C0.993125 17.3975 1.69111 19.9505 3.01335 22.1849L0.482541 29.6504C0.435398 29.7896 0.470463 29.9434 0.573417 30.0483C0.647736 30.1241 0.748547 30.165 0.851502 30.165C0.89095 30.165 0.93069 30.1591 0.969456 30.1467L8.75387 27.6731C10.8841 28.8112 13.2917 29.412 15.7283 29.412C23.8524 29.4121 30.4619 22.8523 30.4619 14.7894C30.4619 6.72549 23.8524 0.165039 15.7282 0.165039ZM15.7282 26.3658C13.4354 26.3658 11.2147 25.7037 9.30585 24.4511C9.24166 24.4089 9.16715 24.3873 9.09215 24.3873C9.05251 24.3873 9.01277 24.3934 8.9741 24.4056L5.07459 25.6452L6.33342 21.9313C6.37413 21.8111 6.35377 21.6785 6.27877 21.5761C4.82514 19.5898 4.05673 17.2431 4.05673 14.7894C4.05673 8.4053 9.29251 3.2114 15.7281 3.2114C22.1629 3.2114 27.3981 8.4053 27.3981 14.7894C27.3982 21.1726 22.1631 26.3658 15.7282 26.3658Z"
                      fill="#073F9A"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_237_24788">
                      <rect
                        width="30"
                        height="30"
                        fill="white"
                        transform="translate(0.461914 0.165039)"
                      />
                    </clipPath>
                  </defs>
                </svg>
              </div>

              <p class="messenger-feedback-box__text">
                Так же для расчета, вы можете связаться в любом удобном для вас
                месенджере
              </p>
            </div>
          </div>
        </div>
        <img
          class="fos-fly-1"
          src="./assets/content/fos-fly-art-1.png"
          alt=""
        />
        <img
          class="fos-fly-2"
          src="./assets/content/fos-fly-art-2.png"
          alt=""
        />
      </section>
      <section class="sertificates-section">
        <h2 class="standart_title">Выдаем государственные сертификаты</h2>
        <p class="sertificates__subtitle">И вносим сведения в ФИС ФРДО</p>
        <div class="sertificates-overflow-container">
          <div class="sertificates-container">
            <div class="sertificates__card">
              <div class="sertificates__card_white">
                <img
                  class="sertificates__card__img"
                  src="./assets/content/sertificates__card-1.png"
                  alt=""
                />
              </div>
              <div class="sertificates__card_discription">
                Удостоверение о повышении квалификации 
              </div>
            </div>
            <div class="sertificates__card">
              <div class="sertificates__card_white">
                <img
                  class="sertificates__card__img"
                  src="./assets/content/sertificates__card-2.png"
                  alt=""
                />
              </div>
              <div class="sertificates__card_discription">
                Диплом о профессиональной переподготовке  (на право ведения
                нового вида деятельности)
              </div>
            </div>
            <div class="sertificates__card">
              <div class="sertificates__card_white">
                <img
                  class="sertificates__card__img"
                  src="./assets/content/sertificates__card-3.png"
                  alt=""
                />
              </div>
              <div class="sertificates__card_discription">
                Диплом о профессиональной переподготовке  (с присвоением
                квалификации)
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
      </section>
      <script>
        const overflowContainer = document.querySelector(
          ".sertificates-overflow-container"
        );
        const container = document.querySelector(".sertificates-container");
        const leftArrow = document.querySelector(".sertificates-arrows__prew");
        const rightArrow = document.querySelector(".sertificates-arrows__next");

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
    </main>


<?php
get_footer();
?>