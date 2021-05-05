<?php get_header(); ?>

<?php 

// uncomment next line to display tree properties
// $debugTreeFilters = true;

$sizes = get_field_object('field_585adaf7b2ac9');
$lightConditions = get_field_object('field_585adabdb2ac4');
$otherOptions = array(
        'Flowering' => get_field_object('prominent_flower'),
        'Fall Colors' => get_field_object('showy_seasonal_color'),
        'Fruit/Nut Producing' => get_field_object('fruitnut_producing'),
        'Evergreen' => get_field_object('evergreen'),
        'Tree Rebate' => get_field_object('tree_rebate'),
        'Riversmart Homes' => get_field_object('riversmart_homes'),
    );
?>

<div class="trees-wrap">
    <div class="tree-filter__display">
        <p>Show Filter Options</p>
    </div>
    <div class="tree-filter">
        <h2>Filter Trees</h2>
        <div class="tree-filter__group">
            <h3>Sizes</h3>
        <?php foreach($sizes['choices'] as $key => $value) { ?>
            <div>
                <input
                    type="checkbox"
                    class="tree-checkbox"
                    name="<?php echo $key ?>"
                    id="<?php echo $key ?>"
                >
                <label for="<?php echo $key ?>"><?php echo $value ?></label>
            </div>
        <?php  } ?>
        </div>
        <div class="tree-filter__group">
            <h3>Light Conditions</h3>
        <?php foreach($lightConditions['choices'] as $key => $value) { ?>
            <div>
                <input
                    type="checkbox"
                    class="tree-checkbox"
                    name="<?php echo $key ?>"
                    id="<?php echo $key ?>"
                >
                <label for="<?php echo $key ?>"><?php echo $value ?></label>
            </div>
        <?php  } ?>
        </div>
        <div class="tree-filter__group">
            <h3>Other Options</h3>
        <?php foreach($otherOptions as $key => $value) { ?>
            <div>
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
        <!-- Trees selection from dropdown -->
        <form>
            <label>View a specific tree</label>
            <select class="tree-dropdown">
                <option value="/trees-list/">Select a Tree</option>
                <?php
                    $treeArgs = array(  
                        'post_type' => 'trees',
                        'orderby' => 'title',
                        'order' => 'ASC'
                    );

                    $treeQuery = new WP_query($treeArgs);
                    if ( $treeQuery->have_posts() ) {
                        while ( $treeQuery->have_posts() ) {
                            $treeQuery->the_post(); ?>
                            <option
                                class="tree-select"
                                value="<?php the_permalink();?>"
                            >
                                <?php the_title()?>
                            </option>
                    <?php };
                }
                ?>
            </select>
        </form>

        <!-- Reset button  -->
        <div class="tree-filter__reset"><p>RESET FORM</p></div>
    </div>

    <div class="trees-list">
        <div class="tree-text-thumbnail">
            <p>
                The trees in this guide are well adapted to the soil and conditions present in Washington, D.C. We encourage you to plant medium and larger-sized trees, as they provide greater benefits to the city than smaller trees. Young trees require 1.5 inches of rain or 25 gallons of water per week for the first three years to establish their roots.
            </p>
        </div>
    <?php
        if( $treeQuery->have_posts() ) {
            while( $treeQuery->have_posts() ) {
                $treeQuery->the_post();
                
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
                get_fields()['evergreen'] ||
                get_fields()['tree_rebate'] ||
                get_fields()['riversmart_homes'] ) {
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
                    if(get_fields()['tree_rebate']) {
                        $checkboxFields = $checkboxFields.'tree_rebate';
                        $checkboxFields = $checkboxFields.' ';
                    }
                    if(get_fields()['riversmart_homes']) {
                        $checkboxFields = $checkboxFields.'riversmart_homes';
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

                    <!-- use to display more tree options when developing - change the variable on line 6 to true -->
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
                    <!-- end debug options module  -->

                </a>
                <!-- end individual tree markup  -->
                <?php
            } //endwhile
        } //endif
    ?>
    </div>
</div>
<?php get_footer(); ?>