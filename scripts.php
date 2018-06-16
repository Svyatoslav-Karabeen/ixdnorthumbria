<?php
/**
 * SCRIPTS
 *
 * This is the template that contains all JS scripts required to make magin happen
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/

global $environment;

global $pageTitle;

/**==========================================================================**/
?>

    <?php if ($environment == 'countdown' && $pageTitle == 'home'){ ?>
            echo '<script src="' . url . 'assets/js/lib/particles.min.js"></script>';
            echo '<script src="' . url . 'assets/js/particle-app.js"></script>';
            echo '<script src="' . url . 'assets/js/countdown.min.js"></script>';
    <?php }; ?>

    <script src="<?php echo url ?>assets/js/lib/jquery-3.3.1.min.js"></script>
    <script src="<?php echo url ?>assets/js/slideshow.js"></script>
    <script src="<?php echo url ?>assets/js/magic.js"></script>
</body>
</html>
