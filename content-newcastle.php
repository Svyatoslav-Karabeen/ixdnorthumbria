<?php
/**
 * HOME PAGE >> CONTENT >> NEWCASTLE
 *
 * This is the template to display information about Reveal Show on home page
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

global $pageTitle;

/**==========================================================================**/
?>


    <main>
        <div class="intro-container">

            <div class="title-wrapper">
                <h1 class="title-main">Welcome <br> to the Reveal Show 2018!</h1>
                <h2 class="title-caption">We're pleased to invite you to the annual Interaction Design reveal show, held at Northumbria University.<br /><br /> Feel free to come along and visit our variety of work.</h2>
            </div>

            <div class="info-buttons-wrapper" id="info-buttons">
                <!-- <button class="button-lg button-white" id="location-button" onclick="showPopup()">
                    More information
                </button> -->
                <!-- <button class="button-lg bttuon-white" id="sidebar-button" onclick="showSidebar()">
                    More information
                </button>
                <button class="button-lg button-icon" id="location-button" onclick="showLocation()">
                    <img src="<?php echo url . 'assets/img/icon-location.svg' ?>" alt="location icon">
                </button> -->

                <?php get_socials(); ?>
            </div>

        </div>
    </main>
