<?php
    if(get_field('content-main-banner', $id)):
    $image = get_field('image-main-banner', $id);
?>
<section class="main-banner" style="background-image: url(<?php echo $image['url']; ?>);">
    <div class="container main-banner--content">
        <?php 
            echo get_field('content-main-banner', $id); 
            $link = get_field("link-main-banner", $id);
            echo '<a href="' . $link['url'] . '"target="_blank">' . $link['alt'] . '</a>';
        ?>
    </div>
</section>
<?php endif; ?>