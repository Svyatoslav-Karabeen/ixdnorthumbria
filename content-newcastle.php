<?php
/**
 * HOME PAGE >> CONTENT >> NEWCASTLE
 * This is the template that displays information about reveal show on home page
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 **/

global $pageTitle;

/**==========================================================================**/
?>

    <main class="gradient">
        <div class="content">
            <h1 class="heading-main">final_final_final.show</h1>
            <h2 class="heading-caption">we're pleased to invite you to the annual Interaction Design reveal show</h2>

            <div id="info-buttons-container">
                <button class="button-large" id="sidebar-button" onclick="showSidebar()">More info</button>
                <button class="button-icon" id="location-button" onclick="showLocation()">
                    <img src="<?php echo url . 'assets/img/icon-location.svg' ?>" alt="location icon">
                </button>
            </div>
        </div>

        <?php
            // include social icons
            get_socials();
        ?>
    </main>
