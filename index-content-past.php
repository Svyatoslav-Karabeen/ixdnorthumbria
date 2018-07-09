<?php
/**
 * HOME PAGE >> Past environment
 *
 * This is the template to display information about our work when all events
 * have gone.
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 2.0
 *
 **==========================================================================**/

global $pageTitle;

$projectInfo = glob('*/*/*/project-info.php');

/**==========================================================================**/
?>

<main>

    <div id="hero-container">
        <div class="image-container">
            <img src="<?php echo absolutURL . 'assets/img/home-' . environmentType . '-hero.png' ?>" alt="<?php echo environmentType . 'hero image' ?>">
        </div>

        <div class="hero-container">
            <div class="text-wrapper">
                <h1 class="text-main">Thank you for visiting!</h1>
                <p>We hope to see you soon.</p>
            </div>

            <div class="links-wrapper">
                <a class="button button-gradient" href="#">
                    <i class="fas fa-play fa-sm"></i>
                    our showreel
                </a>
            </div>
        </div>
    </div>

    <div id="work-container">
        <div class="hero-container">
            <div class="text-wrapper">
                <h3 class="text-main">Some of our work</h3>
                <ul>
                    <?php

                        echo '<p>show&nbsp;</p>';

                        // create project types array
                        $projectTypeArray = array('all');

                        // find all projects from work folder
                        foreach ($projectInfo as $file) {

                            // import the project info
                            include $file;

                            // check if this project can be placed on home page
                            if ($projectPriority < 1) {
                                continue;
                            }

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

        <div class="projects-container">
            <div class="projects-wrapper">
                <?php
                    // import all projects from work folder
                    foreach ($projectInfo as $file) {

                        // I know that including the same file twice is not
                        //the best practise, but it works for now
                        include $file;

                        // check if this project can be placed on home page
                        if ($projectPriority < 1) {
                            continue;
                        }

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
                                    echo '<h4>' . ucfirst($projectName) . '</h4>';
                                    echo '<span>' . ucfirst($projectType) . ' project by ' . ucfirst($firstName) . ' ' . ucfirst($lastName) . '</span>';
                                echo '</div>';
                            echo '</a>';
                        echo '</div>';
                    };
                ?>
            </div>

            <div class="links-wrapper">
                <a class="link link-bold link-gray" href="<?php relativeURL ?>work/">
                    view all
                    <i class="fas fa-angle-right fa-lg"></i>
                </a>
            </div>
        </div>

    </div>
</main>
