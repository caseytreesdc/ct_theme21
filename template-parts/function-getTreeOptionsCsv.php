<!-- Use this function to generate a csv of the tree fields -->


<?php

    function get_tree_options_csv() {

        $fp = fopen('wp-content/themes/ct_theme21/resources/wp_tree-options.csv', 'w');

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

        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
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

?>