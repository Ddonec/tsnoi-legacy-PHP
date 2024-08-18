<?php
/*
Template Name: four lvl course page
*/
?>
<?php
get_header();
?>


<main>
    <section class="small-margin-section">
        <div class="first-block-blue-bg first-block-blue-bg-lvl-up first-blue-box-four">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/four-fly-art-1.png" class="fly-element lvl-up-img-1" />
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/four-fly-art-2.png" class="fly-element lvl-up-img-2 four-img-2" />

            <div class="first-block-blue-bg-overflow ways-overflow">
                <img src="<?php the_field('blue-absolut-img') ?>" class="ways-img-bg four-img-bg" />
                <div class="blue-bg-courses-text-ways">
                    <div class="blue-container-flex-tabs">
                        <div class="blue-bg-courses__button"><?php the_field('grey-tab') ?></div>
                        <div class="blue-bg-courses__whitebutton"><?php the_field('white-tab') ?></div>
                    </div>
                    <h1 class="h1-text four-blue-title">
                        <?php the_field('page-title') ?>
                    </h1>
                    <p class="h1-subtext ways-first-discription">
                        <?php the_field('page-subtitle') ?>
                    </p>
                    <div class="blue-cont-four-btns-box">
                        <a href="<?php echo esc_url(get_field('left_btn_link')); ?>" class="link-default blue-cont-four-btns-box__sign-up">
                            <?php the_field('left-btn') ?></a>
                        <a href="<?php echo esc_url(get_field('right_btn_link')); ?>" class="link-default blue-cont-four-btns-box__get-trial">
                            <?php the_field('right-btn') ?>
                        </a>
                        <div class="blue-cont-four-btns-box__price">
                            <?php the_field('price') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second-section-four-lvl">
        <div class="white-blocks-container">
            <?php if (have_rows('white_blocks')) : ?>
                <?php while (have_rows('white_blocks')) : the_row();
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('subtitle');
                    $image = get_sub_field('image');
                    $has_plus = get_sub_field('has_plus');
                ?>
                    <div class="white-block">
                        <?php if ($image) : ?>
                            <div class="white-block__img-area">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php if ($has_plus) : ?>
                                    <div class="white-block__img-last">+</div>
                                <?php endif; ?>
                            </div>
                        <?php else : ?>
                            <h4 class="white-block__title"><?php echo esc_html($title); ?></h4>
                        <?php endif; ?>
                        <p class="white-block__subtitle"><?php echo esc_html($subtitle); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="programm-info-block">
            <div class="programm-info__left">
                <h2 class="standart_title"><?php the_field('info-title') ?></h2>
                <p class="programm-info__text">
                    <?php the_field('info-description') ?>
                </p>
                <a class="programm-info__link" href="<?php echo esc_url(get_field('programm_btn_url')); ?>">
                    <div class="programm-info__btn"><?php the_field('programm-btn') ?></div>
                </a>
            </div>
            <div class="programm-info__right"></div>
        </div>
    </section>
    <section class="sertificates-section">
        <h2 class="standart_title"><?php the_field('certificates-title') ?></h2>
        <p class="sertificates__subtitle"><?php the_field('certificates-subtitle') ?></p>
        <div class="sertificates-overflow-container">
            <div class="sertificates-container">
                <?php if (have_rows('sertificates')) : ?>
                    <?php while (have_rows('sertificates')) : the_row();
                        $image = get_sub_field('image');
                        $description = get_sub_field('description');
                    ?>
                        <div class="sertificates__card">
                            <div class="sertificates__card_white">
                                <img class="sertificates__card__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                            <div class="sertificates__card_discription">
                                <?php echo esc_html($description); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="sertificates-arrows">
            <div class="sertificates-arrows__prew">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 19L8 12L15 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="sertificates-arrows__next">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5L16 12L9 19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </section>


    <section class="fly-bottom-section-ways-page">
        <div class="blue-bg-container-for-fos">
            <div class="blue-bg-container-left">
                <h3 class="blue-bg-container__header">
                    <?php the_field('fos-title') ?>
                </h3>
            </div>
            <div class="blue-bg-container-right">
                <form class="blue-bg-container__fos-box">
                    <h4 class="fos-box_title"><?php the_field('fos-text') ?></h4>
                    <p class="fos-box_subtitle">
                        <?php the_field('fos-subtitle') ?>
                    </p>
                    <input class="fos-box_name-input" placeholder="Ваше имя" type="text" />
                    <input placeholder="Номер телефона" class="fos-box_number-input" type="number" />
                    <div class="checkbox-agree-container">
                        <input class="checkbox-agree-container__input" type="checkbox" id="agree" />
                        <label class="checkbox-agree-container__label" for="agree">
                            <div class="checkbox"></div>
                            <p class="checkbox-agree-container__text">
                                <?php the_field('fos-agree') ?>
                            </p>
                        </label>
                    </div>
                    <button class="fos-box_btn-agree"><?php the_field('fos-btn') ?></button>
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
                        <?php the_field('fos-feedback') ?>
                    </p>
                </div>
            </div>
        </div>
        <img class="fos-fly-1" src="<?php echo bloginfo('template_url'); ?>/assets/content/fos-fly-art-1.png" alt="" />
        <img class="fos-fly-2" src="<?php echo bloginfo('template_url'); ?>/assets/content/fos-fly-art-2.png" alt="" />
    </section>

    <script>
        const overflowContainer = document.querySelector(
            ".sertificates-overflow-container"
        );
        const container = document.querySelector(".sertificates-container");
        const leftArrow = document.querySelector(".sertificates-arrows__prew");
        const rightArrow = document.querySelector(".sertificates-arrows__next");

        let scrollAmount = window.innerWidth - 30;

        leftArrow.addEventListener("click", function() {
            overflowContainer.scrollBy({
                left: -scrollAmount,
                behavior: "smooth",
            });
        });

        rightArrow.addEventListener("click", function() {
            overflowContainer.scrollBy({
                left: scrollAmount,
                behavior: "smooth",
            });
        });

        window.addEventListener("resize", function() {
            scrollAmount = window.innerWidth - 30;
        });
    </script>
</main>


<?php
get_footer();
?>