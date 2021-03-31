<?php get_header(); ?>

<?php 

$sizes = get_field_object('field_585adaf7b2ac9');
$lightConditions = get_field_object('field_585adabdb2ac4');
$otherOptions = array(
    'Flowering' => get_field_object('prominent_flower'),
    'Fall Colors' => get_field_object('showy_seasonal_color'),
    'Fruit/Nut Producing' => get_field_object('fruitnut_producing'),
    'Evergreen' => get_field_object('evergreen'),
);
var_dump($otherOptions);
?>

<div class=trees-wrap>
    <div class="tree-filter">
        <?php 
            foreach($sizes['choices'] as $key => $value) { ?>
                <input 
                    type="checkbox"
                    class="tree-checkbox" 
                    name="<?php echo $key ?>"
                >
                <label for="trees"><?php echo $key ?></label>
        <?php   }
            foreach($lightConditions['choices'] as $key => $value) { ?>
                <input 
                    type="checkbox"
                    class="tree-checkbox" 
                    name="<?php echo $key ?>"
                >
                <label for="trees"><?php echo $key ?></label>
        <?php   }
        ?>
        <!-- <input type="checkbox" class="tree-checkbox" name="Small">
        <label for="trees">Small</label> -->
    </div>
    <div class="trees-list">
    <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                $checkboxFields = '';
                $checkboxFields = $checkboxFields.get_fields()['size'];
                $checkboxFields = $checkboxFields.' ';
                $checkboxFields = $checkboxFields.get_fields()['light_conditions'];
                $checkboxFields = $checkboxFields.' ';
                ?>
                    <div 
                        data-fields="<?php echo $checkboxFields?>"
                        class="tree-thumbnail tree-<?php echo get_the_ID() ?>"
                    >
                        <?php 
                        $fields = get_fields();
                        if( $fields ): 
                            echo (wp_get_attachment_image($fields['primary_image']));
                            ?>
                        <?php endif; ?>
                        <h2>
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h2>
                        <p><?php echo get_fields()['size'] ?></p>
                        <p><?php echo get_fields()['light_conditions'] ?></p>
                    </div>
                <?php
            }
        }
    ?>
    </div>
</div>
<?php get_footer(); ?>