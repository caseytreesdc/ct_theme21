<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="Utility">
      <div class="Utility__social">
        <a target="_blank" href="https://www.facebook.com/CaseyTreesDC/"><?php get_template_part('svgs/inline', 'facebook') ?></a>
        <a target="_blank" href="https://twitter.com/caseytrees"><?php get_template_part('svgs/inline', 'twitter') ?></a>
        <a target="_blank" href="https://www.instagram.com/CaseyTrees/"><?php get_template_part('svgs/inline', 'instagram') ?></a>
        <a target="_blank" href="https://www.youtube.com/channel/UCeDRVR0TjyuXoKT9dtepp5A"><?php get_template_part('svgs/inline', 'youtube') ?></a>
      </div>
      <?php 
        wp_nav_menu(
          array(
              'theme_location' => 'Utility Navigation 2021',
              'items_wrap' => '<ul>%3$s</ul>', //what is %3$s
              'before' => '<div><p>',
              'after' => '</p></div>',
          )
        )
      ?>
    </div>
    <!-- begin header MODULE -->
    <header class="header__container">
    <!-- // echo get_custom_logo() - not using because svg is clearer ... can custom cms logo support svg? // -->
      <a class="header__logo-anchor" href="/"><?php get_template_part('svgs/inline', 'logo')?></a>
      <?php 
      wp_nav_menu(
          array(
              'theme_location' => 'Main Navigation 2021',
              'items_wrap' => '<ul class="Nav__ul">%3$s</ul>', //what is %3$s
              'before' => '<div class="Nav__anchor-p-container"><p>',
              'after' => '</p></div>',
          )
      ) 
      ?>
      <div class="treemonisha">
        <a class="Donate-a"href="https://connect.clickandpledge.com/w/Form/212c9142-dfbb-4801-8e11-d0f1b5810fc0?_ga=2.230975706.412929304.1615239806-434706414.1607542758">DONATE</a>
        <a class="Hamburger"aria-label="Open the menu" tabindex="0" class="Hamburger">&#9776</a>
      </div>
    </header>
    <?php 
      wp_nav_menu(
        array(
            'theme_location' => 'Main Navigation 2021',
            'items_wrap' => '<ul class="Mobile-Nav__ul">%3$s</ul>', //what is %3$s and also is this why nmc theme link is hard to find? 
            'before' => '<div class="Mobile-Nav__anchor-p-container"><p>',
            'after' => '</p></div>',
        )
    )
    ?>
    <!-- end header MODULE -->
    
    <!-- Begin main content MODULE - closes at footer.php -->
    <div class="Main-Content">