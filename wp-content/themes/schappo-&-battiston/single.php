<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
?>
    <div class="container">
        <div class="single-post-page">
            <?php
            if (has_post_thumbnail()) {
                echo '<div class="single-post-page--thumb">';
                $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                if (!empty($large_image_url[0])) {
                    echo '<img src="' . esc_url($large_image_url[0]) . '" alt="' . the_title_attribute(['echo' => false]) . '" />';
                }
                echo '</div>';
            }
            ?>
            <div class="single-post-page--content">
                <?php the_title('<h1 class="title">', '</h1>'); ?>
    
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
    </div>
    <?php
    endwhile;
else :
    ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
<?php
endif;

get_footer();
?>