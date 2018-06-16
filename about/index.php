<?php
/**
 * ABOUT PAGE
 *
 * This is a simple template to display static, not dynamically generated content
 * about Interaction Design course
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

include_once '../config.php';

$pageTitle          = 'about';
$pageDescription    = '';
$pageKeywords       = '';

/**==========================================================================**/
?>

<?php
    // include meta tags
    get_meta();

    ?><div id="container"><?php

        // include header
        get_header();

        include 'content-about.php';

        // include footer
        get_footer();

    ?></div><?php

    get_scripts();
?>
