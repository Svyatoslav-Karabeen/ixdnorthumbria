<?php
/**
 * PROJECT PAGE
 *
 * This is a template to display information about some particular project
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 1.0
 *
 **==========================================================================**/

include_once '../../../global-config.php';
include_once 'project-info.php';


$pageTitle          = 'project';
$pageDescription    = '';
$pageKeywords       = '';

$heroMedia          = glob('assets/hero-*.{jpg,png,gif,mp4}', GLOB_BRACE);
$imgAboutArray      = glob('assets/section-about-*.{jpg,png,gif}', GLOB_BRACE);
$imgBriefArray      = glob('assets/section-brief-*.{jpg,png,gif}', GLOB_BRACE);
$imgProcessArray    = glob('assets/section-process-*.{jpg,png,gif}', GLOB_BRACE);
$imgResultArray     = glob('assets/section-result-*.{jpg,png,gif}', GLOB_BRACE);

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

                ?>

                <main>
                    <?php
                        // check if either hero video or hero image exists
                        if ((count($heroMedia) > 0)):
                    ?>
                    <div id="hero-container">
                        <div class="hero-wrapper">
                            <?php

                            // check if it has video first. if so, echo the video
                            if ($hasBannerVideo == 'yes') {

                                echo '<div class="images-wrapper img-col-1 video">';

                                    if ((environmentType == 'local') && (file_exists('assets/hero-video.mp4'))) {
                                    ?>
                                        <button id="video-hero-btn" class="button button-none" onclick="heroPlayPause()">
                                            <div class="play-button-wrapper">
                                                <i class="fas fa-play fa-2x"></i>
                                            </div>
                                        </button>
                                        <video id="video-hero" width="100%" height="100%">
                                                <source src="assets/hero-video.mp4" type="video/mp4">
                                                Your browser does not support HTML5 video.
                                        </video>
                                    <?php
                                    } else {

                                        if (!empty($BannerVideoURL)) {

                                            $isVimeo = strpos($BannerVideoURL, 'vimeo');

                                            if ($isVimeo === false ) {
                                                echo '<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/' . substr($BannerVideoURL, 17) . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                                            } else {
                                                echo '<div id="video-final-vimeo" style="width:100%;padding:56.25% 0 0 0;position:relative;">';
                                                    echo '<iframe src="https://player.vimeo.com/video/' . substr($BannerVideoURL, 18) . '?title=0;byline=0;portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>';
                                                echo '</div><script src="https://player.vimeo.com/api/player.js"></script>';
                                            }
                                        }
                                    }

                                echo '</div>';

                            // if not, then just echo image(s)
                            } else {

                                echo '<div class="images-wrapper img-col-1">';
                                    echo '<img src="assets/hero-image.jpg" alt="' . $projectName . ' hero image">';
                                echo '</div>';
                            }

                            ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div id="intro-container">
                        <div class="intro-wrapper">
                            <h1><?php echo ucfirst($projectName) ?></h1>
                            <div class="meta-info-wrapper">
                                <div class="author">
                                    <p>
                                    <?php
                                        echo ucfirst($projectType) . ' project by ';
                                        echo '<a class="link link-bold link-gray link-dotted" href="' . absolutURL . 'people/' . strtolower($firstName) . '_' . strtolower($lastName) . '">' . ucfirst($firstName) . ' ' . ucfirst($lastName) . '</a>' ;

                                        if ($hasMate == 'yes') {
                                            echo ' and ';
                                            echo '<a class="link link-bold link-gray link-dotted" href="' . absolutURL . 'people/' . strtolower(str_replace(' ', '_', $mateName)) . '">' . ucfirst($mateName) . '</a>' ;
                                        }
                                    ?>
                                    </p>
                                </div>

                                <div class="scope-of-work">
                                    <ul>
                                        <p>Scope of work:</p>
                                        <?php
                                            if (!empty($projectScope)) {
                                                foreach ($projectScope as $projectArea) {
                                                    echo '<li>' . ucfirst($projectArea) . '</li>';
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        // check if description exists
                        if (file_exists('project-section-about.txt')) :
                    ?>
                    <div id="section-about">
                        <div class="section-wrapper">
                            <div class="section-title">
                                <h2>About the project</h2>
                            </div>

                            <div class="section-content">
                                <?php echo file_get_contents('project-section-about.txt'); ?>
                            </div>
                        </div>

                        <?php
                            if ((count($imgAboutArray) > 0)) {

                                $imgCount = count($imgAboutArray);

                                echo '<div class="images-wrapper img-col-' . $imgCount . '">';

                                    foreach ($imgAboutArray as $img) {
                                        echo '<img src="' . $img .'" alt="' . $projectName . ' about image">';
                                    }

                                echo '</div>';
                            }
                        ?>
                    </div>
                    <?php endif; ?>

                    <?php
                        // check if description exists
                        if (file_exists('project-section-brief.txt')) :
                    ?>
                    <div id="section-brief">
                        <div class="section-wrapper">
                            <div class="section-title">
                                <h2>Brief</h2>
                            </div>

                            <div class="section-content">
                                <?php echo file_get_contents('project-section-brief.txt'); ?>
                            </div>
                        </div>

                        <?php
                            if ((count($imgBriefArray) > 0)) {

                                $imgCount = count($imgBriefArray);

                                echo '<div class="images-wrapper img-col-' . $imgCount . '">';

                                    foreach ($imgBriefArray as $img) {
                                        echo '<img src="' . $img .'" alt="' . $projectName . ' brief image">';
                                    }

                                echo '</div>';
                            }
                        ?>

                    </div>
                    <?php endif; ?>

                    <?php
                        // check if description exists
                        if (file_exists('project-section-process.txt')) :
                    ?>
                    <div id="section-process">
                        <div class="section-wrapper">
                            <div class="section-title">
                                <h2>Development process</h2>
                            </div>

                            <div class="section-content">
                                <?php echo file_get_contents('project-section-process.txt'); ?>
                            </div>
                        </div>

                        <?php
                            if ((count($imgProcessArray) > 0)) {

                                $imgCount = count($imgProcessArray);

                                echo '<div class="images-wrapper img-col-' . $imgCount . '">';

                                    foreach ($imgProcessArray as $img) {
                                        echo '<img src="' . $img .'" alt="' . $projectName . ' process image">';
                                    }

                                echo '</div>';
                            }
                        ?>
                    </div>
                    <?php endif; ?>

                    <?php
                        // check if description exists
                        if (file_exists('project-section-result.txt')) :
                    ?>
                    <div id="section-result">
                        <div class="section-wrapper">
                            <div class="section-title">
                                <h2>Final result</h2>
                            </div>

                            <div class="section-content">
                                <?php
                                    echo file_get_contents('project-section-result.txt');

                                    if ($hasDesDoc == 'yes') {
                                        echo '<a class="button button-gradient" href="assets/desdoc.pdf" target="_blank">review design document</a>';
                                    }
                                ?>
                            </div>
                        </div>

                        <?php

                            // in case of final slider...
                            if ($hasFinalSlider == 'yes') {

                                // create a list of media files
                                echo '<div class="images-wrapper img-col-1 slider">';
                                    echo '<button id="prev-slide-btn" class="button button-none button-slider"><i class="fas fa-chevron-left fa-lg"></i></button>';
                                    echo '<button id="next-slide-btn" class="button button-none button-slider"><i class="fas fa-chevron-right fa-lg"></i></button>';

                                    echo '<ul>';

                                        // if it includes video, put it in the first place
                                        if ($hasFinalVideo == 'yes') {

                                            if ((environmentType == 'local') && (file_exists('assets/section-result-video.mp4'))) {
                                            ?>
                                                <li class="video">
                                                    <button id="video-final-btn" class="button button-none" onclick="finalPlayPause()">
                                                        <div class="play-button-wrapper">
                                                            <i class="fas fa-play fa-2x"></i>
                                                        </div>
                                                    </button>
                                                    <video id="video-final-result" width="100%" height="100%">
                                                        <source src="assets/section-result-video.mp4" type="video/mp4">
                                                        Your browser does not support HTML5 video.
                                                    </video>
                                                </li>
                                            <?php
                                            } else {

                                                if (!empty($FinalVideoURL)) {

                                                    $isVimeo = strpos($FinalVideoURL, 'vimeo');

                                                    if ($isVimeo === false ) {
                                                        echo '<li><iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/' . substr($FinalVideoURL, 17) . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>';
                                                    } else {
                                                        echo '<li>';
                                                            echo '<div id="video-final-vimeo" style="width:100%;padding:56.25% 0 0 0;position:relative;">';
                                                                echo '<iframe src="https://player.vimeo.com/video/' . substr($FinalVideoURL, 18) . '?title=0;byline=0;portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>';
                                                            echo '</div><script src="https://player.vimeo.com/api/player.js"></script>';
                                                        echo '</li>';
                                                    }
                                                }
                                            }
                                        }

                                        foreach ($imgResultArray as $img) {
                                            echo '<li><img src="' . $img .'" alt="' . $projectName . ' result image"></li>';
                                        }

                                    echo '</ul>';
                                echo '</div>';

                            // in other case...
                            } else {

                                // check if it has video first. if so, echo the video
                                if ($hasFinalVideo == 'yes') {

                                    echo '<div class="images-wrapper img-col-1 video">';

                                        if ((environmentType == 'local') && (file_exists('assets/section-result-video.mp4'))) {
                                        ?>
                                            <button id="video-final-btn" class="button button-none" onclick="finalPlayPause()">
                                                <div class="play-button-wrapper">
                                                    <i class="fas fa-play fa-2x"></i>
                                                </div>
                                            </button>
                                            <video id="video-final-result" width="100%" height="100%">
                                                    <source src="assets/section-result-video.mp4" type="video/mp4">
                                                    Your browser does not support HTML5 video.
                                            </video>
                                        <?php
                                        } else {

                                            if (!empty($FinalVideoURL)) {

                                                $isVimeo = strpos($FinalVideoURL, 'vimeo');

                                                if ($isVimeo === false ) {
                                                    echo '<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/' . substr($FinalVideoURL, 17) . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
                                                } else {
                                                    echo '<div id="video-final-vimeo" style="width:100%;padding:56.25% 0 0 0;position:relative;">';
                                                        echo '<iframe src="https://player.vimeo.com/video/' . substr($FinalVideoURL, 18) . '?title=0;byline=0;portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>';
                                                    echo '</div><script src="https://player.vimeo.com/api/player.js"></script>';
                                                }
                                            }
                                        }

                                    echo '</div>';

                                // if not, then just echo image(s)
                                } else {

                                    if ((count($imgResultArray) > 0)) {

                                        $imgCount = count($imgResultArray);
                                        echo '<div class="images-wrapper img-col-' . $imgCount . '">';

                                            foreach ($imgResultArray as $img) {
                                                echo '<img src="' . $img .'" alt="' . $projectName . ' result image">';
                                            }

                                        echo '</div>';
                                    }
                                }
                            }
                        ?>
                    </div>
                    <?php endif; ?>

                </main>
                <?php

                // include footer
                get_footer();

                ?>

            </div>
        </div>

    <?php

    // include scripts
    get_scripts();

?>
