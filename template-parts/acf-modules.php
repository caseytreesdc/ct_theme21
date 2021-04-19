<?php 

$modules = get_field('modules');

if($modules) {
    foreach($modules as $module) {
        if($module['acf_fc_layout'] == 'horizontal_rule') {
            get_template_part('template-parts/module', 'horizontalRule', $module);
        } else if($module['acf_fc_layout'] == 'secondary_content') {
            get_template_part('template-parts/module', 'secondaryContent', $module);
        } else if($module['acf_fc_layout'] == 'three_column_articles') {
            get_template_part('template-parts/module', 'threeColumnArticles', $module);
        } else if($module['acf_fc_layout'] == 'full_width_cta') {
            get_template_part('template-parts/module', 'fullWidthCta', $module);
        } else if($module['acf_fc_layout'] == 'four_column_ctas') {
            get_template_part('template-parts/module', 'fourColumnCtas', $module);
        }
    }    
}

?>
