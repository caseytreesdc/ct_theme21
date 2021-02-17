<?php get_header(); ?>
<!-- begin main MODULE -->
<main>
  <!-- being main page-1 MODULE -->
  <div class="main__page-1" id='testing'>
    <!-- begin main masthead section MODULE-->
    <section
    <?php
    $masthead = get_field('masthead', get_the_ID())[0]['image'];
    $mastheadSRC = wp_get_attachment_image_src( $masthead, 'full')[0];
  ?>
      style="
        background: linear-gradient(
            rgba(255, 255, 255, 0.3),
            rgba(255, 255, 255, 0.3),
            rgba(255, 255, 255, 0.3),
            rgba(255, 255, 255, 0.3),
            rgba(255, 255, 255, 1)
          ),
          url(<?php echo $mastheadSRC ?>);
      "
      class="main__page-1-section-1"
    >
      <h2 class="main__page-1-section-1-h2">
        Empowering communities <br />
        in DC <i>through trees</i>
      </h2>
    </section>
    <!-- end main masthead section MODULE-->
    <!-- begin main motto section MODULE-->
    <section class="main__page-1-section-2">
      <div class="motto">
        <p>Our mission is to</p>
        <p class="bold-text">RESTORE ENHANCE + PROTECT</p>
        <p>the tree canopy of Washington, DC.</p>
      </div>
      <!-- begin get udpdates iframe MODULE CURRENTLY HIDDEN IN STYLESHEET FOR TYPEFORM-->
      <iframe
        class="get-updates__iframe"
        src="https://tfaforms.com/4865291"
        height="350"
        width="600"
        frameborder="0"
        scrolling="no"
      ></iframe>
      <script src="//tfaforms.com/js/iframe_resize_helper.js"></script>
      <!-- end get udpdates iframe MODULE -->
    </section>
    <!-- end motto section MODULE -->
    <!-- begin how do we do it section MODULE-->
    <section class="main__page-1-section-3">
      <p class="main__page-1-section-3-p">HOW DO WE DO IT?</p>
      <div class="down-arrow"></div>
    </section>
    <!-- end how do we do it section MODULE-->
  </div>
  <!-- end main page-1 MODULE-->
  <!-- begin main page-2 MODULE-->
  <div class="main__page-2">
    <section class="main__page-2-section-1">
      <h2 class="main__page-2-section-1-h2">RESTORE</h2>
    </section>
    <section class="main__page-2-section-2">
      <p class="main__page-2-section-2-p">
        WITH OUR DISTRICT PARTNERS AND THOUSANDS OF LOCAL VOLUNTEERS,
      </p>
      <p class="main__page-2-section-2-p">
        WE
        <a class="grey-highlight main__page-2-section-2-a" href="/plant/"
          >PLANT 3,000+ TREES</a
        >
        EVERY YEAR TO REACH OUR
      </p>
      <p class="main__page-2-section-2-p">
        COLLECTIVE GOAL OF 40% TREE CANOPY BY 2032.
      </p>
    </section>
    <section class="main__page-2-section-icons">
      <?php get_template_part('svgs/inline', 'house') ?>
      <?php get_template_part('svgs/inline', 'shovel') ?>
      <?php get_template_part('svgs/inline', 'megaphone') ?>
    </section>
    <section class="main__page-2-section-3">
      <img
        class="main__page-2-section-3-img"
        src="<? echo get_field('home_page_restore_photo');?>"
      />
    </section>
  </div>
  <!-- end main page-2 MODULE-->
  <!-- begin main page-3 MODULE-->
  <div class="main__page-3">
    <section class="main__page-3-section-1">
      <h2 class="main__page-3-section-1-h2">ENHANCE</h2>
    </section>
    <section class="main__page-3-section-2">
      <p class="main__page-3-section-2-p">
        OUR PROGRAMS + CLASSES EQUIP DC RESIDENTS WITH
      </p>
      <p class="main__page-3-section-2-p">
        THE
        <a
          href="/resources-list/"
          class="main__page-3-section-2-a grey-highlight"
          >TECHNICAL SKILLS + KNOWLEDGE</a
        >
        TO FOSTER
      </p>
      <p class="main__page-3-section-2-p">
        A HEALTHY, MATURE TREE CANOPY IN DC.
      </p>
    </section>
    <section class="main__page-3-section-icons">
      <?php get_template_part('svgs/inline', 'house') ?>
      <?php get_template_part('svgs/inline', 'wateringcan') ?>
      <?php get_template_part('svgs/inline', 'tape') ?>
      <?php get_template_part('svgs/inline', 'megaphone') ?>
      <?php get_template_part('svgs/inline', 'document') ?>
    </section>
    <section class="main__page-3-section-3">
      <img
        class="main__page-3-section-3-img"
        src="<? echo get_field('home_page_enhance_photo');?>"
      />
    </section>
  </div>
  <!-- end main page-3 MODULE-->
  <!-- begin main page-4 MODULE-->
  <div class="main__page-4">
    <section class="main__page-4-section-1">
      <h2 class="main__page-4-section-1-h2">PROTECT</h2>
    </section>
    <section class="main__page-4-section-2">
      <p class="main__page-4-section-2-p">
        THIS IS WHERE WE WILL DISCUSS
        <a
          href="/resources-list/"
          class="main__page-4-section-2-a grey-highlight"
          >ADVOCACY ACTIONS</a
        >
        AND
      </p>
      <p class="main__page-4-section-2-p">
        <a
          href="/resources-list/"
          class="main__page-4-section-2-a grey-highlight"
          >CONSERVATION INITIATIVES</a
        >
        THAT HELP US
      </p>
      <p class="main__page-4-section-2-p">PROTECT US.</p>
    </section>
    <section class="main__page-4-section-icons">
      <?php get_template_part('svgs/inline', 'grid') ?>
      <?php get_template_part('svgs/inline', 'megaphone') ?>
      <?php get_template_part('svgs/inline', 'document') ?>
    </section>
    <section class="main__page-4-section-3">
      <img
        class="main__page-4-section-3-img"
        src="<? echo get_field('home_page_protect_photo');?>"
      />
    </section>
  </div>
  <!-- end main page-4 MODULE-->
  <!-- begin main page-5 MODULE-->
  <div class="main__page-5">
    <h2 class="main__page-5-section-1-h2">
      When communities have access
      to mature & healthy trees,
      <span class="cobalt-text">the benefits are endless</span>.
    </h2>
    <div>
      <p class="main__page-5-section-2-p">HERE ARE A FEW OF OUR FAVORITES:</p>
      <div class="main__page-5-section-icons">
        <?php get_template_part('svgs/inline', 'grid') ?>
        <?php get_template_part('svgs/inline', 'megaphone') ?>
        <?php get_template_part('svgs/inline', 'document') ?>
        <?php get_template_part('svgs/inline', 'wateringcan') ?>
        <?php get_template_part('svgs/inline', 'tape') ?>
        <?php get_template_part('svgs/inline', 'shovel') ?>
        <?php get_template_part('svgs/inline', 'house') ?>
      </div>
    </div>
  </div>
  <!-- end main page-4 MODULE-->
</main>
<!-- begin main MODULE -->

<?php get_footer(); ?>
