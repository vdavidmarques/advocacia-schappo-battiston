<?php
    if(get_field('content-main-banner', $id)):
    $image = get_field('image-main-banner', $id);
?>
<section class="main-banner" style="background-image: url(<?php echo $image['url']; ?>);">
    <div class="bg-dark">&nbsp;</div>
    <div class="container main-banner--content">
        <?php 
            echo '<div class="main-banner--content--header-main-banner">';
            echo '<div class="subtitle-main-banner">' . get_field('subtitle-main-banner', $id) . '</div>'; 
            echo '<div class="title-main-banner">' . get_field('content-main-banner', $id) . '</div>'; 
            echo '</div>';
            $link = get_field("link-main-banner", $id);
            echo '<a href="' . $link['url'] . '"target="' . $link["target"] . '" class="main-banner--content--link">' . $link['title'] . '</a>';
        ?>
    </div>
</section>
<?php endif; ?>