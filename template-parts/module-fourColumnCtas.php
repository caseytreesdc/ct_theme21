<?php // var_dump($args) ?>
<?php if($args['section_title']) { ?>
    <h2 class="Module__four-column-ctas-h2"><?php echo $args['section_title'] ?></h2>
<?php } ?>

<div class="Module__four-column-ctas">
<?php foreach($args['ctas'] as $index => $cta) { ?>
    <a class="Module__four-column-ctas-a" href="<?php echo $cta['link']['external_link']?>">
        <img src="
            <?php echo wp_get_attachment_image_src(
                $cta['image'], 'full')[0] ?>
        ">
        <h3><?php echo $cta['title']?></h3>
        <?php if($cta['excerpt']) { ?>
            <p><? echo $cta['excerpt'] ?></p>
        <?php } ?>
    </a>
<?php }
?>
</div>