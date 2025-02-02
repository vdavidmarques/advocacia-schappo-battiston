<section class="areas-of-activity">
    <?php
    function display_area_de_atuacao()
    {
        $args = array(
            'post_type' => 'area-de-atuacao',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : 
        $i = 0;
        ?>
            <div class="container areas-of-activity--container">
                <?php 
                    while ($query->have_posts()) : $query->the_post();
                    $class = ($i % 2 == 0) ? 'left' : 'right'; 
                ?>

                    <div class="areas-of-activity--container--content <?php echo $class; ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        }
                        echo '<div class="areas-of-activity--container--content--text">';
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
            </div>
        <?php else : ?>
            <p>Nenhum depoimento encontrado.</p>
    <?php endif;

        wp_reset_postdata();
    }

    display_area_de_atuacao();

    ?>
</section>