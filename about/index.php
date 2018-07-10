<?php
/**
 * ABOUT PAGE
 *
 * This is a simple template to display static, not dynamically generated content
 * about Interaction Design course.
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 1.0
 *
 **==========================================================================**/

include_once '../global-config.php';

global $debugging;

$pageTitle          = 'about';
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

                // include about page content
                $content = 'index-content-about.php';

                if (file_exists($content)) {

                    include $content;

                } else {

                    if ($debugging == 'on') {
                        echo '<pre>ooops! no content file to show</pre>';
                        echo '<pre>file ' . $content . ' does not exist</pre>';
                    }

                }

                // include footer
                get_footer();

                ?>

            </div>
        </div>

    <?php

    // include scripts
    get_scripts();

?>
