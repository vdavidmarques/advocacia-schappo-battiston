<?php
$slug = 'perguntas-frequentes';
$id = get_page_id_by_slug($slug);
?>
<section class="our-service">
    <div class="container">
        <?php
        $group = get_field('how-it-works', $id);
        $headingTitle = $group['heading-titles'];

        $photo1 = $group['thumb-1'];
        $content1 = $group['content-1'];
        $button1 = $group['button-1'];

        $photo2 = $group['thumb-2'];
        $content2 = $group['content-2'];
        $button2 = $group['button-2'];

        $photo3 = $group['thumb-3'];
        $content3 = $group['content-3'];
        $button3 = $group['button-3'];
        ?>
        <div class="our-service--header">
            <?php echo $headingTitle; ?>
        </div>
        <div class="our-service--lists">
            <div class="our-service--lists--list">
                <img src="<?php echo $photo1['url'] ?>" alt="<?php echo $photo1['alt'] ?>" class="our-service--lists--list--photo">
                <div class="our-service--lists--list--content">
                    <?php echo $content1; ?>
                </div>
                <a href="<?php echo $button1['url']; ?>" class="our-service--lists--list--button"><?php echo $button1['title']; ?></a>
            </div>
            <div class="our-service--lists--list">
                <img src="<?php echo $photo2['url'] ?>" alt="<?php echo $photo2['alt'] ?>" class="our-service--lists--list--photo">
                <div class="our-service--lists--list--content">
                    <?php echo $content2; ?>
                </div>
                <a href="<?php echo $button2['url']; ?>" class="our-service--lists--list--button"><?php echo $button2['title']; ?></a>
            </div>

            <div class="our-service--lists--list">
                <img src="<?php echo $photo3['url'] ?>" alt="<?php echo $photo3['alt'] ?>" class="our-service--lists--list--photo">
                <div class="our-service--lists--list--content">
                    <?php echo $content3; ?>
                </div>
                <a href="<?php echo $button3['url']; ?>" class="our-service--lists--list--button"><?php echo $button3['title']; ?></a>
            </div>
        </div>
    </div>
    </div>
</section>