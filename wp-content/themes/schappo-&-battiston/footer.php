</main>
<footer class="footer" role="contentinfo">
    <div class="container footer--container">
        <div class="footer--container--header">
            <div class="footer--container--header--branding">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <?php
                $args = array(
                    'name' => 'informacoes-gerais',
                    'post_type' => 'page',
                );

                $query = new WP_Query($args);
                while ($query->have_posts()) :
                    $query->the_post();
                    $logo = get_field('footer-logo');
                    $whatsapp = get_field('whatsapp');
                    $whatsappNumber = get_field('whatsappNumber');
                    $whatsappMessage = get_field('whatsappMessage');
                    $email = get_field('e-mail');
                    $instagram = get_field('instagram');
                    $facebook = get_field('facebook');
                    $linkedin = get_field('linkedin');
                    $address = get_field('address');
                    $phone = get_field('phone');
                    $content = get_field('title-budget');
            ?>
            <p class="footer--container--header--content"><?php echo $content; ?></p>
        </div>
        <div class="footer--container--content">
            <div class="footer--container--content--navbar">
                <div class="top">
                    <div class="menu-items">
                        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'custom_header_menu',
                                'menu'           => 'Menu do Header',
                                'menu_id'        => 'custom-header-menu',
                                'menu_class'     => 'main-menu',
                                'fallback_cb'    => '__return_false',
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="footer--container--content--contact">
                <div class="email">
                    <a href="mailto:<?php echo $email ?>" class="icon email">
                        <?php echo $email ?>
                    </a>
                </div> 

                <div class="contact">
                    <a href="tel:<?php echo $phone ?>" class="icon phone">
                        <?php echo $phone ?>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" class="icon whatsapp">
                        <?php echo $whatsapp ?>
                    </a>
                </div>

                <div class="social-medias">
                    <?php if($instagram): ?>
                    <a target="_blank" href="<?php echo $instagram ?>" class="top-icon">
                        <img src="<?php echo get_template_directory_uri() . '/dist/icons/instagram.svg' ?>" alt="instagram">
                    </a>
                    <?php endif; ?>
                    <?php if($facebook): ?>
                    <a target="_blank" href="<?php echo $facebook ?>" class="top-icon">
                        <img src="<?php echo get_template_directory_uri() . '/dist/icons/facebook.svg' ?>" alt="facebook">
                    </a>
                    <?php endif; ?>
                    <?php if($linkedin): ?>
                    <a target="_blank" href="<?php echo $linkedin ?>" class="top-icon">
                        <img src="<?php echo get_template_directory_uri() . '/dist/icons/linkedin.svg' ?>" alt="linkedin">
                    </a>
                    <?php endif; ?>
                </div>
               
            </div>
        </div>
    </div>
<?php endwhile; ?>

</footer>
<?php wp_footer(); ?>

<?php if(is_archive('perguntas-frequentes') ){ ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/js/accordion.js" defer></script>
<?php } ?>

</body>

</html>