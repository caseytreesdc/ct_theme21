<!-- printf( __( 'The post type is: %s', 'textdomain' ), get_post_type( get_the_ID() ) ); -->
<?php get_header(); ?>
<div class="Plant">
    <div class="Plant__page-1">
        <section class=Plant__page-1-section-1>
            <h1 class="Plant__page-1-section-1-h1">
                There are so many ways to plant with us. Where do you want to see more trees?
            </h1>
        </section>
        <section class="Plant__page-1-section-2-icons">
            <div class="Plant__page-1-section-2-icon-w-text">
                <?php get_template_part('svgs/inline', 'home') ?>
                <p class="Plant__page-1-section-2-p">HOME</p>
            </div>
            <div class="Plant__page-1-section-2-icon-w-text">
                <?php get_template_part('svgs/inline', 'school') ?>
                <p class="Plant__page-1-section-2-p">SCHOOL</p>
            </div>
            <div class="Plant__page-1-section-2-icon-w-text">
                <?php get_template_part('svgs/inline', 'community') ?>
                <p class="Plant__page-1-section-2-p">COMMUNITY</p>
            </div>
            <div class="Plant__page-1-section-2-icon-w-text">
            <?php get_template_part('svgs/inline', 'dedication') ?>
                <p class="Plant__page-1-section-2-p">DEDICATION</p>
            </div>
        </section>
        <section class="Plant__page-1-section-3">
            <p class="Plant__page-1-section-3-p">
                Have something else in mind? 
                <a 
                    class="Plant__page-1-section-3-a"
                    href="mailto:friends@caseytrees.org?subject=Planting">
                        Let us know.
                </a>
            </p>
        </section>
    </div>
</div>
<?php get_footer(); ?>