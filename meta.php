<?php
/**
 * HEAD
 *
 * This is the template that displays all of the <head> section and everything
 * up until <body>
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

global $environment;

global $pageTitle;
global $pageDescription;
global $pageKeywords;

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
	<title>Interaction Design &mdash; <?php echo ucfirst($pageTitle); ?> &mdash; Reveal 2018</title>
    <meta name="description" content="<?php echo ucfirst($pageDescription); ?>">
	<meta name="keywords" content="<?php echo ucfirst($pageKeywords); ?>">
	<meta name="author" content="Svyatoslav Polishchuk">
    <meta name="copyright" content="&copy; 2018 Svyatoslav Polishchuk">
	<meta name="robots" content="index,follow">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo url ?>assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo url ?>assets/images/apple-touch-icon.png" sizes="144x144" type="image/x-icon">

	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,700" rel="stylesheet">
	<link href="<?php echo url ?>assets/css/styles.css" rel="stylesheet" >

	<?php if ($_SERVER['SERVER_NAME'] != 'localhost') { ?>
	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120677393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-120677393-1');
	</script>
	<?php }; ?>

	<!-- Easter egg -->
	<?php include path . 'meta-egg.php'; ?>
</head>

<body class="page-<?php echo strtolower($pageTitle) . ' ' . strtolower($environment); ?>">
