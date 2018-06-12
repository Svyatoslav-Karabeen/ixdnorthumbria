<?php
/**
 * HOME PAGE >> CONTENT >> COUNTDOWN
 * This is the template that displays a countdown on home page
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 **/

global $pageTitle;

/**==========================================================================**/
?>

    <main>
        <div class="content">
            <h1 class="heading-main">watch this space</h1>
            <h2 class="heading-caption">we're about to announce something exciting</h2>

            <div id="countdown-container">
                <div class="section-wrapper">
                    <div class="number" id="days"></div>
                    <div class="caption">days</div>
                </div>
                <div class="section-wrapper">
                    <div class="number" id="hours"></div>
                    <div class="caption">hours</div>
                </div>
                <div class="section-wrapper">
                    <div class="number" id="minutes"></div>
                    <div class="caption">minutes</div>
                </div>
                <div class="section-wrapper">
                    <div class="number" id="seconds"></div>
                    <div class="caption">seconds</div>
                </div>
            </div>
        </div>

        <?php
            // include social icons
            get_socials();
        ?>
    </main>

    <div id="particles-js"></div>
