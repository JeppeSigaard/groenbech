        <footer id="footer">
            <?php include 'libs/includes/footer-medarbejder.php';?>
            <div class="footer-menu">
                <div>
                    <?php $footer_options = get_option( 'footer_options' );?>
                    <ul class="menu" id="footer-ct">
                        <li>
                            <a href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo get_header_image();?>" alt="logo"/></a>
                            <ul class="sub-menu">
                                <li>
                                     <span><?php echo $footer_options['firma'] ?></span>
                                 </li>
                                 <li>
                                     <span><?php echo $footer_options['adresse'] ?></span>
                                 </li>
                                 <li>
                                     <span><?php echo $footer_options['postby'] ?></span>
                                 </li>
                                 <li>
                                     <span><?php echo $footer_options['cvr'] ?></span>
                                 </li>
                                 <li>
                                     <a href="#"><?php echo $footer_options['tlf'] ?></a>
                                 </li>
                                 <li>
                                     <a href="mailto:<?php echo $footer_options['email'] ?>"><?php echo $footer_options['email'] ?></a>
                                 </li>
                            </ul>
                        </li>
                    </ul>
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => false)); ?>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
