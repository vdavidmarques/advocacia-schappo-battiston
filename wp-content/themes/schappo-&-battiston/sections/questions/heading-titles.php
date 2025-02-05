<?php 
    $slug = 'perguntas-frequentes';
    $id = get_page_id_by_slug($slug);
    if(get_field('heading-titles', $id)):
?>
<section class="heading-titles">
    <article>
        <div class="heading-titles--container">
            <div class="heading-titles--container--content">
                <?php echo get_field('heading-titles', $id); ?>
            </div>
        </div>
    </article>
</section>
<?php endif; ?>