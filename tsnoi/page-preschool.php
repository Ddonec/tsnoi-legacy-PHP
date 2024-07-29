<?php
/*
Template Name: preschool page
*/
?>
<?php
get_header();
?>




<main>
    <section class="small-margin-section">
        <div class="first-block-blue-bg first-block-blue-bg-lvl-up">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/preschool-fly-1.png" class="fly-element preschool-img-1" />

            <div class="first-block-blue-bg-overflow ways-overflow">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/content/preschool-fly-2.png" class="fly-element preschool-img-2" />
                <img src="<?php the_field('absolut-img'); ?>" class="ways-img-bg preschool-absolute-man" />
                <div class="blue-bg-courses-text-ways">
                    <div class="blue-bg-courses__button">
                        <?php the_field('grey-tab-text'); ?>

                    </div>
                    <h1 class="h1-text"><?php the_field('main_title'); ?></h1>
                    <p class="h1-subtext ways-first-discription">
                        <?php the_field('main-subtitle'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="courses-cards-section">
        <div class="tabs-overflow">
            <?php if (have_rows('tabs')) :
            ?>
                <div class="tabs-shop">
                    <?php
                    $first = true;
                    while (have_rows('tabs')) : the_row();
                        $tab_name = get_sub_field('tab_name');
                    ?>
                        <div class="tab-shop <?php echo $first ? 'active' : ''; ?>">
                            <?php echo esc_html($tab_name); ?>
                        </div>
                        <?php $first = false;
                        ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
        <script>
            const tabs = document.querySelectorAll(".tab-shop");

            tabs.forEach((tab) => {
                tab.addEventListener("click", function() {
                    tabs.forEach((t) => t.classList.remove("active"));
                    tab.classList.add("active");
                });
            });
        </script>
        <?php if (have_rows('courses')) : ?>
            <div class="courses-cards-container">
                <?php while (have_rows('courses')) : the_row();
                    $top_grey = get_sub_field('top_grey');
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('subtitle');
                    $tabs = get_sub_field('tabs');
                    $first_gray_text = get_sub_field('first_gray_text');
                    $second_gray_text = get_sub_field('second_gray_text');
                    $price = get_sub_field('price');
                    $btn_info_text = get_sub_field('btn_info_text');
                    $btn_order_text = get_sub_field('btn_order_text');
                    $is_new = get_sub_field('is_new');
                ?>
                    <div class="courses-card-preschool">
                        <?php if ($is_new) : ?>
                            <div class="new-absolute">Новинка</div>
                        <?php endif; ?>
                        <div class="courses-card-preschool__top-grey"><?php echo esc_html($top_grey); ?></div>
                        <h3 class="courses-card-preschool__title"><?php echo esc_html($title); ?></h3>
                        <p class="courses-card-preschool__subtitle"><?php echo esc_html($subtitle); ?></p>
                        <div class="courses-card-preschool__tabs">
                            <?php if ($tabs) : ?>
                                <?php foreach ($tabs as $tab) : ?>
                                    <div class="courses-card-preschool__tabs_tab"><?php echo esc_html($tab['tab_text']); ?></div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <p class="courses-card-preschool__first-gray-text"><?php echo esc_html($first_gray_text); ?></p>
                        <div class="courses-card-preschool__gray-line"></div>
                        <p class="courses-card-preschool__second-gray-text"><?php echo esc_html($second_gray_text); ?></p>
                        <div class="courses-card-preschool__price"><?php echo esc_html($price); ?></div>
                        <div class="courses-card-preschool__btns-area">
                            <div class="courses-card-preschool__btn-info"><?php echo esc_html($btn_info_text); ?></div>
                            <div class="courses-card-preschool__btn-order"><?php echo esc_html($btn_order_text); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="preschool__go-to-all-courses-btn">
            <?php the_field('go_to_all_courses_btn'); ?>
        </div>
    </section>

    <section class="reviews-of-students-section">
        <h2 class="standart_title">Отзывы учеников</h2>
        <div class="reviews-container">
            <?php if (have_rows('reviews')) : ?>
                <?php while (have_rows('reviews')) : the_row();
                    $review_type = get_sub_field('review_type');
                    $name = get_sub_field('name');
                    if ($review_type == 'video') {
                        $video_url = get_sub_field('video_url');
                        $video_prev = get_sub_field('video_prev');

                ?>
                        <div class="review-card video" style="background-image: url('<?php echo esc_html($video_prev); ?>')">
                            <div class="review-card__play-btn">
                                <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.25 13.998L0.25 27.998L0.250001 -0.00195312L25.25 13.998Z" fill="black" />
                                </svg>
                            </div>
                            <div class="review-card__white-bottom"><?php echo esc_html($name); ?></div>
                        </div>
                    <?php } else {
                        $job_title = get_sub_field('job_title');
                        $review_text = get_sub_field('review_text');
                        $rating = get_sub_field('rating');
                        $video_prev = get_sub_field('video_prev');
                    ?>
                        <div class="review-card text">
                            <div class="review-card__top-block">
                                <div class="text-top-block__icon" style="background-image: url('<?php echo esc_html($video_prev); ?>')"></div>
                                <div class="text-top-block__right-list">
                                    <div class="text-top-block__right-list_stars">
                                        <?php for ($i = 0; $i < $rating; $i++) : ?>
                                            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/review-star.svg" alt="" />
                                        <?php endfor; ?>
                                    </div>
                                    <p class="text-top-block__right-list_name"><?php echo esc_html($name); ?></p>
                                    <p class="text-top-block__right-list_job-title"><?php echo esc_html($job_title); ?></p>
                                </div>
                            </div>
                            <div class="review-card__middle-text">
                                <?php echo esc_html($review_text); ?>
                            </div>
                            <div class="review-card__bottom-link">
                                <a href="#">Читать полностью</a>
                            </div>
                        </div>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="view-all-reviews-btn">Все отзывы</div>
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
                    <input class="fos-box_name-input" placeholder="Ваше имя" type="text" />
                    <input placeholder="Номер телефона" class="fos-box_number-input" type="number" />
                    <div class="checkbox-agree-container">
                        <input class="checkbox-agree-container__input" type="checkbox" id="agree" />
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
                        Так же для расчета, вы можете связаться в любом удобном для вас
                        месенджере
                    </p>
                </div>
            </div>
        </div>
        <img class="fos-fly-1" src="<?php echo bloginfo('template_url'); ?>/assets/content/fos-fly-art-1.png" alt="" />
        <img class="fos-fly-2" src="<?php echo bloginfo('template_url'); ?>/assets/content/fos-fly-art-2.png" alt="" />
    </section>
</main>



<?php
get_footer();
?>