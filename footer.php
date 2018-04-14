        </main>
        <footer>
            <div class='wrapper'>
                <section>
                    <nav>
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'menu_id' => 'footer-menu',
                                'container' => false,
                            ));
                        ?>
                    </nav>
                </section>
                <section id='copyright'>
                    &copy; <?php echo date("Y"); ?> blainefreelance.com
                </section>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
