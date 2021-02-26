<?php get_header(); ?>
<div class="About">
  <div class="About__page-1">
    <h1 class="About__page-1-h1">
      Our mission is to restore, enhance, & protect the tree canopy of our
      nation’s capital.
    </h1>
    <p class="About__page-1-p">
      Hover over the rings to learn how Casey Trees came to be.
    </p>
  </div>
  <div class="About__page-1-rings">
    <?php get_template_part('svgs/inline', 'rings') ?>
  </div>
  <div class="About__page-1-links">
    <div class="About__page-1-link-module">
      <h2 class="About__page-1-link-module-h2">Our People</h2>
      <p class="About__page-1-link-module-p">
        Meet the spirit behind our success.
      </p>
      <a class="About__page-1-link-module-a" href="/about-us/our-people/"
        ><p class="About__page-1-link-module-a-p">MEET OUR STAFF</p></a
      >
    </div>
    <div class="About__page-1-link-module">
      <h2 class="About__page-1-link-module-h2">Our Story</h2>
      <p class="About__page-1-link-module-p">
        Restoring, Enhancing, and Protecting trees over the years.
      </p>
      <a class="About__page-1-link-module-a" href="/about-us/our-story/"
        ><p class="About__page-1-link-module-a-p">READ OUR STORY</p></a
      >
    </div>
    <div class="About__page-1-link-module">
      <h2 class="About__page-1-link-module-h2">Our Impact</h2>
      <p class="About__page-1-link-module-p">
        How Casey Trees and our partners work re-treeing the DMV.
      </p>
      <a class="About__page-1-link-module-a" href="/about-us/"
        ><p class="About__page-1-link-module-a-p">LEARN OUR MISSION</p></a
      >
    </div>
  </div>
  <div
    class="About__page-2"
    style="
      background: linear-gradient(
          rgba(55, 104, 178, 1),
          rgba(55, 104, 178, 1),
          rgba(55, 104, 178, 0.3),
          rgba(55, 104, 178, 0.3)
        ),
        url(https://caseytrees.org/wp-content/uploads/2018/07/DSC01877-Edit-e1531498455366-1920x627-c-default.jpg);
      background-position: bottom;
      background-repeat: no-repeat;
      background-size: contain;
    "
  >
    <div class="About__page-2-link-module">
      <h2 class="About__page-2-link-module-h2">Join our team</h2>
      <a
        class="About__page-2-link-module-a"
        href="https://www2.appone.com/Search/Search.aspx?ServerVar=caseytrees.appone.com"
        target="_blank"
        ><p class="About__page-2-link-module-a-p">SEE OPENINGS</p></a
      >
    </div>
  </div>
</div>
<?php get_footer(); ?>
