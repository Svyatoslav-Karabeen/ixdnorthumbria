<?php
/**
 * HOME PAGE >> CONTENT >> NEWCASTLE >> Slideshow
 *
 * This is the template to display slideshow on a home page background
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 2.0
 *
 **==========================================================================**/



/**==========================================================================**/
?>


<div id="slideshow">
    <div class="slideshow-body">
        <ul class="slider">
        <?php
            $sliderImage = glob('assets/slider/*.jpg');
            foreach ($sliderImage as $image) {
                echo '<li><img src="' . $image . '" alt=""></li>';
            }
        ?>
        </ul>
    </div>
</div>
