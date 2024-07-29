<?php
/*
Template Name: knowledge storage page
*/
?>
<?php
get_header();
?>



<main>
    <section class="small-margin-section">
        <div class="first-block-blue-bg first-block-blue-bg-lvl-up">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/preschool-fly-1.png" class="fly-element preschool-img-1 knowlege-fly-no-hide" />

            <div class="first-block-blue-bg-overflow ways-overflow">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/content/fly-elem-2.png" class="fly-element preschool-img-2" />
                <img src="<?php the_field('blue-absolut-img') ?>" class="ways-img-bg knowledge-absolut" />
                <div class="blue-bg-courses-text-ways">
                    <div class="blue-bg-courses__button">
                        <?php the_field('main-grey') ?>
                    </div>
                    <h1 class="h1-text"><?php the_field('main-title') ?></h1>
                    <p class="h1-subtext ways-first-discription"></p>
                </div>
            </div>
        </div>
    </section>
    <section class="vebinar-anonses-section">
        <h2 class="standart_title"><?php the_field('second-title') ?></h2>
        <div class="knowledge-arrows-box">
            <div class="knowledge-arrow-prew">
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 15L1 8L8 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="knowledge-arrow-next">
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L8 8L0.999998 15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="vebinar-cards-owerflow-container">
            <div class="vebinar-cards-container">
                <?php if (have_rows('vebinars')) : ?>
                    <?php while (have_rows('vebinars')) : the_row();
                        $date = get_sub_field('date');
                        $title = get_sub_field('title');
                        $image = get_sub_field('image');
                    ?>
                        <div class="vebinar-card">
                            <div class="vebinar-card__date"><?php echo esc_html($date); ?></div>
                            <div class="vebinar-card__title"><?php echo esc_html($title); ?></div>
                            <div class="vebinar-card__vhite-btn vebinar-tab-131">Вебинар</div>
                            <img class="vebinar-card__absolute-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <script>
            const vebinarContainer = document.querySelector(
                ".vebinar-cards-owerflow-container"
            );
            const prevArrow = document.querySelector(".knowledge-arrow-prew");
            const nextArrow = document.querySelector(".knowledge-arrow-next");

            function getShift() {
                return window.innerWidth < 700 ? window.innerWidth : 468;
            }

            prevArrow.addEventListener("click", function() {
                vebinarContainer.scrollBy({
                    left: -getShift(),
                    behavior: "smooth",
                });
            });

            nextArrow.addEventListener("click", function() {
                vebinarContainer.scrollBy({
                    left: getShift(),
                    behavior: "smooth",
                });
            });

            window.addEventListener("resize", function() {
                // Update shift value on window resize
                getShift();
            });
        </script>
    </section>
    <section class="last-vebinars-section">
        <h2 class="standart_title"><?php the_field('third-title') ?></h2>
        <div class="tabs-last-vebinars-overflow">
            <div class="tabs-last-vebinars">
                <?php if (have_rows('tabs_last_vebinars')) : $tab_index = 0; ?>
                    <?php while (have_rows('tabs_last_vebinars')) : the_row();
                        $tab_name = get_sub_field('tab_name');
                        $active_class = ($tab_index == 0) ? 'active' : '';
                    ?>
                        <div class="tab-last-vebinar <?php echo esc_attr($active_class); ?>"><?php echo esc_html($tab_name); ?></div>
                        <?php $tab_index++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


        </div>
        <div class="last-vebinar-preview-box">
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-1">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-2">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-3">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-4">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-1">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-2">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-3">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-4">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-1">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-2">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-3">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-4">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-1">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-2">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-3">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
            <div class="last-vebinar-preview-card">
                <div class="last-vebinar-preview-card__preview video-preview-4">
                    <div class="last-vebinar-preview-card__play-btn">
                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <p class="last-vebinar-preview-card__text">
                    Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                    образовательную практику. Художественно-эстетическое развитие»
                </p>
                <div class="last-vebinar-preview-card__btn-area">
                    <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground()">
                        Получить сертификат
                    </div>
                    <div class="preview-card__btn-area_price">500 ₽</div>
                </div>
            </div>
        </div>
        <div class="show-more-mobile-btn download-more-mobile-btn">
            Загрузить еще
        </div>

        <script>
            const tabs = document.querySelectorAll(".tab-last-vebinar");

            tabs.forEach((tab) => {
                tab.addEventListener("click", function() {
                    tabs.forEach((t) => t.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        </script>
    </section>
    <section class="youtube-section-knowledge">
        <div class="youtube-left">
            <h3 class="youtube-title">
                Более 4 000 бесплатных вебинаров на нашем YouTube канале
            </h3>
            <a class="yiotube-link-btn" target="_blank" href="https://www.youtube.com/">Перейти <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12.5L19 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13 6.5L19 12.5L13 18.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
        </div>
        <div class="youtube-right">
            <a href="https://www.youtube.com/">
                <img class="youtube-logo-absolute" src="<?php echo bloginfo('template_url'); ?>/assets/content/youtube-logo.png" alt="" />
            </a>
        </div>
    </section>
    <section class="modal-vebinar-section">
        <div class="modal-vebinar-scroll-box">
            <div class="close-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 19L12 12L19 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 5L12 12L5 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="modal-preview">
                <div class="last-vebinar-preview-card__play-btn">
                    <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                    </svg>
                </div>
            </div>
            <h2 class="modal-title">
                Всероссийская педагогическая конференция «Внедрение ФОП ДО в
                образовательную практику. Художественно-эстетическое развитие»
            </h2>
            <p class="modal-subtitle">
                Значимость этих проблем настолько очевидна, что базовый вектор
                развития позволяет оценить значение экспериментов, поражающих по
                своей масштабности и грандиозности. Лишь представители современных
                социальных резервов объединены в целые кластеры себе подобных.
            </p>
            <div class="modal-btns-box">
                <div class="modal-buy-btn">Получить сертификат</div>
                <p class="modal-price">500 ₽</p>
            </div>
            <div class="modal-white-box">
                <div class="modal-sertificate sertificate-1"></div>
                <div class="modal-white__right">
                    <h4 class="modal-white__title">Как выглядит сертификат</h4>
                    <p class="modal-white__discription">
                        Значимость этих проблем настолько очевидна, что базовый вектор
                        развития позволяет оценить значение экспериментов, поражающих по
                        своей масштабности и грандиозности. Лишь представители
                        современных социальных резервов объединены в целые кластеры себе
                        подобных.
                    </p>
                </div>
            </div>
            <div class="modal-white-box">
                <div class="modal-sertificate sertificate-2"></div>
                <div class="modal-white__right">
                    <h4 class="modal-white__title">
                        Что входит в методические материалы
                    </h4>
                    <p class="modal-white__discription">
                        Значимость этих проблем настолько очевидна, что базовый вектор
                        развития позволяет оценить значение экспериментов, поражающих по
                        своей масштабности и грандиозности. Лишь представители
                        современных социальных резервов объединены в целые кластеры себе
                        подобных.
                    </p>
                </div>
            </div>
            <div class="modal-btns-box">
                <div class="modal-buy-btn">Получить сертификат</div>
                <p class="modal-price">500 ₽</p>
            </div>
        </div>
    </section>
</main>

<script>
    function activateModalAndBackground() {
        const modalSection = document.querySelector(".modal-vebinar-section");
        const greyBg = document.querySelector(".grey-bg");

        if (modalSection) {
            modalSection.classList.add("active");
        }

        if (greyBg) {
            greyBg.classList.add("active");
        }

        const closeButton = modalSection.querySelector(".close-btn");
        if (closeButton) {
            closeButton.addEventListener("click", deactivateModalAndBackground);
        }

        document.body.style.overflow = "hidden";
        greyBg.addEventListener("click", deactivateModalAndBackground);
    }

    function deactivateModalAndBackground() {
        const modalSection = document.querySelector(".modal-vebinar-section");
        const greyBg = document.querySelector(".grey-bg");

        if (modalSection) {
            modalSection.classList.remove("active");
        }

        if (greyBg) {
            greyBg.classList.remove("active");
        }

        document.body.style.overflow = "";
    }
</script>



<?php
get_footer();
?>