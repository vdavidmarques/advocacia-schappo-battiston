<section class="about container">
    <div class="about--image">
        <?php $imageAbout = get_field('image-about', $id);  ?>
        <img src="<?php echo $imageAbout['url']; ?>" alt="<?php echo $imageAbout['alt']; ?>">
    </div>
    <div class="about--content">
        <?php 
            echo get_field('content-about', $id); 
            $linkAbout = get_field("link-about", $id);
            echo '<a href="' . $linkAbout['url'] . '"target="_blank" class="link">' . $linkAbout['title'] . '</a>';
        ?>
    </div>
</section>
<div class="dot-block">
    <div class="dot">&nbsp;</div>
</div>