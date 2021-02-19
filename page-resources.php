<?php get_header(); ?>
<section class="Resources__section-title">
  <h1 class="Resources__title-padded">Tools for urban forestry</h1>
</section>
<section class="Resources__section-search">
    <?php get_search_form(); ?>
</section>
<section class="Resources__section-topics">
<?php
$categories = wp_list_categories( array(
    'title_li' => 'BROWSE BY TOPIC',
    'taxonomy' => 'resources-tags'
) );
 ?>
</section>
<hr>
<!-- i need 7714, 15555, 19972  -->
<section class="Resources__top"> 
    <?php 
        $topPosts = array(
            'post7714' => get_post( 7714 ),
            'post15555' => get_post( 155555 ),
            'post19972' => get_post( 19972 ),
        );
        foreach ($topPosts as $post) {
            print_r( $post);
            ?><hr><?php
        }
    ?>
</section>
<?php get_footer(); ?>
