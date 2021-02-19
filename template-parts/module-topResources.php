<?php 
    $fields = get_fields();
    if( $fields ): 
        // var_dump($fields);
        $resource1 = array(
            'title' => $fields['top_resource_1']->post_title,
            'imageSrc' => $fields['resource_1_thumbnail']['url'],
            'description' => $fields['resource_1_description'],
            'ID' => $fields['top_resource_1']->ID
        );
        $resource2 = array(
            'title' => $fields['top_resource_2']->post_title,
            'imageSrc' => $fields['resource_2_thumbnail']['url'],
            'description' => $fields['resource_2_description'],
            'ID' => $fields['top_resource_2']->ID
        );
        $resource3 = array(
            'title' => $fields['top_resource_3']->post_title,
            'imageSrc' => $fields['resource_3_thumbnail']['url'],
            'description' => $fields['resource_3_description'],
            'ID' => $fields['top_resource_3']->ID
        );
    endif; 
    
    $topResources = array($resource1, $resource2, $resource3);
    
    for($i = 0; $i < count($topResources); $i++) {
?>
        <div class="Resources__Top-module">    
            <div class="Resources__Top-image">
                <img class="Resources__Top-image-img" src="<?php echo $topResources[$i]['imageSrc'] ?>" alt="" />
            </div>
            <a class="Resources__Top-text-title-a" href="<?php get_post_permalink($topResources[$i]['ID']) ?>"
                ><?php echo $topResources[$i]['title'] ?></a
            >            
            <p class="Resources__Top-description">
                <?php echo $topResources[$i]['description']; ?>
            </p>
            <a class="Resources__Top-seymore" target="_blank" href="<?php echo get_post_permalink($topResources[$i]['ID']) ?>"
                >SEE MORE</a
            >
        </div>
<?php
    }
?>