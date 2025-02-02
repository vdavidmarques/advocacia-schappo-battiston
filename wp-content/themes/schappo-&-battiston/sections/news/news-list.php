<?php

function display_posts_excluding_recent($post_type = 'post', $exclude_count = 3)
{
    $args_recent = array(
        'post_type' => $post_type,
        'posts_per_page' => $exclude_count,
        'fields' => 'ids',
        'orderby' => 'date',
        'order' => 'DESC',
        'ignore_sticky_posts' => true
    );

    $recent_posts = new WP_Query($args_recent);
    $exclude_ids = $recent_posts->posts;


    $args_all = array(
        'post_type' => $post_type,
        'post__not_in' => $exclude_ids,
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'ignore_sticky_posts' => true
    );

    $all_other_posts = new WP_Query($args_all);


    if ($all_other_posts->have_posts()) :
        while ($all_other_posts->have_posts()) : $all_other_posts->the_post();
?>
            <article class="news--post-items--item">
                <a href="<?php the_permalink(); ?>" class="news--post-items--item--link">
                    <div class="news--post-items--item--link--thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="news--post-items--item--link--content">
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </a>
            </article>

<?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No other posts found.</p>';
    endif;
}

?>
<div class="container news--post-items">
    <?php display_posts_excluding_recent();  ?>
</div>