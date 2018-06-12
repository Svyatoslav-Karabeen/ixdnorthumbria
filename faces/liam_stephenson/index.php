<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 */

// include config
include_once '../../config.php';
include_once 'student-info.php';

// defina and set necessary variables for this page
$pageTitle          = $firstName . '_' . $lastName;
$pageDescription    = 'description';
$project_info       = glob('../../works/' . strtolower($firstName) . '_' . strtolower($lastName) . '*/*/project-info.php');

?>

<?php get_header();?>

<main class="page-<?php echo strtolower($firstName); ?>-profile">
    <div class="intro">
        <div class="backlink-wrapper">
            <?php echo '<a class="backlink" href="' . dirname($_SERVER['HTTP_REFERER']) . '">Back to all faces</a>'; ?>
        </div>

        <img class="photo" src="userpic.jpg" alt="<?php echo $firstName . ' ' . $lastName ?>">

        <div class="name-wrapper">
            <h1 class="name"><?php echo $firstName . ' ' . $lastName ?></h1>
            <span class="title"><?php echo $title . ' Designer'?></span>

        </div>

        <div class="bioFull">
            <p><?php echo $bioFull ?></p>
        </div>

        <div class="employment">
            <p>
                <?php
                if ($openToOffers == 'yes') {
                    echo "I am available to take offers that start in September and look forward to working with ";

                    if ($preferableCompany == 'any') {
                        echo "a great team ";
                    } else {
                        echo "some great " . $preferableCompany;
                    };

                    if ($openToRelocation == 'yes') {
                        echo " from " . $preferableLocation . ", although ultimately I aim to move over to work in the US. ";
                    } else {
                        echo " from " . $currentLocation . " or areas nearby. ";
                    };

                    echo "So if you're interested, don't hesitate to get in touch to discuss how we can work together.";

                } else {
                    echo "I'm planning to take a gap year to travel and have some rest after the long hard work, so currently, I'm not available to offers. However, if you are truly interested in what I can bring to your company, let's get in touch and see where it can end up.";
                };

                ?>
            </p>
        </div>

        <div class="links-wrapper">
            <a class="resume" href="resume.pdf" target="_blank">download resume</a>
            <ul class="links">
                <?php
                    // print all links that are not empty
                    foreach ($links as $name => $link) {
                        if (!empty($link)) {
                            echo '<li class="link-item"><a class="' . $name . '" href="' . $link . '" target="_blank"></a></li>';
                        };
                    };
                ?>
            </ul>
        </div>
    </div>

    <div class="works-container">
        <?php
            foreach ($project_info as $file) {
                include $file;
        ?>

        <div class="project-card" projectType="<?php echo $projectType ?>">
            <img src="<?php echo dirname($file) . '/assets/cover.jpg' ?>" alt="<?php echo $projectName; ?>">

            <a class="project-link" href="<?php echo dirname($file) ?>" target="_self">
                <div class="project-name">
                    <h3><?php echo $projectName; ?></h3>
                    <p><?php echo $projectType; ?></p>
                </div>
            </a>
        </div>
        <?php
            };
        ?>
    </div>
</main>

<?php get_footer(); ?>
