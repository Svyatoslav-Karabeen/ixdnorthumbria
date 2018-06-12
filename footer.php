<?php
/**
 * FOOTER
 * This is the template that displays all of the <footer> section and everything
 * up until </html>
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 *
 **==========================================================================**/

global $environment;
global $pageTitle;
?>

        <footer>
            <?php
                if ($environment == 'countdown' && $pageTitle == 'home'){
                    echo '<script src="' . url . 'assets/js/lib/particles.min.js"></script>';
                    echo '<script src="' . url . 'assets/js/particle-app.js"></script>';
                    echo '<script src="' . url . 'assets/js/countdown.min.js"></script>';
                };
            ?>
            <script src="<?php echo url ?>assets/js/magic.js"></script>
        </footer>
    </div>
</body>
</html>
