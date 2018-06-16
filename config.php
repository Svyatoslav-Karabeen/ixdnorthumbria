<?php
/**
 * GLOBAL CONFIGURATION
 *
 * Should be revised every time the environment is changed, especially for the
 * next year! @see $previous_now and $environment variables.
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @since 1.8
 *
 **==========================================================================**/
?>

<?php
/**
 * $environment changes video URLs and content on the home page based on
 * the argument selected. Could be either local, countdown, newcastle, london
 * or past.
 *
 * $eventDates – it's pretty clear what they are stand for
 *
 * NOTE: If you're 2019 and above year student, change to 'past' please!
 **/

$environment    = 'newcastle';
$eventDates     = '14th - 28th June 2018';
$socialLinks    = array(
    'facebook'     => 'https://facebook.com/ixdnorthumbria',
    'instagram'    => 'https://instagram.com/ixdnorthumbria',
    'twitter'      => 'https://twitter.com/ixdnorthumbria',
    'email'        => 'imdreveal@gmail.com',
);
$mapsKey        = 'AIzaSyCGmoE4oh79PwnNVRg_2731V81W3oG1qhw';

/**
 * Functions and other essential things to simplify my life. Don't change
 * anything below unless you're certain what you're doing.
 **/

// define root folder path (for relative links)
define('path', __DIR__ . '/');

// define root folder path (for absolute links)
define('url', $_SERVER['SERVER_NAME'] == 'localhost'
        ? 'http://localhost/ixd/'
        // : 'https://karabeen.com/p/ixd/'
        : 'https://ixdnorthumbria.co.uk/'
);

// service
function get_meta() {
    include path . 'meta.php';
};

function get_scripts() {
    include path . 'scripts.php';
};

// content
function get_header() {
    include path . 'header.php';
};

function get_socials() {
    include path . 'socials.php';
};

function get_footer() {
    include path . 'footer.php';
};

// additional
function get_slideshow() {
    global $environment;
    include path . 'content-' . $environment . '-slideshow.php';
};

function get_sidebar() {
    global $environment;
    include path . 'content-' . $environment . '-sidebar.php';
};

function get_popup() {
    global $environment;
    include path . 'content-' . $environment . '-popup.php';
};
?>
