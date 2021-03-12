<?php get_header(); ?>
<!-- begin main MODULE -->
<main>
  <!-- being main page-1 MODULE -->
  <div class="main__page-1">
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
          background-size: cover;
      "
      class="main__page-1-section-1"
    >
      <h2 class="main__page-1-section-1-h2">
        Empowering communities <br />
        in DC <i>through trees</i>
      </h2>
      <!-- Begin Module Typeform Button  -->
    <a class="typeform-share button" href="https://form.typeform.com/to/mnnpM5l1?typeform-medium=embed-snippet" data-mode="popup" style="" data-size="100" target="_blank">FFS Typeform</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
      <!-- End Module Typeform Button  -->
    </section>
    <!-- end main masthead section MODULE-->
    <!-- begin main motto section MODULE-->
    <section class="main__page-1-section-2">
      <div class="motto">
        <p>Our mission is to
        <span class="bold-text"><a href="#restore">RESTORE</a> <a href="#enhance">ENHANCE</a> + <a href="#protect">PROTECT</a></span>
        the tree canopy of Washington, DC.</p>
      </div>
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
  <div id="restore" class="main__page-2">
    <section class="main__page-2-section-1">
      <h2 class="main__page-2-section-1-h2">Restore</h2>
    </section>
    <section class="main__page-2-section-2">
      <p class="main__page-2-section-2-p">
        WITH OUR DISTRICT PARTNERS AND THOUSANDS OF LOCAL VOLUNTEERS, WE
        <a class="grey-highlight main__page-2-section-2-a" href="/plant/"
          >PLANT 3,000+ TREES</a
        > EVERY YEAR TO REACH OUR COLLECTIVE GOAL OF 40% TREE CANOPY BY 2032.
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
  <div id="enhance" class="main__page-3">
    <section class="main__page-3-section-1">
      <h2 class="main__page-3-section-1-h2">Enhance</h2>
    </section>
    <section class="main__page-3-section-2">
      <p class="main__page-3-section-2-p">
        OUR PROGRAMS + CLASSES EQUIP DC RESIDENTS WITH THE
        <a
          href="/resources-list/"
          class="main__page-3-section-2-a grey-highlight"
          >TECHNICAL SKILLS + KNOWLEDGE</a
        > TO FOSTER A HEALTHY, MATURE TREE CANOPY IN DC.
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
  <div id="protect" class="main__page-4">
    <section class="main__page-4-section-1">
      <h2 class="main__page-4-section-1-h2">Protect</h2>
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
        <a
          href="/resources-list/"
          class="main__page-4-section-2-a grey-highlight"
          >CONSERVATION INITIATIVES</a
        >
        THAT HELP US PROTECT US.
      </p>
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
