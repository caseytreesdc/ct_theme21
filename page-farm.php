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
        <p class="Farm__page-5-text-p">
          Our vision is the production of sustainably grown, high quality trees
          to help communities meet their tree canopy goals. Along with
          meticulous care we provide to our soils by feeding the microflora
          using organic-based inputs, all our trees are grown in-ground using
          rootbags, which encourages greater fine root production than
          traditional balled and burlapped trees. More fine roots mean better
          water and nutrient exchange and better chances of survival
          post-planting. Rootbag-grown trees also use less soil than their
          balled and burlapped counterparts, reducing environmental impacts and
          transportation costs, and simplifying planting.
        </p>
      </div>
      <div
        class="Farm__page-5-image"
        style="
          background: url(https://caseytrees.org/wp-content/uploads/2020/11/farm2020-email.png);
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
            url(https://caseytrees.org/wp-content/uploads/2020/12/match-email.png);
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
        <p class="Farm__page-6-text-p">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
          nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
          volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
          ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
          Duis autem ssim qui blandit praesent luptatum zzril delenit augue duis
          dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet.
        </p>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
