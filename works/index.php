<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 */

include_once '../config.php';

$pageTitle          = 'works';
$pageDescription    = 'description';
$pageKeywords       = 'keywords go here';

$projectInfo        = glob('*/*/project-info.php');

?>

<?php get_header(); ?>

<main>
    <div class="headings">
        <div class="headings-wrapper">
            <h1 class="heading-main">our works</h1>
            <h2 class="heading-caption">show <button class="button-text" id="work-button" onclick="showWork()">all projects</button></h2>
        </div>
        <div class="work-wrapper" id="work-array">
            <ul>
                <?php
                    $workArray = array('all');

                    foreach($projectInfo as $file){
                        include $file;

                        if(!in_array(strtolower($projectType), $workArray)) {
                            $workArray[]=strtolower($projectType);
                        }
                    };

                    sort($workArray);

                    foreach ($workArray as $workType) {

                        if (strtolower($workType) == 'ux/ui') {
                            $workTypeJS = 'ux';
                            echo '<li workType="' . $workType . '"><button class="workType-link" onclick="changeWork(' . $workTypeJS .')">' . strtoupper($workType) . '</button></li>';
                        } elseif (strtolower($workType) == 'all') {
                            $workTypeJS = 'everywork';
                            echo '<li workType="' . $workType . '"><button class="workType-link" onclick="changeWork(' . $workTypeJS .')">' . $workType . '</button></li>';
                        } elseif (strtolower($workType) == 'vr') {
                            echo '<li workType="' . $workType . '"><button class="workType-link" onclick="changeWork(' . strtolower($workType) .')">' . strtoupper($workType) . '</button></li>';
                        } elseif (strtolower($workType) == 'ar') {
                            echo '<li workType="' . $workType . '"><button class="workType-link" onclick="changeWork(' . strtolower($workType) .')">' . strtoupper($workType) . '</button></li>';
                        } elseif (strtolower($workType) == 'service design') {
                            $workTypeJS = 'service';
                            echo '<li workType="' . $workType . '"><button class="workType-link" onclick="changeWork(' . $workTypeJS .')">' . $workType . '</button></li>';
                        } else {
                            echo '<li workType="' . $workType . '"><button class="workType-link" onclick="changeWork(' . $workType .')">' . ucfirst($workType) . '</button></li>';
                        }


                    };
                ?>
            </ul>
        </div>
    </div>

    <div class="projects-container" id="projects-array">
        <?php
            foreach ($projectInfo as $file) {
                if (file_exists($file)){
                    include $file;

                    $ownCover = dirname($file) . '/assets/cover.jpg';
                    $defaultCover = url . 'assets/img/cover-default.png';

                    if (file_exists($ownCover)) {
                        $cover = $ownCover;
                    } else {
                        $cover = $defaultCover;
                    };
        ?>
        <div class="project-card" projectType="<?php echo $projectType ?>">
            <a class="project-link" href="<?php echo dirname($file) ?>" target="_self">
                <img src="<?php echo $cover ?>" alt="<?php echo $projectName; ?>">

                <div class="project-name-wrapper">
                    <h3 class="name"><?php echo ucfirst($projectName) ?></h3>
                    <span class="type"><?php echo ucfirst($projectType) . ' project'; ?> by <?php echo ucfirst($firstName) . ' ' . ucfirst($lastName); ?></span>
                </div>
            </a>
        </div>
        <?php
        }};
        ?>
    </div>
</main>

<?php get_footer(); ?>
