<?php
/**
 * WORK PAGE
 *
 * This is a template to display students work
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 1.0
 *
 **==========================================================================**/

include_once '../global-config.php';

global $debugging;

$pageTitle          = 'work';
$pageDescription    = '';
$pageKeywords       = '';

$projectInfo        = glob('*/*/project-info.php');

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
                    <div id="intro-container">
                        <div class="intro-wrapper">
                            <h1>Our work</h1>
                            <ul>
                                <?php

                                    echo '<p>show&nbsp;</p>';

                                    // create project types array
                                    $projectTypeArray = array('all');

                                    // find all projects from work folder
                                    foreach ($projectInfo as $file) {

                                        // import the project info
                                        include $file;

                                        // if project type is not in array yet
                                        if (!in_array( strtolower($projectType), $projectTypeArray)) {

                                            // add this type to array
                                            $projectTypeArray[]=strtolower($projectType);
                                        }
                                    };

                                    // sort the array
                                    sort($projectTypeArray);

                                    // now, for each item in the array
                                    foreach ($projectTypeArray as $option) {

                                        if (($option == 'ux/ui') || ($option == 'ar') || ($option == 'vr')) {
                                            // if it's abbreviation than make it uppercase
                                            $optionName = strtoupper($option);
                                        } else {
                                            // else leave it as is
                                            $optionName = $option;
                                        };

                                        if ($option == 'all') {
                                            $visibilityClass = 'active';
                                        } else {
                                            $visibilityClass = '';
                                        }

                                        // and print a button with a unique id
                                        echo '<li><button class="link link-transparent link-project-type ' . $visibilityClass . '" id="project-type-' . substr($option,0,2) . '">' . $optionName . '<span class="ending-plural">s</span> <span class="ending-projects">projects</span></button></li>';
                                    };
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div id="projects-container">
                        <div class="projects-wrapper">
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
