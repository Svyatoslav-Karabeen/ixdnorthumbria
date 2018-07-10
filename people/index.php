<?php
/**
 * PEOPLE PAGE
 *
 * This is a template to display student faces
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 1.0
 *
 **==========================================================================**/

include_once '../global-config.php';

global $debugging;

$pageTitle          = 'people';
$pageDescription    = '';
$pageKeywords       = '';

$studentInfo        = glob('*/student-info.php');

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
                            <h1>Our year</h1>
                            <ul>
                                <?php

                                    echo '<p>show&nbsp;</p>';

                                    // create project types array
                                    $studentTitleArray = array('all');

                                    // find all projects from work folder
                                    foreach ($studentInfo as $file) {

                                        // import the project info
                                        include $file;

                                        // if project type is not in array yet
                                        if (!in_array( strtolower($title), $studentTitleArray)) {

                                            // add this type to array
                                            $studentTitleArray[]=strtolower($title);
                                        }
                                    };

                                    // sort the array
                                    sort($studentTitleArray);

                                    // now, for each item in the array
                                    foreach ($studentTitleArray as $option) {

                                        if ($option == 'ux/ui') {
                                            // if it's abbreviation than make it uppercase
                                            $optionName = strtoupper($option);
                                        } else {
                                            // else leave it as is
                                            $optionName = ucfirst($option);
                                        };

                                        if ($option == 'all') {
                                            $optionName = strtolower($option);
                                            $visibilityClass = 'active';
                                        } else {
                                            $visibilityClass = '';
                                        }

                                        // and print a button with a unique id
                                        echo '<li><button class="link link-transparent link-student-title ' . $visibilityClass . '" id="student-title-' . substr($option,0,2) . '">' . $optionName . ' designers</button></li>';
                                    };
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div id="students-container">
                        <div class="stundets-wrapper">
                            <?php

                                // import all projects from work folder
                                foreach (array_reverse($studentInfo) as $file) {

                                    // I know that including the same file twice is not
                                    //the best practise, but it works for now
                                    include $file;

                                    // find project cover image
                                    $userpic = dirname($file) . '/userpic.png';

                                    // check if the file exist, if not replace with default one
                                    if ( file_exists($userpic) ) {
                                        $userpic = $userpic;
                                    } else {
                                        $userpic = absolutURL . 'assets/img/default-userpic.png';
                                    };

                                    // check project type
                                    if ($title == 'ux/ui') {
                                        // if it's abbreviation than make it uppercase
                                        $title = strtoupper($title);
                                    } else {
                                        // else leave it as is
                                        $title = $title;
                                    };

                                    // echo all information
                                    echo '<div class="single-student student-title-' . substr(strtolower($title),0,2) . '">';
                                        echo '<a class="link profile-link" href="' . dirname($file) . '" target="_self">';
                                            echo '<div class="single-student-userpic-wrapper"><img src="' . $userpic . '" alt="' . ucfirst($firstName) . ' ' . ucfirst($lastName) . '"></div>';

                                            echo '<div class="single-student-name-wrapper">';
                                                echo '<h2>' . ucfirst($firstName) . ' ' . ucfirst($lastName) . '</h2>';
                                                echo '<p>' . ucfirst($title) . ' Designer</p>';
                                            echo '</div>';
                                        echo '</a>';

                                        // student links
                                        echo '<div class="contacts-wrapper">';
                                            echo '<ul>';

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
                                                        echo '<i class="' . $fontAwesomeStyle .' fa-' . $name . ' fa-sm"></i>';
                                                    echo '</a></li>';
                                                };
                                            };

                                            echo '</ul>';
                                        echo '</div>';
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
