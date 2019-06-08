<?php
/**
 * GLOBAL CONFIGURATION
 *
 * Should be revised every time the environment is changed, especially for the
 * next year.
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 1.2
 *
 **==========================================================================**/
?><?php

/**
 * $environmentType is used to indicate either the environment or the event that
 * in what the website is currently used. Based on environment, the system call
 * the local on online files or change parts of the content on the home page.
 *
 * Current options are 'countdown' 'reveal', 'dandad', 'local' and 'past'.
 **/

define( environmentType ,   'local' );
define( environmentDates ,  '11th - 14th July 2018' );
define( currentYear,        '2018' );



/**
 * $ixdContacts is used to display links to IxD social pages on the home page,
 * in the footer or any other place you call it.
 *
 * @see $insertLinks function in 'functions.php' file
 **/

$ixdContacts        = array(
    'facebook-f'    => 'https://facebook.com/ixdnorthumbria',
    'instagram'     => 'https://instagram.com/ixdnorthumbria',
    'twitter'       => 'https://twitter.com/ixdnorthumbria',
    'vimeo-v'       => '',
    'envelope'      => 'imdreveal@gmail.com',
);



/**
 * $debugging mode used in a case of website maintenance and you need to see
 * detailed information. Also, in debug mode the system will load unminimised
 * CSS and JS scripts.
 **/

$debugging  = 'off';



/**
 * Include sensative information such as API keys
 * and general functions
 **/

include_once 'global-config-keys.php';
include_once 'global-functions.php';
