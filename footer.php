<?php wp_footer(); ?>

<footer class="footer">
    <div class="container">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footerMenuLocation'
            )
        );
        ?>
        <div class="footer__copyrights u-text-center">
            &copy; <?php echo date('Y'); ?> Leo Travel. Всички права запазени.
        </div>
    </div>
</footer>
</body>

</html>