<?php

$id = null;

if (is_page()) {
    $id = get_the_ID();
} elseif (is_archive()) {
    $queried_object = get_queried_object();
    if (isset($queried_object->term_id)) {
        $id = $queried_object->term_id;
    } elseif (isset($queried_object->ID)) {
        $id = $queried_object->ID;
    }
}

if ($id === null) {
    switch (true) {
        case is_page('perguntas-frequentes'):
            $slug = 'perguntas-frequentes';
            break;
        case is_home() || is_front_page():
            $slug = 'pagina-inicial';
            break;
        default:
            if (is_page()) {
                $current_page_name = get_query_var('pagename');
                $id = get_page_id_by_slug($current_page_name);
            } elseif (is_archive()) {
                $current_post_type = get_query_var('post_type');
                if ($current_post_type) {
                    $id = get_page_id_by_slug($current_post_type);
                }
            }

            if (empty($id)) {
                $slug = 'pagina-inicial';
            }
    }

    if (!empty($slug) && $id == null) {
        $id = get_page_id_by_slug($slug);
    }
}

if ($id && get_field('heading-title', $id)):
?>
    <section class="heading-titles">
        <article>
            <div class="heading-titles--container">
                <div class="heading-titles--container--content">
                    <?php echo get_field('heading-title', $id); ?>
                </div>
            </div>
        </article>
    </section>
<?php endif; ?>