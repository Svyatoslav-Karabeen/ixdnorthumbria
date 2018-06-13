<?php
/**
 * ABOUT PAGE
 * This is the template that collects and displays everything from the <html>
 * up to </html> on '/about/'
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.2
 */

// include config
include_once '../config.php';

// defina and set necessary variables for this page
$pageTitle          = 'about';
$pageDescription    = 'description';

?>

<?php
    // include header
    get_header();

    include 'content-about.php';

    // include footer
    get_footer();
?>
