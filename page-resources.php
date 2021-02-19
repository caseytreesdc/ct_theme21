<?php get_header(); ?>

<section class="Resources__section-title">
  <h1 class="Resources__title-padded">Tools for urban forestry</h1>
</section>
<section class="Resources__section-search">
    <?php get_search_form(); ?>
</section>
<section class="Resources__section-tagslist">
    <?php
    $categories = wp_list_categories( array(
        'title_li' => 'BROWSE BY TOPIC',
        'taxonomy' => 'resources-tags'
    ) );
    ?>
</section>
<hr>
<!-- i need 7714, 15555, 19972  -->
<section class="Resources__section-top"> 
    <?php get_template_part('template-parts/module', 'topResources')?>
</section>
<?php get_footer(); ?>
