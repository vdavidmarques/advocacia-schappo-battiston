<div class="news--featured">
        <div class="news--featured--container container">
            <article class="news--featured--container--heading-titles">
                <div class="heading-titles--container--content">
                    <?php
                    $slug = 'artigos-e-noticias';
                    $id = get_page_id_by_slug($slug);
                    echo get_field('heading-title', $id);;
                    ?>
                </div>
            </article>
            <?php

            function display_recent_posts($post_type = 'post', $count = 3)
            {
                $args = array(
                    'post_type' => $post_type,
                    'posts_per_page' => $count,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'ignore_sticky_posts' => true
                );

                $recent_posts = new WP_Query($args);

                if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
                        <article class="news-item">
                            <a href="<?php the_permalink(); ?>" class="news-item-link">
                                <div class="news--container--post-item--thumb">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php endif; ?>
                                    <div class="bg-dark">&nbsp;</div>
                                    <h3 class="title"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        </article>
            <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            }

            ?>

            <div class="news--featured--container--post-list">
                <?php display_recent_posts('post', 3); ?>
            </div>
        </div>
    </div>