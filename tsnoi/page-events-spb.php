<?php
/*
Template Name: event spb page
*/
?>
<?php
get_header();
?>



<main>
    <section class="standart-margin-section first-section-home">
        <div class="first-block-blue-bg first-block-blue-bg-shop">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/way-template-absolute-1.png" class="fly-element shop-img-2" />
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/way-template-absolute-2.png" class="fly-element shop-img-3" />
            <div class="first-block-blue-bg-overflow">
                <img src="<?php the_field('absolut-image') ?>" class="shop-img-bg" />
                <div class="blue-bg-main-text">
                    <h1 class="h1-text"><?php the_field('main-title') ?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-second-section">
        <div class="tabs-shop">
            <?php if (have_rows('tabs')) : ?>
                <?php $first = true; ?>
                <?php while (have_rows('tabs')) : the_row();
                    $tab_title = get_sub_field('tab_title');
                    $class = $first ? 'tab-shop active' : 'tab-shop';
                    $first = false;
                ?>
                    <div class="<?php echo esc_attr($class); ?>"><?php echo esc_html($tab_title); ?></div>
                <?php endwhile; ?>
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
        <section class="white-cards-section">
            <div class="white-cards-shop">
                <?php if (have_rows('white_cards')) : ?>
                    <?php while (have_rows('white_cards')) : the_row();
                        $title = get_sub_field('title');
                        $subtitle = get_sub_field('subtitle');
                        $price = get_sub_field('price');
                        $is_new = get_sub_field('new');
                    ?>
                        <div class="white-card-shop">
                            <?php if ($is_new) : ?>
                                <div class="shop-new-absolute">Новинка</div>
                            <?php endif; ?>
                            <h4 class="white-card-shop__title"><?php echo esc_html($title); ?></h4>
                            <p class="white-card-shop__subtitle"><?php echo esc_html($subtitle); ?></p>
                            <p class="white-card-shop__price"><?php echo esc_html($price); ?></p>
                            <div class="white-card-shop__buttons">
                                <div class="white-card-shop__buttons_about">Подробнее</div>
                                <div class="white-card-shop__buttons_buy">Заказать</div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>

    </section>
</main>



<?php
get_footer();
?>