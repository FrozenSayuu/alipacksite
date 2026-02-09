        <footer>
            <div class="site-footer">
                <div class="footer-menu">
                    <?php wp_nav_menu(['theme_location' => 'footer', 'container' => 'nav']); ?>
                </div>
                
                <div class="footer-contacts">
                    <ul>
                        <li>Via G. Puccini 81, Oste Montemurlo, 59103 Prato</li>
                        <li><a href="callto:+393894687801">+39 389 468 7801</a></li>
                        <li>E-mail:<a href="mailto:alipackitalia@gmail.com">alipackitalia@gmail.com</a></li>
                    </ul>
                </div>
                
                <div class="footer-rights">
                    <p>© 2026 <?php bloginfo( 'name' ) ?>. All Rights Reserved.</p>
                    <!-- add privacy and terms pages! -->
                    <a href="../privacy-policy/">Privacy Policy</a>
                    <a href="../terms-of-service/">Terms of Service</a>
                </div>
            </div>
        </footer>
    </div> <!-- closes <div class="container"> from body -->
<?php wp_footer() ?>
</body>
</html>