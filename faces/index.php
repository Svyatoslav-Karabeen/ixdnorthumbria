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

<main>
    <div class="headings">
        <div class="headings-wrapper">
            <h1 class="heading-main">our year</h1>
            <h2 class="heading-caption">show <button class="button-text" id="expertise-button" onclick="showExpertise()">all designers</button></h2>
        </div>
        <div class="expertise-wrapper" id="expertise-array">
            <ul>
                <?php
                    $expertiseArray = array('all');

                    foreach($student_info as $file){
                        include $file;

                        if(!in_array(strtolower($title), $expertiseArray)) {
                            $expertiseArray[]=strtolower($title);
                        }
                    };

                    sort($expertiseArray);

                    foreach ($expertiseArray as $expertise) {

                        if ($expertise == 'all') {
                            $expertiseJS = 'everyone';
                        } elseif ($expertise == 'ux/ui') {
                            $expertiseJS = 'ux';
                        } else {
                            $expertiseJS = $expertise;
                        }

                        if ($expertise == 'ux/ui') {
                            echo '<li expertise="' . $expertise . '"><button class="expertise-link" onclick="changeExpertise(' . $expertiseJS .')">' . strtoupper($expertise) . ' Designers</button></li>';
                        } else {
                            echo '<li expertise="' . $expertise . '"><button class="expertise-link" onclick="changeExpertise(' . $expertiseJS .')">' . $expertise . ' Designers</button></li>';
                        }
                    };
                ?>
            </ul>
        </div>
    </div>

    <div class="students-container" id="students-array">
        <?php
            foreach ($student_info as $file) {
                include $file;

                $personalUserpic = dirname($file) . '/userpic.jpg';
                $defaultUserpic = url . 'assets/img/userpic-default.jpg';
                $emptyUserpic = url . 'assets/img/userpic-empty.png';

                if (file_exists($personalUserpic)) {
                    $userpic = $personalUserpic;
                } else {
                    $userpic = $defaultUserpic;
                };
        ?>
            <div class="student-single collapsed" onclick="expandCard(this)" expertise="<?php echo strtolower($title) ?>">
                <a class="profile-link" href="<?php echo dirname($file) ?>" target="_self">
                    <div class="single-collapsed">
                        <img class="single-photo" src="<?php echo $userpic ?>" alt="<?php echo ucfirst($firstName) . ' ' . ucfirst($lastName) ?>">
                        <div class="collapsed-name-wrapper">
                            <h3 class="name"><?php echo ucfirst($firstName) . ' ' . ucfirst($lastName) ?></h3>
                            <span class="title"><?php echo ucfirst($title) ?> Designer</span>
                        </div>
                    </div>
                </a>

                <!-- <div class="single-expanded">
                    <div class="expanded-name-wrapper">
                        <h3 class="name"><?php echo ucfirst($firstName) . ' ' . ucfirst($lastName) ?></h3>
                        <span class="title"><?php echo ucfirst($title) ?> Designer</span>
                    </div>

                    <div class="bioShort">
                        <p><?php echo $bioShort ?></p>
                    </div>

                    <div class="lisks-wrapper">
                        <ul>
                            <?php
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
                </div> -->
            </div>
            </a>
        <?php
            };
        ?>
    </div>
</main>

<div class="overlay" id="overlay"></div>

<?php get_footer(); ?>
