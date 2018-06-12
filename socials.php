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


<div class="links-wrapper">
    <?php
        foreach ($socialLinks as $name => $link) {
            if (!empty($link)) {

                if ($name == 'email') {
                    $link = 'mailto:' . $link;
                };

                echo '<a class="link-item" href="' . $link . '" target="_blank"><img src="' . url . 'assets/img/icon-' . $name . '.svg" alt="' . $name . ' icon "></a>';
            };
        };
    ?>
</div>
