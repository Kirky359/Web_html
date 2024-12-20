<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photographer
 */
?>

    <footer class="footer">
        <div class="footer__social-links">
            <a href="#" class="footer__link" aria-label="Pinterest">
                <ion-icon class="footer__icon" name="logo-pinterest"></ion-icon>
            </a>
            <a href="#" class="footer__link" aria-label="Facebook">
                <ion-icon class="footer__icon" name="logo-facebook"></ion-icon>
            </a>
            <a href="#" class="footer__link" aria-label="Instagram">
                <ion-icon class="footer__icon" name="logo-instagram"></ion-icon>
            </a>
        </div>

        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> Photography.</p>


        <address>01001 New York, Park line 23, New York, NYC</address>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
