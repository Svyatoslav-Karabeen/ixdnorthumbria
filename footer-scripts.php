<?php
/**
 * SCRIPTS
 *
 * This is the template that contains all JS scripts required to make magic happen
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 2.0
 *
 **==========================================================================**/

global $pageTitle;
global $debugging;

$js = $debugging === 'on' ? '.js' : '.min.js';

/**==========================================================================**/
?>

    <?php if ( (environmentType == 'countdown') && ($pageTitle == 'home') ) : ?>
        <!-- <script src="<?php echo absolutURL ?>assets/js/lib/particles.min.js"></script> -->
        <!-- <script src="<?php echo absolutURL ?>assets/js/particle-app.js"></script> -->
        <script src="<?php echo absolutURL ?>assets/js/countdown<?php echo $js ?>"></script>
    <?php endif ?>

    <script src="<?php echo absolutURL ?>assets/js/lib/jquery-3.3.1.min.js"></script>
    <script src="<?php echo absolutURL ?>assets/js/header<?php echo $js ?>"></script>
    <script src="<?php echo absolutURL ?>assets/js/magic<?php echo $js ?>"></script>
</body>
</html>
