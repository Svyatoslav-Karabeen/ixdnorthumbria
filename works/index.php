<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 */

include_once ('../config.php');
?>

<?php get_header(); ?>

<main>
    <?php
        $project_info = glob('*/*/project-info.php');
        foreach ($project_info as $file) {
            include $file;
            echo $projectName;
            echo $projectType;

            echo '<a href="' . dirname($file) . '">learn more about ' . $projectName .'</a>';
        };
    ?>
</main>

<?php get_footer(); ?>
