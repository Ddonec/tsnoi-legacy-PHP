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
                        $link = get_sub_field('link');
                    ?>
                        <div class="vebinar-card">
                            <div class="vebinar-card__date"><?php echo esc_html($date); ?></div>
                            <div class="vebinar-card__title"><?php echo esc_html($title); ?></div>
                            <a class="vebinar-card__vhite-btn" href="<?php echo esc_url($link); ?>">
                                <div class="vebinar-tab-131">Вебинар</div>
                            </a>
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
                <div class="tab-last-vebinar active" data-category="all">Все</div>
                <?php if (have_rows('tabs_last_vebinars')) : ?>
                    <?php while (have_rows('tabs_last_vebinars')) : the_row();
                        $tab_name = get_sub_field('tab_name');
                        $category = sanitize_title($tab_name); // Приведение названия категории к slug
                    ?>
                        <div class="tab-last-vebinar" data-category="<?php echo esc_attr($category); ?>"><?php echo esc_html($tab_name); ?></div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>



        </div>
        <div class="last-vebinar-preview-box">
            <?php if (have_rows('last_vebinar_previews')) : ?>
                <?php while (have_rows('last_vebinar_previews')) : the_row();
                    $preview_text = get_sub_field('preview_text');
                    $price = get_sub_field('price');
                    $preview_image = get_sub_field('preview_image');
                    $category = sanitize_title(get_sub_field('category'));
                    $image_url = $preview_image['url'];
                    $btn = get_sub_field('btn-text');
                    $video_link = get_sub_field('video_link');


                    // Добавляем данные для модального окна
                    $modal_title = get_sub_field('modal_title');
                    $modal_heading_1 = get_sub_field('modal_heading_1');
                    $modal_heading_2 = get_sub_field('modal_heading_2');
                    $modal_subtitle = get_sub_field('modal_subtitle');
                    $modal_price = get_sub_field('price');
                    $modal_bg = get_sub_field('preview_image')['url'];
                    $modal_text_1 = get_sub_field('modal_text_1');
                    $modal_text_2 = get_sub_field('modal_text_2');
                    $modal_image_1 = get_sub_field('modal_image_1')['url'];
                    $modal_image_2 = get_sub_field('modal_image_2')['url'];
                    $link_btn_modal = get_sub_field('link_btn_modal');

                ?>
                    <div class="last-vebinar-preview-card"
                        data-category="<?php echo esc_attr($category); ?>"
                        data-modal-title="<?php echo esc_attr($modal_title); ?>"
                        data-modal-title-2="<?php echo esc_attr($modal_heading_1); ?>"
                        data-modal-title-3="<?php echo esc_attr($modal_heading_2); ?>"
                        data-modal-subtitle="<?php echo esc_attr($modal_subtitle); ?>"
                        data-modal-price="<?php echo esc_attr($modal_price); ?>"
                        data-modal-bg="<?php echo esc_url($modal_bg); ?>"
                        data-video-link="<?php echo esc_url($video_link); ?>"
                        data-link-btn-modal="<?php echo esc_url($link_btn_modal); ?>"
                        data-modal-text-1="<?php echo esc_attr($modal_text_1); ?>"
                        data-modal-text-2="<?php echo esc_attr($modal_text_2); ?>"
                        data-modal-image-1="<?php echo esc_url($modal_image_1); ?>"
                        data-modal-image-2="<?php echo esc_url($modal_image_2); ?>">



                        <!-- Контент карточки -->
                        <a href="<?php echo esc_url($video_link); ?>" target="_blank">
                            <div class="last-vebinar-preview-card__preview" style="background-image: url('<?php echo esc_url($image_url); ?>');">
                                <div class="last-vebinar-preview-card__play-btn">
                                    <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25 14L0 28L1.26184e-06 0L25 14Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <p class="last-vebinar-preview-card__text"><?php echo esc_html($preview_text); ?></p>
                        <div class="last-vebinar-preview-card__btn-area">
                            <div class="preview-card__btn-area_btn" onclick="activateModalAndBackground(this)">
                                <?php echo esc_html($btn); ?>
                            </div>
                            <div class="preview-card__btn-area_price"><?php echo esc_html($price); ?> ₽</div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>


        <div class="show-more-mobile-btn download-more-mobile-btn">
            Загрузить еще
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.tab-last-vebinar');
                const cards = document.querySelectorAll('.last-vebinar-preview-card');

                tabs.forEach(tab => {
                    tab.addEventListener('click', function() {
                        const category = this.getAttribute('data-category');

                        tabs.forEach(t => t.classList.remove('active'));
                        this.classList.add('active');

                        cards.forEach(card => {
                            const cardCategory = card.getAttribute('data-category');
                            if (category === 'all' || cardCategory === category) {
                                card.style.display = 'flex';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });
                });
            });
        </script>
    </section>
    <section class="modal-vebinar-section">
        <div class="modal-vebinar-scroll-box">
            <div class="close-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 19L12 12L19 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 5L12 12L5 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <a href="" class="modal-video-link">
                <div class="modal-preview">
                </div>
            </a>
            <h2 class="modal-title">
                <?php the_field('modal_title'); ?>
            </h2>
            <p class="modal-subtitle">
                <?php the_field('modal_subtitle'); ?>
            </p>
            <div class="modal-btns-box">
                <a class="modal-buy-btn link-default">Получить сертификат</a>
                <p class="modal-price"><?php the_field('modal_price'); ?> ₽</p>
            </div>
            <div class="modal-white-box">
                <?php $certificate_1_image = get_field('certificate_image_1'); ?>
                <?php if ($certificate_1_image) : ?>
                    <div class="modal-sertificate modal-sertificate_1" style="background-image: url('<?php echo esc_url($certificate_1_image['url']); ?>');"></div>
                <?php endif; ?>
                <div class="modal-white__right">
                    <h4 class="modal-white__title modal-white__title_1">Как выглядит сертификат</h4>
                    <p class="modal-white__discription modal-white__discription_1">
                        <?php the_field('certificate_description_1'); ?>
                    </p>
                </div>
            </div>
            <div class="modal-white-box">
                <?php $certificate_2_image = get_field('certificate_image_2'); ?>
                <?php if ($certificate_2_image) : ?>
                    <div class="modal-sertificate modal-sertificate_2" style="background-image: url('<?php echo esc_url($certificate_2_image['url']); ?>');"></div>
                <?php endif; ?>
                <div class="modal-white__right">
                    <h4 class="modal-white__title modal-white__title_2">
                        Что входит в методические материалы
                    </h4>
                    <p class="modal-white__discription modal-white__discription_2">
                        <?php the_field('certificate_description_2'); ?>
                    </p>
                </div>
            </div>
            <div class="modal-btns-box">
                <a class="modal-buy-btn link-default">Получить сертификат</a>
                <p class="modal-price"><?php the_field('modal_price'); ?> ₽</p>
            </div>
        </div>
    </section>

    <script>
        function activateModalAndBackground(btn) {
            const card = btn.closest('.last-vebinar-preview-card');

            if (!card) {
                console.error('Element with class .last-vebinar-preview-card not found');
                return;
            }

            // Извлечение данных из атрибутов
            const modalTitle = card.getAttribute('data-modal-title');
            const modalTitleF = card.getAttribute('data-modal-title-2');
            const modalTitleS = card.getAttribute('data-modal-title-3');
            const modalSubtitle = card.getAttribute('data-modal-subtitle');
            const modalPrice = card.getAttribute('data-modal-price');
            const modalBg = card.getAttribute('data-modal-bg');
            const modalText1 = card.getAttribute('data-modal-text-1');
            const modalText2 = card.getAttribute('data-modal-text-2');
            const modalImage1 = card.getAttribute('data-modal-image-1');
            const modalImage2 = card.getAttribute('data-modal-image-2');
            const videoLink = card.getAttribute('data-video-link');
            const linkBtb = card.getAttribute('data-link-btn-modal');

            // Вставка данных в модальное окно
            const modalSection = document.querySelector('.modal-vebinar-section');
            modalSection.querySelector('.modal-title').textContent = modalTitle;
            modalSection.querySelector('.modal-white__title_1').textContent = modalTitleF;
            modalSection.querySelector('.modal-white__title_2').textContent = modalTitleS;
            modalSection.querySelector('.modal-subtitle').textContent = modalSubtitle;
            modalSection.querySelectorAll('.modal-price').forEach(element => {
                element.textContent = `${modalPrice} ₽`;
            });
            modalSection.querySelectorAll('.modal-buy-btn').forEach(element => {
                element.href = linkBtb;
            });
            modalSection.querySelector('.modal-preview').style.backgroundImage = `url(${modalBg})`;
            modalSection.querySelector('.modal-white__discription_1').textContent = modalText1;
            modalSection.querySelector('.modal-white__discription_2').textContent = modalText2;
            modalSection.querySelector('.modal-sertificate_1').style.backgroundImage = `url(${modalImage1})`;
            modalSection.querySelector('.modal-sertificate_2').style.backgroundImage = `url(${modalImage2})`;

            // Создание и вставка iframe с видео
            const modalPreview = modalSection.querySelector('.modal-preview');
            const iframe = document.createElement('iframe');

            // Удаляем autoplay из видео ссылки, если он там есть
            const videoUrl = new URL(videoLink);
            videoUrl.searchParams.delete('autoplay'); // удаляем параметр autoplay

            iframe.src = videoUrl.toString();
            iframe.width = '100%';
            iframe.height = '100%';
            iframe.allow = 'autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;';
            iframe.frameBorder = '0';
            iframe.allowFullscreen = true;

            modalPreview.appendChild(iframe);

            // Показать модальное окно и фон
            modalSection.classList.add('active');
            const greyBg = document.querySelector('.grey-bg');
            if (greyBg) greyBg.classList.add('active');

            // Закрытие модального окна
            const closeButton = modalSection.querySelector('.close-btn');
            if (closeButton) {
                closeButton.addEventListener('click', () => deactivateModalAndBackground(iframe));
            }

            document.body.style.overflow = 'hidden';
            greyBg.addEventListener('click', () => deactivateModalAndBackground(iframe));
        }

        function deactivateModalAndBackground(iframe) {
            const modalSection = document.querySelector(".modal-vebinar-section");
            const greyBg = document.querySelector(".grey-bg");

            if (modalSection) {
                modalSection.classList.remove("active");
            }

            if (greyBg) {
                greyBg.classList.remove("active");
            }

            // Удаляем iframe из DOM
            if (iframe && iframe.parentNode) {
                iframe.parentNode.removeChild(iframe);
            }

            document.body.style.overflow = "";
        }

        document.querySelectorAll('.preview-card__btn-area_btn').forEach(btn => {
            btn.addEventListener('click', activateModalAndBackground);
        });
    </script>


    <section class="youtube-section-knowledge">
        <div class="youtube-left">
            <h3 class="youtube-title">
                <?php the_field('youtube-title') ?>
            </h3>
            <a class="yiotube-link-btn" target="_blank" href="<?php the_field('youtube-link') ?>">Перейти <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12.5L19 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13 6.5L19 12.5L13 18.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg></a>
        </div>
        <div class="youtube-right" style="background-image: url(<?php the_field('youtube-bg-img') ?>);">
            <a href="<?php the_field('youtube-link') ?>">
                <img class="youtube-logo-absolute" src="<?php echo bloginfo('template_url'); ?>/assets/content/youtube-logo.png" alt="" />
            </a>
        </div>
    </section>

</main>





<?php
get_footer();
?>