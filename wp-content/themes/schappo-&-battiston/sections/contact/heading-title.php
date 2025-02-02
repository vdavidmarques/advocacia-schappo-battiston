<?php 
    $slug = 'contato';
    $id = get_page_id_by_slug($slug);
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