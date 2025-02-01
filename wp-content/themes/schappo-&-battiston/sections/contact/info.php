<?php
$slug = 'contato';
$id = get_page_id_by_slug($slug);
?>

<section class="contact-info <?php echo is_front_page() ? 'container' : ''; ?>">
    <div class="contact-info--form">
        <?php echo do_shortcode('[contact-form-7 id="d0ac153" title="Contato"]'); ?>
    </div>
    <div class="contact-info--map">
        <?php print_r(get_field('map', $id)); ?>
    </div>

    <div class="contact-info--operation">
        <?php
        $args = array(
            'name' => 'informacoes-gerais',
            'post_type' => 'page',
        );

        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
            $address = get_field('address');
            $hour = get_field('hour');
            $phone = get_field('phone');
            $email = get_field('e-mail');
            echo '<ul class="contact-info--operation--infos">';
            echo '<li class="icon pin black">' . $address . '</li>';
            echo '<li class="icon hour black">' . $hour . '</li>';
            echo '<li class="icon phone black">' . $phone . '</li>';
            echo '<li class="icon email black">' . $email . '</li>';
            echo '</ul>';
        endwhile; 
    ?>
    </div>
</section>