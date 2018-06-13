<?php
/**
 * ABOUT PAGE
 * This is the template that collects and displays everything from the <html>
 * up to </html> on '/about/'
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.2
 **/

include_once '../config.php';

$pageTitle          = 'about';
$pageDescription    = 'description';
$pageKeywords       = 'keywords go here';

/**==========================================================================**/
?>

<?php
    // include header
    get_header();

    include 'content-about.php';

    // include footer
    get_footer();
?>
