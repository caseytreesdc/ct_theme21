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
          poster="https://caseytrees.org/wp-content/uploads/2018/07/DSC02080.jpg"
        />
      </video>
    </div>
  </div>
  <div class="Farm__page-2">
    <?php echo get_fields()['farm_intro_text']?>
  </div>
  <div class="Farm__page-3">
    <h3 class="Farm__page-3-h3">WHAT WE OFFER</h3>
    <div class="down-arrow"></div>
  </div>
  <div class="Farm__page-4-icons">
    <div class="Farm__page-4-icon-w-text">
      <?php get_template_part('svgs/inline', 'house') ?>
      <p class="Farm__page-4-p">SUSTAINABILITY</p>
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
      <p class="Farm__page-4-p">AVAILABILITY & REQUESTS</p>
    </div>
  </div>
  <div class="Farm__page-5">
    <div class="Farm__page-5-text-and-image">
      <div class="Farm__page-5-text">
        <h2 class="Farm__page-5-text-h2">Sustainability</h2>
        <?php echo get_fields()['sustainability_text']?>
      </div>
      <div
        class="Farm__page-5-image"
        style="
          background: url(<?php echo get_fields()['sustainability_image']['url']; ?>);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        "
      ></div>
    </div>
  </div>
  <div class="Farm__page-6">
    <div class="Farm__page-6-text-and-image">
      <div
        class="Farm__page-6-image"
        style="
          background:
            url(<?php echo get_fields()['partnership_image']['url']; ?>);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        "
      ></div>
      <div class="Farm__page-6-text">
        <h2 class="Farm__page-6-text-h2">Partnership with DC</h2>
        <div class="Farm__page-6-text-logos">
        <?php get_template_part('svgs/inline', 'wBlackLogo') ?>
        <?php get_template_part('svgs/inline', 'ddot') ?>
        </div>
        <?php echo get_fields()['partnership_text']?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
