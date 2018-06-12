<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 */
?>

<div class="menu-wrapper">
    <nav id="global-navigation">
        <a class="link" href="<?php echo url ?>">home</a>
        <a class="link" href="<?php echo url . 'about' ?>">about</a>
        <a class="link" href="<?php echo url . 'faces' ?>">faces</a>
        <a class="link" href="<?php echo url . 'works' ?>">works</a>
    </nav>
    <div class="dropdown-wrapper">
        <button class="button arrow" onclick="showDropdown()">previous</button>
        <div class="content" id="previous-years">
            <a class="previous-year" href="<?php echo url . '2017' ?>">2017</a>
            <a class="previous-year" href="<?php echo url . '2016' ?>">2016</a>
            <a class="previous-year" href="<?php echo url . '2015' ?>">2015</a>
            <a class="previous-year" href="<?php echo url . '2014' ?>">2014</a>
        </div>
    </div>
</div>
