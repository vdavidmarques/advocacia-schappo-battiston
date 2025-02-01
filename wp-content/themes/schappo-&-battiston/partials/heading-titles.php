<?php 
    if(is_page('contato')){
        $slug = 'contato';
    }elseif(is_archive('equipe')){
        $slug = 'equipe';
    }else{
        $slug = 'pagina-inicial';
    }

    $id = get_page_id_by_slug($slug);
    if(get_field('heading-title', $id)):
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