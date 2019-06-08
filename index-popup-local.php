<?php
/**
 * HOME PAGE >> CONTENT >> NEWCASTLE >> Popup
 *
 * This is the template to display event map and additional information for the
 * either Reveal Show or D&AD event.
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

global $environment;
global $mapsKey;

/**==========================================================================**/
?>


<div id="popup-container" class="">
    <div class="showreel-container">
        <div class="showreel-wrapper">
            <?php if (file_exists('assets/files/showreel.mp4')): ?>
                <video id="video-showreel" width="100%" height="100%" controls>
                        <source src="assets/files/showreel.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                </video>
            <?php endif; ?>
        </div>
        <button class="link link-gray link-bold" id="popup-close" onclick="hidePopup()">close</button>
    </div>
</div>
