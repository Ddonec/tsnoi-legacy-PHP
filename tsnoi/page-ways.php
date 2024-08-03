<?php
/*
Template Name: ways page
*/
?>
<?php
get_header();
?>



<main>
    <section class="small-margin-section">
        <div class="first-block-blue-bg first-block-blue-bg-ways">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/ways-fly-1.png" class="fly-element ways-img-1" />
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/ways-fly-2.png" class="fly-element ways-img-2" />
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/ways-fly-3.png" class="fly-element ways-img-3" />
            <div class="first-block-blue-bg-overflow ways-overflow">
                <img src="<?php the_field('blue_absolut_img'); ?>" class="ways-img-bg" />
                <div class="blue-bg-main-text-ways">
                    <h1 class="h1-text">
                        <?php the_field('blue_title'); ?>
                    </h1>
                    <p class="h1-subtext ways-first-discription">
                        <?php the_field('blue_subtitle'); ?>
                    </p>
                    <div class="blue-bg-main-text-ways__button"><?php the_field('blue_btn_text'); ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="second section-ways">
        <div class="ways-second-overflow-container">
            <div class="ways-second-container">
                <?php if (have_rows('ways_cards')) : ?>
                    <?php while (have_rows('ways_cards')) : the_row();
                        $image = get_sub_field('image');
                        $title = get_sub_field('title_ways');
                        $subtitle = get_sub_field('subtitle_ways');
                    ?>
                        <div class="ways-second-card">
                            <div class="ways-card__img">
                                <?php if ($image) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="ways-card__title">
                                <?php echo esc_html($title); ?>
                            </div>
                            <div class="ways-card__subtitle">
                                <?php echo nl2br(esc_html($subtitle)); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="arrows-for-ways-second-container">
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
            const container = document.querySelector(".ways-second-overflow-container");
            const leftArrow = document.querySelector(".arrows-for-ways__left");
            const rightArrow = document.querySelector(".arrows-for-ways__right");

            let cardWidth = 458; // ширина карточки
            let smallScreenShift = window.innerWidth - 70; // смещение для экранов шириной менее 500 пикселей

            window.addEventListener("resize", updateShift);

            leftArrow.addEventListener("click", function() {
                moveLeft();
            });

            rightArrow.addEventListener("click", function() {
                moveRight();
            });

            function updateShift() {
                smallScreenShift = window.innerWidth - 10;
            }

            function getShift() {
                return window.innerWidth < 500 ? smallScreenShift : cardWidth;
            }

            function moveLeft() {
                container.scrollBy({
                    left: -getShift(),
                    behavior: "smooth",
                });
            }

            function moveRight() {
                container.scrollBy({
                    left: getShift(),
                    behavior: "smooth",
                });
            }
        </script>
    </section>

    <section class="section-standart-100 gap30-section">
        <h2 class="standart_title"><?php the_field('second_title'); ?></h2>
        <div class="way-of-learning-container">
            <?php if (have_rows('learning_programs')) : ?>
                <?php while (have_rows('learning_programs')) : the_row();
                    $grey_text = get_sub_field('grey_text');
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('subtitle');
                    $button_text = get_sub_field('button_text');
                ?>
                    <div class="way-of-learning__big-card">
                        <?php if ($grey_text) : ?>
                            <p class="learning-big-card__grey"><?php echo esc_html($grey_text); ?></p>
                        <?php endif; ?>
                        <?php if ($title) : ?>
                            <h3 class="learning-big-card__title"><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>
                        <?php if ($subtitle) : ?>
                            <p class="learning-big-card__subtitle"><?php echo esc_html($subtitle); ?></p>
                        <?php endif; ?>
                        <div class="learning-big-card__tabs">
                            <?php if (have_rows('tabs')) : ?>
                                <?php while (have_rows('tabs')) : the_row();
                                    $tab = get_sub_field('tab');
                                ?>
                                    <div class="learning-big-card__tab"><?php echo esc_html($tab); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <?php if ($button_text) : ?>
                            <div class="learning-big-card__button">
                                <?php echo esc_html($button_text); ?>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12.8406H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13 6.84058L19 12.8406L13 18.8406" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="way-of-learnong-small-comtainer">
            <?php if (have_rows('small_learning_cards')) : ?>
                <?php while (have_rows('small_learning_cards')) : the_row();
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('subtitle');
                    $button_text = get_sub_field('button_text');
                ?>
                    <div class="way-of-learning__small-card">
                        <?php if ($title) : ?>
                            <h3 class="way-of-learning__small_title"><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>
                        <?php if ($subtitle) : ?>
                            <p class="way-of-learning__small_subtitle"><?php echo esc_html($subtitle); ?></p>
                        <?php endif; ?>
                        <?php if ($button_text) : ?>
                            <div class="learning-big-card__button">
                                <?php echo esc_html($button_text); ?>
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12.8406H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13 6.84058L19 12.8406L13 18.8406" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </section>
    <section>
        <div class="middle-section-ways">
            <h3 class="middle-section-ways__title">
                <?php the_field('third_title'); ?>
            </h3>
            <div class="middle-section-ways__button-container">
                <div class="middle-section-ways__title-button">
                    <?php the_field('btn_left_text'); ?>
                </div>
                <div class="middle-section-ways__button">
                    <?php the_field('btn_right_text'); ?>
                </div>
            </div>
            <!-- <script>
            const buttonContainer = document.querySelector(
              ".middle-section-ways__button-container"
            );

            buttonContainer.addEventListener("click", function () {
              this.classList.toggle("active");
            });
          </script> -->
        </div>
    </section>
    <section class="white-blocks-section-ways">
        <div class="white-way-block">
            <?php
            $image = get_field('image');
            $grey_tab = get_field('grey_tab');
            $title = get_field('title');
            $subtitle = get_field('subtitle');
            $button_text = get_field('button_text');
            $button_link = get_field('button_link');
            ?>

            <?php if ($image) : ?>
                <img class="white-way-block__image-way" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <div class="white-way-block__info ways-align-left">
                <?php if ($grey_tab) : ?>
                    <div class="ways-tabs__grey-tab"><?php echo esc_html($grey_tab); ?></div>
                <?php endif; ?>

                <?php if ($title) : ?>
                    <h2 class="white-way-block__title"><?php echo nl2br(esc_html($title)); ?></h2>
                <?php endif; ?>

                <?php if ($subtitle) : ?>
                    <p class="white-way-block__subtitle"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>

                <?php if (have_rows('tabs')) : ?>
                    <div class="ways-tabs-block">
                        <?php while (have_rows('tabs')) : the_row();
                            $tab_text = get_sub_field('tab_text');
                        ?>
                            <?php if ($tab_text) : ?>
                                <div class="ways-tabs__tab ways-tabs__tab-f-u"><?php echo esc_html($tab_text); ?></div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

                <?php if ($button_link && $button_text) : ?>
                    <a href="<?php echo esc_url($button_link); ?>">
                        <div class="white-way-block__button">
                            <?php echo esc_html($button_text); ?>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 12.9216L19.5 12.9216" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.5 6.92163L19.5 12.9216L13.5 18.9216" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <section class="white-way-blocks-with-slider">
            <?php if (have_rows('white_way_blocks_with_slider')) : ?>
                <?php while (have_rows('white_way_blocks_with_slider')) : the_row();
                    $title = get_sub_field('title');
                    $button_text = get_sub_field('button_text');
                    $button_link = get_sub_field('button_link');
                ?>
                    <div class="white-way-block">
                        <div class="white-way-block__info ways-align-left">
                            <?php if ($title) : ?>
                                <h2 class="white-way-block__title"><?php echo nl2br(esc_html($title)); ?></h2>
                            <?php endif; ?>

                            <div class="white-way-block__subtitle">
                                <ul class="ways-tabs__list">
                                    <?php if (have_rows('subtitle')) : ?>
                                        <?php while (have_rows('subtitle')) : the_row();
                                            $list_item = get_sub_field('list_item');
                                        ?>
                                            <?php if ($list_item) : ?>
                                                <li><?php echo esc_html($list_item); ?></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <?php if ($button_link && $button_text) : ?>
                                <a href="<?php echo esc_url($button_link); ?>">
                                    <div class="white-way-block__button">
                                        <?php echo esc_html($button_text); ?>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 12.9216L19.5 12.9216" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M13.5 6.92163L19.5 12.9216L13.5 18.9216" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="white-way-block__slider">
                            <div class="white-way-block__slider_arrow-prew">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.1025 19.5903L8.10254 12.5903L15.1025 5.59033" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="white-way-block__slider_arrow-next">
                                <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.10254 1.59033L8.10254 8.59033L1.10254 15.5903" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="white-way-block__slider__overflow-zone">
                                <div class="white-way-block__slider__images-container">
                                    <?php if (have_rows('slider_images')) : ?>
                                        <?php while (have_rows('slider_images')) : the_row();
                                            $slider_image = get_sub_field('slider_image');
                                        ?>
                                            <?php if ($slider_image) : ?>
                                                <div class="white-way-block__slider__img" style="background-image: url(<?php echo esc_url($slider_image['url']); ?>);">
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>

        <script>
            const sliderContainer = document.querySelector(
                ".white-way-block__slider__images-container"
            );
            const prevArrow = document.querySelector(
                ".white-way-block__slider_arrow-prew"
            );
            const nextArrow = document.querySelector(
                ".white-way-block__slider_arrow-next"
            );
            const slides = document.querySelectorAll(
                ".white-way-block__slider__images-container > div"
            );

            let currentIndex = 0;

            prevArrow.addEventListener("click", function() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSliderPosition();
                }
            });

            nextArrow.addEventListener("click", function() {
                if (currentIndex < slides.length - 1) {
                    currentIndex++;
                    updateSliderPosition();
                }
            });

            function updateSliderPosition() {
                const translateXValue = -currentIndex * 100;
                sliderContainer.style.transform = `translateX(${translateXValue}%)`;
            }

            // Optional: handle window resize to update slide width
            window.addEventListener("resize", function() {
                updateSliderPosition();
            });
        </script>
    </section>
    <section class="fly-bottom-section-ways-page">
        <div class="blue-bg-container-for-fos">
            <div class="blue-bg-container-left">
                <h3 class="blue-bg-container__header">
                    <?php the_field('fos-title'); ?>
                </h3>
            </div>
            <div class="blue-bg-container-right">
                <form class="blue-bg-container__fos-box">
                    <h4 class="fos-box_title"><?php the_field('fos-first-text'); ?></h4>
                    <p class="fos-box_subtitle">
                        <?php the_field('fos-subtitle'); ?>
                    </p>
                    <input class="fos-box_name-input" placeholder="Ваше имя" type="text" />
                    <input placeholder="Номер телефона" class="fos-box_number-input" type="number" />
                    <div class="checkbox-agree-container">
                        <input class="checkbox-agree-container__input" type="checkbox" id="agree" />
                        <label class="checkbox-agree-container__label" for="agree">
                            <div class="checkbox"></div>
                            <p class="checkbox-agree-container__text">
                                <?php the_field('fos-agree-text'); ?>
                            </p>
                        </label>
                    </div>
                    <button class="fos-box_btn-agree"><?php the_field('fos-btn'); ?></button>
                </form>
                <div class="messenger-feedback-box">
                    <div class="messenger-feedback-box__icon-box">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_237_24788)">
                                <path d="M22.6604 17.4033C22.6019 17.3753 20.4148 16.2983 20.0262 16.1584C19.8675 16.1015 19.6976 16.0458 19.5168 16.0458C19.2215 16.0458 18.9734 16.193 18.7801 16.4821C18.5617 16.8068 17.9003 17.5799 17.6959 17.8109C17.6693 17.8414 17.6328 17.8778 17.611 17.8778C17.5914 17.8778 17.253 17.7384 17.1505 17.6939C14.8044 16.6748 13.0235 14.224 12.7794 13.8107C12.7445 13.7513 12.743 13.7243 12.7427 13.7243C12.7513 13.6929 12.8302 13.6138 12.8709 13.573C12.99 13.4551 13.1191 13.2998 13.244 13.1495C13.3031 13.0783 13.3623 13.007 13.4205 12.9398C13.6016 12.729 13.6823 12.5654 13.7758 12.3758L13.8248 12.2773C14.0531 11.8237 13.8581 11.4409 13.7951 11.3173C13.7434 11.2139 12.8199 8.98512 12.7217 8.75097C12.4856 8.18594 12.1736 7.92285 11.7401 7.92285C11.6998 7.92285 11.7401 7.92285 11.5714 7.92996C11.3659 7.93863 10.2473 8.0859 9.75267 8.39769C9.22816 8.72837 8.34082 9.78246 8.34082 11.6362C8.34082 13.3046 9.39959 14.8799 9.85416 15.4791C9.86546 15.4942 9.88621 15.5248 9.91631 15.5689C11.6572 18.1113 13.8274 19.9954 16.0274 20.8743C18.1455 21.7203 19.1484 21.8181 19.7186 21.8181H19.7187C19.9583 21.8181 20.1501 21.7993 20.3193 21.7827L20.4266 21.7724C21.1583 21.7076 22.7662 20.8744 23.132 19.858C23.4201 19.0574 23.4961 18.1828 23.3044 17.8653C23.1731 17.6495 22.9468 17.5409 22.6604 17.4033Z" fill="#073F9A" />
                                <path d="M15.7282 0.165039C7.60325 0.165039 0.993125 6.72549 0.993125 14.7894C0.993125 17.3975 1.69111 19.9505 3.01335 22.1849L0.482541 29.6504C0.435398 29.7896 0.470463 29.9434 0.573417 30.0483C0.647736 30.1241 0.748547 30.165 0.851502 30.165C0.89095 30.165 0.93069 30.1591 0.969456 30.1467L8.75387 27.6731C10.8841 28.8112 13.2917 29.412 15.7283 29.412C23.8524 29.4121 30.4619 22.8523 30.4619 14.7894C30.4619 6.72549 23.8524 0.165039 15.7282 0.165039ZM15.7282 26.3658C13.4354 26.3658 11.2147 25.7037 9.30585 24.4511C9.24166 24.4089 9.16715 24.3873 9.09215 24.3873C9.05251 24.3873 9.01277 24.3934 8.9741 24.4056L5.07459 25.6452L6.33342 21.9313C6.37413 21.8111 6.35377 21.6785 6.27877 21.5761C4.82514 19.5898 4.05673 17.2431 4.05673 14.7894C4.05673 8.4053 9.29251 3.2114 15.7281 3.2114C22.1629 3.2114 27.3981 8.4053 27.3981 14.7894C27.3982 21.1726 22.1631 26.3658 15.7282 26.3658Z" fill="#073F9A" />
                            </g>
                            <defs>
                                <clipPath id="clip0_237_24788">
                                    <rect width="30" height="30" fill="white" transform="translate(0.461914 0.165039)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <p class="messenger-feedback-box__text">
                        <?php the_field('fos-feedback'); ?>
                    </p>
                </div>
            </div>
        </div>
        <img class="fos-fly-1" src="<?php echo bloginfo('template_url'); ?>/assets/content/fos-fly-art-1.png" alt="" />
        <img class="fos-fly-2" src="<?php echo bloginfo('template_url'); ?>/assets/content/fos-fly-art-2.png" alt="" />
    </section>
    <section class="partners-section-way">
        <h2 class="standart_title"><?php the_field('last_title'); ?></h2>
        <div class="partners-ways-arrows">
            <div class="partners-ways-arrows__prew">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.2559 19.0054L8.25586 12.0054L15.2559 5.00537" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="partners-ways-arrows__next">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.25586 5.00537L16.2559 12.0054L9.25586 19.0054" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="partners-way-overflow-box">
            <div class="partners-way-box">
                <?php if (have_rows('partners')) : ?>
                    <?php while (have_rows('partners')) : the_row();
                        $partner_image = get_sub_field('partner_image');
                    ?>
                        <div class="partners-way-card">
                            <?php if ($partner_image) : ?>
                                <img class="partners-way-image" src="<?php echo esc_url($partner_image['url']); ?>" alt="<?php echo esc_attr($partner_image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <script>
            const overflowBox = document.querySelector(".partners-way-overflow-box");
            const prevButton = document.querySelector(".partners-ways-arrows__prew");
            const nextButton = document.querySelector(".partners-ways-arrows__next");

            const calculateScrollAmount = () => {
                return window.innerWidth - 30;
            };

            let scrollAmount = calculateScrollAmount();

            window.addEventListener("resize", () => {
                scrollAmount = calculateScrollAmount();
            });

            const scrollContent = (direction) => {
                overflowBox.scrollBy({
                    left: direction * scrollAmount,
                    behavior: "smooth",
                });
            };

            prevButton.addEventListener("click", () => scrollContent(-1));
            nextButton.addEventListener("click", () => scrollContent(1));
        </script>
    </section>

</main>



<?php
get_footer();
?>