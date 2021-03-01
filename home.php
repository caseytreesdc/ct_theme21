<?php get_header() ?>

<section class="Blog__section-title">
  <h1 class="Blog__title-padded">THE LEAFLET</h1>
</section>

<?php get_template_part('template-parts/query', 'Feature') ?>
<?php get_template_part('template-parts/query', 'Recents')?>
<?php get_template_part('template-parts/query', 'Stories')?>

<?php get_footer(); ?>
