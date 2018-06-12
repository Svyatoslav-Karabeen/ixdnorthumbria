<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 */

global $pageTitle;
$navPages = array('home', 'about', 'faces', 'works');
?>

<div class="menu-wrapper">
    <nav id="global-navigation">
        <?php
            foreach ($navPages as $page) {
                $class = 'nav-link';

                // don't show 'home' link on home page
                if ($page == $pageTitle && $page == 'home') {
                    continue;
                };

                // if it's not a home page, make sure 'home' link goes to '/'
                if ($page == 'home') {
                    echo '<a class="' . $class . '" href="' . url . '">' . $page . '</a>';
                } else {

                    // add 'current' class to current page link
                    if ($page == $pageTitle) {
                        $class = $class . ' current';
                    };
                    echo '<a class="' . $class . '" href="' . url . $page . '">' . $page . '</a>';
                }
            };
        ?>
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
