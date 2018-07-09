<?php
/**
 * PROFILE PAGE
 *
 * This is a template to display information about some particular student
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 1.0
 *
 **==========================================================================**/

include_once '../../global-config.php';
include_once 'student-info.php';

global $debugging;

$pageTitle          = 'profile';
$pageDescription    = '';
$pageKeywords       = '';

$projectInfo        = glob('../../work/' . strtolower($firstName) . '_' . strtolower($lastName) . '*/*/project-info.php');

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
                    <div id="profile-container">
                        <div class="photo-wrapper">
                            <div class="backlink-wrapper">
                                <button class="link link-gray link-bold link-back" onclick="history.back();">
                                    <i class="fas fa-angle-left fa-lg"></i>
                                    back
                                </button>
                            </div>

                            <div class="photo-content">

                                <?php

                                    // find project cover image
                                    $userpic = 'userpic.png';

                                    // check if the file exist, if not replace with default one
                                    if ( file_exists($userpic) ) {
                                        $userpic = $userpic;
                                    } else {
                                        $userpic = absolutURL . 'assets/img/default-userpic.png';
                                    };

                                ?>

                                <img class="photo" src="<?php echo $userpic; ?>" alt="<?php echo $firstName . ' ' . $lastName ?>">
                            </div>
                        </div>

                        <div class="content-wrapper">
                            <div class="name-wrapper">
                                <h1 class="name"><?php echo ucfirst($firstName) . ' ' . ucfirst($lastName) ?></h1>
                                <p class="title"><?php echo ucfirst($title) ?> Designer</p>
                            </div>

                            <div class="bio-wrapper">
                                <p><?php echo $bio ?></p>
                            </div>

                            <div class="employment-wrapper">
                                <p>
                                <?php
                                if ($openToOffers == 'yes') {
                                    echo "I'm always open to new opportunities and challenges, and look forward to working with ";

                                    if ($preferableCompany == 'any') {
                                        echo "a great team ";
                                    } else {
                                        echo "some great " . $preferableCompany;
                                    };

                                    if ($openToRelocation == 'yes') {
                                        echo " from " . $preferableLocation . " or any other place around the globe. ";
                                    } else {
                                        echo " from " . $currentLocation . " or areas nearby. ";
                                    };

                                    echo "So if you're interested, don't hesitate to get in touch to discuss how we can work together.";

                                } else {
                                    echo "It seems like I already found my place in the industry. However, new contacts are never superfluous so let's get in touch and see where this can lead us.";
                                };

                                ?>
                                </p>
                            </div>

                            <div class="links-wrapper">
                                <?php

                                    $remuse = 'resume.pdf';
                                    if ( file_exists($remuse) ) :

                                ?>

                                <a class="button button-gradient" href="resume.pdf" target="_blank">
                                    <i class="fas fa-file-download"></i>
                                    resume
                                </a>

                                <?php

                                    endif;

                                ?>
                                <div class="contacts-wrapper">
                                    <ul>
                                        <?php

                                        // for each link in the array
                                        foreach ($links as $name => $URL) {

                                            // if the link is not empty, then add it to list
                                            if ( !empty($URL) ) {

                                                // if it's not a brand, use FontAwesome simple font, not the brand one
                                                if (($name == 'envelope') || ($name == 'link')) {
                                                    $fontAwesomeStyle = 'fas';
                                                } else {
                                                    $fontAwesomeStyle = 'fab';
                                                }

                                                // if it's an email and it should be inclided, add 'mailto:' at the front
                                                if ($name == 'envelope') {
                                                    $URL = 'mailto:' . $URL;
                                                }

                                                // echo each item as a link wrapped in <li> tag
                                                echo '<li><a class="link contact-link" href="' . $URL . '" target="_blank">';
                                                    echo '<i class="' . $fontAwesomeStyle .' fa-' . $name . ' fa-lg"></i>';
                                                echo '</a></li>';
                                            };
                                        };

                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        // don't show work section if there is any work to show
                        if ((count($projectInfo) > 0)):
                    ?>

                    <div id="work-container">
                        <div class="intro-wrapper">

                            <?php

                            if ($sex = 'male') {
                                $herOrHis = 'his';
                            } else {
                                $herOrHis = 'her';
                            }

                            ?>

                            <h3><?php echo ucfirst($firstName) . 's  work' ?></h3>
                            <p>get a feeling for <?php echo $herOrHis ?> work in different fields</p>
                        </div>

                        <div class="project-wrapper">
                            <?php

                                // import all projects from work folder
                                foreach ($projectInfo as $file) {

                                    // I know that including the same file twice is not
                                    //the best practise, but it works for now
                                    include $file;

                                    // find project cover image
                                    $cover = dirname($file) . '/assets/cover.jpg';

                                    // check if the file exist, if not replace with default one
                                    if ( file_exists($cover) ) {
                                        $projectCover = $cover;
                                    } else {
                                        $projectCover = absolutURL . 'assets/img/default-cover.jpg';
                                    };

                                    // check project type
                                    if (($projectType == 'ux/ui') || ($projectType == 'ar') || ($projectType == 'vr')) {
                                        // if it's abbreviation than make it uppercase
                                        $projectType = strtoupper($projectType);
                                    } else {
                                        // else leave it as is
                                        $projectType = $projectType;
                                    };

                                    // echo all information
                                    echo '<div class="single-project project-type-' . substr(strtolower($projectType),0,2) . '">';
                                        echo '<a class="link project-link" href="' . dirname($file) . '" target="_self">';
                                            echo '<img src="' . $projectCover . '" alt="' . ucfirst($projectName) . '">';

                                            echo '<div class="single-project-name-wrapper">';
                                                echo '<h2>' . ucfirst($projectName) . '</h2>';
                                                echo '<p>' . ucfirst($projectType) . ' project by ' . ucfirst($firstName) . ' ' . ucfirst($lastName) . '</p>';
                                            echo '</div>';
                                        echo '</a>';
                                    echo '</div>';
                                };
                            ?>
                        </div>
                    </div>

                    <?php
                        endif;
                    ?>
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
