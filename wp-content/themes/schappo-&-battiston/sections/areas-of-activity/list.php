<section class="areas-of-activity">
    <div class="container areas-of-activity">
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

            if ($query->have_posts()) : ?>
                <div class="section depostion-customers">
                    <div class="container depostion-customers--container">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>

                            <div class="deposition-customer">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium');
                                }

                                the_title('<h3>', '</h3>');

                                the_content();

                                $client_name = get_field('client_name');
                                if ($client_name) {
                                    echo "<p><strong>" . $client_name . "</strong></p>";
                                }
                                ?>
                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="section depostion-customers">
                    <div class="container depostion-customers--container">
                        <p>Nenhum depoimento encontrado.</p>
                    </div>
                </div>
        <?php endif;

            wp_reset_postdata();
        }

        display_area_de_atuacao();

        ?>
    </div>
</section>