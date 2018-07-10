<?php
/**
 * HOME PAGE
 *
 * This is the template to collect all parts and display everything from the <html>
 * up to </html> on home page (/).
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 1.0
 *
 **==========================================================================**/

include_once 'global-config.php';

global $debugging;

$pageTitle          = 'home';
$pageDescription    = '';
$pageKeywords       = '';

/**==========================================================================**/
?>

<?php

    // include meta tags
    get_meta();

    ?>
        <div id="container">
            <div id="container-inner">

                <?php

                // include header
                get_header();

                // include content based on the environmentType set in
                // global-config.php file
                $content = 'index-content-' . environmentType . '.php';

                if (file_exists($content)) {

                    include $content;

                } else {

                    if ($debugging == 'on') {
                        echo '<pre>ooops! looks like someone messed up with environmentType</pre>';
                        echo '<pre>file ' . $content . ' does not exist</pre>';
                    }

                }

                // include footer
                get_footer();

                ?>

            </div>
        </div>

    <?php
    /*
    // include popup based on the environmentType set in global-config.php file
    $popup = 'index-popup-' . environmentType . '.php';

    if (file_exists($popup)) {

        include $popup;

    } else {

        if ($debugging == 'on') {
            echo '<pre>ooops! looks like someone messed up with environmentType</pre>';
            echo '<pre>file ' . $popup . ' does not exist</pre>';
        }

    }
    */

    // include scripts
    get_scripts();

?>
