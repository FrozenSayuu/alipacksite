        <footer>
            <div class="site-footer">
                <div class="footer-contacts">
                    <h3>Contacts</h3>
                    <ul>
                        <li>Via G. Puccini 81, Oste Montemurlo, 59103 Prato</li>
                        <li>Phone: <a href="callto:+393894687801">+39 389 468 7801</a></li>
                        <li>E-mail: <a href="mailto:alipackitalia@gmail.com">alipackitalia@gmail.com</a></li>
                        <li><p id="rights-text">© 2026 <?php bloginfo( 'name' ) ?>. All Rights Reserved.</p></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h3>Pages</h3>
                    <?php wp_nav_menu(['theme_location' => 'footer', 'container' => 'nav']); ?>
                </div>
                <div class="footer-secmenu">
                    <h3>Faq</h3>
                    <ul>
                        <li><a href="../privacy-policy/">Privacy Policy</a></li>
                        <li><a href="../terms-of-service/">Terms of Service</a></li>
                        <li><a href="../cookie-policy/">Cookie Policy</a></li>
                    </ul>
                </div>
                <!-- in case of later use
                <div class="footer-rights">
                    <a href="../privacy-policy/">Privacy Policy</a>
                    <a href="../terms-of-service/">Terms of Service</a>
                    <a href="../cookie-policy/">Cookie Policy</a>
                </div> -->
            </div>
        </footer>
    </div> <!-- closes <div class="container"> from body -->
<?php wp_footer() ?>
</body>
</html>