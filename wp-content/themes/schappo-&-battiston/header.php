<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>

    <title itemprop="name">
       <?php wp_title(); ?>
    </title>

    <!-- <link rel="canonical" href="https://meusite.com.br"> -->
</head>

<body <?php body_class(); ?>>
    <?php 
        wp_body_open(); 
        if(is_front_page()){
            $fColor = '';
        }else{
            $fColor = 'background-color: #071010;';
        }
    ?>
    <header class="header" role="banner" style="<?php echo $fColor; ?>">
        <?php
        $args = array(
            'name' => 'informacoes-gerais',
            'post_type' => 'page',
        );

        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
            $whatsapp = get_field('whatsapp');
            $whatsappNumber = get_field('whatsappNumber');
            $whatsappMessage = get_field('whatsappMessage');
            $phone = get_field('phone');
            $email = get_field('e-mail');
            $address = get_field('address');
            $instagram = get_field('instagram');
            $facebook = get_field('facebook');
            $linkedin = get_field('linkedin');

            $hour = get_field('hour');

            $footerDescription = get_field('title-budget');
        ?>

            <div class="container header--container">
                <div class="header--container--before">
                    <div class="header--container--before--email">
                        <a href="mailto:<?php echo $email ?>" class="icon email">
                            <?php echo $email ?>
                        </a>
                    </div>
                    <div class="header--container--before--social-medias">
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
                    <div class="header--container--before--contact">
                        <a href="tel:<?php echo $phone ?>" class="icon phone">
                            <?php echo $phone ?>
                        </a>

                        <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" class="icon whatsapp">
                            <?php echo $whatsapp ?>
                        </a>
                    </div>
                    <div class="header--container--before--open-menu-mobile">
                        <button onclick="openMenu()" class="bg-menu-mobile">Menu</button>
                    </div>
                </div>
                <div class="header--container--after">
                    <div class="header--container--after--email">
                        <a href="mailto:<?php echo $email ?>" class="icon email">
                            <?php echo $email ?>
                        </a>
                    </div>
                    <div class="header--container--after--contact">
                        <a href="tel:<?php echo $phone ?>" class="icon phone">
                            <?php echo $phone ?>
                        </a>

                        <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" class="icon whatsapp">
                            <?php echo $whatsapp ?>
                        </a>
                    </div>

                    <div class="header--container--after--branding">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                    </div>

                <?php endwhile; ?>

                <div class="header--container--after--navbar">
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
                            <button onclick="closeMenu()" class="bg-close-menu-mobile">
                                Fechar menu
                            </button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </header>
    <main role="main">
       