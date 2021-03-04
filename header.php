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
    <!-- begin header MODULE -->
    <header class="header__container">
    <?php echo get_custom_logo(); ?>
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
    <a class="Hamburger">&#9776</a>
    </header>
    <?php 
      wp_nav_menu(
        array(
            'theme_location' => 'Main Navigation 2021',
            'items_wrap' => '<ul class="Mobile-Nav__ul">%3$s</ul>', //what is %3$s
            'before' => '<div class="Mobile-Nav__anchor-p-container"><p>',
            'after' => '</p></div>',
        )
    ) 
    ?>
    <!-- end header MODULE -->
    <!-- Begin main content MODULE -->
    <div class="Main-Content">