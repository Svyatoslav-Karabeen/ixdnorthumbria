<?php
/**
 * SOCIAL ICONS
 *
 * This is the template to display icons for IxD social media wherever the
 * template has been called.
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

global $pageTitle;
global $socialLinks;

/**==========================================================================**/
?>

<div class="socials-wrapper">
    <ul>
    <?php
        foreach ($socialLinks as $name => $link) {
            if (!empty($link)) {

                // if it's an email, then add 'mailto:' to it
                if ($name == 'email') {
                    $link = 'mailto:' . $link;
                };

                echo '<li><a class="link-social" href="' . $link . '" target="_blank"><img src="' . url . 'assets/img/icon-' . $name . '.svg" alt="' . $name . ' icon "></a></li>';
            };
        };
    ?>
    </ul>
</div>
