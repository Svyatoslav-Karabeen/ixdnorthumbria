<?php
/**
 * PROFILE PAGE
 *
 * ...
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

include_once '../../config.php';
include_once 'student-info.php';

$pageTitle          = 'profile';
$pageDescription    = '';
$pageKeywords       = '';

$projectInfo        = glob('../../works/' . strtolower($firstName) . '_' . strtolower($lastName) . '*/*/project-info.php');

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
        <div class="profile-container">
            <!-- <div class="backlink-wrapper">
                <?php echo '<a class="backlink" href="' . dirname($_SERVER['HTTP_REFERER']) . '">Back to all faces</a>'; ?>
            </div> -->
            <div class="profile-photo">
                <img class="photo" src="../../assets/img/userpic-default.jpg" alt="<?php echo $firstName . ' ' . $lastName ?>">
                <div class="background"></div>
            </div>


            <div class="profile-content">
                <div class="name-wrapper">
                    <h1 class="name"><?php echo ucfirst($firstName) . ' ' . ucfirst($lastName) ?></h1>
                    <h2 class="title"><?php echo ucfirst($title) ?> Designer</h2>
                </div>

                <div class="bio-wrapper">
                    <p class="bio-full"><?php echo $bioFull ?></p>
                </div>

                <div class="employment-wrapper">
                    <p class="employment-content">
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
                            echo "I'm planning to take a gap year to travel and have some rest after the long hard work, so currently, I'm not available to offers. However, if you are truly interested in what I can bring to your company, let's get in touch and see where it can end up.";
                        };

                        ?>
                    </p>
                </div>

                <div class="links-wrapper">
                    <a class="resume" href="resume.pdf" target="_blank"><img src="<?php echo url . 'assets/img/icon-download.svg' ?>" alt="download icon">resume</a>
                    <ul class="links">
                        <?php
                            foreach ($links as $name => $link) {
                                if (!empty($link)) {

                                    if ($name == 'email') {
                                        $link = 'mailto:' . $link;
                                    };

                                    echo '<li><a class="social-link" href="' . $link . '" target="_blank"><img src="' . url . 'assets/img/icon-' . $name . '.svg" alt="' . $name . ' icon "></a></li>';
                                };
                            };
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="works-container">
            <div class="work-wrapper">
                <?php
                    if ($sex = 'male') {
                $herOrHis = 'his';
            } else {
                $herOrHis = 'her';
            };
                ?>
                <h4 class="work-main"><?php echo ucfirst($firstName) . "'s works"?></h4>
                <h4 class="work-caption"><?php echo "just look at this, " . $herOrHis . " works are stunning, aren't they?" ; ?></h4>
            </div>

            <?php
                foreach ($projectInfo as $file) {
                    if (file_exists($file)){
                        include $file;
            ?>

            <div class="project-card" projectType="<?php echo $projectType ?>">
                <a class="project-link" href="<?php echo dirname($file) ?>" target="_self">
                    <img src="<?php echo dirname($file) . '/assets/cover.jpg' ?>" alt="<?php echo $projectName; ?>">

                    <div class="project-name-wrapper">
                        <h3 class="name"><?php echo ucfirst($projectName) ?></h3>
                        <span class="type"><?php echo ucfirst($projectType) . ' project'; ?></span>
                    </div>
                </a>
            </div>
            <?php
            }};
            ?>
        </div>
    </main>

    <?php

    // include footer
    get_footer();

    ?></div><?php

    get_scripts();
    ?>
