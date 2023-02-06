<?php

/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/

register_block_pattern_category(
    'Alpha Works Patterns',
    array(
        'label'     => __( 'Alpha Works Patterns', 'alpha-works-cirriculum' )
    )
);

function custom_alpha_works_block_pattern() {

    register_block_pattern(
        'alpha-works-cirriculum/Alpha Works Patterns',
        array(
            'title'       => __( 'Handy Links Pattern', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Week 1</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Alpha Works Patterns' ),
        )

    );
    register_block_pattern(
        'alpha-works-cirriculum/Alpha Works Patterns',
        array(
            'title'       => __( 'Handy Links Pattern', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Week 1</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>lorem</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Alpha Works Patterns' ),
        )

    );


}    




add_action( 'init', 'custom_block_pattern' );
