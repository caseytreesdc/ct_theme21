<!-- Uncomment the function call at the bottom of this file to call this function 
and also Insert the below link into archive-trees.php 
`get_template_part('template-parts/function', 'getTreeOptionsCsv')`
to generate a csv of the tree fields in the root directory -->

<?php

    function get_tree_options_csv() {

        $fp = fopen('wp-content/themes/ct_theme21/wp_tree-options.csv', 'w');

        $csvTreeQueryArgs = array(
            'post_type' => 'trees',
            'orderby' => 'title',
            'order' => 'ASC',
            'posts_per_page' => -1
        );

        $csvTreeQuery = new WP_Query($csvTreeQueryArgs);

        $columns = array(
            'display_name',
            // 'scientific_name',
            'native',
            'evergreen',
            'light_conditions',
            'soil_conditions',
            'drought_tolerant',
            'air_pollution_tolerant',
            'salt_tolerant',
            'size',
            'prominent_flower',
            'showy_seasonal_color',
            'fruitnut_producing',
            'tree_rebate',
            'riversmart_homes'
            );

        fputcsv($fp, $columns);

        if( $csvTreeQuery->have_posts() ) {
            while( $csvTreeQuery->have_posts() ) {
                $csvTreeQuery->the_post();
                ?>
                <?php 

                $fields = get_fields();
                
                if( $fields ): 
                    // var_dump($fields);
                    $thisTree = array();
                    foreach($columns as $column) {
                        if($column == 'display_name' && $fields[$column] == '') {
                            var_dump($fields[$column]);
                            $fields[$column] = get_the_title();
                            var_dump($fields[$column]);
                        }
                        array_push($thisTree, $fields[$column]);
                    };
                    fputcsv($fp, $thisTree);
                    
                ?>
                
                <?php endif; ?>
                <?php
            }
        }
        fclose($fp);
    }

    // get_tree_options_csv();
?>