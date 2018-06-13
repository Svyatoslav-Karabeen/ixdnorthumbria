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

<div class="menu-container">
    <nav class="nav-wrapper" id="nav-global">
        <ul>
        <?php
            foreach ($navPages as $page) {
                $class = 'nav-link';

                // don't show 'home' link on home page
                if ($page == $pageTitle && $page == 'home') {
                    continue;
                };

                // if it's not a home page, make sure 'home' link goes to '/'
                if ($page == 'home') {
                    echo '<li><a class="' . $class . '" href="' . url . '">' . $page . '</a></li>';
                } else {

                    // add 'current' class to current page link
                    if ($page == $pageTitle) {
                        $class = $class . ' current';
                    };
                    echo '<li><a class="' . $class . '" href="' . url . $page . '">' . $page . '</a></li>';
                }
            };
        ?>
        </ul>
    </nav>

    <div class="dropdown-wrapper">
        <button class="dropdown-button" id="previous-years-button" onclick="showDropdown()">previous years</button>
        <div class="dropdown-body" id="previous-years-list">
            <div class="dropdown-arrow"></div>
            <ul>
                <li><a class="dropdown-link" href="<?php echo url . '2017' ?>">2017</a></li>
                <li><a class="dropdown-link" href="<?php echo url . '2016' ?>">2016</a></li>
                <li><a class="dropdown-link" href="<?php echo url . '2015' ?>">2015</a></li>
                <li><a class="dropdown-link" href="<?php echo url . '2014' ?>">2014</a></li>
            </ul>
        </div>
    </div>
</div>
