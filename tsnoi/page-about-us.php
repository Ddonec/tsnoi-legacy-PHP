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
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/about-su-absolute-1.png" class="fly-element about-img-1" />

            <div class="first-block-blue-bg-overflow ways-overflow">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/content/about-su-absolute-2.png" class="fly-element about-img-2" />
                <img src="<?php echo bloginfo('template_url'); ?>/assets/content/about-us-peoples.png" class="ways-img-bg about-bg-img" />
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
            <img class="ovner-avatar" src="<?php the_field('about-us-owner-avatar') ?>" alt="" />
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
                <?php if (have_rows('ways_card_repeater')) : ?>
                    <?php while (have_rows('ways_card_repeater')) : the_row();
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

            leftScrollButton.addEventListener("click", function() {
                scrollLeft();
            });

            rightScrollButton.addEventListener("click", function() {
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
                <?php if (have_rows('growth_years')) : ?>
                    <?php while (have_rows('growth_years')) : the_row();
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
        <?php if (have_rows('white_way_blocks')) : ?>
            <?php while (have_rows('white_way_blocks')) : the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $block_class = get_sub_field('block_class');
            ?>
                <div class="white-way-block <?php echo esc_attr($block_class); ?>">
                    <?php if ($block_class === 'about-grey-block') : ?>
                        <div class="white-way-block__info">
                            <h2 class="white-way-block__title"><?php echo esc_html($title); ?></h2>
                            <p class="white-way-block__subtitle"><?php echo nl2br(esc_html($subtitle)); ?></p>
                        </div>
                        <img class="white-way-block__image order-mob" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php else : ?>
                        <img class="white-way-block__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <div class="white-way-block__info">
                            <h2 class="white-way-block__title"><?php echo esc_html($title); ?></h2>
                            <p class="white-way-block__subtitle"><?php echo nl2br(esc_html($subtitle)); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>


    <section class="sertificates-section standart-margin-section">
        <div class="white-bg-about">
            <h2 class="standart_title"><?php the_field('about-us-title-four'); ?></h2>
            <p class="sertificates__subtitle"><?php the_field('about-us-subtitle-four'); ?></p>
            <div class="sertificates-overflow-container about-owerflow-sertificate">
                <div class="sertificates-container sertificates-container-about">
                    <?php if (have_rows('sertificates_cards')) : ?>
                        <?php while (have_rows('sertificates_cards')) : the_row();
                            $image = get_sub_field('image');
                            $description = get_sub_field('description');
                        ?>
                            <div class="sertificates__card sertificates__card_about">
                                <div class="sertificates__card_white about-sertificate-bg">
                                    <img class="sertificates__card__img sertificates__card__img_about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <div class="sertificates__card_discription sertificates__card_discription_about">
                                    <?php echo nl2br(esc_html($description)); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
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
    </section>

    <section class="standart-margin-section team-section">
        <h2 class="standart_title"><?php the_field('about-us-subtitle-five'); ?></h2>

        <!-- Tabs -->
        <div class="tabs-last-vebinars-overflow">
            <div class="tabs-last-vebinars">
                <div class="tab-last-vebinar active" data-category="all">Все сотрудники</div> <!-- Добавляем таб "Все" -->
                <?php if (have_rows('tabs')) : ?>
                    <?php while (have_rows('tabs')) : the_row(); ?>
                        <div class="tab-last-vebinar" data-category="<?php echo esc_attr(sanitize_title(get_sub_field('tab_name'))); ?>">
                            <?php the_sub_field('tab_name'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="team-container-owerflow">
            <div class="team-container">
                <?php if (have_rows('team_members')) : ?>
                    <?php while (have_rows('team_members')) : the_row();
                        $avatar = get_sub_field('avatar');
                        $name = get_sub_field('name');
                        $category = sanitize_title(get_sub_field('category')); // Получаем категорию карточки
                    ?>
                        <div class="team-card" data-category="<?php echo esc_attr($category); ?>">
                            <div class="team__avatar">
                                <img src="<?php echo esc_url($avatar['url']); ?>" alt="<?php echo esc_attr($avatar['alt']); ?>" />
                            </div>
                            <div class="team__name"><?php echo esc_html($name); ?></div>
                            <ul class="team__ul">
                                <?php if (have_rows('description')) : ?>
                                    <?php while (have_rows('description')) : the_row(); ?>
                                        <li class="team__li"><?php the_sub_field('item'); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Arrow navigation -->
        <div class="sertificates-arrows">
            <div class="sertificates-arrows__prew team_prew_team">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 19L8 12L15 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="sertificates-arrows__next team_next_team">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5L16 12L9 19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <!-- JS для фильтрации -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const tabs = document.querySelectorAll(".tab-last-vebinar");
                const cards = document.querySelectorAll(".team-card");

                tabs.forEach((tab) => {
                    tab.addEventListener("click", function() {
                        const category = this.getAttribute("data-category");

                        tabs.forEach((t) => t.classList.remove("active"));
                        this.classList.add("active");

                        cards.forEach((card) => {
                            if (category === "all" || card.getAttribute("data-category") === category) {
                                card.style.display = "flex";
                            } else {
                                card.style.display = "none";
                            }
                        });
                    });
                });
            });
        </script>

        <!-- JS для навигации по стрелкам -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const overflowContainer = document.querySelector(".team-container-owerflow");
                const leftArrow = document.querySelector(".team_prew_team");
                const rightArrow = document.querySelector(".team_next_team");

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
            });
        </script>
    </section>




    <section class="reviews-of-students-section">
        <h2 class="standart_title"><?php the_field('reviews_section_title'); ?></h2>
        <div class="reviews-container m-mob-24">
            <?php if (have_rows('reviews')) : ?>
                <?php while (have_rows('reviews')) : the_row();
                    $review_type = get_sub_field('review_type'); // text or video
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

</main>



<?php
get_footer();
?>