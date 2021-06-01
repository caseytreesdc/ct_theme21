<?php get_header(); ?>
<!-- begin main MODULE -->
<main>
  <!-- being main page-1 MODULE -->
  <div class="main__page-1">
    <!-- begin main masthead section MODULE-->
    <section class="main__page-1-section-1">
      <div class="main__page-1-section-1-title-box">
        <h2 class="main__page-1-section-1-h2">
          <?php echo get_field('masthead')[0]['title']?>
        </h2>
        <p class="main__page-1-section-1-p">
          <?php echo get_field('masthead')[0]['excerpt']?>
        </p>
        <!-- Begin Module Typeform Button  -->
        <!-- <a class="typeform-share button" href="https://form.typeform.com/to/mnnpM5l1?typeform-medium=embed-snippet" data-mode="popup" style="" data-size="100" target="_blank">FFS Typeform</a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> -->
        <a 
          class="main__page-1-section-1-a" 
          href="<?php echo get_field('masthead')[0]['button_link']['external_link']; ?>" 
          target="_blank">
            <?php echo get_field('masthead')[0]['button_label']; ?>
          </a>
        <!-- End Module Typeform Button  -->
      </div>
    <?php if (get_field('masthead')[0]['video']) {
      $videoSRC = get_field('masthead')[0]['video']; ?>
      <video loop autoplay muted
        class="main__page-1-section-1-Video">
        <source
          src="<?php echo $videoSRC ?>"
          type="video/mp4"
          poster="<?php echo $mastheadSRC ?>"
        />
      </video>
    <?php } else {
      $masthead = get_field('masthead', get_the_ID())[0]['image'];
      $mastheadSRC = wp_get_attachment_image_src( $masthead, 'full')[0];
    ?>
      <img 
        class="main__page-1-section-1-img"
        src="<?php echo $mastheadSRC ?>" />
    <?php }
    ?>
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
        WITH OUR PARTNERS AND THOUSANDS OF LOCAL VOLUNTEERS, WE
        <a class="grey-highlight main__page-2-section-2-a" href="/plant/"
          >PLANT 4,000+ TREES</a
        > EVERY YEAR TO REACH OUR COLLECTIVE GOAL OF 40% TREE CANOPY BY 2032.
      </p>
    </section>
    <section class="main__page-2-section-icons">
      <a href="/plant/#consultation">
          <img
              src="https://caseytrees.org/wp-content/uploads/2020/12/step-up-tree-tag-snow-email.png"
          >
          <p>Consultation</p>
      </a>
      <a href="/plant/residential-planting/">
          <img
              src="https://caseytrees.org/wp-content/uploads/2021/04/tree-walk-2021-email.png"
          >
          <p>Home</p>
      </a>
      <a href="/plant/school-tree-planting/">
          <img
              src="https://caseytrees.org/wp-content/uploads/2021/01/Screen-Shot-2021-01-29-at-7.45.11-AM.png"
          >
          <p>School</p>
      </a>
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
          href="/resources/"
          class="main__page-3-section-2-a grey-highlight"
          >TECHNICAL SKILLS + KNOWLEDGE</a
        > TO FOSTER A HEALTHY, MATURE TREE CANOPY.
      </p>
    </section>
    <section class="main__page-3-section-icons">
      <a href="/the-leaflet/">
          <img
              src="https://caseytrees.org/wp-content/uploads/2021/05/comp-plan-email.png"
          >
          <p>Leaflet</p>
      </a>
      <a target="_blank" href="https://caseytreesdc.github.io/treereportcard2020/">
          <img
              src="https://caseytrees.org/wp-content/uploads/2020/10/chestnuut-email.png"
          >
          <p>Tree Report Card</p>
      </a>
      <a target="_blank" href="https://casey-trees.myshopify.com/products/tree-species-guide">
          <img
              src="https://caseytrees.org/wp-content/uploads/2020/12/tree-issue-rust-browser.png"
          >
          <p>Species Guide</p>
      </a>
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
          href="/take-action/advocate/"
          class="main__page-4-section-2-a grey-highlight"
          >ADVOCACY ACTIONS</a
        >
        AND
        <a
          href="/take-action/conservation-easements/"
          class="main__page-4-section-2-a grey-highlight"
          >CONSERVATION INITIATIVES</a
        >
        THAT HELP US PROTECT US.
      </p>
    </section>
    <section class="main__page-4-section-icons">
      <a href="/take-action/citizen-science/">
          <img
              src="https://caseytrees.org/wp-content/uploads/2020/08/arborist-thumbnail.jpg"
          >
          <p>Citizen Science</p>
      </a>
      <a href="/take-action/water/">
          <img
              src="https://caseytrees.org/wp-content/uploads/2017/05/stormwater-filter1.jpg"
          >
          <p>Water</p>
      </a>
      <a target="_blank" href="https://caseytreesdc.github.io/advocacyworks/climatereadydc.html">
          <img
              src="https://caseytrees.org/wp-content/uploads/2020/11/urbantreesummit-browser.png"
          >
          <p>Climate Ready DC</p>
      </a>
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
      <!-- <p class="main__page-5-section-2-p">HERE ARE A FEW OF OUR FAVORITES:</p> -->
      <div class="main__page-5-section-icons">
        <a href="/plant/#consultation">
            <img
                src="https://caseytrees.org/wp-content/uploads/2020/12/step-up-tree-tag-snow-email.png"
            >
            <p>Consultation</p>
        </a>
        <a href="/plant/residential-planting/">
            <img
                src="https://caseytrees.org/wp-content/uploads/2021/04/tree-walk-2021-email.png"
            >
            <p>Home</p>
        </a>
        <a href="/the-leaflet/">
          <img
              src="https://caseytrees.org/wp-content/uploads/2021/05/comp-plan-email.png"
          >
          <p>Leaflet</p>
        </a>
        <a target="_blank" href="https://casey-trees.myshopify.com/products/tree-species-guide">
            <img
                src="https://caseytrees.org/wp-content/uploads/2020/12/tree-issue-rust-browser.png"
            >
            <p>Store</p>
        </a>
        <a href="/take-action/citizen-science/">
          <img
              src="https://caseytrees.org/wp-content/uploads/2020/08/arborist-thumbnail.jpg"
          >
          <p>Citizen Science</p>
        </a>
        <a href="/take-action/water/">
            <img
                src="https://caseytrees.org/wp-content/uploads/2017/05/stormwater-filter1.jpg"
            >
            <p>Water</p>
        </a>
        <a target="_blank" href="https://caseytreesdc.github.io/advocacyworks/climatereadydc.html">
          <img
              src="https://caseytrees.org/wp-content/uploads/2020/11/urbantreesummit-browser.png"
          >
          <p>Climate Ready DC</p>
        </a>
      </div>
    </div>
  </div>
  <!-- end main page-4 MODULE-->
</main>
<!-- begin main MODULE -->

<?php get_footer(); ?>
