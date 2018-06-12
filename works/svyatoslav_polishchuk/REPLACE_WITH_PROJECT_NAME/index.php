<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 */

include_once ('../../../config.php');
?>

<?php get_header(); ?>

<main>
    <?php
        include 'project-info.php';

        echo $projectName;
        echo $projectType;
    ?>

    <p>
        <?php echo file_get_contents('project-section-about.txt'); ?>
    </p>
    <p>
        <?php echo file_get_contents('project-section-brief.txt'); ?>
    </p>
    <p>
        <?php echo file_get_contents('project-section-process.txt'); ?>
    </p>
    <p>
        <?php echo file_get_contents('project-section-result.txt'); ?>
    </p>
</main>

<?php get_footer(); ?>
