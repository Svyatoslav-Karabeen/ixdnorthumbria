<?php
/**
 * SOCIAL ICON LINKS
 * This is the template that displays social icons wherever it has been called
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 **/

global $pageTitle;
global $socialLinks;

/**==========================================================================**/
?>


<div class="social-container">
    <ul>
    <?php
        foreach ($socialLinks as $name => $link) {
            if (!empty($link)) {

                // if it's an email, then add 'mailto:' to it
                if ($name == 'email') {
                    $link = 'mailto:' . $link;
                };

                echo '<li><a class="social-link" href="' . $link . '" target="_blank"><img src="' . url . 'assets/img/icon-' . $name . '.svg" alt="' . $name . ' icon "></a></li>';
            };
        };
    ?>
    </ul>
</div>
