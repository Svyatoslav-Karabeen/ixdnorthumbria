<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.3
 **/

include_once '../config.php';

$pageTitle          = 'faces';
$pageDescription    = 'description';
$pageKeywords       = 'keywords go here';

$student_info       = glob('*/student-info.php');

/**==========================================================================**/

?>

<?php get_header();?>

<main class="page-<?php echo $pageTitle ?>">
    <div class="intro">
        <h1>this is our year</h1>
        <div class="expertise-wrapper">
            show <span class="selected">all designers</span>
            <div class="options">
                <ul>
                    <?php
                        // create array for titles
                        $expertiseArray = array('all');

                        // extract all titles from student info and add it to the array
                        foreach ($student_info as $file) {
                            include $file;
                            array_push($expertiseArray, $title);
                        }

                        // print all titles
                        foreach ($expertiseArray as $expertise) {
                            echo '<li class="expertise-item" expertise="' . $expertise . '"><a class="expertise-link" href="#' . $expertise . '">' . $expertise . '</a></li>';
                        };
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="students-container">
        <?php
            // include and extract content from all student info files
            foreach ($student_info as $file) {
                include $file;
        ?>

            <div class="single-card" expertise="<?php echo $title ?>">
                <div class="card-collapsed">
                    <img class="student-photo" src="<?php echo dirname($file) . '/userpic.jpg' ?>" alt="<?php echo $firstName . ' ' . $lastName ?>">

                    <div class="name-wrapper-small">
                        <h3 class="name"><?php echo $firstName . ' ' . $lastName ?></h3>
                        <span class="title"><?php echo $title ?></span>
                    </div>
                </div>

                <div class="card-expanded">
                    <div class="name-wrapper-large">
                        <h2 class="name"><?php echo $firstName . ' ' . $lastName ?></h2>
                        <span class="title"><?php echo $title ?></span>
                    </div>

                    <div class="bioShort">
                        <p><?php echo $bioShort ?></p>
                    </div>

                    <div class="lisks-wrapper">
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

                    <div class="profile-link-wrapper">
                        <a class="profile-link" href="<?php echo dirname($file) ?>" target="_self">show profile</a>
                    </div>
                </div>
            </div>
        <?php
            };
        ?>
    </div>
</main>

<?php get_footer(); ?>
