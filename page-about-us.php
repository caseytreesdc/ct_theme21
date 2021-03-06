<?php /* Template Name: Modules Page */ ?>
<?php get_header(); ?>
<div class="About">
  <div class="About__page-1">
    <h1 class="About__page-1-h1">
      Our mission is to restore, enhance, & protect the tree canopy of our
      nation’s capital.
    </h1>
    <!-- <p class="About__page-1-p">
      Hover over the rings to learn how Casey Trees came to be.
    </p> -->
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
      <h2 class="About__page-1-link-module-h2">Get in Touch</h2>
      <p class="About__page-1-link-module-p">
        Reach out regarding tree planting, membership, donation, volunteering and more. 
      </p>
      <a class="About__page-1-link-module-a" href="/about-us/contact-us/"
        ><p class="About__page-1-link-module-a-p">CONTACT US</p></a
      >
    </div>
  </div>
  <div class="About__page-2"> 
    <!-- background is set in CSS for now  -->
    <div class="About__page-2-link-module">
      <h2 class="About__page-2-link-module-h2">Join our team</h2>
      <a
        class="About__page-2-link-module-a"
        href="https://www2.appone.com/Search/Search.aspx?ServerVar=caseytrees.appone.com"
        target="_blank"
        >SEE OPENINGS</a
      >
    </div>
  </div>
  <?php get_template_part('template-parts/acf', 'modules') ?>
</div>
<?php get_footer(); ?>
