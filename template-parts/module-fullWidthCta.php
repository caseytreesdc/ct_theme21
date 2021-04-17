<div class="Module__full-width-cta" style="
    height: 70vh;
    background: linear-gradient(90deg, rgba(57, 89, 64, 1),
            rgba(57, 89, 64, .8),
            rgba(57, 89, 64, .5),
            rgba(57, 89, 64, 0),
            rgba(57, 89, 64, 0)),
        url(<?php echo wp_get_attachment_image_src(
                $args['image'], 'large')[0] ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
    <div>
        <h2><?php echo $args['title']?></h2>
        <p><?php echo $args['excerpt']?></p>
        <a
            href="<?php echo $args['button_link']['external_link']?>"
            target="_blank"
            ><?php echo $args['button_label']?>
        </a>
    </div>
</div>