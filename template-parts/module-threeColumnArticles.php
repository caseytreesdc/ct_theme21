<div class="Module__three-column-articles">

<?php

$posts = $args['specific_posts'];
foreach($posts as $index => $postArray) {
    $post = get_post($postArray['post']); ?>

    <a href="<?php the_permalink() ?>">
        <img src="
            <?php echo 
                wp_get_attachment_image_src(
                    get_fields()['related_image'], 'large')[0] ?>" 
        >
        <?php the_title(); ?>
        <p>READ MORE</p>
    </a>

<?php 
    }
?>

</div>