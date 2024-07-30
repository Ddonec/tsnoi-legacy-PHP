<?php
/*
Template Name: way template page
*/
?>
<?php
get_header();
?>



<main>
    <section class="first-section-way">
        <div class="default-block-blue-bg default-block-blue-bg-way way-template-banner">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/way-template-absolute-1.png" class="fly-element second-fly-element-way" />
            <img src="<?php echo bloginfo('template_url'); ?>/assets/content/way-template-absolute-2.png" class="fly-element third-fly-element-way" />
            <div class="first-block-blue-bg-overflow">
                <img src="<?php the_field('absolute_img'); ?>" class="first-fly-element-way" />
                <div class="blue-bg-main-text blue-bg-main-text-way">
                    <div class="blue-bg-main__button"><?php the_field('grey_tab'); ?></div>
                    <h1 class="h1-text"><?php the_field('page_title'); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <?php if (have_rows('way_blocks')) : ?>
        <section class="section-standart-100 way-template-s">
            <?php while (have_rows('way_blocks')) : the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $button_link = get_sub_field('button_link');
                $button_text = get_sub_field('button_text');
                $reverse_order = get_sub_field('reverse_order');
            ?>
                <div class="white-way-block">
                    <?php if ($reverse_order) : ?>
                        <div class="white-way-block__info">
                            <h2 class="white-way-block__title"><?php echo esc_html($title); ?></h2>
                            <p class="white-way-block__subtitle"><?php echo wp_kses_post(nl2br($subtitle)); ?></p>
                            <?php if ($button_link) : ?>
                                <a href="<?php echo esc_url($button_link['url']); ?>" target="<?php echo esc_attr($button_link['target'] ?: '_self'); ?>">
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
                        <?php if ($image) : ?>
                            <img class="white-way-block__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    <?php else : ?>
                        <?php if ($image) : ?>
                            <img class="white-way-block__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="white-way-block__info">
                            <h2 class="white-way-block__title"><?php echo esc_html($title); ?></h2>
                            <p class="white-way-block__subtitle"><?php echo wp_kses_post(nl2br($subtitle)); ?></p>
                            <?php if ($button_link) : ?>
                                <a href="<?php echo esc_url($button_link['url']); ?>" target="<?php echo esc_attr($button_link['target'] ?: '_self'); ?>">
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
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </section>

    <?php endif; ?>

</main>



<?php
get_footer();
?>