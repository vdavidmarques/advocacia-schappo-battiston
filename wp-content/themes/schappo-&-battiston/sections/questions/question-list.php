<section class="question-list">
    <div class="container question-list--container">
        <?php
        function display_area_de_atuacao()
        {
            $args = array(
                'post_type' => 'perguntas-frequentes',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="accordion">
                        <div class="accordion-header">
                            <?php the_title('<h3>', '</h3>'); ?>
                        </div>
                        <div class="accordion-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Nenhum depoimento encontrado.</p>
        <?php endif;
            wp_reset_postdata();
        }
        display_area_de_atuacao();
        ?>
    </div>
</section>