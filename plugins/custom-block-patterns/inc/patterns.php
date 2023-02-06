<?php

/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/

register_block_pattern_category(
    'Alpha Works',
    array(
        'label'     => __( 'Alpha Works', 'alpha-works-cirriculum' )
    )
);

function custom_block_pattern() {
    register_block_pattern(
        'alpha-works-cirriculum/page-heading-pattern',
        array(
            'title'       => __( 'Page Heading Pattern', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"style\":{\"color\":{\"text\":\"#7d2f4d\"},\"typography\":{\"fontSize\":\"2.5rem\",\"fontStyle\":\"normal\",\"fontWeight\":\"500\"}}} -->\n<h1 class=\"has-text-align-center has-text-color\" style=\"color:#7d2f4d;font-size:2.5rem;font-style:normal;font-weight:500\">WordPress Apprenticeship</h1>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d2f4d\"},\"typography\":{\"fontSize\":\"2rem\",\"fontStyle\":\"normal\",\"fontWeight\":\"500\"}}} -->\n<h2 class=\"has-text-align-center has-text-color\" style=\"color:#7d2f4d;font-size:2rem;font-style:normal;font-weight:500\">RoadMap</h2>\n<!-- /wp:heading -->",
           
            'categories'  => array( 'Alpha Works' ),
        )

    );
    register_block_pattern(
        'alpha-works-cirriculum/Roadmap-Pattern',
        array(
            'title'       => __( 'Roadmap Pattern', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Week 1</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Computer Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Web Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>HTML</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>HTML Best Practices</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS Measurements</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Color Formats</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Alpha Works' ),
        )

    );

    register_block_pattern(
        'alpha-works-cirriculum/Handy-Links-Pattern',
        array(
            'title'       => __( 'Handy Links Pattern', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Links</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>W3 Schools -\&nbsp;<a href=\"http://www.w3schools.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.w3schools.com</a></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS Tricks -\&nbsp;<a href=\"https://css-tricks.com/\" target=\"_blank\" rel=\"noreferrer noopener\">css-tricks.com</a></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Stack Overflow -\&nbsp;<a href=\"http://stackoverflow.com/\" target=\"_blank\" rel=\"noreferrer noopener\">stackoverflow.com</a></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Mozilla Developer Network -\&nbsp;<a href=\"https://developer.mozilla.org/en-US/\" target=\"_blank\" rel=\"noreferrer noopener\">developer.mozilla.org/en-US</a></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Free Code Camp -\&nbsp;<a href=\"http://freecodecamp.org/\" target=\"_blank\" rel=\"noreferrer noopener\">freecodecamp.org</a></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Code School -\&nbsp;<a href=\"https://www.codeschool.com/learn\" target=\"_blank\" rel=\"noreferrer noopener\">codeschool.com</a></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Colllor -\&nbsp;<a href=\"http://colllor.com/\" target=\"_blank\" rel=\"noreferrer noopener\">colllor.com</a></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Templates -\&nbsp;<a href=\"https://templated.co/\" target=\"_blank\" rel=\"noreferrer noopener\">templated.co</a></li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Alpha Works' ),
        )

    );

    register_block_pattern(
        'alpha-works-cirriculum/cirriculum-Pattern',
        array(
            'title'       => __( 'Cirriculum Pattern', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Concepts</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Introductions</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Computer Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Web Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Daily Challenge</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Intro to HTML<!-- wp:list {\"textColor\":\"black\"} -->\n<ul class=\"has-black-color has-text-color\"><!-- wp:list-item -->\n<li>Syntax</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Elements</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Attributes</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Comments</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Final Project Overview</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Take Home Challenge</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Web Basics</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li><a href=\"https://edu.gcfglobal.org/en/internetbasics/what-is-the-internet/1/\" target=\"_blank\" rel=\"noreferrer noopener\">The Internet</a><!-- wp:list {\"textColor\":\"black\"} -->\n<ul class=\"has-black-color has-text-color\"><!-- wp:list-item -->\n<li>World Wide Web</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li><a href=\"https://edu.gcfglobal.org/en/computerbasics/understanding-the-cloud/1/\" target=\"_blank\" rel=\"noreferrer noopener\">The Cloud</a></li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li><a href=\"https://www.computerhope.com/jargon/s/server.htm\" target=\"_blank\" rel=\"noreferrer noopener\">Servers</a>\&nbsp;vs Clients</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li><a href=\"https://www.botify.com/blog/what-is-a-secure-website-https-vs-http\" target=\"_blank\" rel=\"noreferrer noopener\">HTTP vs HTTPS</a></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li><a href=\"https://www.digitaltrends.com/computing/what-is-ftp-and-how-do-i-use-it/\" target=\"_blank\" rel=\"noreferrer noopener\">FTP</a>\&nbsp;vs SFTP</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li><a href=\"https://www.geeksforgeeks.org/difference-between-search-engine-and-web-browser/\" target=\"_blank\" rel=\"noreferrer noopener\">Browser vs Search Engine</a></li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Alpha Works' ),
        )

    );
    register_block_pattern(
        'alpha-works-cirriculum/code-block-image-pattern',
        array(
            'title'       => __( 'Code Block Image Pattern', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Daily Challenge</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"weeks-column\"} -->\n<div class=\"wp-block-column weeks-column\"><!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Create a file in Visual Studio Code called\\\&nbsp;<code>index.html</code></li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Copy this challenge into your Visual Studio Code file</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list -->\n\n<!-- wp:image {\"id\":41,\"width\":960,\"height\":540,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"is-style-default\"} -->\n<figure class=\"wp-block-image size-full is-resized is-style-default\"><img src=\"http://localhost:10114/wp-content/uploads/2023/02/Screen-Shot-2023-01-20-at-2.03.32-PM-2.png\" alt=\"\" class=\"wp-image-41\" width=\"960\" height=\"540\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Fill out the shortcuts for each action</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Save your work</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Right click your code \\\&gt; \"Open with Live Server\" to view your work in the browser!</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Alpha Works' ),
        )

    );
    register_block_pattern(
        'alpha-works-cirriculum/code-block-pattern',
        array(
            'title'       => __( 'Code Block Pattern', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"code-block-column-one\"} -->\n<div class=\"wp-block-column code-block-column-one\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Chapter 1</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"code-block-column-two\"} -->\n<div class=\"wp-block-column code-block-column-two\"><!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"backgroundColor\":\"black\",\"textColor\":\"white\",\"className\":\"weeks-column-code-block-paragraph\"} -->\n<p class=\"has-text-align-left weeks-column-code-block-paragraph has-white-color has-black-background-color has-text-color has-background\" style=\"font-size:1.25rem\"><code>\\\&lt;h1\\\&gt;Hello World!\\\&lt;/h1\\\&gt; (Heading Level 1)</code></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Computer Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Web Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>HTML</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>HTML Best Practices</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS Measurements</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Color Formats</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"backgroundColor\":\"black\",\"textColor\":\"white\",\"className\":\"weeks-column-code-block-paragraph\"} -->\n<p class=\"has-text-align-left weeks-column-code-block-paragraph has-white-color has-black-background-color has-text-color has-background\" style=\"font-size:1.25rem\"><code>\&lt;!DOCTYPE html\&gt; </code><br><code>\&lt;html lang=\"en\"\&gt; </code><br><code>\&lt;head\&gt; </code><br><code>\&lt;meta charset=\"UTF-8\"\&gt; \&lt;meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"\&gt; </code><br><code>\&lt;title\&gt;Page Title\&lt;/title\&gt; \&lt;/head\&gt; </code><br><code>\&lt;body\&gt; </code><br><code>\&lt;header\&gt; </code><br><code>\&lt;h1\&gt;Heading 1\&lt;/h1\&gt; \&lt;/header\&gt; </code><br><code>\&lt;div\&gt; </code><br><code>\&lt;p\&gt;Paragraph Tag\&lt;/p\&gt; \&lt;/div\&gt; </code><br><code>\&lt;/body\&gt; </code><br><code>\&lt;/html\&gt; </code><br><code><em>\&lt;!-- end page example --\&gt;</em></code></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Computer Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Web Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>HTML</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>HTML Best Practices</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS Measurements</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Color Formats</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"backgroundColor\":\"black\",\"textColor\":\"white\",\"className\":\"weeks-column-code-block-paragraph\"} -->\n<p class=\"has-text-align-left weeks-column-code-block-paragraph has-white-color has-black-background-color has-text-color has-background\" style=\"font-size:1.25rem\"><code>\\\&lt;h1\\\&gt;Hello World!\\\&lt;/h1\\\&gt; (Heading Level 1)</code><br>\\\&lt;h1\\\&gt;Hello World!\\\&lt;/h1\\\&gt; (Heading Level 1)</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Alpha Works' ),
        )

    );
    register_block_pattern(
        'alpha-works-cirriculum/code-block-pattern-two',
        array(
            'title'       => __( 'Code Block Pattern Two', 'alpha-works-cirriculum' ),
           
            'description' => _x( 'Description here', 'alpha-works-cirriculum' ),
           
            'content'     => "<!-- wp:columns {\"className\":\"weeks-columns-container\"} -->\n<div class=\"wp-block-columns weeks-columns-container\"><!-- wp:column {\"className\":\"code-block-column-one\"} -->\n<div class=\"wp-block-column code-block-column-one\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"color\":{\"text\":\"#7d304d\"},\"typography\":{\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"fontSize\":\"2rem\"}},\"className\":\"weeks-column-one-heading\"} -->\n<h2 class=\"has-text-align-center weeks-column-one-heading has-text-color\" style=\"color:#7d304d;font-size:2rem;font-style:normal;font-weight:600\">Chapter 1</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"code-block-column-two\"} -->\n<div class=\"wp-block-column code-block-column-two\"><!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"backgroundColor\":\"black\",\"textColor\":\"white\",\"className\":\"weeks-column-code-block-paragraph\"} -->\n<p class=\"has-text-align-left weeks-column-code-block-paragraph has-white-color has-black-background-color has-text-color has-background\" style=\"font-size:1.25rem\"><code>\\\\\&lt;h1\\\\\&gt;Hello World!\\\\\&lt;/h1\\\\\&gt; (Heading Level 1)</code></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list {\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"textColor\":\"black\",\"className\":\"weeks-column-two-list-container\"} -->\n<ul class=\"weeks-column-two-list-container has-black-color has-text-color\" style=\"font-size:1.25rem\"><!-- wp:list-item -->\n<li>Computer Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Web Basics</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>HTML</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>HTML Best Practices</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>CSS Measurements</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Color Formats</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"style\":{\"typography\":{\"fontSize\":\"1.25rem\"}},\"backgroundColor\":\"black\",\"textColor\":\"white\",\"className\":\"weeks-column-code-block-paragraph\"} -->\n<p class=\"has-text-align-left weeks-column-code-block-paragraph has-white-color has-black-background-color has-text-color has-background\" style=\"font-size:1.25rem\"><code>\\\\\&lt;h1\\\\\&gt;Hello World!\\\\\&lt;/h1\\\\\&gt; (Heading Level 1)</code><br>\\\\\&lt;h1\\\\\&gt;Hello World!\\\\\&lt;/h1\\\\\&gt; (Heading Level 1)</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
           
            'categories'  => array( 'Alpha Works' ),
        )

    );

}    




add_action( 'init', 'custom_block_pattern' );
