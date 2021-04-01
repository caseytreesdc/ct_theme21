<?php get_header(); ?>

<?php 

//make true to display tree properties
$debugTreeFilters = false;

$sizes = get_field_object('field_585adaf7b2ac9');
$lightConditions = get_field_object('field_585adabdb2ac4');
$otherOptions = array(
        'Flowering' => get_field_object('prominent_flower'),
        'Fall Colors' => get_field_object('showy_seasonal_color'),
        'Fruit/Nut Producing' => get_field_object('fruitnut_producing'),
        'Evergreen' => get_field_object('evergreen'),
    );
?>

<div class=trees-wrap>

    <div class="tree-filter">
        <?php 
            foreach($sizes['choices'] as $key => $value) { ?>
                <div class="tree-filter__group">
                    <input 
                        type="checkbox"
                        class="tree-checkbox" 
                        name="<?php echo $key ?>"
                        id="<?php echo $key ?>"
                    >
                    <label for="<?php echo $key ?>"><?php echo $value ?></label>
                </div>
        <?php   }
            foreach($lightConditions['choices'] as $key => $value) { ?>
                <div class="tree-filter__group">
                    <input 
                        type="checkbox"
                        class="tree-checkbox" 
                        name="<?php echo $key ?>"
                        id="<?php echo $key ?>"
                    >
                    <label for="<?php echo $key ?>"><?php echo $value ?></label>
                </div>
        <?php   }
            foreach($otherOptions as $key => $value) { ?>
                <div class="tree-filter__group">
                    <input 
                        type="checkbox"
                        class="tree-checkbox" 
                        name="<?php echo $key ?>"
                        id="<?php echo $key ?>"
                    >
                    <label for="<?php echo $key ?>"><?php echo $key ?></label>
                </div>
        <?php } ?>
    </div>

    <div class="trees-list">
    <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();

                $checkboxFields = '';

                //get the size
                $checkboxFields = $checkboxFields.get_fields()['size'];
                $checkboxFields = $checkboxFields.' ';
                
                //get the light condition
                if (get_fields()['light_conditions'] === 'shade') {
                    $checkboxFields = $checkboxFields.'full-shade';
                } else {
                    $checkboxFields = $checkboxFields.get_fields()['light_conditions'];
                }
                $checkboxFields = $checkboxFields.' ';

                //get other options
                if (get_fields()['prominent_flower'] ||
                get_fields()['showy_seasonal_color'] ||
                get_fields()['fruitnut_producing'] ||
                get_fields()['evergreen'] ) {
                    if(get_fields()['prominent_flower']) {
                        $checkboxFields = $checkboxFields.'prominent_flower';
                        $checkboxFields = $checkboxFields.' ';
                    }
                    if(get_fields()['showy_seasonal_color']) {
                        $checkboxFields = $checkboxFields.'showy_seasonal_color';
                        $checkboxFields = $checkboxFields.' ';
                    }
                    if(get_fields()['fruitnut_producing']) {
                        $checkboxFields = $checkboxFields.'fruitnut_producing';
                        $checkboxFields = $checkboxFields.' ';
                    }
                    if(get_fields()['evergreen']) {
                        $checkboxFields = $checkboxFields.'evergreen';
                        $checkboxFields = $checkboxFields.' ';
                    }
                }
                ?>

                <!-- begin individual tree markup  -->
                <a href="<?php the_permalink();?>">
                    <div 
                        data-fields="<?php echo $checkboxFields?>"
                        class="tree-thumbnail tree-<?php echo get_the_ID() ?>"
                    >
                        <?php echo wp_get_attachment_image(get_fields()['primary_image'], "medium");?>
                        <h2>
                            <?php the_title();?>
                        </h2>
                        <p class="tree-size-p"><?php echo get_fields()['size'] ?></p>
                        <div class="tree-icons">
                            <?php
                                if(get_fields()['tree_rebate']) {
                                    get_template_part('svgs/inline', 'rebate');
                                }
                                if(get_fields()['riversmart_homes']) {
                                    get_template_part('svgs/inline', 'riversmarthomes');
                                } 
                            ?>
                        </div>
                    </div>
                    
                    
                    <!-- use to display more tree options when developing change the variable on line 6 to true -->
                    <?php if($debugTreeFilters) { ?>
                        <p><?php echo get_fields()['light_conditions'] ?></p>
                        <p><?php 
                            if(get_fields()['prominent_flower']) {
                                echo 'FLOWERING';
                            }
                        ?></p>
                        <p><?php 
                            if(get_fields()['showy_seasonal_color']) {
                                echo 'FALL COLORS';
                            }
                        ?></p>
                        <p><?php 
                            if(get_fields()['fruitnut_producing']) {
                                echo 'FRUITS AND NUTS';
                            }
                        ?></p>
                        <p><?php 
                            if(get_fields()['evergreen']) {
                                echo 'EVERGREEN';
                            }
                        ?></p>
                    <?php } ?>
                </a>
                <?php
            } //endwhile
        } //endif
    ?>
    </div>
</div>
<?php get_footer(); ?>