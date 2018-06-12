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
    <?php include 'content-about.php'; ?>
</main>

<?php get_footer(); ?>
