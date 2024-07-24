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
            src="./assets/content/about-su-absolute-1.png"
            class="fly-element about-img-1"
          />

          <div class="first-block-blue-bg-overflow ways-overflow">
            <img
              src="./assets/content/about-su-absolute-2.png"
              class="fly-element about-img-2"
            />
            <img
              src="./assets/content/about-us-peoples.png"
              class="ways-img-bg about-bg-img"
            />
            <div class="blue-bg-courses-text-ways">
              <div class="blue-bg-courses__button">
                Центр непрерывного образования и инноваций
              </div>
              <h1 class="h1-text">О компании</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="about-second-section">
        <h2 class="second-section-about-title">
          Центр инноваций — это место, где любой специалист может стать сильнее
          и научиться у лучших
        </h2>
        <div class="ovner-card">
          <img
            class="ovner-avatar"
            src="./assets/content/ovner-avatar.png"
            alt=""
          />
          <div class="ovner-name-box">
            <p class="ovner__name">Завражин Владимир Викторович</p>
            <p class="ovner__priority">Директор Центра Инноваций</p>
          </div>
        </div>
      </section>

      <!-- claim  -->
      <section class="second section-ways">
        <h2 class="standart_title">
          Мы — площадка для обучения <br />
          профессионалов
        </h2>
        <div
          class="ways-second-overflow-container about-container-second-overflow"
        >
          <div class="ways-second-container ways-second-container-about">
            <div class="ways-second-card about-card">
              <div class="ways-card__img about__img">
                <img src="./assets/content/about-crystall-1.png" alt="" />
              </div>
              <div class="ways-card__title about-copied-title">
                Множество форматов
              </div>
              <div class="ways-card__subtitle about-copied-subtitle">
                Мастер-классы, вебинары, курсы, конференции, трансляции
              </div>
            </div>
            <div class="ways-second-card about-card">
              <div class="ways-card__img about__img">
                <img src="./assets/content/about-crystall-2.png" alt="" />
              </div>
              <div class="ways-card__title about-copied-title">
                Комфортное обучение
              </div>
              <div class="ways-card__subtitle about-copied-subtitle">
                Куратор всегда на связи, удобный личный кабинет. Сдача «домашки»
                — в удобное для вас время
              </div>
            </div>
            <div class="ways-second-card about-card">
              <div class="ways-card__img about__img">
                <img src="./assets/content/about-crystall-3.png" alt="" />
              </div>
              <div class="ways-card__title about-copied-title">
                Открытая база знаний
              </div>
              <div class="ways-card__subtitle about-copied-subtitle">
                Более 4 000 обучающих роликов в открытом доступе
              </div>
            </div>
            <div class="ways-second-card about-card">
              <div class="ways-card__img about__img">
                <img src="./assets/content/about-crystall-4.png" alt="" />
              </div>
              <div class="ways-card__title about-copied-title">
                Организуем всеросиийские мероприятия
              </div>
              <div class="ways-card__subtitle about-copied-subtitle">
                Конгрессы, съезды, конкурсы
              </div>
            </div>
          </div>
        </div>
        <div class="arrows-for-ways-second-container arrows-lvl-up-mobile">
          <div class="arrows-for-ways__left">
            <svg
              width="25"
              height="25"
              viewBox="0 0 25 25"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M15.4648 19.6033L8.46484 12.6033L15.4648 5.60327"
                stroke="black"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div class="arrows-for-ways__right">
            <svg
              width="25"
              height="25"
              viewBox="0 0 25 25"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.46484 5.60327L16.4648 12.6033L9.46484 19.6033"
                stroke="black"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
        </div>
        <script>
          const overflowContainerLVL = document.querySelector(
            ".ways-second-overflow-container"
          );
          const leftScrollButton = document.querySelector(
            ".arrows-for-ways__left"
          );
          const rightScrollButton = document.querySelector(
            ".arrows-for-ways__right"
          );

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
            return window.innerWidth < 500
              ? smallScreenOffset
              : defaultCardWidth;
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
          Выросли из небольшой компании в крупный <br />
          инновационный центр за 6 лет
        </h2>
        <div class="grow-overflow-container">
          <div class="grow-container">
            <div class="grow-box">
              <p class="grow-box__year">2015</p>
              <div class="grow-box__bubble-hidden">
                <div class="grow-box__bubble-1">
                  <div class="grow-box__bubble-2">
                    <div class="grow-box__bubble-3"></div>
                  </div>
                </div>
              </div>
              <div class="grow-box__count">Обучились 122 человека</div>
              <div class="grow-box__discription">
                ЦНОИ был основан в 2015 году. Центр начал свою деятельность с
                небольших курсов для местных учителей. В программе были курсы по
                современным методикам преподавания, психологии и педагогике.
                Всего за первый год центр провел 10 курсов, в которых приняло
                участие около 150 преподавателей.
              </div>
            </div>
            <div class="grow-box">
              <p class="grow-box__year">2016</p>
              <div class="grow-box__bubble-hidden">
                <div class="grow-box__bubble-1">
                  <div class="grow-box__bubble-3"></div>
                </div>
              </div>
              <div class="grow-box__count">Обучились 122 человека</div>
              <div class="grow-box__discription">
                Успех первых курсов привлек внимание других образовательных
                учреждений. В 2016 году центр начал сотрудничество с несколькими
                школами и университетами региона, предоставляя курсы для их
                преподавателей. В 2017 году в центре появилась библиотека
                методической литературы и начали проводиться вебинары для
                преподавателей из других городов.
              </div>
            </div>
            <div class="grow-box">
              <p class="grow-box__year">2018</p>
              <div class="grow-box__bubble-hidden">
                <div class="grow-box__bubble-1">
                  <div class="grow-box__bubble-2">
                    <div class="grow-box__bubble-3"></div>
                  </div>
                </div>
              </div>
              <div class="grow-box__count">Обучились 122 человека</div>
              <div class="grow-box__discription">
                В 2018 году центр сделал важный шаг в сторону цифрового
                образования, запустив платформу для онлайн-курсов. Это позволило
                расширить аудиторию до национального уровня. Курсы стали более
                доступными, и центр начал привлекать преподавателей из других
                регионов страны.
              </div>
            </div>
            <div class="grow-box">
              <p class="grow-box__year">2020</p>
              <div class="grow-box__bubble-hidden">
                <div class="grow-box__bubble-1">
                  <div class="grow-box__bubble-3"></div>
                </div>
              </div>
              <div class="grow-box__count">Обучились 122 человека</div>
              <div class="grow-box__discription">
                Пандемия COVID-19 в 2020 году стала серьезным вызовом для
                центра, но благодаря уже существующей онлайн-платформе,
                "Педагогическое Совершенствование" смог оперативно
                адаптироваться к новым условиям. Все курсы были переведены в
                онлайн-формат, и количество участников выросло более чем в два
                раза.
              </div>
            </div>
            <div class="grow-box">
              <p class="grow-box__year">2021</p>
              <div class="grow-box__bubble-hidden">
                <div class="grow-box__bubble-1">
                  <div class="grow-box__bubble-3"></div>
                </div>
              </div>
              <div class="grow-box__count">Обучились 122 человека</div>
              <div class="grow-box__discription">
                В этот период центр начал развивать новые направления, такие как
                курсы по цифровым технологиям в образовании, инклюзивному
                обучению и эмоциональному интеллекту. Была запущена программа
                менторства для молодых преподавателей, в рамках которой опытные
                педагоги делились своим опытом и поддерживали новичков.
              </div>
            </div>
            <div class="grow-box">
              <p class="grow-box__year">2023</p>
              <div class="grow-box__bubble-hidden">
                <div class="grow-box__bubble-1">
                  <div class="grow-box__bubble-2">
                    <div class="grow-box__bubble-3"></div>
                  </div>
                </div>
              </div>
              <div class="grow-box__count">Обучились 122 человека</div>
              <div class="grow-box__discription">
                Центр начал активную работу с преподавателями дошкольного и
                начального образования, разработав специализированные курсы для
                этих категорий. Также была запущена серия курсов по управлению
                образовательными учреждениями, направленная на подготовку
                будущих руководителей школ и детских садов.
              </div>
            </div>
            <div class="grow-box">
              <p class="grow-box__year">2024</p>
              <div class="grow-box__bubble-hidden">
                <div class="grow-box__bubble-1">
                  <div class="grow-box__bubble-2">
                    <div class="grow-box__bubble-3"></div>
                  </div>
                </div>
              </div>
              <div class="grow-box__count">Обучились 122 человека</div>
              <div class="grow-box__discription">
                В 2024 году центр "Педагогическое Совершенствование" получил
                несколько престижных наград за вклад в развитие педагогического
                сообщества и инновационный подход к обучению. Центр продолжает
                активно развиваться, внедряя новые технологии и методики, и уже
                планирует открытие филиалов в других регионах страны.
              </div>
            </div>
            <div class="blue-line"></div>
          </div>
        </div>
      </section>

      <section class="section-standart-100 four-section-about">
        <div class="white-way-block">
          <img
            class="white-way-block__image"
            src="./assets/content/about-big-img-1.png"
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
            src="./assets/content/about-big-img-2.png"
            alt=""
          />
        </div>
        <div class="white-way-block">
          <img
            class="white-way-block__image"
            src="./assets/content/about-big-img-3.png"
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
                    src="./assets/content/sertificate-about-1.png"
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
                    src="./assets/content/sertificate-about-2.png"
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
                    src="./assets/content/sertificate-about-3.png"
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
                    src="./assets/content/sertificate-about-4.png"
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
                <img src="./assets/content/team-1.png" alt="" />
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
                <img src="./assets/content/team-2.png" alt="" />
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
                <img src="./assets/content/team-3.png" alt="" />
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
                <img src="./assets/content/team-4.png" alt="" />
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
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
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
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
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
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
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
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
                  <img src=".//assets/content/review-star.svg" alt="" />
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