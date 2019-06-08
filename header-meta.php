<?php
/**
 * HEAD
 *
 * This is the template that displays all of the <head> section and everything
 * up until <body>
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 1.0
 *
 **==========================================================================**/

global $pageTitle;
global $pageDescription;
global $pageKeywords;

global $projectName;

/**==========================================================================**/
?>

<!DOCTYPE HTML>
<html>
<head>
	<!-- default things -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="cache-control" content="public">

	<!-- a bit of SEO -->
	<title>Interaction Design &mdash; <?php echo ucfirst($projectName) . ' ' . ucfirst($pageTitle); ?> &mdash; <?php echo currentYear ?></title>
    <meta name="description" content="<?php echo ucfirst($pageDescription); ?>">
	<meta name="keywords" content="<?php echo ucfirst($pageKeywords); ?>">
	<meta name="author" content="Svyatoslav Polishchuk">
    <meta name="copyright" content="&copy; 2018 Svyatoslav Polishchuk">
	<meta name="robots" content="index,follow">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo absolutURL ?>assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo absolutURL ?>assets/images/apple-touch-icon.png" sizes="144x144" type="image/x-icon">

	<!-- CSS -->
	<?php if (environmentType != 'local') :?>
	<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
	<?php else : ?>
	<link href="<?php echo absolutURL ?>assets/css/fontawesome.css" rel="stylesheet" >
	<?php endif ?>
	<link href="<?php echo absolutURL ?>assets/css/styles.css" rel="stylesheet" >

	<?php
		/**
		 * Don't use Google Analytics if it's a dev environment
		 **/
		 if (environmentType != 'local') :
	?>

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120677393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-120677393-1');
	</script>

	<?php endif ?>
</head>

<?php
	/**
	 * This is small easter egg.
	 * Learn more and replace with yours in /header-meta-egg.php file
	 **/

	include currentDir . 'header-meta-egg.php';
?>

<body class="body page-<?php echo strtolower($pageTitle) . ' environment-' . strtolower(environmentType); ?>">
