<?php get_header(); ?>

<div class="Farm">
  <div class="Farm__page-1">
      <div class="Farm__page-1-title-box">
        <p class="Farm__page-1-title dcsn">DC STATE NURSERY <i>at</i></p>
        <p class="Farm__page-1-title ctFarm">CASEY TREE FARM</p>
      </div>
      <video loop autoplay muted class="Farm__page-1-Video">
        <source
          src="https://caseytrees.org/wp-content/uploads/2020/08/FarmHeroClip_v3.mp4"
          type="video/mp4"
          poster="https://caseytrees.org/wp-content/uploads/2018/07/DSC02080.jpg"
        />
      </video>
  </div>
  <div class="Farm__page-2">
    <?php the_content() ?>
  </div>
  <div class="Farm__page-3">
    <h3 class="Farm__page-3-h3">WHAT WE OFFER</h3>
    <div class="down-arrow"></div>
  </div>
  <div class="Farm__page-4-icons">
    <a href="#sustainability">
      <div>
        <img
            src="<?php echo get_fields()['sustainability_image']['url']; ?>"
        >
        <p>SUSTAINABILITY</p>
      </div>
    </a>
    <a href="#partnership">
      <div>
        <img
            src="<?php echo get_fields()['partnership_image']['url']; ?>"
        >
        <p>PARTNERSHIP WITH DC</p>
      </div>
    </a>
    <a target="_blank" href="https://caseytreesdc.github.io/ct-farm/Trees#FarmTrees">
      <div>
        <img
            src="<?php echo wp_get_attachment_image_src(20088, 'full')[0]; ?>"
        >
        <p>TREES WE GROW</p>
      </div>
    </a>
    <a target="_blank" href="https://caseytreesdc.github.io/ct-farm/Request#RequestForm">
      <div>
        <img
            src="<?php echo wp_get_attachment_image_src(19700, 'full')[0]; ?>"
        >
        <p>AVAILABILITY & REQUEST</p>
      </div>
    </a>
  </div>
  <div id="sustainability" class="Farm__page-5">
    <!-- <div class="Farm__page-5-text-and-image"> -->
      <div class="Farm__page-5-text">
        <h2 class="Farm__page-5-text-h2">Sustainability</h2>
        <?php echo get_fields()['sustainability_text']?>
      </div>
      <img
        class="Farm__page-5-image"
        src="<?php echo get_fields()['sustainability_image']['url']; ?>"
      >
    <!-- </div> -->
  </div>
  <div id="partnership" class="Farm__page-6">
    <!-- <div class="Farm__page-6-text-and-image"> -->
      <img
        class="Farm__page-6-image"
        src="
          <?php echo get_fields()['partnership_image']['url']; ?>
        "
      >
      <div class="Farm__page-6-text">
        <h2 class="Farm__page-6-text-h2">Partnership with DC</h2>
        <div class="Farm__page-6-text-logos">
        <?php get_template_part('svgs/inline', 'logo') ?>
        <?php get_template_part('svgs/inline', 'ddot') ?>
        </div>
        <?php echo get_fields()['partnership_text']?>
      </div>
    <!-- </div> -->
  </div>
</div>
<?php get_footer(); ?>
