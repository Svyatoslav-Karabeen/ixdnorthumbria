<?php
/**
 * PROJECT PAGE
 *
 * ...
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

include_once '../../../config.php';
include_once 'project-info.php';


$pageTitle          = 'project ' . $projectName;
$pageDescription    = '';
$pageKeywords       = '';

$briefImg           = glob('assets/section-brief*.jpg');
$processImg         = glob('assets/section-process*.jpg');
$resultImg          = glob('assets/section-result*.jpg');

/**==========================================================================**/
?>


<?php
    // include meta tags
    get_meta();

    ?><div id="container"><?php

        // include header
        get_header();

    ?>

<main>
    <div class="project-container">
        <div class="project-hero">
            <?php

                $findVimeo   = 'vimeo';
                $BannerVideoURLCheck = strpos($BannerVideoURL, $findVimeo);

                if (strtolower($hasBannerVideo) === 'yes' ) {

                    if (file_exists('assets/hero-video.*')) {
                        echo '<video class="hero-video-hosted" controls><source src="assets/hero-video.mp4" type="video/mp4"><source src="assets/hero-video.mov" type="video/mov">Something is wrong with the video.</video>';
                    } elseif (!empty($BannerVideoURL)) {

                        if ($BannerVideoURLCheck == FALSE) {
                            echo '<iframe class="hero-video-yt" src="https://www.youtube.com/embed/' . substr($BannerVideoURL, 17) .' ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                        };

                        if ($BannerVideoURLCheck == TRUE) {
                            echo '<div class="hero-video-vimeo" style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/' . substr($BannerVideoURL, 18) .'?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';
                        };
                    };

                } else {

                    if (file_exists('assets/hero-img.*')) {
                        echo '<img class="hero-image" rc="assets/hero-img.*" alt="' . $projectName . ' hero image">';
                    }
                }
            ?>
        </div>

        <div class="project-content">
            <div class="project-name-wrapper">
                <h1 class="name"><?php echo ucfirst($projectName) ?></h1>
                <h2 class="type"><?php echo ucfirst($projectType) . ' by ' . ucfirst($firstName) . ' ' . ucfirst($lastName)  ?></h2>
            </div>

            <?php if(!empty('project-section-about.txt')) {?>
            <div class="project-section section-about">
                <div class="section-title">
                    about the project
                </div>
                <div class="section-content">
                    <p>
                        <?php echo file_get_contents('project-section-about.txt'); ?>
                    </p>
                </div>
            </div>
            <?php };

            if(!empty('project-section-brief.txt')) {
                foreach ($briefImg as $img) {
                    if (file_exists($img)){
                        echo '<div class="section-image-wrapper">';
                        echo '<img src="' . $img . '">';
                        echo '</div>';
                    };
                };
            ?>
            <div class="project-section section-brief">
                <div class="section-title">
                    brief
                </div>
                <div class="section-content">
                    <p>
                        <?php echo file_get_contents('project-section-brief.txt'); ?>
                    </p>
                </div>
            </div>
            <?php };

            if(!empty('project-section-process.txt')) {
                foreach ($processImg as $img) {
                    if (file_exists($img)){
                        echo '<div class="section-image-wrapper">';
                        echo '<img src="' . $img . '">';
                        echo '</div>';
                    };
                };
            ?>
            <div class="project-section section-process">
                <div class="section-title">
                    development process
                </div>
                <div class="section-content">
                    <p>
                        <?php echo file_get_contents('project-section-process.txt'); ?>
                    </p>
                </div>
            </div>
            <?php };

            if(!empty('project-section-result.txt')) {
                foreach ($resultImg as $img) {
                    if (file_exists($img)){
                        echo '<div class="section-image-wrapper">';
                        echo '<img src="' . $img . '">';
                        echo '</div>';
                    };
                };
            ?>
            <div class="project-section section-result">
                <div class="section-title">
                    final result
                </div>
                <div class="section-content">
                    <p>
                        <?php echo file_get_contents('project-section-result.txt'); ?>
                    </p>
                </div>
            </div>
        <?php }; ?>

        </div>

        <div class="project-hero">
            <?php

                $findVimeo   = 'vimeo';
                $FinalVideoURLCheck = strpos($FinalVideoURL, $findVimeo);

                if (strtolower($hasFinalVideo) === 'yes' ) {

                    if (file_exists('assets/section-result-video.*')) {
                        echo '<video class="hero-video-hosted" controls><source src="assets/section-result-video.mp4" type="video/mp4"><source src="assets/section-result-video.mov" type="video/mov">Something is wrong with the video.</video>';
                    } elseif (!empty($FinalVideoURL)) {

                        if ($FinalVideoURLCheck == FALSE) {
                            echo '<iframe class="hero-video-yt" src="https://www.youtube.com/embed/' . substr($FinalVideoURL, 17) .' ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                        };

                        if ($FinalVideoURLCheck == TRUE) {
                            echo '<div class="hero-video-vimeo" style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/' . substr($FinalVideoURL, 18) .'?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';
                        };
                    };

                } else {

                    if (file_exists('assets/section-result*.*')) {
                        echo '<img class="hero-image" rc="assets/section-result*.*" alt="' . $projectName . ' result">';
                    }
                }
            ?>
        </div>

    </div>

</main>


    <?php

    // include footer
    get_footer();

?></div><?php

get_scripts();
?>
