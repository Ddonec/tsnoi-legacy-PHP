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
        <!-- Tabs -->
        <div class="tabs-shop">
            <div class="tab-shop active" data-category="all">Все направления</div>
            <?php if (have_rows('tabs')) : ?>
                <?php while (have_rows('tabs')) : the_row(); ?>
                    <div class="tab-shop" data-category="<?php the_sub_field('tab_title'); ?>">
                        <?php the_sub_field('tab_title'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- Cards -->
        <section class="white-cards-section">
            <div class="white-cards-shop">
                <?php if (have_rows('white_cards')) : ?>
                    <?php while (have_rows('white_cards')) : the_row();
                        $title = get_sub_field('title');
                        $subtitle = get_sub_field('subtitle');
                        $price = get_sub_field('price');
                        $is_new = get_sub_field('new');
                        $categories = get_sub_field('category'); // Теперь это может быть список категорий через запятую
                        $categories_array = explode(',', $categories); // Разделение категорий в массив
                    ?>
                        <div class="white-card-shop" data-category="<?php echo esc_attr(implode(' ', array_map('trim', $categories_array))); ?>">
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

<!-- JS Script to handle tabs and filtering -->
<script>
    const tabs = document.querySelectorAll('.tab-shop');
    const cards = document.querySelectorAll('.white-card-shop');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove 'active' class from all tabs and add to the clicked tab
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            // Get category from the clicked tab
            const category = tab.getAttribute('data-category');

            // Show or hide cards based on category
            cards.forEach(card => {
                const cardCategories = card.getAttribute('data-category').split(' '); // Разделение категорий карточки
                if (category === 'all' || cardCategories.includes(category)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>

<?php
get_footer();
?>