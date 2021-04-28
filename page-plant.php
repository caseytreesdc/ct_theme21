<!-- printf( __( 'The post type is: %s', 'textdomain' ), get_post_type( get_the_ID() ) ); -->
<?php get_header(); ?>
<div class="Plant">
    <div class="Plant__page-1">
        <section class=Plant__page-1-section-1>
            <?php the_content() ?>
        </section>
        <section class="Plant__page-1-section-2-icons">
            <a href="#consultation"><div class="Plant__page-1-section-2-icon-w-text">
                <img
                    src="<?php echo get_fields()['consultation_image']['url']; ?>"
                >
                <p class="Plant__page-1-section-2-p">CONSULTATION</p>
            </div></a>
            <a href="#home"><div class="Plant__page-1-section-2-icon-w-text">
                <img
                    src="<?php echo get_fields()['home_image']['url']; ?>"
                >
                <p class="Plant__page-1-section-2-p">HOME</p>
            </div></a>
            <a href="#school"><div class="Plant__page-1-section-2-icon-w-text">
                <img
                    src="<?php echo get_fields()['school_image']['url']; ?>"
                >
                <p class="Plant__page-1-section-2-p">SCHOOL</p>
            </div></a>
            <a href="#community"><div class="Plant__page-1-section-2-icon-w-text">
                <img
                    src="<?php echo get_fields()['community_image']['url']; ?>"
                >
                <p class="Plant__page-1-section-2-p">COMMUNITY</p>
            </div></a>
            <a href="#dedication"><div class="Plant__page-1-section-2-icon-w-text">
                <img
                    src="<?php echo get_fields()['dedication_image']['url']; ?>"
                >
                <p class="Plant__page-1-section-2-p">DEDICATION</p>
            </div></a>
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
    <div id="consultation" class="Plant__page-15">
        <div class="Plant__page-15-text-and-image">
            <img 
                class="Plant__page-15-image" 
                src="<?php echo get_fields()['consultation_image']['url']; ?>"
            >
            <div class="Plant__page-15-text">
                <h2 class="Plant__page-15-text-h2">Consultation</h2>
                <?php echo get_fields()['consultation_text']?>
                <p class="Plant__page-15-text-p">
                    <a href="/plant/school-tree-planting/" class="Plant__page-15-text-p-a">
                        INQUIRY
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div id="home" class="Plant__page-2">
        <div class="Plant__page-2-text-and-image">
            <div class="Plant__page-2-text">
                <h2 class="Plant__page-2-text-h2">Home</h2>
                <?php echo get_fields()['home_text']?>
                <a class="Plant__page-2-text-a" href="https://form.typeform.com/to/mnnpM5l1?typeform-medium=embed-snippet" data-mode="popup" style="" data-size="100" target="_blank">
                    Not sure which program is best for you? Take this quiz!
                </a>
            </div>
            <img 
                class="Plant__page-2-image"
                src="<?php echo get_fields()['home_image']['url']; ?>"
            >
        </div>
        <div class="Plant__page-2-links">
            <a class="Plant__page-2-links-a" href="/resources-list/fee-for-service/">FFS</a>
            <a class="Plant__page-2-links-a" href="/plant/residential-planting/">RSH</a>
            <a class="Plant__page-2-links-a" href="/resources/tree-rebate/">REBATE</a>
            <a class="Plant__page-2-links-a" href="/plant/residential-planting/pepco-tree-application-form/">PEPCO</a>
        </div>
        <div class="Plant__page-2-form-excerpt">
            <p><?php echo get_the_excerpt(2215) ?></p>
            <p><?php echo get_the_excerpt(53) ?></p>
            <p><?php echo get_the_excerpt(55) ?></p>
            <p><?php echo get_the_excerpt(14356) ?></p>
            <p>
                Hover over the above options, or follow the link to learn more about Fee-For Service,
                Riversmart Homes, Tree Rebate, and Pepco tree planting opportunities.
            </p>
        </div>
    </div>
    <div id="school" class="Plant__page-3">
        <div class="Plant__page-3-text-and-image">
            <img 
                class="Plant__page-3-image" 
                src="<?php echo get_fields()['school_image']['url']; ?>"
            >
            <div class="Plant__page-3-text">
                <h2 class="Plant__page-3-text-h2">School</h2>
                <?php echo get_fields()['school_text']?>
                <p class="Plant__page-3-text-p">
                    <a href="/plant/school-tree-planting/" class="Plant__page-3-text-p-a">
                        APPLY NOW
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div id="community" class="Plant__page-4">
        <div class="Plant__page-4-text-and-image">
            <div class="Plant__page-4-text">
                <h2 class="Plant__page-4-text-h2">Community</h2>
                <?php echo get_fields()['community_text']?>
                <a href="/events/month/" class="Plant__page-4-text-a">
                    Calendar of Upcoming Events
                </a>
            </div>
            <img 
                class="Plant__page-4-image" 
                src="<?php echo get_fields()['community_image']['url']; ?>"
            >
        </div>
        <div class="Plant__page-4-links">
            <a class="Plant__page-4-links-a" href="/plant/community-tree-planting/">APPLY NOW</a>
            <a class="Plant__page-4-links-a">GROUP VOLUNTEERS</a>
            <a class="Plant__page-4-links-a">COMMUNITY PARTNERSHIPS</a>
        </div>
    </div>
    <div id="dedication" class="Plant__page-5">
        <div class="Plant__page-5-text-and-image">
            <img 
                class="Plant__page-5-image" 
                src="<?php echo get_fields()['dedication_image']['url']; ?>"
            >
            <div class="Plant__page-5-text">
                <h2 class="Plant__page-5-text-h2">Dedication</h2>
                <?php echo get_fields()['dedication_text']?>
                <p class="Plant__page-5-text-p">
                    <a href="/waystogive/commemorative/" class="Plant__page-5-text-p-a">
                        DEDICATE NOW
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>