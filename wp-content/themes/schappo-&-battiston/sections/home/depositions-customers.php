<div class="section depositions-customers">
    <div class="container depositions-customers--content">
        <?php

        function display_customer_testimonials()
        {
            $args = array(
                'post_type' => 'cliente',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : 
            $i = 0;
            while ($query->have_posts()) : $query->the_post(); 
            $class = ($i % 2 == 0) ? 'left' : 'right'; 
            ?>

                    <div class="depositions-customers--content--item <?php echo $class; ?>">
                    <?php
                        echo '<div class="depositions-customers--content--item--image">';
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium');
                            }
                        echo '</div>';
                        echo '<div class="depositions-customers--content--item--content">';
                            the_title('<h3 class="title">', '</h3>');
                            the_content();
                        echo '</div>';

                        $client_name = get_field('client_name');
                        if ($client_name) {
                            echo "<p><strong>" . $client_name . "</strong></p>";
                        }
                    ?>
                    </div>
                <?php 
                    $i++; 
                    endwhile; 
                ?>
            <?php else : ?>
                <p>Nenhum depoimento encontrado.</p>
        <?php endif;

            wp_reset_postdata();
        }
        display_customer_testimonials();
        ?>
    </div>
    <div class="dot-block">
        <div class="dot">&nbsp;</div>
    </div>
</div>