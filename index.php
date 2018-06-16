<?php
/**
 * HOME PAGE
 *
 * This is the template to collect and display everything from the <html>
 * up to </html> on home page (/).
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

include_once 'config.php';

$pageTitle          = 'home';
$pageDescription    = '';
$pageKeywords       = '';

/**==========================================================================**/
?>

<?php
    // include meta tags
    get_meta();

    ?>
        <div id="background"></div>
        <div id="container">
    <?php

        // include header
        get_header();

        // include content based on the $environment set in config file
        switch ($environment) {
            case 'countdown':
                include path . 'content-countdown.php';
                break;

            case 'newcastle':
                include path . 'content-newcastle.php';
                break;

            case 'london':
                include path . 'content-london.php';
                break;

            default:
                include path . 'content-past.php';
                break;
        };

        // include footer
        get_footer();

    ?></div><?php

    // include sidebar with event information
    get_slideshow();

    // include sidebar with event information
    get_sidebar();

    // include popup with location information
    get_popup();

    get_scripts();
?>
