<?php
/**
 * GLOBAL FUNCTIONS
 *
 * Should be revised every time the environment is changed, especially for the
 * next year.
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 3.0
 *
 **==========================================================================**/
?><?php

/**
 * Define a few vital functions used to build paths, links and connections
 * between files.
 *
 * relativeURL – current page URL for the website (used for creating relative links to images)
 * absolutURL – absolute URL for the 2018 website (used for creating absolute links for 2018 year)
 * coreURL – absolute URL for https://ixdnorthumbria.co.uk (used for creating general absolute links)
 *
 * currentDir – current file directory (used for php files and debugging)
 * currentFile – current file path (used for php files and debugging)
 **/

define( 'relativeURL' , (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
define( 'absolutURL' , (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ( currentYear === date('Y') ? '/' : '/2018/' ) );
define( 'coreURL' , (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'currentDir' , __DIR__ . '/');
define( 'currentFile' , $_SERVER['PHP_SELF'] );



/**
 *
 * Define functions for faster including php files
 *
 **/

function get_meta() {
    include currentDir . 'header-meta.php';
};

function get_header() {
    include currentDir . 'header-nav.php';
};

function get_footer() {
    include currentDir . 'footer.php';
};

function get_scripts() {
    include currentDir . 'footer-scripts.php';
};

function get_popup() {
    global $environmentType;
    include currentDir . 'content-' . $environmentType . '-popup.php';
};



/**
 * Function:
 * Create links to previous years websites for previous years navigation dropdown
 **/

function insert_previous_years() {

    echo '<ul>';

    // echo each year previous year up to 2014 as a link wrapped in <li> tag
    for ($year = (currentYear - 1); $year >= 2014; $year--) {
        echo '<li><a class="link dropdown-link" href="' . coreURL . 'previous/' . $year .'">' . $year . '</a></li>';
    };

    echo '</ul>';
};

/**
 * Function:
 * Create links for IxD contacts block
 **/

function insert_ixd_socials($iconSize = null) {

    global $ixdContacts;

    $fontAwesomeStyle = 'fab';

    if (is_null($iconSize)) {
        $iconSize = 'lg';
    }

    echo '<div class="contacts-wrapper">';
    echo '<ul>';

    foreach ($ixdContacts as $name => $link) {

        // if the link is not empty, then add it to list
        if ( !empty($link) ) {

            // if it's an email and it should be inclided, add 'mailto:' at the front
            if ( $name == 'envelope' ) {
                $link = 'mailto:' . $link;
                $fontAwesomeStyle = 'fas';
            };

            // echo each item as a link wrapped in <li> tag
            echo '<li>
                    <a class="link contact-link" href="' . $link . '" target="_blank">
                        <i class="' . $fontAwesomeStyle .' fa-' . $name . ' fa-' . $iconSize . '"></i>
                    </a>
                </li>';
        };
    };

    echo '</ul>';
    echo '</div>';
};
?>
