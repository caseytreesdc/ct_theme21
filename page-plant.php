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
    <div class="Plant__page-2">
        <div class="Plant__page-2-text-and-image">
            <div class="Plant__page-2-text">
                <h2 class="Plant__page-2-text-h2">Home</h2>
                <?php echo get_fields()['home_text']?>
                <a href="" class="Plant__page-2-text-a">
                    Not sure which program is best for you? Take this quiz!
                </a>
            </div>
            <div 
                class="Plant__page-2-image"
                style="
                    background: linear-gradient(
                        rgba(55, 104, 178, 0.5),
                        rgba(55, 104, 178, 0.5)
                    ),
                    url(<?php echo get_fields()['home_image']['url']; ?>);
                    background-position: center;
                    background-size: cover;
                    background-repeat: no-repeat;">
            </div>
        </div>
        <div class="Plant__page-2-links">
            <a class="Plant__page-2-links-a" href="">FFS</a>
            <a class="Plant__page-2-links-a" href="">RSH</a>
            <a class="Plant__page-2-links-a" href="">REBATE</a>
            <a class="Plant__page-2-links-a" href="">PEPCO</a>
        </div>
    </div>
    <div class="Plant__page-3">
        <div class="Plant__page-3-text-and-image">
            <div 
                class="Plant__page-3-image"
                style="
                    background: linear-gradient(
                        rgba(123, 158, 129, 0.5),
                        rgba(123, 158, 129, 0.5)
                    ),
                    url(<?php echo get_fields()['school_image']['url']; ?>);
                    background-position: center;
                    background-size: cover;
                    background-repeat: no-repeat;">
            </div>
            <div class="Plant__page-3-text">
                <h2 class="Plant__page-3-text-h2">School</h2>
                <?php echo get_fields()['school_text']?>
                <p class="Plant__page-3-text-p">
                    <a href="" class="Plant__page-3-text-p-a">
                        APPLY NOW
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="Plant__page-4">
        <div class="Plant__page-4-text-and-image">
            <div class="Plant__page-4-text">
                <h2 class="Plant__page-4-text-h2">Community</h2>
                <?php echo get_fields()['community_text']?>
                <a href="/calendar/" class="Plant__page-4-text-a">
                    Calendar of Upcoming Events
                </a>
            </div>
            <div 
                class="Plant__page-2-image"
                style="
                    background: linear-gradient(
                        rgba(225, 131, 35, 0.5),
                        rgba(225, 131, 35, 0.5)
                    ),
                    url(<?php echo get_fields()['community_image']['url']; ?>);
                    background-position: center;
                    background-size: cover;
                    background-repeat: no-repeat;">
            </div>
        </div>
        <div class="Plant__page-4-links">
            <a class="Plant__page-4-links-a" href="">APPLY NOW</a>
            <a class="Plant__page-4-links-a" href="">GROUP VOLUNTEERS</a>
            <a class="Plant__page-4-links-a" href="">COMMUNITY PARTNERSHIPS</a>
        </div>
    </div>
    <div class="Plant__page-5">
        <div class="Plant__page-5-text-and-image">
            <div 
                class="Plant__page-5-image"
                style="
                    background: linear-gradient(
                        rgba(164, 83, 46, 0.5),
                        rgba(164, 83, 46, 0.5)
                    ),
                    url(<?php echo get_fields()['dedication_image']['url']; ?>);
                    background-position: center;
                    background-size: cover;
                    background-repeat: no-repeat;"">
            </div>
            <div class="Plant__page-5-text">
                <h2 class="Plant__page-5-text-h2">Dedication</h2>
                <?php echo get_fields()['dedication_text']?>
                <p class="Plant__page-5-text-p">
                    <a href="" class="Plant__page-5-text-p-a">
                        DEDICATE NOW
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>