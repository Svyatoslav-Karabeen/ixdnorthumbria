<?php
/**
 * HOME PAGE
 * This is the template that collects and displays everything from the <html>
 * up to </html>
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.2
 **/

include_once ('config.php');

$pageTitle          = 'home';
$pageDescription    = 'description goes here';
$pageKeywords       = 'keywords go here';

/**==========================================================================**/
?>

<?php
    // include header
    get_header();

    // include content based on the $environment set in config file
    switch ($environment) {
        case 'countdown':
            include path . 'content-countdown.php';
            break;

        case 'local':
            include path . 'content-local.php';
            break;

        case 'newcastle':
            include path . 'content-newcastle.php';
            break;

        case 'london':
            include path . 'content-london.php';
            break;

        case 'past':
            include path . 'content-past.php';
            break;

        default:
            include path . 'content-local.php';
            break;
    };

    // include footer
    get_footer();

    // include sidebar with event information
    get_sidebar();

    // include popup with location information
    get_popup();
?>
