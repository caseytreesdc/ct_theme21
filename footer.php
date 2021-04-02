</div>
<!-- End main content module - opens at header.php -->

</body>
    <!-- Begin Modules Footer -->
    <footer class="footer__container">
        <div class="footer__section-1">
            <div class="footer__column">
                <!-- // echo get_custom_logo() - not using because svg is clearer ... can custom cms logo support svg? // -->
                <a class="footer__logo-anchor" href="/"><?php get_template_part('svgs/inline', 'logo')?></a>
            </div>
            <div class="footer__column">
                <h2>Our mission is to restore, enhance and protect the tree canopy of the nation’s capital.</h2>
            </div>
            <div class="footer__column">
                <a
                    class="footer__button"
                    href="https://connect.clickandpledge.com/w/Form/212c9142-dfbb-4801-8e11-d0f1b5810fc0"
                    >DONATE</a
                >
            </div>
        </div>
        <div class="footer__section-2">
            <div class="footer__column">
                <a
                    class="footer__button"
                    href="https://form.typeform.com/to/mnnpM5l1?typeform-medium=embed-snippet"
                    >GET UPDATES</a
                >
            </div>
            <div class="footer__column footer__nav">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Main Navigation 2021',
                        )
                    )
                ?>
            </div>
            <div class="footer__column">
                <div class="footer__social">
                    <a target="_blank" href="https://www.facebook.com/CaseyTreesDC/"><?php get_template_part('svgs/inline', 'facebook') ?></a>
                    <a target="_blank" href="https://twitter.com/caseytrees"><?php get_template_part('svgs/inline', 'twitter') ?></a>
                    <a target="_blank" href="https://www.instagram.com/CaseyTrees/"><?php get_template_part('svgs/inline', 'instagram') ?></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCeDRVR0TjyuXoKT9dtepp5A"><?php get_template_part('svgs/inline', 'youtube') ?></a>
                </div>
                <div class=footer__contact>
                    <a target="_blank" href="https://goo.gl/maps/yLTWwa1er5bu8Q8u6">
                        <p>3030 12th Street NE</p>
                        <p>Washington, DC 20017</p>
                    </a>
                    <p>phone: 202.833.4010</p>
                    <p>fax: 202.833.4092</p>
                    <a href="mailto:friends@caseytrees.org"><p>friends@caseytrees.org</p></a>
                </div>
            </div>
        </div>
        <div class="footer__section-3">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'Footnote Navigation 2021',
                    )
                )
            ?>
            <p class="footnote">© 2021 Casey Trees. All Rights Reserved.</p>
            <p class="footnote">Web Design and Development by New Media Campaigns and Casey Trees</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</html>