<section class="team-list">
    <?php
    function display_equipe()
    {
        $args = array(
            'post_type' => 'equipe',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <div class="container team-list--content">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="team-list--content--text">
                        <?php
                            the_title('<h3 class="title">', '</h3>');
                            echo '<div class="thumb">'; 
                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                if (has_post_thumbnail()) {
                                    if ( ! empty( $large_image_url[0] ) ) {
                                        echo '<img src="' . esc_url( $large_image_url[0] ) . '" alt="' . the_title_attribute(array('echo' => false) ) . '" />';
                                    }
                                }
                                echo '<div class="content">';
                                    the_content();
                                echo '</div>';
                            echo '</div>';


                            $client_name = get_field('client_name');
                            if ($client_name) {
                                echo "<p><strong>" . $client_name . "</strong></p>";
                            }
                        ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>Nenhum depoimento encontrado.</p>
    <?php endif;

        wp_reset_postdata();
    }

    display_equipe();

    ?>
</section>