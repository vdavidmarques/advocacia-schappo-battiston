<section class="online-service">
    <div class="container online-service--container">
        <div class="online-service--container--header">
            <?php echo get_field('heading-title-online-service', $id);?>
        </div>
        <div class="online-service--container--list">
            <?php 
                $group = get_field('online-services', $id);
                
                $imageService1 = $group['image-online-services-1'];
                $contentService1 = $group['content-online-services-1'];
                $buttonService1 = $group['button-online-services-1'];
            
                $imageService2 = $group['image-online-services-2'];
                $contentService2 = $group['content-online-services-2'];
                $buttonService2 = $group['button-online-services-2'];

                $imageService3 = $group['image-online-services-3'];
                $contentService3 = $group['content-online-services-3'];
                $buttonService3 = $group['button-online-services-3'];
            ?>

            <div class="online-service--container--list--item">
                <div class="online-service--container--list--item--image">
                    <img src="<?php echo $imageService1['url']; ?>" alt="<?php echo $imageService1['title']; ?>">
                </div>
                <div class="online-service--container--list--item--content">
                    <?php echo $contentService1; ?>
                    <a href="<?php echo $buttonService1['url']; ?>" target="_blank"><?php echo $buttonService1['title']; ?></a>
                </div>
            </div>

            <div class="online-service--container--list--item">
                <div class="online-service--container--list--item--image">
                    <img src="<?php echo $imageService2['url']; ?>" alt="<?php echo $imageService2['title']; ?>">
                </div>
                <div class="online-service--container--list--item--content">
                    <?php echo $contentService2; ?>
                    <a href="<?php echo $buttonService2['url']; ?>" target="_blank"><?php echo $buttonService2['title']; ?></a>
                </div>
            </div>

            <div class="online-service--container--list--item">
                <div class="online-service--container--list--item--image">
                    <img src="<?php echo $imageService3['url']; ?>" alt="<?php echo $imageService3['title']; ?>">
                </div>
                <div class="online-service--container--list--item--content">
                    <?php echo $contentService3; ?>
                    <a href="<?php echo $buttonService3['url']; ?>" target="_blank"><?php echo $buttonService3['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>