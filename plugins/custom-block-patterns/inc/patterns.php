<?php

/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/

register_block_pattern_category(
    'Custom Category Name',
    array(
        'label'     => __( 'Custom Category Name', 'alpha-works-cirriculum' )
    )
);

function custom_block_pattern() {

    register_block_pattern(
        'alpha-works-cirriculum/custom-block-name',
        array(
            'title'       => __( 'Title here', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "",
           
            'categories'  => array( 'Custom Category Name' ),
        )
    );

}    

add_action( 'init', 'custom_block_pattern' );
