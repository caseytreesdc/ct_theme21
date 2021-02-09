<?php get_header(); ?>
<div class="Farm">
  <div class="Farm__page-1">
    <div class="Farm__page-1-overlay">
      <div class="Farm__page-1-title-box">
        <p class="Farm__page-1-title dcsn">DC STATE NURSERY <i>at</i></p>
        <p class="Farm__page-1-title ctFarm">CASEY TREE FARM</p>
      </div>
    </div>
    <div class="Farm__page-1-Video-box">
      <video loop autoplay muted class="Farm__page-1-Video">
        <source
          src="https://caseytreesdc.github.io/ct-farm/static/media/FarmHeroClip_v3.3986d54d.mp4"
          type="video/mp4"
        />
      </video>
    </div>
  </div>
  <div class="Farm__page-2">
    <p class="Farm__page-2-p">
      <b>Casey Tree Farm</b>, originally surveyed by our first president and
      avid horticulturalist George Washington, occupies 730 acres of land along
      the Shenandoah River in Berryville, VA. We have dedicated 100 acres of
      that land to sustainable tree production using techniques that prioritize
      long term soil health and productivity, while safeguarding the overall
      environment.
    </p>
  </div>
  <div class="Farm__page-3">
    <h3 class="Farm__page-3-h3">WHAT WE OFFER</h3>
    <div class="down-arrow"></div>
  </div>
  <div class="Farm__page-4-icons">
    <div class="Farm__page-4-icon-w-text">
      <?php get_template_part('svgs/inline', 'house') ?>
      <p class="Farm__page-4-p">SUSTAINIBILITY</p>
    </div>
    <div class="Farm__page-4-icon-w-text">
      <?php get_template_part('svgs/inline', 'grid') ?>
      <p class="Farm__page-4-p">PARTNERSHIP WITH DC</p>
    </div>
    <div class="Farm__page-4-icon-w-text">
      <?php get_template_part('svgs/inline', 'document') ?>
      <p class="Farm__page-4-p">TREES WE GROW</p>
    </div>
    <div class="Farm__page-4-icon-w-text">
      <?php get_template_part('svgs/inline', 'tape') ?>
      <p class="Farm__page-4-p">AVAILIBILITY & REQUESTS</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
