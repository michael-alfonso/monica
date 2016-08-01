<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Photolite
 */
?>

        <div class="copyright-wrapper">
        	<div class="inner">
                <div class="footer-menu" style="text-align: center;">
                    CALLE 143 No 49-15, BOGOTA D.C., contactshopforfun@gmail.com<br/>
                    TEL 4727207  CEL 305 2985422
                </div><!-- footer-menu -->
                <div class="copyright">
                	<p>Todos los derechos reservados <?php echo esc_attr(get_theme_mod('footer_copy')); ?></p>
                </div><!-- copyright --><div class="clear"></div>
            </div><!-- inner -->
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>
