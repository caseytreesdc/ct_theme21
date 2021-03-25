<?php get_header(); ?>
<div class="Get__page-1">
  <h1 class="Get__page-1-h1">Get involved with Casey Trees!</h1>
  <p class="Get__page-1-p">
    As stewards of DC’s urban forest, Casey Trees has served as a community
    resource for educational programs and volunteer opportunities since 2002.
    While the activities vary, all our programs work together to provide greater
    shade, cooler air, cleaner water, citizen engagement and sustainable growth
    to the neighborhoods where we live and work. Our opportunities are seasonal,
    so if you want to stay in the know, sign up for The Leaflet, our weekly
    newsletter.
  </p>
  <div class="Get__page-1-icons">
    <div class="Get__page-1-icon-w-text cobalt-svg">
      <?php get_template_part('svgs/inline', 'home') ?>
      <p class="Get__page-1-icon-p">PLANTING EVENT</p>
    </div>
    <div class="Get__page-1-icon-w-text forest-svg">
      <?php get_template_part('svgs/inline', 'wateringcan') ?>
      <p class="Get__page-1-icon-p">CARE<br /> EVENT</p>
    </div>
    <div class="Get__page-1-icon-w-text moss-svg">
      <?php get_template_part('svgs/inline', 'tape') ?>
      <p class="Get__page-1-icon-p">WORKSHOP</p>
    </div>
    <div class="Get__page-1-icon-w-text orange-svg">
      <?php get_template_part('svgs/inline', 'megaphone') ?>
      <p class="Get__page-1-icon-p">ONLINE</p>
    </div>
    <div class="Get__page-1-icon-w-text paarl-svg">
      <?php get_template_part('svgs/inline', 'document') ?>
      <p class="Get__page-1-icon-p">YOUTH</p>
    </div>
    <a href="/events/month/" class="Get__page-1-icon-w-text coffee-svg">
      <?php get_template_part('svgs/inline', 'plus') ?>
      <p class="Get__page-1-icon-p">ALL EVENTS</p>
    </a>
  </div>
</div>
<div class="Get__page-2">
  <div class="Get__event"></div>
  <div class="Get__event"></div>
  <div class="Get__event"></div>
  <div class="Get__event"></div>
  <div class="Get__event"></div>
  <div class="Get__event"></div>
  <div class="Get__event"></div>
  <div class="Get__event"></div>
  <div class="Get__event"></div>
</div>
<div class="Get__page-3">
  <?php tribe_show_month(); ?>
</div>
<?php get_footer(); ?>
<?php var_dump(tribe_get_events()); ?>
