<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/normalise.css" />
    <link rel="stylesheet" href="./css/media.css" /> -->
  <title>Home-page TSNOI</title>
</head>
<?php
wp_head()
?>



<title><?php echo wp_get_document_title() ?></title>
</head>
<style>
  .articles-prewiew-box__article-1 {
    background-image: url('<?php the_field('article-bg-1'); ?>');
  }

  .articles-prewiew-box__article-2 {
    background-image: url('<?php the_field('article-bg-2'); ?>');
  }

  .articles-prewiew-box__article-3 {
    background-image: url('<?php the_field('article-bg-3'); ?>');
  }
</style>

<body>
  <header class="header-main">
    <img class="logo-header" src="<?php echo bloginfo('template_url'); ?>/assets/content/logo-tsnoi.png" alt="" />
    <div class="burger-menu-main" id="burger-menu-main">
      <nav>
        <ul class="nav-list">
          <li class="shrink"><a href="<?php echo home_url(); ?>/">Направления деятельности</a></li>
          <li class="shrink"><a href="<?php echo home_url(); ?>/about-us">О компании</a></li>
          <li class="shrink"><a href="<?php echo home_url(); ?>/news">Новости и статьи</a></li>
          <li class="shrink"><a href="<?php echo home_url(); ?>/">Оплата</a></li>
          <li class="shrink search-nav-btn">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icon/user-icon.svg" alt="" /><a href="">Поиск</a>
          </li>
        </ul>
      </nav>
      <div class="header-right-container">
        <div class="header-right shrink">
          <div class="header-right__city">Санкт-Петербург</div>
          <a class="link-format" href="tel:+78126779724">
            <div class="header-right__phone">+7 (812) 677-97-24</div>
          </a>
        </div>
        <div class="header-right-white shrink">
          <div class="header-right__whatsapp-logo">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icon/whatsupp-icon.svg" alt="" />
          </div>
          <div class="header-right__whatsapp-text">Написать в WhatsApp</div>
        </div>
        <div class="header-right-white shrink">
          <div class="header-right__cabinet-logo">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/icon/user-icon.svg" alt="" />
          </div>
          <div class="header-right__cabinet-text">Вход в СДО</div>
        </div>
      </div>
    </div>
    <div class="burger-menu" id="burger-menu">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
  </header>